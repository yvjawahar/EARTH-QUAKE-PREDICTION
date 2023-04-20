<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>osp</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>EARTH QUAKE PREDICTION</h1>
    <form action="connect.php" method="POST" name="earth" class="form-container">
        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude"><br>
      
        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude"><br>
      
        <label for="height">Height:</label>
        <input type="text" id="height" name="height"><br>
      
        <input type="submit" value="Submit">
        <div class="result-container">
        
</div>

</body>
</html>