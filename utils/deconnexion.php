<?php

session_start();
session_destroy();

//on ne fiat que deconnecter l'utilisateur
//session_start();
//unset($_SESSION['users]);

header('Location: index.php');
