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

function insertMember($name,$phone=null,$description=null,$post,$image){
    $sql = "insert into team (name, phone, description, post,image) VALUES ('$name','$phone','$description','$post','$image')";
    if(executeCommand($sql))
        echo "Success";
    else
        echo "Failed";
}

