<?php
//This file is the edit controller
require('models/film.php');
//Add some code in here to get this to work
$id = $_GET['id'];
$film = find($id);

require('views/edit.view.php');

?>