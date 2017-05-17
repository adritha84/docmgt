<?php
require("../Utils/AutoLoader.php");
AutoLoader::exec();

$router = new Utils_Router();
$router->match("/", "App_Dashboard", ['user','administrator']);
$router->match("/document/view/:id", "App_ViewDocument", ['user','administrator']);
$router->match("/document/edit/:id", "App_EditDocument", ['user','administrator']);
$router->match("/document/file/:id", "App_DocumentFile", ['user','administrator']);
$router->match("/document/add/", "App_AddDocument", ['user','administrator']);
$router->end();

