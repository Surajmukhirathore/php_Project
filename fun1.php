<!-- simple function -->

<?php
function hello(){
    echo "Hellos, World! <br>";
}

function yahoo(){
    echo "Hello, Yahoo Baba <br>";
}

hello();
hello();
yahoo();
hello();
echo "Hey this is an example";
hello();
hello();
hello();

?>


<!-- function with parameter -->

<?php
function hell($name){
    echo "Hello $name<br>";
}
    

hell("yahoo Baba");

?>



<?php

function hel($fname="first",$lname="last"){

   echo "hello $fname $lname<br>";

}

function sum($a,$b){

   echo $a + $b;

}

// sum(10,20.34);




hel();
hel("tom");
hel("yahoo","Baba");

hel("Bill","Gates");

$one =10;
$two=20.34;
sum($one,$two);


?>


<!-- functions with return value -->


<?php

function hes($fname="first",$lname="last"){
    $v="$fname $lname <br>";

    return $v;
}

$name=hes("yahoo","Baba");
echo "Hello $name";



?>



<?php

function summ($math,$eng,$sc){
    $s=$math+$eng+$sc;
      return $s;
}

function percentage($st){
    $per=$st/3;
    echo $per ."%";
}

$total =summ(55,65,88);

percentage($total);


?>

<!-- function argument by reference -->



<?php

function testing(&$string){
  $string .= " and something extra.";

}


$str="This is string";

testing($str);
echo $str;


?>

<?php

function first($num){
    $num+=5;
}

function second(&$num){
    $num+=7;
}
$number =10;
first($number);
echo "Original value is $number<br>";


second($number);
echo "Original Value is $number<br>";



?>


<!-- Variable Function -->

<?php

function wow($name){
    echo "Hello $name";
}

$func="wow";
$func("Yahoo Baba");



?>


<?php

$sayHello=function($name){
    echo "Hello $name";
};

$sayHello("Yahoo Baba");



?>



<!-- Recursive function(call itself) -->


<?php

function display($number){
    if($number<=5){
        echo "$number<br>";
        display($number+1);
    }
}
display(2);

?>


<?php 

function factorial($n){
    if($n==0){
        return 1;
        }
        else{
            return($n*factorial($n-1));
        }

}
echo factorial(3);

?>






<!-- Indexed Array -->

<?php

$colors=["red",20,"blue",12];

echo "<ul>";


for($i=0;$i<4;$i++){
    echo $colors[$i]."<br>";
    echo "<li>$colors[$i]</li>";

}
echo "</ul>"




// $colors=array("red",20,"blue",12);

// $colors[0]="red";
// $colors[1]="green";
// $colors[2]="gray";
// $colors[3]="black";

// echo $colors[0]."<br>";

// echo $colors[1]."<br>";

// echo $colors[2]."<br>";
// echo $colors[3];


// echo "<pre>";
// print_r($colors);
// echo "</pre>";

?>




<!-- Associative Arrays -->


<?php

$age =[
    // "bill"=>25,
    // "steve"=>28,
    // "elon"=>22

    100=>25,
    "bill"=>28,
    13=>22

];

$age["elon"]=50;


echo "<pre></pre>";
print_r($age);
var_dump($age);
echo "</pre>";


echo $age["100"]."<br>";
echo $age["bill"]."<br>";

echo $age["13"]."<br>";


?>



<!-- foreach loop(for array) -->


<!-- syntax -->


<!-- foreach($array as $value){
    // code to be executed

} -->
<?php

$color=[
    "red",
    "green",
    "blue",
];

foreach($color as $value){
    echo $value."<br>";
}


?>



<?php


$age =[
    "bill" =>25,
    "john" =>28,
    "jane" =>22,
];

echo "<ul>";

foreach($age as $key=> $value){
    echo "<li>$key =$value</li>";
}

echo "</ul>";



?>


<!-- multidimensional array -->


<?php

$emp=[
    [1,"Krishna","Manager",50000],
     [2,"Salman","Salesmanr",20000],
      [3,"Mohan","Computer Operator",12000],
       [4,"Amir","Driver",5000],
];

// for($row=0;$row<4;$row++){
//     for($col=0;$col<4;$col++){
//      echo $emp[$row][$col] ." ";
//     }

//     echo "<br>";
// }

echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
<th>Emp Id</th>
<th>Emp Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>$v2</td>" ." ";
}
  echo "</tr>";

}
echo "</table>";

// echo $emp[0][0] . " ";
// echo $emp[0][1] . " ";
// echo $emp[0][2] . " ";
// echo $emp[0][3] . " ";

// echo "<br>";

// echo $emp[1][0] . " ";
// echo $emp[1][1] . " ";
// echo $emp[1][2] . " ";
// echo $emp[1][3] . " ";


echo "<pre>";

print_r($emp);

echo "</pre>";
?>



