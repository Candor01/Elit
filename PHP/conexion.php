<?php
$conn=mysqli_connect("localhost","root","","peliculas");
          // Check connection
          if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            mysqli_set_charset($conn,"utf8");
            $sql="SELECT * FROM movies";
            $result=$conn->query($sql);
           

            // Associative array
          while($row = $result->fetch_assoc()) {
             $t=$row['title'];
             $r=$row['genres'];
             $i=$row['movieId'];
           
             //$sql2="SELECT tmdbId FROM links WHERE movieId=$i";
             //$result2=$conn->query($sql2);
             //$row2 = $result2->fetch_array(MYSQLI_ASSOC); 
             //$i2=$row2['tmdbId'];

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
              if ($a>0) {
                  $p=$p/$a;
              } 
              //$sql4="UPDATE movies SET rating=$p WHERE movieId=$i";
              //$result4=$conn->query($sql4);
                
                /*if($a>=20){
                  echo "<p>$i</p>";
                  echo "<p>$t</p>";
                  echo "<p>$r</p>";
                  echo "<p>$p</p>";
                  //echo "<p>$i2</p>";
                 /* for($i=99;$i>=0;$i--){
                    if($p>$rankings[$i][2])
                    {
                      $rankings[$i][2]=
                    }
                    $j=$i+1;
                      $aux2=$rankins[$j][2];
                      $aux1=$rankings[$i][2];
                      $rankings[$i][2]=$p;
                      $rankings[$j][2]=$aux1;
                  }*/
                 
                //}
               
              
           }
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
      //echo "<a href=\"../carpeta noticia/noticia.php?id=$i\">Ver mas</a>";
          }
   mysqli_free_result($result);
   //mysqli_free_result($result2);
   mysqli_free_result($result3);
      mysqli_close($conn);
?>