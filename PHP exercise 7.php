<style>

  .table {
  width:70%;
  border-spacing: 12px;

</style>

<?php

echo '<table class="table">';
  for ( $counter1 = 1; $counter1 <= 7; $counter1++ ) {
  echo "<tr>";
    for ( $counter2 = 1; $counter2 <= 7; $counter2++)
      echo "<td>".$counter1 * $counter2."</td>";            
  echo "</tr>";
  }
echo '</table>';

?>
