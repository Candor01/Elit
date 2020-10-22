<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Elit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="funciones.js"></script>
  </head>
  <body>
    
   
<?php include 'PHP/conexion.php';
      $apikey='fc5a0196234f38d93f6ad2885261e5fb';     

           $sql="SELECT * FROM movies ORDER BY rating DESC LIMIT 100";
            echo "<p>TOP 100</p>";
            $result=$conn->query($sql);
            while($row = $result->fetch_assoc()) {
            
  $file_1=file_get_contents('https://api.themoviedb.org/3/movie/'.$row['tmdbId'].'/images?api_key='.$apikey);
$data=json_decode($file_1,true);
    $image='<div><img src="https://image.tmdb.org/t/p/w500'.$data["posters"][0]["file_path"].'"> <p>'.$row['title'].'</p><p>'.$row['rating'].'</p></div>';
      echo $image;

          
        }
mysqli_free_result($result);

   mysqli_close($conn);
    ?>
   </body>
</html>