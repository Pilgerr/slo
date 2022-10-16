<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Dentist;
use Source\Models\Patient;
use Source\Models\Schedule;
use Source\Models\User;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(CONF_VIEW_WEB,'php');
    }

    public function home() : void
    {
        echo $this->view->render("home");
    }

    public function homeLoged()
    {
        echo $this->view->render("home-loged");
    }

    public function about() : void
    {
        echo $this->view->render("about");

    }

    public function contact() : void
    {
        echo $this->view->render("contact");
    }

    public function patient()
    {
        echo $this->view->render("patient");
    }

    public function dentist()
    {
        echo $this->view->render("dentist");
    }

    public function schedule()
    {
        echo $this->view->render("schedule");
    }

    public function registerUser(array $data){
        
        if($data){
        
        $user = new User(
            $data['register-email'],
            $data['register-name'],
            $data['register-phoneNumber'],
            $data['register-password'],
            $data['register-dtBorn'],
            $data['register-document']
        );
    
        $returnInsert = $user->insertUser();
        if ($returnInsert == true) {
            header("location:". url("area-logada"));
        } else {
            header("location:". url("cadastro-usuario"));
        }
    
        }
            echo $this->view->render("register-user");
        }

    public function registerPatient(array $data)
    {
        if($data){
        
            $patient = new Patient(
                $data['register-email'],
                $data['register-name'],
                $data['register-phoneNumber'],
                $data['register-dtBorn'],
                $data['register-document'],
                $data['register-idDentist']
            );
        
            $returnInsert = $patient->insertPatient();
            if ($returnInsert == true) {
                header("location:". url("area-logada"));
            } else {
                header("location:". url("cadastro-paciente"));
            }
        
            }

            echo $this->view->render("register-patient");
    }

    public function registerDentist(array $data)
    {
        if($data){
        
            $dentist = new Dentist(
                $data['register-email'],
                $data['register-name'],
                $data['register-phoneNumber'],
                $data['register-dtBorn'],
                $data['register-document']
            );
        
            $returnInsert = $dentist->insertDentist();
            if ($returnInsert == true) {
                header("location:". url("area-logada"));
            } else {
                header("location:". url("cadastro-dentista"));
            }
        
            }

            echo $this->view->render("register-dentist");
    }

    public function registerSchedule(array $data)
    {
        if($data){
        
            $schedule = new Schedule(
                $data['register-idDentist'],
                $data['register-idDentist'],
                $data['register-date'],
                $data['register-hour'],
                $data['register-comments']
            );
        
            $returnInsert = $schedule->insertSchedule();
            if ($returnInsert == true) {
                header("location:". url("area-logada"));
            } else {
                header("location:". url("cadastro-consulta"));
            }
        
            }

            echo $this->view->render("register-schedule");
    }

    public function viewPatients()
    {
            $patient = new Patient();
            $patients = $patient->selectAllPatients();
        echo $this->view->render("view-patients",[ "patients" => $patients]);
    }

    public function viewDentists()
    {
            $dentist = new Dentist();
            $dentists = $dentist->selectAllDentists();
        echo $this->view->render("view-dentists",[ "dentists" => $dentists]);
    }

    public function viewSchedules()
    {
            $schedule = new Schedule();
            $schedules = $schedule->selectAllSchedules();
        echo $this->view->render("view-schedules",[ "schedules" => $schedules]);
    }

    public function login(array $data)
    {
        if ($data) {

            $email = $data["login-email"];
            $password = $data["login-password"];

            $user = new User();

            $returnValidate = $user->validateUser($email,$password);

            if ($returnValidate == true) {
                header("location:". url("area-logada"));
            } else {
                header("location:". url("entrar"));
            }
        }

        echo $this->view->render("login");

    }

    public function error(array $data) : void
    {
        echo $this->view->render("404", [
            "title" => "Erro {$data["errcode"]} | " . CONF_SITE_NAME,
            "error" => $data["errcode"]
        ]);
    }

}