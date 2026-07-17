<?php
$name= "hossein";
if($name="hossein"){
    echo "hello hossein";
}
try{
    $pdo=new PDO("mysql:host=localhost;dbname=roocket" , "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result=$pdo->prepare("INSERT INTO users (name , username) values (:name , :username)");
    $result->execute(["name"=>"hossein",
    "username"=>"hossein23"]);
    $show=$result->fetchAll(PDO::FETCH_ASSOC);

    $show=$result->fetch();
}catch(Exception $e){
    echo $e->getMessage();
}
echo"connect to pdo";