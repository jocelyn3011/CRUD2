
<?php
$servidor="localhost";
$db="phpcrud";
$username="root";
$password="";

try{
    $conexion=new PDO("mysql:host=$servidor;bdname=$db",$username,$password);

}catch(Exception $e){
    echo $e->getMessage();

}
?>