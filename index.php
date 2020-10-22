<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Elit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Baumans&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/estilos.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  </head>
  <body>
    <header>
      <dir class="container">
        <h1>ELIT</h1>
      </dir>
    </header>
    <div class="panel container">

        <div class="row">
    <div class=" parent  col-xs-12 col-sm-12 col-md-6" id="section-1">
       <div id="myCarousel" class="child carousel slide" data-ride="carousel">
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="It.jpg" alt="Chicago" style="width:100%;">
      </div>
      <?php
      include 'PHP/conexion.php';
      $apikey='fc5a0196234f38d93f6ad2885261e5fb';   
        $sql="SELECT * FROM movies ORDER BY rating DESC LIMIT 100";
            $result=$conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $file_1=file_get_contents('https://api.themoviedb.org/3/movie/'.$row['tmdbId'].'/images?api_key='.$apikey);
$data=json_decode($file_1,true);
    $image='<div class="item"><img src="https://image.tmdb.org/t/p/w500'.$data["posters"][0]["file_path"].'"></div>';
      echo $image;
      
       }
 
      ?>
      
   
    </div>

  </div>
        

<a href="/Elit/top100.php"><div class="overlay">
    
  </div>
  <div class="nombre">TOP 100</div>
        </div>
<div class=" col-xs-12 col-sm-12 col-md-6">
<div class="row">
    <div class=" parent  col-xs-12 col-sm-12 col-md-6" id="section-2">
       <div id="myCarousel" class="child carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="It.jpg" alt="Chicago" style="width:100%;">
      </div>
      <?php

      $apikey='fc5a0196234f38d93f6ad2885261e5fb';   
        $sql="SELECT * FROM movies ORDER BY title DESC LIMIT 100";
            $result=$conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $file_2=file_get_contents('https://api.themoviedb.org/3/movie/'.$row['tmdbId'].'/images?api_key='.$apikey);
$data=json_decode($file_2,true);
    $image='<div class="item"><img src="https://image.tmdb.org/t/p/w500'.$data["posters"][0]["file_path"].'"></div>';
      echo $image;
      
       }
 /*
      <div class="item">
        <img src="2067.jpg" alt="New york" style="width:100%;">
      </div>*/
      ?>
      
   
    </div>

  </div>
     </a>   

<a href="/Elit/busqueda.php"><div class="overlay">
    
  </div>
    <i class="nombre_1 fas fa-search"></i>
        </div>
    <div class=" parent  col-xs-12 col-sm-12 col-md-6" id="section-1">
       <div id="myCarousel" class="child carousel slide" data-ride="carousel">
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="It.jpg" alt="Chicago" style="width:100%;">
      </div>
      <?php

      $apikey='fc5a0196234f38d93f6ad2885261e5fb';   
        $sql="SELECT * FROM movies ORDER BY rating DESC LIMIT 25,50";
            $result=$conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $file_1=file_get_contents('https://api.themoviedb.org/3/movie/'.$row['tmdbId'].'/images?api_key='.$apikey);
$data=json_decode($file_1,true);
    $image='<div class="item"><img src="https://image.tmdb.org/t/p/w500'.$data["posters"][0]["file_path"].'"></div>';
      echo $image;
      
       }
 /*
      <div class="item">
        <img src="2067.jpg" alt="New york" style="width:100%;">
      </div>*/
      ?>
      
   
    </div>

  </div>
      </a>  

<a href="/Elit/busqueda.php"><div class="overlay">
    
  </div>
  <i class="nombre_1 fas fa-search"></i>
        </div>
  </div>
  <div class="row">
    <div class=" parent  col-xs-12 col-sm-12 col-md-6" id="section-1">
       <div id="myCarousel" class="child carousel slide" data-ride="carousel">
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="It.jpg" alt="Chicago" style="width:100%;">
      </div>
      <?php

      $apikey='fc5a0196234f38d93f6ad2885261e5fb';   
        $sql="SELECT * FROM movies ORDER BY rating DESC LIMIT 50,75";
            $result=$conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $file_1=file_get_contents('https://api.themoviedb.org/3/movie/'.$row['tmdbId'].'/images?api_key='.$apikey);
$data=json_decode($file_1,true);
    $image='<div class="item"><img src="https://image.tmdb.org/t/p/w500'.$data["posters"][0]["file_path"].'"></div>';
      echo $image;
      
       }
 /*
      <div class="item">
        <img src="2067.jpg" alt="New york" style="width:100%;">
      </div>*/
      ?>
      
   
    </div>

  </div>
  </a>  

<a href="/Elit/busqueda.php"><div class="overlay">
    
  </div>
  <i class="nombre_1 fas fa-search"></i>
        </div>
    <div class=" parent  col-xs-12 col-sm-12 col-md-6" id="section-1">
       <div id="myCarousel" class="child carousel slide" data-ride="carousel">
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="It.jpg" alt="Chicago" style="width:100%;">
      </div>
      <?php

      $apikey='fc5a0196234f38d93f6ad2885261e5fb';   
        $sql="SELECT * FROM movies ORDER BY rating DESC LIMIT 75,100";
            $result=$conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $file_1=file_get_contents('https://api.themoviedb.org/3/movie/'.$row['tmdbId'].'/images?api_key='.$apikey);
$data=json_decode($file_1,true);
    $image='<div class="item"><img src="https://image.tmdb.org/t/p/w500'.$data["posters"][0]["file_path"].'"></div>';
      echo $image;
      
       }
 /*
      <div class="item">
        <img src="2067.jpg" alt="New york" style="width:100%;">
      </div>*/
      ?>
      
   
    </div>

  </div>
   </a>     

<div class="overlay">
    
  </div>
  <i class="nombre_1 fas fa-search"></i>
        </div>
  </div>
</div>

</div>
    
    </div>

 
    <footer>
     
    </footer>
    
    <!--<script src="scripts.js"></script>-->
    <script></script>
  
  </body>
</html>