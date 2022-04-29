<?php

session_start();
session_destroy(); //Finaliza a sessão

header('location: login.php');