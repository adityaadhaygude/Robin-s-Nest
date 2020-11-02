<?php //
 session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
 <head>
 <meta charset='utf-8'>
 <meta name='viewport' content='width=device-width, initial-scale=1'>
 
 <link rel='stylesheet' href='sty.css'>
 <script src='javascript.js'></script>
_INIT;
 require_once 'functions.php';
 $userstr = 'Welcome Guest';
 if (isset($_SESSION['user']))
 {
 $user = $_SESSION['user'];
 $loggedin = TRUE;
 $userstr = "Logged in as: $user";
 }
 else $loggedin = FALSE;
echo '
    <title>Robin\'s Nest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Robin\'s Nest</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        ';
    if ($loggedin)
    {
        echo <<<_LOGGEDIN
        <li class="nav-item">
        <a data-role='button' class="nav-link" data-inline='true' data-icon='home' data-transition="slide" href='members.php?view=$user'>Home</a>
        </li>
        <li class="nav-item ">
        <a data-role='button' class="nav-link" data-inline='true' data-transition="slide" href='members.php'>Members</a>
        </li>
        <li class="nav-item ">
        <a data-role='button' class="nav-link" data-inline='true' data-transition="slide" href='friends.php'>Friends</a>
        </li>
        <li class="nav-item ">
        <a data-role='button' class="nav-link" data-inline='true' data-transition="slide" href='messages.php'>Messages</a>
        </li>
        <li class="nav-item ">
        <a data-role='button' class="nav-link" data-inline='true' data-transition="slide" href='profile.php'>Edit Profile</a>
        </li>
        <li class="nav-item ">
        <a data-role='button' class="nav-link" data-inline='true' data-transition="slide" href='logout.php'>Log out</a>
        </li>
        </ul>
        </div>
        </nav>
        _LOGGEDIN;
    }
    else
    {
        echo <<<_GUEST
        <li class="nav-item ">
        <a data-role='button' class="nav-link" data-inline='true' data-icon='home' data-transition='slide' href='index.php'>Home </a>
        </li>
        <li class="nav-item">
        <a data-role='button' class="nav-link" data-inline='true' data-icon='plus' data-transition="slide" href='signup.php'> Sign Up </a>
        </li>
        <li class="nav-item">
        <a data-role='button' class="nav-link" data-inline='true' data-icon='check' data-transition="slide" href='login.php'> Log In</a>
        </li>
        </ul>
        </div>
        </nav>
        <div class="container">
        <p class="info">(You must be logged in to use this app)</p>
        _GUEST;
    }
  
?>
<div class="container">
    