<?php
error_reporting(0);
require("../Utils/AutoLoader.php");
AutoLoader::exec();

$router = new Utils_Router('api');

$router->match("api/login/*", "Api_Auth_CreateSession");
$router->match("api/logout/", "Api_Auth_DestroySession");
$router->match("api/document/delete/:id", "Api_Doc_DeleteDocument", ["user", "administrator"]);
$router->match("api/document/file/:id", "Api_Doc_GetDocumentFile", ["user", "administrator"]);
$router->match("api/document/update/:id/*", "Api_Doc_UpdateDocument", ["user", "administrator"]);
$router->match("api/document/add/*", "Api_Doc_AddDocument", ["user", "administrator"]);
$router->end();

?>