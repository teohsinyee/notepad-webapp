<?php

require_once 'connect.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM notes WHERE note_id = '". $id ."'";

if(mysqli_query($link,$sql)){
    print("Stored");
} else{
    print("Failed");
}

// redirect to main page
echo "<script>location.href = 'index.php' </script>";

?>