<?php

  session_start();
  include_once 'serv.php';

  $user = mysqli_real_escape_string($conn, $_POST['usercheck']);
  $pass = mysqli_real_escape_string($conn, $_POST['passcheck']);

  $check_sql = "SELECT userID FROM users WHERE usr = '$user' AND pw = '$pass';";
  $result = mysqli_query($conn, $check_sql);
  $userID = mysqli_fetch_array($result)['userID'] ??'';

  if (mysqli_num_rows($result) == 0) {
    header("Location: ../index.php?login=failure");
    $_SESSION["useris"] = "loginfailure";
  } else {
    header("Location: ../index.php?login=success");
  }

  $_SESSION["useris"] = $userID;
