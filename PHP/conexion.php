<?php
$conn=mysqli_connect("localhost","root","","peliculas");
          // Check connection
          if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            mysqli_set_charset($conn,"utf8");
  // Promedio
         /* while($row = $result->fetch_assoc()) {
             $t=$row['title'];
             $r=$row['genres'];
             $i=$row['movieId'];
            $sql2="SELECT tmdbId FROM links WHERE movieId=$i";
             $result2=$conn->query($sql2);
             $row2 = $result2->fetch_array(MYSQLI_ASSOC); 
             $i2=$row2['tmdbId'];

             $sql3="SELECT movieId,rating FROM ratings WHERE movieId =$i";
             $result3=$conn->query($sql3);
              // Associative array
             $a=0;
             $p=0;
             
             while($row3 = $result3->fetch_assoc()) {
               if($row['movieId']==$row3['movieId']){
                 $a=$a+1;
                 $p=$p+$row3['rating'];
               }
             }
            if ($a>0&&$a>=20) {
                  $p=$p/$a;
              } 
              else{
                $p=0;
              }
              $columnName = 'rating';
                $result4 = $conn->query("SHOW COLUMNS FROM movies WHERE Field = '$columnName'");

                if ($result4->num_rows === 0) {
                  //Si no encontramos la columna, la agregamos
                  $conn->query("ALTER TABLE movies ADD rating decimal(10,2)");
                  $sql4="UPDATE movies SET rating=$p WHERE movieId=$i";
                  $result4=$conn->query($sql4);
                  } 
              //$sql4="UPDATE movies SET rating=$p WHERE movieId=$i";
              //$result4=$conn->query($sql4);
                
                /*if($a>=20){
                  echo "<p>$i</p>";
                  echo "<p>$t</p>";
                  echo "<p>$r</p>";
                  echo "<p>$p</p>";
                  //echo "<p>$i2</p>";
                  
                  }
                 
                //}
               
              
           }*/

?>