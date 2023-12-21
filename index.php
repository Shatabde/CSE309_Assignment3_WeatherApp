<?php
$backgroundImage = "./Image/img1.jpg";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('<?php echo $backgroundImage; ?>');
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    h1 {
      color: #333;
    }

    label {
      color: #333;
    }
  </style>
  <title>Assignment-4</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center">5-Day Weather Forecast</h1>
    <form action="weather.php" method="GET">

      <div class="row mt-4">
        <label for="city">
          <h4>Enter City</h4>
        </label>
        <div class="col-8">
          <div class="form-group">
            <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
          </div>
        </div>
        <div class="col-4">
          <button type="submit" class="btn btn-primary w-100">Search</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>