<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tech Final Example</title>
    <style>
        #map {
            height: 400px;
            width: 90%;
        }
    </style>
</head>
<body>
    <?php    
        
        $url = "data.json";
        $response = file_get_contents($url);
        $result = json_decode($response);
        echo "<form action='index.php' method='post'>
        <div>
            <select name='location' id='location'>
                <option value='' disabled selected>เลือกชื่อสถานที่</option>";
        foreach ($result as $place) {
            echo "<option value='$place->name'>$place->name</option>"; 
        }
        echo "</select>";
        echo "
            </div>
            <button type='submit' id='submit'>Submit</button>
        </form>";
        if (isset($_POST['location'])){
            if (!empty($_POST['location'])){
                $selected = $_POST['location'];
                echo '<iframe id="map" width="100%" height="500" src="https://maps.google.com/maps?q='.$selected.'&t=&z=5&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" allowfullscreen>
                </iframe>';
            }
            else {
                echo '<iframe id="map" width="100%" height="500" src="https://maps.google.com/maps?q=&t=&z=5&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" allowfullscreen>
                </iframe>';
            }
        }
    ?>
</body>
</html>