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

        if(strlen($_POST['fname']) < 5 || strlen($_POST['address']) < 5 || strlen($_POST['profess']) < 5){
            echo "<h1 style='color:red;'>***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</h1>";
        }
        
        
        ?>
        </div>
         <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text"  name="fname" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <?php
                echo $_POST['fname'];
            ?>


            <div class="input-group mt-5">
                <span class="input-group-text">Address</span>
                <textarea name="address" class="form-control" aria-label="With textarea"></textarea>
            </div>

            <?php
                echo $_POST['address'];
            ?>

            <div class="input-group mb-3 mt-5">
                <span class="input-group-text" id="basic-addon1">age</span>
                <input type="number" name="age" class="form-control" placeholder="age" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <?php
                echo $_POST['age'];
            ?>

            <div class="input-group mb-3 mt-5">
                <span class="input-group-text" id="basic-addon1">Profession</span>
                <input type="text"  name="profess" class="form-control" placeholder="Profession" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <?php
                echo $_POST['profess'];
            ?>

            <h3>Residential Status</h3>
            <div class="form-check mt-3">
                <input class="form-check-input" type="radio" value="Resident" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Resident
                </label>
            </div>
            <div class="form-check">
                
                <input class="form-check-input" type="radio" value="Non-Resident" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Non-Resident
                </label>
                </div>
                <div class="mt-2">
                <?php
                echo $_POST["flexRadioDefault"]."<br/>";
            ?>
                </div>
                
                <div class="mt-5">

                
                <button type="submit" class="btn btn-primary btn-lg" id="submit">Sumbit</button>
                </div>
         </form>
         

         
    </div>
</body>
</html>

