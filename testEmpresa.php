<?php
include 'Persona.php';
include 'Cliente.php';

    $persona = new Persona("vero", "lopez", "dni", 96397189);
    $cliente = new Cliente($persona, "no");

   echo $cliente;
?>