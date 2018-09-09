<?php
/**
 * Created by PhpStorm.
 * User: mariam
 * Date: 11/8/17
 * Time: 15:17
 */

class DbOperation
{
    private $conn;

    //Constructor
    function __construct()
    {
        require_once dirname(__FILE__) . '/Constants.php';
        require_once dirname(__FILE__) . '/DbConnect.php';
        // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
    }

	 /*
     * This method is added
     * We are taking username and password
     * and then verifying it from the database
     * */
 
    public function userLogin($username, $pass){
            $password = md5($pass);
            $stmt = $this->conn->prepare("SELECT id FROM users WHERE username = ? AND password = ?");
            $stmt->bind_param("ss",$username,$password);
            $stmt->execute();
            $stmt->store_result(); 
            return $stmt->num_rows > 0; 
        }
 
        public function getUserByUsername($username){
            $stmt = $this->conn->prepare("SELECT id,email,username FROM users WHERE username = ?");
            $stmt->bind_param("s",$username);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }
	
	
	///// SELECT  Drivers
	
	 public function selectDrivers(){
            $stmt = $this->conn->prepare("SELECT * FROM driver");
            $stmt->execute();
            return $stmt->get_result()->fetch_All();
        }
	
	
	
    //Function to create a new user
    public function createUser($username, $pass, $email, $name, $phone)
    {
        if (!$this->isUserExist($username, $email, $phone)) {
            $password = md5($pass);
            $stmt = $this->conn->prepare("INSERT INTO users (username, password, email, name, phone) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $username, $password, $email, $name, $phone);
            if ($stmt->execute()) {
                return USER_CREATED;
            } else {
                return USER_NOT_CREATED;
            }
        } else {
            return USER_ALREADY_EXIST;
        }
    }


    private function isUserExist($username, $email, $phone)
    {
        $stmt = $this->conn->prepare("SELECT id FROM users WHERE username = ? OR email = ? OR phone = ?");
        $stmt->bind_param("sss", $username, $email, $phone);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
}