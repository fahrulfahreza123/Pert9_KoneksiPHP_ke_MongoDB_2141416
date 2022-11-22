<?php

$manager = new MongoDB\Driver\Manager("mongodb+srv://fahrul:123@cluster0.jihay4h.mongodb.net/?retryWrites=true&w=majority");

// Query Class
$query = new MongoDB\Driver\Query(array("restaurant_id" => "40356018"));

//Select DB and Collection
$cursor = $manager->executeQuery('sample_restaurants.restaurants', $query);

//Convert cursor to array and print result
echo "<pre>";
print_r($cursor->toArray());
echo "</pre>";
