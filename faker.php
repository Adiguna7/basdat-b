<?php
    require_once 'vendor/autoload.php';

    use Faker\Factory;
    $faker = Factory::create('id_ID');

    $con = new PDO('mysql:host = localhost; dbname = banin', 'root', '123');

    $sql = "INSERT INTO doctor(id, nama, alamat, spesialis, free) VALUES (?, ?, ?, ?, ?)"; 
    

    $stmt = $con->prepare($sql);

    for($i=0; $i < 30; $i++){
		$stmt->bindValue (1, $faker->name);
		$stmt->bindValue (2, $faker->name);
        $stmt->bindValue (3, $faker->address);
        $stmt->bindValue (4, $faker->address);
        $stmt->bindValue (5, $faker->address);
 
		$stmt->execute();
	}
?>