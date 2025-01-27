<?php
$config = require "config.php";
$db=new Database($config['database']); 
$heading = "Note";
$note=$db->query('SELECT * FROM notes WHERE  notes_id = :notes_id',[
    'notes_id' => $_GET['id']]
    )->fetch();
if(!$note){
    abort(Response::NOT_FOUND);
}
$currentUserId = 1 ; 
if($note['user_id'] !== $currentUserId){
    abort(Response::FORBIDDEN);
}
require "views/notes/show.view.php";