<?php

  session_start();
  include_once 'serv.php';

  $departure = mysqli_real_escape_string($conn, $_POST['depart']);
  $arrival = mysqli_real_escape_string($conn, $_POST['arrive']);
  $dateis = mysqli_real_escape_string($conn, $_POST['date']);

  $bookingID = 'b' . uniqid(rand());
  $userID = $_SESSION["useris"];

  $book_sql = "INSERT INTO flights (bookingID, departure, arrival, dateis, FK_user)
              VALUES (?, ?, ?, ?, ?);";
  $book_stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($book_stmt, $book_sql)) {
    header("Location: ../index.php?booking=failure");
    echo "SQL BOOK ERROR";
  } else {
    mysqli_stmt_bind_param($book_stmt, "sssss", $bookingID, $departure, $arrival, $dateis, $userID);
    mysqli_stmt_execute($book_stmt);
  }

  header("Location: ../index.php?booking=success");
