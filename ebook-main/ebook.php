<?php
session_start();
// error_reporting(0);
    include 'connection.php';
    // include 'login.php';
    $name=$_SESSION["username"];
    
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&family=Quicksand&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&family=Quicksand&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>home</title>

    <!-- css -->

    <style>
        body {
            margin: 0;
            background-image: url("main.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            position: relative;
        }
        p{
            size: 20px;
        }
        #logout{
            visibility: hidden;
        }
        
        .nav {
            display: flex;
            position: absolute;
            background: rgb(179, 179, 186);
            background: linear-gradient(90deg, rgba(179, 179, 186, 1) 0%, rgba(0, 0, 0, 1) 0%, rgba(44, 51, 54, 0.2945553221288515) 100%);
            top: -20px;
            width: 100%;
            justify-content: space-between;
        }
        
        h1 {
            display: inline-block;
            font-family: 'Heebo', sans-serif;
            font-family: 'Quicksand', sans-serif;
            color: aliceblue;
        }
        
        ul {
            position: absolute;
            top: 15px;
            left: 1350px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
        
        li {
            display: inline;
            float: left;
        }
        
        .navlink {
            display: block;
            padding: 8px;
            color: black;
            background-color: white;
            border: 1px solid;
            border-radius: 2px;
            border-color: white;
            text-decoration: none;
        }
        
        .navlink:hover {
            color: white;
            background-color: black;
            border-color: black;
        }
        
        .main {
             
            display: flex;
            background: rgba(255, 255, 255, 0.767); 
            align-items: center;
            flex-direction: column;
            justify-content: center;
            position: absolute;
            margin: auto;
            top: 200px;
            left: 600px;
            width: 30%;
            height: 300px;
            border: solid none;
            border-radius: 20px;
        }
        
        .mainbtn{
            display: flex;
            color: #141414;
            font-family: 'Heebo', sans-serif;
            font-family: 'Quicksand', sans-serif;
            font-family: 'Ubuntu', sans-serif;
            border: static none;
            padding: 20px;
            background-color:#98989e;
            width: 90%;
            margin-bottom: 20px;
            border-radius: 20px;
            justify-content: center;
            text-decoration: none;
        }
        .mainbtn:hover{
            background-color: black;
            color: white;
        }

       
    </style>
</head>

<body>

    
    <div class="nav">
        <h1>EBOOK MANAGEMENT SYSTEM</h1>
        <ul>
            <li><a href="home.html" class="navlink">Home</a></li>
            <li>&nbsp; &nbsp;</li>
            <li><a href="about.html" class="navlink">About us</a></li>
            <li>&nbsp; &nbsp;</li>
            <li><a href="contactus.html" class="navlink">Contact us</a></li>
            <li>&nbsp; &nbsp;</li>
            <li><a href="login.php" class="navlink" >Logout</a></li>
            <li>&nbsp;&nbsp;</li>


        </ul>

    </div>
    <div class="main">

    
    
        <?php
          
          echo "<center><h2> WELCOME $name</h2></center>";
          


        ?>
       
        <a href="Buybook.php" class="mainbtn">BuyBook</a>
        <a href="Viewbook.php" class="mainbtn">View Books</a>  
        <a href="orders.php" class="mainbtn">My orders</a>
        
          
        </div>

    </div>
    
</body>

</html>