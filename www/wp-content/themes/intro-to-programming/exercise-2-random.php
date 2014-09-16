<?php
$rand = rand (0 , 100) ;

function print_random ($number){
if ( $number < 50 ) {
echo "<font color='blue'>$number</font>";
} else {
  echo "<font color='red'>$number</font>";
}
 }

print_random ($rand);

 ?>
