<?php

namespace Source\Models;
use Source\Core\Connect;

class Dentist {
    private $email;
    private $name;
    private $phoneNumber;
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
	function __construct(?string $email = NULL, ?string $name = NULL, ?string $phoneNumber = NULL, ?string $dtBorn = NULL, ?string $document = NULL) {                  
	    $this->email = $email;
	    $this->name = $name;
	    $this->phoneNumber = $phoneNumber;
	    $this->dtBorn = $dtBorn;
	    $this->document = $document;
	}
    public function insertDentist() : bool
    {
        $query = "INSERT INTO dentists VALUES (NULL, :email, :name, :phoneNumber, :dtBorn, :document, NULL, NULL)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":phoneNumber", $this->phoneNumber);
        $stmt->bindParam(":dtBorn", $this->dtBorn);
        $stmt->bindParam(":document", $this->document);
        $stmt->execute();

        if ($stmt->rowCount()==1) {
            return true;
        } else {
            return false;
        }
    }

    public function selectAllDentists()
    {
        $query = "SELECT * FROM dentists";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->execute();
        $dentists = $stmt->fetchAll();
        if($stmt->rowCount() == 0){
            return false;
        } else {
            return $dentists;
        }
    }
}