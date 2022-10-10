<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="index.php" method="POST">
        <label for="prodname">Name :</label>
        <input type="text" id="prodname" name="prodname" placeholder="Enter Product Name" required />
        <button type="submit" name="submit">Submit</button>
    </form> -->
    <?php
    $url = "http://10.0.15.20/lab8/restapis/superheroes";
    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "Squad Name : $result->squadName<br>";
    echo "Home Town : $result->homeTown<br>";
    foreach ($result->members as $member) {
        echo "Name : $member->name<br>";
        echo "Age : $member->age<br>";
        echo "Secret Identity : $member->secretIdentity<br>";
        foreach ($member->powers as $power) {
            echo "Power : $power<br>";
        }
    }
    ?>
</body>

</html>