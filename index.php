<?php
    require("./Core/Database.php");
    require("./Models/BaseModel.php");
    require("./Controllers/BaseController.php");
    $controllerName = $_REQUEST["Controller"] . "Controller";
    require("./Controllers/{$controllerName}.php");

    $actionName = $_REQUEST["Action"];

    $controllerObj = new $controllerName;
    $controllerObj->$actionName();
?>