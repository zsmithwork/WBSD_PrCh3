<?php

  session_start();
  include_once 'serv.php';

  $_SESSION["useris"] = "temp";

  header("Location: ../index.php");
