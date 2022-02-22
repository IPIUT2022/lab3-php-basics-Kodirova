<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>


<h1>Colors</h1>

<ul>
<?php
    $color = array('white', 'green', 'red');
    sort($color);
    for ($i = 0; $i < count($color); $i++) {
        echo "<li>" . ucfirst($color[$i]) . "</li>";
    }
?>
</ul>
<h1>Capital and Country Name</h1>
<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
 "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
 "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
 "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", 
 "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", 
 "Poland"=>"Warsaw");
asort($ceu);
 foreach($ceu as $x => $x_value) {
  echo "The capital of " . $x . "is " . $x_value;
  print("\n");
  echo "<br>";
}
?>

<h1>Data from File</h1>
<?php
$arr = array(); 
foreach(file("data.txt") as $item){
    list($key, $value) = explode(" ", $item);
    $arr[$key] = $value;
}

foreach($arr as $k => $v){
    print "Key: " .$k.", Value: ".$v."<br>";
    print $arr["name"];
    
}
?>

<h1>Insert into array</h1>
<?php


$numbers = array(1, 2, 3, 4, 5);
$insert = array("$");
$postion = 4;
// 1st method
echo "<h2>" . "First method" . "</h2>";
$new_array=array_merge(array_slice($numbers, 0, 2), array(5), array_slice($numbers, 2));
print_r($new_array);
echo "<h2>" . "Second method" . "</h2>";
// 2nd method
array_splice( $numbers, 3, 0, $insert );
foreach($numbers as $number){
    echo $number . " ";
}

?>

</body>
</html>