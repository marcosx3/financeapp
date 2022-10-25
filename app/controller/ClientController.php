<?php

namespace App\Controller;

use App\Model\Client;

class ClientController
{
    public static function createView()
    {
        include './app/view/client/create.php';
    }

    public static function listView()
    {
        $model = new Client();
        $model->getAllRows();
       
        include './app/view/client/list.php';
    }
    public static function updateView()
    {
        include './app/view/client/update.php';
    }
    public static function save()
    {
      
        if($_POST)
        {
            $client = new Client();
            $client->setName($_POST['name']);
            $client->setEmail($_POST['email']);
            $client->setPhone($_POST['phone']);
            $client->setPhone2($_POST['phone2']);
            $client->save();
        }
        header("location: /cliente/lista");
    }
}