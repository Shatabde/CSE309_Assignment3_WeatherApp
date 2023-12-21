<?php
$city = $_GET['city'];
$url = "https://api.openweathermap.org/data/2.5/forecast?q=$city&appid=0faf346972ab061589375d2f01890994&units=metric";

$apiData = file_get_contents($url);
$cli = json_decode($apiData);

$temperature = $cli->list[0]->main->temp;
if ($temperature < 20) {
    $backgroundImage = "./Image/img2.jpg";
} else if ($temperature > 30) {
    $backgroundImage = "./Image/img6.jpg";
} else {
    $backgroundImage = "./Image/img4.jpg";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url(<?php echo $backgroundImage; ?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .container {
            background-color: #f0f0f0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 20px; 
            padding: 20px; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 800px; 
            margin: 0 auto; 
            opacity: 0.8;
        }

        .feature {
            flex: 0 0 calc(33.33% - 20px); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
            opacity: 0.9;
        }

        hr {
            margin: 10px 0;
            border-top: 1px solid #ddd;
        }

        .btn-back {
            margin-top: 20px;
            width: 200px;
        }

        .container2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Set the height to fill the viewport */
        }
    </style>
</head>

<body>

    <div class="container2">
        <div class="container">
            <?php
            for ($i = 0; $i < 40; $i += 8) {
                echo "<div class='feature'><strong>Day " . ($i / 8 + 1) . "</strong>: " . $cli->list[$i]->dt_txt . "<br>";
                echo "Temperature: " . $cli->list[$i]->main->temp . "&#8451;<br>";
                echo "Max Temperature: " . $cli->list[$i]->main->temp_max . "&#8451;<br>";
                echo "Min Temperature: " . $cli->list[$i]->main->temp_min . "&#8451;<br>";
                echo "Wind Speed: " . $cli->list[$i]->wind->speed . "<br>";
                echo "Wind Degree: " . $cli->list[$i]->wind->deg . "<br>";
                echo "Pressure: " . $cli->list[$i]->main->pressure . "<br>";
                echo "Humidity: " . $cli->list[$i]->main->humidity . "</div><hr>";
            }
            ?>
        </div>
        <a class="btn btn-primary btn-back" href="index.php" role="button">Back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
