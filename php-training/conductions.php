<?php
// if conduction 
$t = 10;

if ($t < "20") {
    echo "Have a good day";
} else {
    echo "Have a good night";
}

$t = 5;

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>


<?php
// while loop
$i = 1;

while($i <= 5) {
  echo "The number is: $i <br>";
  $i++;
}

?>



<?php
// for loop
for ($i = 0; $i <= 10; $i++) {
  echo "The number is: $i <br>";
}
?>



<?php
// foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>



<?php
// break 
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>

<?php
// continue
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>