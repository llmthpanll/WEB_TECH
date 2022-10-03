<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        div {
            max-width: 65%;
            margin: 100px auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
        img{
            margin: 20px;
            border-radius: 10%;
        }
    </style>
</head>

<body>
    <div>
        <?php

        for ($i = 0; $i < 48; $i++) {
            echo "<img src='https://picsum.photos/200/200?random=$i'>";
        }

        ?>
    </div>
</body>

</html>