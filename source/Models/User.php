<?php

namespace Source\Models;
use Source\Core\Connect;

class User {
    private $email;
    private $name;
    private $phoneNumber;
    private $password;
    private $dtBorn;
    private $document;
	/**
	 * @param $email mixed 
	 * @param $name mixed 
	 * @param $phoneNumber mixed 
	 * @param $password mixed 
	 * @param $dtBorn mixed 
	 * @param $document mixed 
	 */
	function __construct(?string $email = NULL, ?string $name = NULL, ?string $phoneNumber = NULL, ?string $password = NULL, ?string $dtBorn = NULL, ?string $document = NULL) {
                            
	    $this->email = $email;
	    $this->name = $name;
	    $this->phoneNumber = $phoneNumber;
	    $this->password = $password;
	    $this->dtBorn = $dtBorn;
	    $this->document = $document;
	}
    public function insertUser() : bool
    {
        $query = "INSERT INTO users VALUES (NULL, :email, :name, :phoneNumber, :password, :dtBorn, :document, NULL, NULL)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":phoneNumber", $this->phoneNumber);
        $stmt->bindParam(":password", password_hash($this->password, PASSWORD_DEFAULT));
        $stmt->bindParam(":dtBorn", $this->dtBorn);
        $stmt->bindParam(":document", $this->document);
        $stmt->execute();

        if ($stmt->rowCount()==1) {
            return true;
        } else {
            return false;
        }
    }

    public function validateUser (string $email, string $password) : bool
    {
        $query = "SELECT * FROM users WHERE email LIKE :email";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount()==1) {
            $user = $stmt->fetch();
            var_dump($user);
            if(password_verify($password, $user->password)){    
                return true;
            }
            return false;
        } else {
            return false;
        }
    }

}