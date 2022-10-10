<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab8/3</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .wrapper {
            background-color: #FFFFF0;
            max-width: 20em;
            padding: 2em;
            text-align: center;
            margin: 1em;
            border-radius: 0.25em;
            border: 1px solid gray;
        }


        .wrapper>img {
            width: 100%;
        }

        .wrapper>h3 {
            margin: 1em 0;
            color: #FF8C00;
        }

        .wrapper>p {
            width: 100%;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .wrapper>div {
            display: flex;
            gap: 0.5em;
            justify-content: center;
            margin-top: 1em;
        }

        .wrapper>div button {
            display: block;
            padding: 1em 1.5em;
            border-radius: 0.25em;
            border: none;
            cursor: pointer;
            font-weight: 600;
        }

        .wrapper>div button:nth-child(1) {
            background: transparent;
            border: 1px solid #FF8C00;
        }

        .wrapper>div button:nth-child(2) {
            background-color: #FF8C00;
            color:white;

        }
    </style>
</head>

<body>
    <?php
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $request = file_get_contents($url);
    $response = json_decode($request, true);
    $meal = $response["meals"][0];
    $image = $meal["strMealThumb"];
    $name = $meal["strMeal"];
    $instruction = $meal["strInstructions"];
    $ytLink = $meal["strYoutube"];

    if (isset($response)) {
        echo ('
            <div class="wrapper">
                <img src=" ' . $image . '" alt="' . $image . '" />
                <h3>' . $name . '</h3>
                <hr/>
                <p>' . $instruction . '</p>
                <div>
                    <button onclick="reload()">Reload</button>
                    <button onclick="navigate()">Learn more</button>
                </div>
            </div>

            <script>
                const reload = () => {
                    location.reload();
                }
                const navigate = () => {
                    console.log("asd");
                    location.href = ("' . $ytLink . '");
                }
            </script>'
        );
    }

    ?>


</body>

</html>