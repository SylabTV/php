<?php

function routing(): string {
    return isset($_GET['route'])
        ? ($_GET['route'] === "about" ? "_about" : ($_GET['route'] === "contact" ? "_contact" : "_homepage"))
        : "_homepage";
}

$page = routing(); // récupère le template à inclure

require "templates/layout.phtml";
