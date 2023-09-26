<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

     

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="d-flex justify-content-center mt-5 mx-5 ">
    <?php
      echo "<table class='table table-success table-striped'>";
        echo "<thead>";
          echo "<tr>";
            foreach ($hotels as $hotelClass) {
              echo '<td>',$hotelClass['name'] ,'</td>';
            }
          echo "</tr>";
        echo "</thead>"; 
        echo "<tbody>"; 
        echo "<tr>";
        foreach ($hotels as $hotelClass) {
          echo '<td>',$hotelClass['description'] ,'</td>';
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($hotels as $hotelClass) {
          echo '<td>',$hotelClass['parking'] ,'</td>';
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($hotels as $hotelClass) {
          echo '<td>',$hotelClass['vote'] ,'</td>';
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($hotels as $hotelClass) {
          echo '<td>',$hotelClass['distance_to_center'] ,'</td>';
        }
        echo "</tr>";
        echo "</tbody>"; 
      echo "</table>"; 
    ?>
  </div>
</body>
</html>