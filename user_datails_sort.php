<?php 

$cnt = mysqli_connect('localhost','root','','adwizee');

if(!$cnt)
{
    echo 'error while connecting to database';
}
$slect = "SELECT * FROM `user_info`";

$exc = mysqli_query($cnt,$slect);



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
    <title>where you can delete the user data</title>
    <style>
body{
    margin:0;
    padding:0;
    font-family: "Golos Text", sans-serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
}
table{
    width:100%;
    border:1px solid black;
}
tr{
    outline:1px solid black;
    text-align:center;
    text-transform:capitalize;
}
#td-3
{
    text-transform:lowercase;
}
td{
    outline:1px solid black;
}
div{
    background-color:red;
    cursor:pointer;
    border:none;
    color:white;
    text-align:center;
    text-decoration:none;
    outline:1px solid black;
    width:100%;
}
tr:nth-child(even) {
     background-color: #9a86f9;
}
#btn-print
{
    all: unset;
    outline: 1px solid black;
    position: absolute;
    bottom: 50px;
    left: 48em;
    width: 3%;
    border-radius: 2px;
    padding: 1px 10px 1px 10px;
    cursor: pointer;
    text-align:center;
}
#btn-print:hover
{
    background-color:#2e8feb;
}

@media print
{
body{
    margin:0;
    padding:0;
    font-family: "Golos Text", sans-serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
}
table{
    width: 100%;
    outline: 1px solid black;
    font-size: 15.5px;
}

tr{
    outline:1px solid black;
    text-transform:capitalize;
}
td{
    outline:1px solid black;
}
#td_1
{
    font-size:10px;
    text-align:center;
}
#td_2
{
    font-size:12px;
    text-align:center;
    padding:5px;
}
#td_3
{
    font-size:12px;
    text-align:center;
    padding:5px;
    text-transform:lowercase;
}
#dlete_btn
{
    display:none;
}
div{
    background-color:red;
    cursor:pointer;
    border:none;
    color:white;
    text-align:center;
    text-decoration:none;
    outline:1px solid black;
    width:100%;
}
tr:nth-child(odd) {
     background-color: #9a86f9;
}
#btn-print
{
    all: unset;
    outline: 1px solid black;
    position: absolute;
    bottom: 50px;
    left: 49em;
    display:none;
    border-radius: 4px;
    padding: 1px 10px 1px 10px;
    cursor: pointer;
    text-align:center;
}
#btn-print:hover
{
    background-color:#2e8feb;
} 
}
        
    </style>
</head>
<body>
    <table>
        <tr>
            <td id="dlete_btn">Remove</td>
            <td id="td_1">Date</td>
            <td id="td_1">Time</td>
            <td id="td_1">First Name</td>
            <td id="td_1">Surname</td>
            <td id="td_1">Contact info</td>
            <td id="td_1">User Webpage</td>
            <td id="td_1">User Email Address</td>
            <td id="td_1">Messages from User</td>
            <td id="td_1">User Budget</td>
        </tr>
        
        <?php 
            while($data = mysqli_fetch_array($exc))
            {
                $ustime = $data['time'];
                $uscode = $data['code'];
                $usdate = $data['date'];
                $usfnme = $data['first_name'];
                $uslnme = $data['last_name'];
                $uscont = $data['contact_no'];
                $uswebpge = $data['website'];
                $usmsg = $data['messages'];
                $usemail = $data['email_adress'];
                $usbudget = $data['usr_budget'];
            ?>
            <tr>
                <td id="dlete_btn"><a href="delete_confirm.php?value=<?php echo $uscode; ?>"><div>Delete</div></a></td>
                <td id="td_2"><?php echo $usdate; ?></td>
                <td id="td_2"><?php echo $ustime; ?></td>
                <td id="td_2"><?php echo $usfnme; ?></td>
                <td id="td_2"><?php echo $uslnme; ?></td>
                <td id="td_2"><?php echo $uscont; ?></td>
                <td id="td_3"><?php echo $uswebpge; ?></td>
                <td id="td_3"><?php echo $usemail; ?></td>
                <td id="td_2"><?php echo $usmsg; ?></td>
                <td id="td_2"><?php echo $usbudget; ?></td>
            </tr>
            <?php
            }
            
            
            ?>
        <button id="btn-print">Print</button>
    </table>


<script>
    const btnPrint = document.getElementById('btn-print');

    btnPrint.addEventListener("click", () => window.print());
</script>
</body>
</html>