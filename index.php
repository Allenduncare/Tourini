<?php
include "connectdb.php";
if(isset($_SESSION["username"])) {
	header("refresh:0;home.php");}
  ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Tourini</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
  <section id="banner">
    <div class="inner split">
      <section>
        <h2>Welcome to Tourini. Please sign in or register an account!</h2>
      </section>
      <section>
        <form action="login.php" method="POST"><p> Username:<input type="text" name="username" required>
          <p> Password:<input type="password" name="password" required >
            <input type = "submit" value="Submit"></form>
            Don't have an account? <a href="register.php">Click here</a> to sign up
          </div>
        </section>
      </div>
    </section>
