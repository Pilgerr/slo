<?php

namespace Source\Models;
use Source\Core\Connect;

class Schedule{
    private $idDentist;
    private $idPatient;
    private $date;
    private $hour;
    private $comments;
	/**
	 * @param $idDentist mixed 
	 * @param $idPatient mixed 
	 * @param $date mixed 
	 * @param $hour mixed 
	 * @param $comments mixed 
	 */
	function __construct(?string $idDentist = NULL, ?string $idPatient = NULL, ?string $date = NULL, ?string $hour = NULL, ?string $comments = NULL) {
	    $this->idDentist = $idDentist;
	    $this->idPatient = $idPatient;
	    $this->date = $date;
	    $this->hour = $hour;
	    $this->comments = $comments;
	}

    public function insertSchedule() : bool
    {
        $query = "INSERT INTO schedules VALUES (NULL, :idDentist, :idPatient, :date, :hour, :comments, NULL, NULL)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":idDentist", $this->idDentist);
        $stmt->bindParam(":idPatient", $this->idPatient);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":hour", $this->hour);
        $stmt->bindParam(":comments", $this->comments);
        $stmt->execute();

        if ($stmt->rowCount()==1) {
            return true;
        } else {
            return false;
        }
    }

    public function selectAllSchedules()
    {
        $query = "SELECT * FROM schedules";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->execute();
        $schedules = $stmt->fetchAll();
        if($stmt->rowCount() == 0){
            return false;
        } else {
            return $schedules;
        }
    }
}