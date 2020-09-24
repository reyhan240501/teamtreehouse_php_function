<?php 

//Create Function Hello

function hello()
{
    echo "Hello World!";
}
hello(); //Hello world


$current_user="mike";
function is_mike()
{
    global $current_user;

    if($current_user=="mike")
    {
        echo "\nYou is mike";
    }else {
        echo "Nope, You not mike";
    }
}
is_mike(); //You is mike


echo PHP_EOL;
function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "Hello, $key \n";
        }
    }else{
        echo "Hello Friend !";
    }
}
helloName(["Munif", "Rendi", "Reyhan"]);



echo PHP_EOL;
function get_info($name,$title=Null)
{
    if($title)
    {
        echo"$name was arrived,and came as $title";
    }else
    {
        echo "$name was arrived welcome";
    }
}
get_info("Mike", "Frog");



echo PHP_EOL;
function helloWorld()
{
    return "\nHello World";
}
$hello=helloWorld("you so Good");  // \nHello World
echo $hello;

echo PHP_EOL;
function addUp($a,$b)
{
    return [$a,$b,$a+$b];  //Array
}
print_r(addUp(2,4));

function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result+=$key;
    }
    return $result;
}
var_dump (sumArray([1,4,5,5]));



echo PHP_EOL;
function answer()
{
    return "You answer to question";
}
$answer=answer();

echo PHP_EOL;
//Callback Function
$answer_cal="answer";
echo $answer_cal()."!!"; //Call Function

//Anonymous Function
echo PHP_EOL;
$askName="What is your name";
$name="Muhammad Reyhan";

$ask=function()use($askName,$name)
{
    return "\nAsk the question,$askName $name ?";
};
echo $ask();


function br()
{
    echo PHP_EOL;
}
br();

//Built-in Function
$magang="Magang TOP jos";
echo strlen($magang); //14
br();
echo substr($magang,7); //TOP Jos
br();
echo substr($magang,7,6); //Top Jo
br();

echo strpos($magang,"jos"); //11
br();
echo $magang[11]; //j


$team=["Rendi"=>"Developer", "Huda"=>"Designer", "Munif"=>"Manager"];
print_r(array_keys($team));

var_dump(array_key_exists("Jhon",$team));

if(array_key_exists("Rendi",$team)){
    echo "Rendi Found in \$team";
}else
{
    echo "Key not Found in \$team";
}
br();

array_walk($team,function($value,$key){
    echo "$key is a $value \n";
});

?>
