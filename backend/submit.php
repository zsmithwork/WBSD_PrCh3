<?php

  session_start();
  include_once 'serv.php';

  $user = mysqli_real_escape_string($conn, $_POST['user']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $str = mysqli_real_escape_string($conn, $_POST['str']);
  $apt = mysqli_real_escape_string($conn, $_POST['apt']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $state = mysqli_real_escape_string($conn, $_POST['state']);
  $zip = mysqli_real_escape_string($conn, $_POST['zip']);

  $addrID = 'a' . uniqid(rand());
  $userID = 'u' . uniqid(rand());

  $addr_sql = "INSERT INTO addr (addrID, addrStr, addrApt, addrCty, addrSta, addrZip)
              VALUES (?, ?, ?, ?, ?, ?);";
  $addr_stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($addr_stmt, $addr_sql)) {
    header("Location: ../index.php?signup=failure");
    echo "SQL ADDR ERROR";
  } else {
    mysqli_stmt_bind_param($addr_stmt, "ssssss", $addrID, $str, $apt, $city, $state, $zip);
    mysqli_stmt_execute($addr_stmt);
  }

  $user_sql = "INSERT INTO users (userID, usr, pw, eml, fName, lName, billingID)
              VALUES (?, ?, ?, ?, ?, ?, ?);";
  $user_stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($user_stmt, $user_sql)) {
    header("Location: ../index.php?signup=failure");
    echo "SQL USER ERROR";
  } else {
    mysqli_stmt_bind_param($user_stmt, "sssssss", $userID, $user, $pass, $email, $first, $last, $addrID);
      mysqli_stmt_execute($user_stmt);
  }

  $_SESSION["useris"] = "$userID";

  header("Location: ../index.php?signup=success");
