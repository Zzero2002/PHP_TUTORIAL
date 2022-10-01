<h1>1 => Strings</h1>
<?php
echo "1.1 = > " . strrev("welcome php") . "<br>"; // reverse of the word //
echo "1.2 = > " . str_repeat("hello ",10) . "<br>"; // word repeated 10 times //
echo "1.3 = > " . str_shuffle("goodjob") . "<br>"; // shuffle the order of the word //
?>
<hr>
<h1> 2 => \n </h1>
<?php
echo "2 = >" . nl2br("firstline.\nAnother line.");
?>
<hr>
<h1>3 => PHP SUM & AVERAGE WITH SORT FROM HIGHEST TO SMALLEST</h1>
<?php
         $array = array( 12,45,10,25);

         echo "the sum is " . array_sum($array) . "<br>";
         echo "the average is " . array_sum($array)/count($array) . "<br>";
         $array_length = count($array);
        rsort($array);
        $arrlength = count($array);
            for($x = 0; $x < $arrlength; $x++) {
            echo $array[$x];
            echo "<br>";
}
?>
<hr>
<h1>4 => sort associative array</h1>
<?php
$array = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
asort($array);
echo "sorting values in asc : ";
foreach($array as $value) {
    echo  $value;
    echo " ";
  }
echo "<br>";
 rsort($array);
 echo "sorting values in desc: ";
 foreach($array as $value) {
   echo $value . "  ";
 }
echo "<br>";

$array = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
ksort($array);
echo "sorting keys in asc : ";
foreach($array as $key=>$x) {
  echo $key . "  " ;
}
echo "<br>";

$array = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
krsort($array);
echo "sorting keys in desc : ";
foreach($array as $key=>$x) {
  echo $key . "  " ;
}
?>
<hr>
<h1>5 => table of multidimentional array</h1>
<table >
    <thead>
        <tr>
            <td>name</td>
            <td>email</td>
            <td>status</td>
        </tr>
    </thead>
<?php
$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];

foreach($students as $student){
    echo "<tr>";
    foreach($student as $i=>$x){
        echo   "<td>".$x."</td>";
        
    }
    
}

echo "</tr></table>";
?>

<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}

</style>