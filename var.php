<?php
// $hello = "Hello, PHP!";

// print($hello);
// function hoge(){
//     $name = "侍太郎";
// }
// print($name);

$name = "侍太郎";
function func(){
    global $name;
    print($name);
}

print($name."\n");
func();


?>