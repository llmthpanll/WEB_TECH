<?php
$url = "http://10.0.15.20/lab8/restapis/currencyrate";
$response = file_get_contents($url);
$result = json_decode($response, true);

$test = ["THB" => "33.524", "JPY" => "120.88", "CNY" => "7.8392", "SGD" => "1.5121", "USD" => "1.1095"];


if (isset($_POST["fewza"])) {
    $fewza1150za = number_format($test[($_POST["fewzato"])] * intval($_POST["fromfew"]) / ($test[$_POST["fewzafrom"]]), 2);
} else {
    $_POST["fromfew"] = 0;
}

?>

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

        <form action="" method="POST">
            <div>
                Form : <select name="fewzafrom" id="">
                    <?php

                    foreach ($test as $key => $value) {
                    ?>
                        <option value="<?= $key ?>"><?= $key; ?></option>
                    <?php
                    }
                    ?>
                </select> <input type="text" name="fromfew" value="<?= $_POST["fromfew"] ?>" id="">
            </div>
            <div>
                To : <select name="fewzato" id="">
                    <?php
                    foreach ($test as $key => $value) {
                    ?>
                        <option value="<?= $key ?>"><?= $key; ?></option>
                    <?php
                    }
                    ?>
                </select> <input type="text" name="tomadara" value="<?= isset($fewza1150za) ? $fewza1150za : '0' ?>" id="">
            </div>
            <input type="text" style="display:none" name="fewza">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>