<?php
/**
 * Created by PhpStorm.
 * User: Lezwon
 * Date: 23-10-2014
 * Time: 17:59
 */

include 'connection.php';
include 'reference.php';
include 'vendor/fzaninotto/faker/src/autoload.php';


$faker = Faker\Factory::create();

for($i=0;$i<10;$i++){
    $name = $faker->name;
    $phone = $faker->phoneNumber;
    $description = $faker->sentence($nbWords=10);
    $post = $faker->sentence($nbWords = 2);
    $image = $faker->imageUrl(120,120,'people');
    insertMember($name,$phone,$description,$post,$image);
}

for($i=0;$i<10;$i++){
    $name = $faker->sentence($nbWords=3);
    $description = $faker->sentence($nbWords=40);
    $type = $faker->numberBetween(1,2);
    $image_small = $faker->imageUrl(350,270,'technics');
    $image_large = $faker->imageUrl(650,450,'technics');
    $image_mobile = $faker->imageUrl(350,450,'technics');
    insertEvent($name,$description,$type,$image_small,$image_large,$image_mobile);
}



function insertMember($name,$phone=null,$description=null,$post,$image){
    $sql = "insert into team (name, phone, description, post,image) VALUES ('$name','$phone','$description','$post','$image')";
    if(executeCommand($sql))
        echo "Success<br>";
    else
        echo "Failed";
}

function insertEvent($name,$description,$type,$image_small,$image_large,$image_mobile){

    $sql = "insert into events (name, description, type, image_small,image_large,image_mobile)
VALUES ('$name','$description',$type,'$image_small','$image_large','$image_mobile')";

    if(executeCommand($sql))
        echo "Success<br>";
    else
        echo "Failed";
}

