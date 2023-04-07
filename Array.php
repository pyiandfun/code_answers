<?php 
    $people = array(
        "person1" => array(
            "name" => "Alice",
            "age" => 22,
            "occupation" => "engineer"
        ),
        "person2" => array(
            "name" => "John Doe",
            "age" => 25,
            "occupation" => "programmer"
        ),
        "person3" => array(
            "name" => "Bobs",
            "age" => 30,
            "occupation" => "Doctor"
        )
    );

    foreach($people as $person) {
        if($person['occupation'] == "engineer") {
            echo $person['name'];
            echo $person['age'];
            echo $person['occupation'];
        }
    }
?>