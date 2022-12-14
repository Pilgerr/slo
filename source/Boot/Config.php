<?php
// Definição de todas as constantes do sistema
// Esse script consta no composer.json para ser incluido automaticamente

// DATABASE

define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "bd-slo"); // aqui deve ser alterado para o nome do banco de dados

// PROJECT URLs

define("CONF_URL_BASE", "http://www.localhost/slo"); // depois da / deve vir o nome da pasta do trabalho
define("CONF_URL_TEST", "http://www.localhost/slo"); // depois da / deve vir o nome da pasta do trabalho

// VIEW

define("CONF_VIEW_WEB", __DIR__ . "/../../themes/web");
define("CONF_VIEW_APP", __DIR__ . "/../../themes/app");
define("CONF_VIEW_ADMIN", __DIR__ . "/../../themes/admin");

// SITE

define("CONF_SITE_NAME", "SLO");
define("CONF_SITE_ICON", "https://i.im.ge/2022/09/23/10VPnT.png-clipart-teeth-joy-oral-health-tooth-removebg-preview.png");