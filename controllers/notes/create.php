<?php
require 'validator.php';
$config=require('config.php');
$db=new Database($config['database']);
$heading="create notes";
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $errors =[];
    $validator = new validator();
    if($validator->string($_POST['body']) == 0){
        $errors['body'] ='A body is required!';
    }
    if(strlen($_POST['body']) > 50){
        $errors['body'] ='body is too large!';
    }
    if(empty($errors)){
        $db->query('INSERT INTO notes(body,user_id)VALUES(:body,:user_id)',[
            'body'=>$_POST['body'],
            'user_id'=>3
        ]);
    }
}
require "views/notes/create.view.php";