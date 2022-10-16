<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";
use CoffeeCode\Router\Router;

$route = new Router(CONF_URL_BASE, ":");
//$route = new Router('localhost/acme-tarde', ":"); // Route para localhost

/**
 * Web Routes
 */

$route->namespace("Source\App");
$route->get("/","Web:home");
$route->get("/area-logada","Web:homeLoged");
$route->get("/sobre","Web:about");
$route->get("/contato","Web:contact");
$route->post("/contato","Web:contact");
$route->get("/area-dentista","Web:dentist");
$route->get("/area-paciente","Web:patient");
$route->get("/area-consultas","Web:schedule");
$route->get("/cadastro-usuario","Web:registerUser");
$route->post("/cadastro-usuario","Web:registerUser");
$route->get("/cadastro-paciente","Web:registerPatient");
$route->post("/cadastro-paciente","Web:registerPatient");
$route->get("/cadastro-dentista","Web:registerDentist");
$route->post("/cadastro-dentista","Web:registerDentist");
$route->get("/cadastro-consulta","Web:registerSchedule");
$route->post("/cadastro-consulta","Web:registerSchedule");
$route->get("/visualizar-pacientes","Web:viewPatients");
$route->post("/visualizar-pacientes","Web:viewPatients");
$route->get("/visualizar-dentistas","Web:viewDentists");
$route->post("/visualizar-dentistas","Web:viewDentists");
$route->get("/visualizar-consultas","Web:viewSchedules");
$route->post("/visualizar-consultas","Web:viewSchedules");
$route->get("/entrar","Web:login");
$route->post("/entrar","Web:login");

/**
 * App Routs
 */

$route->group("/app"); // agrupa em /app
$route->get("/","App:home");
$route->get("/listar","App:list");
$route->get("/pdf","App:createPDF");
$route->group(null); // desagrupo do /app

$route->group("/admin"); // agrupa em /admin
$route->get("/","Adm:home");
$route->group(null); // desagrupo do /admin

/*
 * Erros Routes
 */

$route->group("error")->namespace("Source\App");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

/*
 * Error Redirect
 */

if ($route->error()) {
    $route->redirect("/error/{$route->error()}");
}

ob_end_flush();