<?php
var_dump($_GET);
echo "<br />";
var_dump($_POST);
echo "<br />";
var_dump($_REQUEST);
echo "<br />";
var_dump($_FILES);
echo "<br />";
echo htmlspecialchars($_POST['message']);

if(isset($_REQUEST['username'])){

}
else{
    echo 'Please enter a valid username';
}

if(!empty($_REQUEST['name'])){

}
else{
    echo 'Please enter a valid name';
}