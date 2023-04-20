<html>
<head>
    <meta charset="UTF-8">
    <title>Earthquake Prediction Result</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvmIp7zSfTcAdrdysFi6DXp34m9qNyVlE"></script>
    <script>
        function initMap(latitude, longitude, richterScale) {
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: { lat: latitude, lng: longitude },
        });
        var marker = new google.maps.Marker({
          position: { lat: latitude, lng: longitude },
          map: map,
          title: "Predicted Richter Scale: " + richterScale,
        });
      }
    </script>
    <style>
        .result-container {
            background-color: blue;
            border: 1px solid #DDDDDD;
            margin-top: 20px;
            text-align: center;
        }

        h1 {
            text-align: center;
            color: white;
        }
        body{
          background-image: url('img.png');
}
        
    </style>
    
</head>
<body>
<h1>Earthquake Prediction Result</h1>
<div id="map" style="width: 100%; height: 400px;"></div>
<div class="result-container">
<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $latitude = $_POST["latitude"];
     $longitude = $_POST["longitude"];
     $height = $_POST["height"];
     $command = escapeshellcmd("python req_ml.py $latitude $longitude $height");
     $output = shell_exec($command);
     $predict = $output;
     echo "<b><h3><p>The predicted Richter scale magnitude is: $output</p></h3></b>";
     echo '<script>initMap(' . $latitude . ', ' . $longitude . ', ' . $predict . ');</script>';
    // $result = json_decode($output, true);
     // echo "The predicted Richter scale $output.";
     }
?>

</div>
</body>
</html>

