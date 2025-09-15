<?php 
$cnt = mysqli_connect('localhost','root','','adwizee');
if(!$cnt)
{
    echo "not connected";
}

if(isset($_POST['yesbtn']))
{
   
    $codee = $_REQUEST['value'];
    $dlete = "DELETE FROM `user_info` WHERE code=$codee";
    $exc = mysqli_query($cnt,$dlete);
    
    if($exc>1)
    {
        echo "confirm it you want to delete the Perticular Data";
    }
   
    header("location:user_datails_sort.php");

}
if(isset($_POST['nobtn']))
{
    header("location:user_datails_sort.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/adwizee_icon.png" type="image/png">
    <title>confirm Your Delete</title>
    <style>
        body
        {

            font-family: "Golos Text", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <button name="yesbtn">Yes , Delete it confirm</button>
    <button name="nobtn">No, it was an mistake</button>
    </form>
</body>
</html>