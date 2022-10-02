<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php

    if (isset($_POST['inpvalue'])) {
        $numstr = $_POST['inpvalue'];
        $fname = $_POST['fname'];
        $va = intval($numstr);
        echo "<h1>$fname</h1>";
    }
    ?>
</body>

</html>