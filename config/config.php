<?php

setlocale(LC_MONETARY, 'pt_BR');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Cuiaba');

##DEFAULT SETTINGS
$currentDir = dirname(__FILE__);
if (!defined('_PS_ROOT_DIR_')) {
    define('_PS_ROOT_DIR_', realpath($currentDir . '/..'));
}

if (!defined('_PS_CORE_DIR_')) {
    define('_PS_CORE_DIR_', realpath($currentDir . '/..'));
}

define('_SYSTEM_VERSION_', 'CMS 0.0.1');
define('_CLIENT_NAME_', 'LogLab Gestor');

##PHP SETTINGS
ini_set('default_charset', 'utf-8');
ini_set('magic_quotes_runtime', 0);
ini_set('magic_quotes_sybase', 0);
ini_set('session.gc_maxlifetime', 3600);
##ob_start("ob_gzhandler");

if (!headers_sent())
{
    header('Content-Type: text/html; charset=utf-8');
}

if (!defined('_CORE_DIR_'))
{
    define('_CORE_DIR_', realpath($currentDir . '/..'));
}

##DATABASE SETTINGS
define('_DATABASE_SERVER_', '127.0.0.1');
define('_DATABASE_NAME_', 'll_gestor');
define('_DATABASE_USER_', 'root');
define('_DATABASE_PASS_', 'root');

/*
define('_DATABASE_SERVER_', 'mysql.hostinger.com.br');
define('_DATABASE_NAME_', 'u105314963_pmo');
define('_DATABASE_USER_', 'u105314963_pmo');
define('_DATABASE_PASS_', '@cNC2YnJ73pO');
*/
