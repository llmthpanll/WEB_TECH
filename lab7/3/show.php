<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php
        // $Address = $_POST['Address'];
        // $age = $_POST['age'];
        // $Profession = $_POST['Profession'];
        // $age = $_POST['age'];      
        
        if (isset($_POST['fname'])) {
            if (strlen($_POST['fname']) >= 5) {
                $fname = $_POST['fname'];
            } else {
                $fname = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
            }
        } else {
            $fname = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        if (isset($_POST['Address'])) {
            if (strlen($_POST['Address']) >= 5) {
                $Address = $_POST['Address'];
                // echo "<h1>Name : $Address</h1>";
            } else {
                $Address = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
            }
        } else {
            $Address = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        if (isset($_POST['age'])) {
            if (strlen($_POST['age']) >= 5) {
                $age = $_POST['age'];
                // echo "<h1>Name : $age</h1>";
            } else {
                $age = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
            }
        } else {
            $Profession = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        if (isset($_POST['Profession'])) {
            if (strlen($_POST['Profession']) >= 5) {
                $Profession = $_POST['Profession'];
                // echo "<h1>Name : $Profession</h1>";
            } else {
                $Profession = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
            }
        } else {
            $Profession = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }
        
        if (isset($_POST['status'])) {
            $radio = $_POST['status'];
            if($radio == "Resident"){
                $resident = "Resident";
            }else{
                $resident = "Non-Resident";
            }
        } else {
            $resident = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        echo "<h1>Name : $fname</h1>";
        echo "<h1>Address : $Address</h1>";
        echo "<h1>Age : $age</h1>";
        echo "<h1>Profession : $Profession</h1>";
        echo "<h1>Residential status : $resident</h1>";
        ?>
</body>

</html>