<?php
                        // task 1//
//echo phpinfo()

                        // task 2 //
define("WEBSITE_NAME","LAB1");
echo WEBSITE_NAME . "<br>";

echo $_SERVER['SERVER_PORT'] . "<br> <br>";
echo $_SERVER['SERVER_ADDR'] . "<br> <br>";
echo $_SERVER['SERVER_NAME'] . "<br> <br>";
echo __FILE__ . "<br> <br><br>";

                        // task 3 //
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;
}
echo "1-> " .$a ." ".$b. "<br>";
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}
echo "2-> ". $i." " . $num  . "<br>";

$i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
echo "3-> " .$i . "<br> <br>" ;


$arr = array( 1, 2, 3, 4, 5);
         
foreach( $arr as $value ) {
   echo "4-> Value is $value <br /> <br />";
};

$age = 10;

switch ($age) {
  case ($age < 5):
    echo "Stay at home";
    break;
  case ($age == 5):
    echo "Go to Kindergarden";
    break;
  case ($age > 6 AND $age <12):
    echo "Go to grade: Primary";
    break;
  default:
    echo "you are 10";
}
?>