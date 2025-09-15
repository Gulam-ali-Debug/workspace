<?php 


$cnt = mysqli_connect('localhost','root','','adwizee');

if(!$cnt)
{
    echo"error while connecting to database";
}
if(isset($_POST['sent_it']))
{
    
$usr_fnme = $_POST['user_fname'];
$usr_lnme = $_POST['user_lname'];
$usr_cont = $_POST['user_contact'];
$usr_email = $_POST['user_emailAdress'];
$usr_webpge = $_POST['user_website'];
$usr_youthoughts = $_POST['user_messages'];
$usr_budget = $_POST['user_budget'];

date_default_timezone_set('Asia/Kolkata');
$curnttdate = date('d-m-Y ');
$curnttime = date('h:i:s A');
$rndcode = rand(111111,999999);

$inser_the_thing = "INSERT INTO `user_info`(code, time, date, first_name, last_name, contact_no, website, messages,email_adress,usr_budget) VALUES ('$rndcode','$curnttime','$curnttdate','$usr_fnme','$usr_lnme','$usr_cont','$usr_webpge','$usr_youthoughts','$usr_email','$usr_budget')";
$exc = mysqli_query($cnt,$inser_the_thing);


if($exc > 1)
{
    echo "data inserted successfully";
}
header("location:thanksgiving.html");
$_POST = array(); 
exit();
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
    <title>contact Us</title>
<style>
body
{
    user-select:none;
    margin:0;
    padding:0;
}
#main_form
{
    
    width: 30%;
    height: 71%;
    position: absolute;
    top: 3.8%;
    right: 15.7%;
}
#usr_fname
{
    all: unset;
    height: 7.23%;
    position: absolute;
    top: 22.2%;
    width: 45%;
    right: 54.3%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 3px;
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    font-weight: 400;
    
}
#usr_fname::placeholder
{
    color:#000000;
}
#usr_lname
{
    all: unset;
    height: 7.23%;
    position: absolute;
    top: 22.2%;
    width: 45%;
    right: 2.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 3px;
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    font-weight: 400;
    
}
#usr_lname::placeholder
{
    color:#000000;
}
#usr_contact
{
    all: unset;
    height: 7.23%;
    position: absolute;
    top: 34.7%;
    width: 45%;
    right: 2.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 3px;
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    font-weight: 400;
    
}
#usr_contact::placeholder
{
    color:#000000;
}
#usr_emailAdress
{
    all: unset;
    height: 7.23%;
    position: absolute;
    top: 34.7%;
    width: 45%;
    right: 54.3%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 3px;
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    font-weight: 400;
    
}
#usr_emailAdress::placeholder
{
    color:#000000;
}
#usr_website
{
    all: unset;
    height: 7.23%;
    position: absolute;
    top: 47.3%;
    width: 97.1%;
    right: 2.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 3px;
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    font-weight: 400;
    
}
#usr_website::placeholder
{
    color:#000000;
}
#usr_messages
{
    all: unset;
    height: 7.22%;
    position: absolute;
    top: 59.8%;
    width: 97.1%;
    right: 2.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 3px;
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    font-weight: 400;
    font-style:normal;
    
}
#usr_messages::placeholder
{
    color:#000000;
}
#submit_btn
{
    all: unset;
    height: 10.6%;
    position: absolute;
    top: 84.6%;
    width: 98%;
    right: 2%;
    display: flex;
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    justify-content: center;
    align-items: center;
    background: #000;
    color: white;
    font-weight: 600;
    cursor: pointer;
    
}
#submit_btn:hover
{
    top:84.3%;
    transition:transform 2s ease;
    color:#b9b9b9;;
}
#contect_us
{
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    width: 30%;
    position: absolute;
    height: 3em;
    cursor: default;
    top: 15.9%;
    left: 14%;
    font-size: 4em;
    font-weight: 600;
}
#simple_cont
{
    top: 47%;
    left: 14.25%;
    position: absolute;
    font-family: "Golos Text", sans-serif;
    color: #454545;
    font-size: 15px;
    width: 28%;
}
#cross_img
{
    position: absolute;
    right: 3.1%;
    top: 5.1%;
}
#which_one
{
    font-family: "Golos Text", sans-serif;
    position: absolute;
    font-weight: 600;
    top: 2%;
    font-style: normal;
    left: 0.9%;
}
#contact_emg
{
    width: 10%;
    height: 10%;
    outline:1px solid black;

}
#usr_budget
{
    all: unset;
    height: 7.22%;
    position: absolute;
    top: 72.3%;
    width: 97.1%;
    right: 2.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 3px;
    font-family: "Golos Text", sans-serif;
    font-size: 13px;
    font-weight: 400;
    font-style: normal;
    
}
#usr_budget::placeholder
{
    color:#000000;
}


@media screen and (min-width:2360px)
{

#main_form
{
    
    width: 30%;
    height: 71%;
    position: absolute;
    top: 3.8%;
    right: 15.7%;
}
#usr_fname
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 210px;
    width: 45%;
    right: 54.3%;
    border-bottom: 2px solid #a5a5a5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 30px;
    border-radius: 17px;
    font-weight: 400;
    
}
#usr_fname::placeholder
{
    color:#000000;
}
#usr_lname
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 210px;
    width: 45%;
    right: 0.2%;
    border-bottom: 2px solid #a5a5a5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 30px;
    border-radius: 17px;
    font-weight: 400;
    
}
#usr_lname::placeholder
{
    color:#000000;
}
#usr_contact
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 345px;
    width: 45%;
    right: 0.2%;
    border-bottom: 2px solid #a5a5a5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 30px;
    border-radius:17px;
    font-weight: 400;
    
}
#usr_contact::placeholder
{
    color:#000000;
}
#usr_emailAdress
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 345px;
    width: 45%;
    right: 54.3%;
    border-bottom: 2px solid #a5a5a5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 30px;
    border-radius:17px;
    font-weight: 400;
    
}
#usr_emailAdress::placeholder
{
    color:#000000;
}
#usr_website
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 480px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 2px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 30px;
    border-radius: 17px;
    font-weight: 400;
    
}
#usr_website::placeholder
{
    color:#000000;
}
#usr_messages
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 615px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 2px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 30px;
    border-radius: 17px;
    font-weight: 400;
    font-style: normal;
    
}
#usr_messages::placeholder
{
    color:#000000;
}
#submit_btn
{
    all: unset;
    height: 10.6%;
    position: absolute;
    top: 24em;
    width: 100%;
    right: 0%;
    display: flex;
    font-family: "Golos Text", sans-serif;
    font-size: 34px;
    justify-content: center;
    align-items: center;
    background: #000;
    color: white;
    font-weight: 600;
    cursor: pointer;
    
}
#submit_btn:hover
{
    top:399px;
    transition:transform 2s ease;
    color:#b9b9b9;;
}
#contect_us
{
    font-family: "Golos Text", sans-serif;
    font-size: 20px;
    width: 34%;
    position: absolute;
    height: 3em;
    cursor: default;
    top: 21%;
    left: 10%;
    font-size: 7em;
    font-weight: 600;
}
#simple_cont
{
    op: 49%;
    left: 10.5%;
    position: absolute;
    font-family: "Golos Text", sans-serif;
    color: #454545;
    font-size: 25px;
    width: 29%;
}
#cross_img
{
    position: absolute;
    right: 2.5%;
    width: 55px;
    top: 3.1%;
    font-size: 16px;
}
#which_one
{
    font-family: "Golos Text", sans-serif;
    position: absolute;
    font-weight: 600;
    top: 2%;
    font-size: 34px;
    font-style: normal;
    left: 0.9%;
}
#contact_emg
{
    width: 10%;
    height: 10%;
    outline:1px solid black;

}

}
@media screen and (min-width:1024px) and (max-width:1200px)
{

#main_form
{
    
    width: 39%;
    height: 71%;
    position: absolute;
    top: 12.8%;
    right: 10.7%;
}
#usr_fname
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 90px;
    width: 40%;
    right: 57.3%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 7px;
    font-weight: 400;
    
}
#usr_fname::placeholder
{
    color:#000000;
}
#usr_lname
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 90px;
    width: 40%;
    right: 0.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 7px;
    font-weight: 400;
    
}
#usr_lname::placeholder
{
    color:#000000;
}
#usr_contact
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 145px;
    width: 40%;
    right: 0.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 7px;
    font-weight: 400;
    
}
#usr_contact::placeholder
{
    color:#000000;
}
#usr_emailAdress
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 145px;
    width: 40%;
    right: 57.3%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 7px;
    font-weight: 400;
    
}
#usr_emailAdress::placeholder
{
    color:#000000;
}
#usr_website
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 205px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 17px;
    font-weight: 400;
    
}
#usr_website::placeholder
{
    color:#000000;
}
#usr_messages
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 265px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 17px;
    font-weight: 400;
    
}
#usr_messages::placeholder
{
    color:#000000;
}
#usr_budget
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 325px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #cbcbcb;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 17px;
    font-weight: 400;
    
}
#usr_budget::placeholder
{
    color:#000000;
}
#submit_btn
{
    all: unset;
    height: 10.6%;
    position: absolute;
    top: 390px;
    width: 100%;
    right: 0%;
    display: flex;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    justify-content: center;
    align-items: center;
    background: #000;
    color: white;
    font-weight: 600;
    cursor: pointer;
    
}
#submit_btn:hover
{
    top:399px;
    transition:transform 2s ease;
    color:#b9b9b9;;
}
#contect_us
{
    font-family: "Golos Text", sans-serif;
    font-size: 20px;
    width: 34%;
    position: absolute;
    height: 3em;
    cursor: default;
    top: 21%;
    left: 10%;
    font-size: 3em;
    font-weight: 600;
}
#simple_cont
{
    op: 49%;
    left: 10.5%;
    position: absolute;
    font-family: "Golos Text", sans-serif;
    color: #454545;
    font-size: 11px;
    width: 29%;
}
#cross_img
{
    position: absolute;
    right: 2.5%;
    width: 3%;
    top: 3.1%;
    font-size: 16px;
}
#which_one
{
    font-family: "Golos Text", sans-serif;
    position: absolute;
    font-weight: 600;
    top: 2%;
    font-size: 16px;
    font-style: normal;
    left: 0.9%;
}
#contact_emg
{
    width: 10%;
    height: 10%;
    outline:1px solid black;

}

}
@media screen and (min-width:768px) and (max-width:1024px)
{

#main_form
{
    
    width: 39%;
    height: 38%;
    position: absolute;
    top: 8.8%;
    right: 10.7%;
}
#usr_fname
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 90px;
    width: 40%;
    right: 57.3%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_fname::placeholder
{
    color:#000000;
}
#usr_lname
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 90px;
    width: 40%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_lname::placeholder
{
    color:#000000;
}
#usr_contact
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 145px;
    width: 40%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_contact::placeholder
{
    color:#000000;
}
#usr_emailAdress
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 145px;
    width: 40%;
    right: 57.3%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_emailAdress::placeholder
{
    color:#000000;
}
#usr_website
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 205px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_website::placeholder
{
    color:#000000;
}
#usr_messages
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 265px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_messages::placeholder
{
    color:#000000;
}
#usr_budget
{
    all: unset;
    height: 9%;
    position: absolute;
    top: 325px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_budget::placeholder
{
    color:#000000;
}
#submit_btn
{
    all: unset;
    height: 14%;
    position: absolute;
    top: 380px;
    width: 100%;
    right: 0%;
    display: flex;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    justify-content: center;
    align-items: center;
    background: #000;
    border-radius: 2px;
    color: white;
    font-weight: 600;
    cursor: pointer;
    
}
#submit_btn:hover
{
    top:399px;
    transition:transform 2s ease;
    color:#b9b9b9;;
}
#contect_us
{
    font-family: "Golos Text", sans-serif;
    font-size: 20px;
    width: 34%;
    position: absolute;
    height: 3em;
    cursor: default;
    top: 21%;
    left: 10%;
    font-size: 2em;
    font-weight: 600;
}
#simple_cont
{
    top: 35%;
    left: 10.5%;
    position: absolute;
    font-family: "Golos Text", sans-serif;
    color: #454545;
    font-size: 11px;
    width: 34%;
}
#cross_img
{
    position: absolute;
    right: 2.5%;
    width: 3%;
    top: 3.1%;
    font-size: 16px;
}
#which_one
{
    font-family: "Golos Text", sans-serif;
    position: absolute;
    font-weight: 600;
    top: 2%;
    font-size: 16px;
    font-style: normal;
    left: 0.9%;
}
#contact_emg
{
    width: 10%;
    height: 10%;
    outline:1px solid black;

}

}
@media screen and (min-width:390px) and (max-width:768px)
{

#main_form
{
    
    width: 94%;
    height: 38%;
    position: absolute;
    top: 12.8%;
    right: 3%;
}
#usr_fname
{
    all: unset;
    height: 12%;
    position: absolute;
    top: 90px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_fname::placeholder
{
    color:#000000;
}
#usr_lname
{
    all: unset;
    height: 12%;
    position: absolute;
    top: 140px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_lname::placeholder
{
    color:#000000;
}
#usr_contact
{
    all: unset;
    height: 12%;
    position: absolute;
    top: 190px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_contact::placeholder
{
    color:#000000;
}
#usr_emailAdress
{
    all: unset;
    height: 12%;
    position: absolute;
    top: 240px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_emailAdress::placeholder
{
    color:#000000;
}
#usr_website
{
    all: unset;
    height: 12%;
    position: absolute;
    top: 290px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_website::placeholder
{
    color:#000000;
}
#usr_messages
{
    all: unset;
    height: 12%;
    position: absolute;
    top: 340px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_messages::placeholder
{
    color:#000000;
}
#usr_budget
{
    all: unset;
    height: 12%;
    position: absolute;
    top: 390px;
    width: 98.2%;
    right: 0.2%;
    border-bottom: 1px solid #d5d5d5;
    padding-left: 10px;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    border-radius: 5px;
    font-weight: 400;
    
}
#usr_budget::placeholder
{
    color:#000000;
}
#submit_btn
{
    all: unset;
    height: 14%;
    position: absolute;
    top: 450px;
    width: 93%;
    right: 4%;
    display: flex;
    font-family: "Golos Text", sans-serif;
    font-size: 11px;
    justify-content: center;
    align-items: center;
    background: #000;
    border-radius: 2px;
    color: white;
    font-weight: 600;
    cursor: pointer;
    
}
#submit_btn:hover
{
    top:399px;
    transition:transform 2s ease;
    color:#b9b9b9;;
}
#contect_us
{
    font-family: "Golos Text", sans-serif;
    font-size: 20px;
    width: 54%;
    position: absolute;
    height: 3em;
    cursor: default;
    top: 2%;
    left: 2.8%;
    font-size: 1em;
    font-weight: 600;
}
#simple_cont
{
    top: 9%;
    left: 2.8%;
    position: absolute;
    font-family: "Golos Text", sans-serif;
    color: #454545;
    font-size: 11px;
    width: 84%;
}
#cross_img
{
    position: absolute;
    right: 5.5%;
    width: 6%;
    top: 2.1%;
    font-size: 16px;
}
#which_one
{
    font-family: "Golos Text", sans-serif;
    position: absolute;
    font-weight: 600;
    display:none;
    top: 2%;
    font-size: 16px;
    font-style: normal;
    left: 0.9%;
}
#contact_emg
{
    width: 10%;
    height: 10%;
    outline:1px solid black;

}

}
</style>
</head>
<body>
    
    <div id="which_one">#Contact Adwizee</div>
<a href="main_page.html"><image src="images/cross sign.svg" id="cross_img"></a>
<form action="" method="post" id="main_form" border="none" autocomplete="off">

<input type="text" id="usr_fname" name="user_fname" placeholder="First Name?" required>
<input type="text" id="usr_lname" name="user_lname" placeholder="Last Name?" required>
<input type="text" id="usr_contact" name="user_contact" placeholder="contact no?" required>
<input type="text" id="usr_emailAdress" name="user_emailAdress" placeholder="your email? *Optional">
<input type="text" id="usr_website" name="user_website" placeholder="website *Optional">
<input type="text" id="usr_messages" name="user_messages" placeholder="Tell us about your Business" required>
<input type="text" id="usr_budget" name="user_budget" placeholder="what Budget do you have ?" required><br><br><br>

<input type="submit" id="submit_btn" name="sent_it">


</form>

<!-- <img src="images/contact_us.png" alt="contact us img" id="contact_emg"> -->
<div id="contect_us">Let’s Grow Your Business Online.</div>
<div id="simple_cont">Ready to stop lurking and start winning? Book your free consult, and let’s turn your business up to eleven.</div>


</body>
</html>