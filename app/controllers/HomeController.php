<?php

require_once __DIR__ . "/../core/Controller.php";
require_once __DIR__ . "/../models/User.php";

class HomeController extends Controller
{
    public function index()
    {
        $user = new User();
        $result = $user->testConnection();

        echo "<h1>Teste de Conexão:</h1>";
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
}
