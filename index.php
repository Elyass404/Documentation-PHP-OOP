<?php

require 'connection.php';
require 'crud_orm.php';

$database = new Database();
$db = $database->getConnection();

//Creating a new object that representes the operations of CRUD 
$crud = new CRUD($db, 'players');

// Create
$newPlayer = [
    'name' => 'ilyass marghine',
    'photo' => "phtoo.cdn",
    'nationality'=>'gk',
    'position'=>'gk',
    'club' => 'Team A'

];
if ($crud->create($newPlayer)) {
    echo "Player created successfully.<br>";
} else {
    echo "Failed to create player.<br>";
}



// Read
$players = $crud->read();
echo "Players:<br>";
foreach ($players as $player) {
    echo "ID: " . $player['id'] . ", Name: " . $player['name'] . ", photo: " . $player['photo'] . ", nationality: " . $player['nationality'] . ", position: " . $player['position'] . ", club: " . $player['club'] . "<br>";
}

// Update
$updateData = ['name' => 'imran', 'photo' => 'imra.jpg'];
$conditions = ['id' => 1];
if ($crud->update($updateData, $conditions)) { 
    echo "Player updated successfully.<br>";
} else {
    echo "Failed to update player.<br>";
}

// Delete
$deleteConditions = ['id' => 8];
if ($crud->delete($deleteConditions)) {
    echo "Player deleted successfully.<br>";
} else {
    echo "Failed to delete player.<br>";
}


