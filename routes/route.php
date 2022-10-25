<?php

use App\Controller\ClientController;

function router($url)
{
    switch ($url) {
        case "/cliente/cadastro":
            ClientController::createView();
            break;
        case "/cliente/lista":
            ClientController::listView();
            break;
        case "/cliente/atualiza":
            ClientController::updateView();
            break;
        case "/cliente/cadastro/save":
            ClientController::save();
            break;
        default:
            echo "error 404";
            break;
    }
}
