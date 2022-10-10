<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab8/4</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .wrapper {
            padding: 1em;
            display: flex;
            justify-content: space-between;
            max-width: 40em;
            width: 100%;

        }

        .wrapper>img {
            max-width: 10em;
        }
    </style>
</head>

<body>

    <?php
    $url = 'http://10.0.15.20/lab8/restapis/10countries';
    $request = file_get_contents($url);
    $decode = json_decode($request, true);

    foreach ($decode as $country) {
        $name = $country["name"];
        $capital = $country["capital"];
        $population = $country["population"];
        $flag = $country["flag"];
        $region = $country["region"];
        $location = $country["latlng"][0] . " " . $country["latlng"][1];
        $borders = "";
        foreach ($country["borders"] as $border) {
            $borders = $borders . " " . $border;
        }

        echo ('
            <div class="wrapper">
                <div>
                    <b><span style="font-weight:400;">Name : </span>' . $name . '</b>
                    <p>Capital : ' . $capital . '</p>
                    <p>Population : ' . $population . '</p>
                    <p>Region : ' . $region . '</p>
                    <p>Location : ' . $location . '</p>
                    <p>Border : ' . $borders . '</p>
                </div>
                <img src="' . $flag . '" alt="' . $flag . '"/>
            </div>
        ');
    }
    ?>

</body>

</html>