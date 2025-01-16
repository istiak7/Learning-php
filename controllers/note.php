<?php
$config = require "config.php";
$db=new Database($config['database']); 
$heading = "Note";
$note=$db->query('SELECT * FROM notes WHERE notes_id = :notes_id',['notes_id' => $_GET['id']])->fetch();
require "views/note.view.php";