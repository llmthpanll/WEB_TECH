<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="mb-5">

            <?php

            if (strlen($_POST['fname']) < 5 || strlen($_POST['address']) < 5 || strlen($_POST['profess']) < 5) {
                echo "<h1 style='color:red;'>***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</h1>";
            }


            ?>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Name</span>
            <?php
        echo "&nbsp;&nbsp;".$_POST['fname'];
        ?>
        </div>
        


        <div class="input-group mt-5">
            <span class="input-group-text">Address</span>
            <?php
        echo "&nbsp;&nbsp;".$_POST['address'];
        ?>
        </div>

        

        <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="basic-addon1">age</span>
            <?php
        echo "&nbsp;&nbsp;".$_POST['age'];
        ?>
        </div>

        

        <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="basic-addon1">Profession</span>
            <?php
        echo "&nbsp;&nbsp;".$_POST['profess'];
        ?>
        
        </div>

        


        <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="basic-addon1">Resident</span>
            <?php
                echo "&nbsp;&nbsp;".$_POST["flexRadioDefault"] . "<br/>";
                ?>
        </div>

        <div class="form-check">


            <div class="mt-2">
                
            </div>

            <div class="mt-5">

            </div>



        </div>
</body>

</html>