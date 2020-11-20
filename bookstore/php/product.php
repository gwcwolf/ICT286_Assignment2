<?php

$criteria = "";
if(isset($_POST['criteria']))
    {
        $criteria = '%' . $_POST['criteria'] . '%';
    }

// linking of db
include ('db_connection.php');

$query = "";

if ($criteria != "")
{
    $query = "SELECT * FROM Book where bookName like '{criteria}' or author like '{criteria}' or catergory like '{criteria}' ";
}

else

{
    $query = "SELECT * FROM Book";
}






