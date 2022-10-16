<?php

namespace Source\Models;
use Source\Core\Connect;

class Patient{
    private $email;
    private $name;
    private $phoneNumber;
    private $dtBorn;
    private $document;
    private $idDentist;
	/**
	 * @param $email mixed 
	 * @param $name mixed 
	 * @param $phoneNumber mixed 
	 * @param $password mixed 
	 * @param $dtBorn mixed 
	 * @param $document mixed 
	 */
	function __construct(?string $email = NULL, ?string $name = NULL, ?string $phoneNumber = NULL, ?string $dtBorn = NULL, ?string $document = NULL, ?string $idDentist =  NULL) {                  
	    $this->email = $email;
	    $this->name = $name;
	    $this->phoneNumber = $phoneNumber;
	    $this->dtBorn = $dtBorn;
	    $this->document = $document;
        $this->idDentist = $idDentist;
	}

    public function insertPatient() : bool
    {
        $query = "INSERT INTO patients VALUES (NULL, :email, :name, :phoneNumber, :dtBorn, :document, :idDentist, NULL, NULL)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":phoneNumber", $this->phoneNumber);
        $stmt->bindParam(":dtBorn", $this->dtBorn);
        $stmt->bindParam(":document", $this->document);
        $stmt->bindParam(":idDentist", $this->idDentist);
        $stmt->execute();

        if ($stmt->rowCount()==1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function selectAllPatients()
    {
        $query = "SELECT * FROM patients";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->execute();
        $patients = $stmt->fetchAll();
        if($stmt->rowCount() == 0){
            return false;
        } else {
            return $patients;
        }
    }
}