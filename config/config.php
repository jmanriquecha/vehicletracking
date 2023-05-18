<?php

// Requiere zona horaria y configuración de fecha, hora, minuto y segundo
require_once "zona_horaria.php";

// Requiere configuración de base de datos
require_once "db_config.php";

//Requiere rutas y directorios
require_once "rutas_directorios.php";

// Datos de sesión
session_start();
define("USER_ID", $_SESSION['user_id']);
define("USER", $_SESSION['user']);

