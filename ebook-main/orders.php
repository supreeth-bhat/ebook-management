<?php
    include 'connection.php';
    error_reporting(0);
    session_start();
    $uname=$_SESSION['username'];
    $sql="select * from users";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($query))
    {
        if ($uname==$row['username']) $uid=$row['id'];

    }
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
    <title>My Orders</title>
    <style>
        body {
            margin: 0;
            background-image: url("main.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            
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
        
        .navlist{
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
        h2{
            color:white;
        }
        .gap{
            height: 100px;
        }
        .books{
            background:  rgba(255, 247, 251, 0.67);
            height: 50px;
            width: 85%;
            margin: auto;
            border: solid none;
            border-radius: 15px;

        }
        .head{
            background:rgba(255, 255, 255, 0.767);
            height: 50px;
            width: 85%;
            margin: auto;
            border: solid none;
            border-radius: 15px;
        }
        .headlist{
            display: flex;
            justify-content: space-between;
        }
        .headname{
            margin-right: 50px;
            margin-top: 10px;
            font-family: 'Heebo', sans-serif;
            font-family: 'Quicksand', sans-serif;
            font-size: 20px;

        }
        .booklist{
            display: flex;
            justify-content: space-between;
        }
        .bookname{
            margin-right: 50px;
            margin-top: 10px;
            font-size: 20px;
           
            
        }
        .bgimg{
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            object-fit:fill;
            z-index: -50;
       }
       

    </style>
</head>
<body>
<img src="main.jpg" alt="bgimage" class="bgimg">
<div class="nav">
        <h1>EBOOK MANAGEMENT SYSTEM</h1>
        <ul class="navlist">
            <li><a href="ebook.php" class="navlink">Home</a></li>
            <li>&nbsp; &nbsp;</li>
            <li><a href="about.html" class="navlink">About us</a></li>
            <li>&nbsp; &nbsp;</li>
            <li><a href="contactus.html" class="navlink">Contact us</a></li>
            <li>&nbsp; &nbsp;</li>
            <li><a href="login.php" class="navlink" >Logout</a></li>
            <li>&nbsp;&nbsp;</li>


        </ul>

    </div>
    <div class ="gap"></div>
    <center><h2>My Orders</h2></center>
    <div class="main" >
        <div class="head">
            <ul class="headlist">
                <li class="headname">Book</li>
                <li class="headname">Transaction ID</li>
                <li class="headname">Date</li>
                
            </ul>
        </div>
        <?php
            $sql="select b.bname,o.tid,o.date from orders o,books b where o.uid='$uid' and o.bid=b.bookid ";
            $query=mysqli_query($conn,$sql);
            if (mysqli_num_rows($query)>0)
            { 
            while($row=mysqli_fetch_assoc($query))
            {   
                echo '
                <div class="books">
                    <ul class="booklist">
                        <li class="bookname">'.$row['bname'].'</li>
                        <li class="bookname">'.$row['tid'].'</li>
                        <li class="bookname">'.$row['date'].'</li>
                    </ul>
    
                </div>
                ';
                }
            }
            else{
                echo "<center><h1>No orders</h1></center>";
            }
        ?>
        
        
    </div>
     
</body>
</html>