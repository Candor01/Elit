<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Elit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Baumans&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/estilos.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  </head>
  <body>
    <header>
<div class="container">
 <div class="row ">
  <div class="col-xs-12 col-sm-12 col-md-8">
   <a href="/Elit/index.php"><h1>ELIT</h1></a></div>
    <div class="col-xs-12 col-sm-12 col-md-4">
 <form  method="POST">

<input type="text" id="keywords" name="keywords" size="30" maxlength="30" style="color: black">
<input type="submit" name="search" id="search" value="Buscar">
</form>
</div>
</div>
</div>
 
    </header>
   <div class="container">
   <div class="row">
<?php include 'PHP/conexion.php';
      $apikey='fc5a0196234f38d93f6ad2885261e5fb';     

//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];
    echo '<script>';
  echo 'console.log('. json_encode( $keywords ) .')';
  echo '</script>';
           $sql="SELECT * FROM movies WHERE title LIKE '%$keywords%'";
            $result=$conn->query($sql);
          
            while($row = $result->fetch_assoc()) {
            
  $file_1=file_get_contents('https://api.themoviedb.org/3/movie/'.$row['tmdbId'].'/images?api_key='.$apikey);
$data=json_decode($file_1,true);
    $image='<div><img class="child img-fluid" src="https://image.tmdb.org/t/p/w500'.$data["posters"][0]["file_path"].'"></div>';
     ?>
    <div class="parent col-xs-12 col-sm-6 col-md-2" >
      <?php

      echo $image;

      $genero=$row['genres'];
      $info='<div class="overlay"></div>
    <div class="nombre_3">'.$row['title'].'<br>'.$row['genres'].'<br><p>Rating: '.$row['rating'].'<p/></div>
  
           </div>';

        echo $info;

        }
    mysqli_free_result($result);
    }


   mysqli_close($conn);
  
   ?>
</div>
   </div>
 </div>
    <footer>
     
    </footer>
  
  </body>
</html>