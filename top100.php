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
    /*$conn=mysqli_connect("localhost","root","","peliculas");
          // Check connection
          if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            mysqli_set_charset($conn,"utf8");*/
      $apikey='fc5a0196234f38d93f6ad2885261e5fb';
      $url_base='https://api.themoviedb.org/3/';
      $url_images='https://image.tmdb.org/t/p/w500/';
      $nombre_pelicula='Kung Fu Panda 3';
      $busqueda_peliculas='search/movie?api_key=';
       $pelicula=$url_base.$busqueda_peliculas.$apikey.'&query='.$nombre_pelicula;
     $image;     
            /* $sql2="SELECT tmdbId FROM links WHERE movieId=$i";
             $result2=$conn->query($sql2);
             $row2 = $result2->fetch_array(MYSQLI_ASSOC); 
 
             $i2=$row2['tmdbId'];*/

           $sql="SELECT * FROM movies ORDER BY rating DESC LIMIT 100";
            echo "<p>TOP 100</p>";
            $result=$conn->query($sql);
            while($row = $result->fetch_assoc()) {
             $j=$row['title'];
             $k=$row['genres'];
             $l=$row['movieId'];
             $m=$row['rating'];
                  echo "<p>$j</p>";
                  echo "<p>$k</p>";
                  echo "<p>$l</p>";
                  echo "<p>$m</p>";
  $file_1=file_get_contents('https://api.themoviedb.org/3/movie/'.$row['tmdbId'].'/images?api_key='.$apikey);
$data=json_decode($file_1,true);
    $image='<div><img src="https://image.tmdb.org/t/p/w500'.$data["posters"][0]["file_path"].'"> <p>'.$row['title'].'</p><p>'.$row['rating'].'</p></div>';
      echo $image;

    print_r($data["posters"][0]["file_path"]);
    //$data['backdrops']['1'];
          
        }
mysqli_free_result($result);
   //mysqli_free_result($result2);
   mysqli_close($conn);
    ?>
   </body>
</html>