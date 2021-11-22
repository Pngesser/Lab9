<?php
  $width = 100;
  $length = 100;
  echo "<table border='1' border-collapse='collapse'>";
    for($j=0; $j<=$width; $j++){
      echo '<tr>';
      for($i=0; $i<=$length; $i++){

        echo '<td>'.$i * $j.'<td>';
    }
   
      echo '<tr>';
    }
  echo "<table>";
?>
