<?php 

class BaseController {
    public function view($path, array $data = []) {
        foreach($data as $key => $value) {
            $$key = $value;
        }
        return require("Views/{$path}.php");
    }
    public function loadModel($modelName) {
        return require("Models/{$modelName}.php");
    }
}