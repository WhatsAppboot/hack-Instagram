<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>technical_debayan</title>
    <style>


.hr-19 {
  border: none;
  height: 10px;
  background: linear-gradient(-135deg, #fff 5px, transparent 0) 0 5px, linear-gradient(135deg, #fff 5px, #8c8c8c 0) 0 5px;
  background-color: #fff;
  background-position: left bottom;
  background-repeat: repeat-x;
  background-size: 10px 10px;
}
input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=text]:placeholder {
  color: #cccccc;
}input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #FF0040;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}


        </style>
</head>
<body>
    <center>

<?php


error_reporting(0);
if(isset($_GET['submit'])){

	$name=$_GET['name'];
    $phn=$_GET['phone'];
    $addr=$_GET['address'];

	
$url1='http://api.login2explore.com:5577/api/iml';




$data1='{
    "token": "90936143|-31948849784867557|90944206",
    "cmd": "PUT",
    "dbName": "Myself",
    "rel": "index",
    "jsonStr": {
        "name": "'.$name.'",
        "phone": "'.$phn.'",
        "address": "'.$addr.'"

    }
}';



$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_URL,$url1); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
 $one = curl_exec($ch); 
$err = curl_error($ch); curl_close($ch);
$json=json_decode($one , 1);
 $msg=$json['message'];




    
echo"<bold><font color='red' size='5'><hr class='hr-19'>JSON POWER DB IMPLEMENTATION<hr class='hr-19'>
</font>
<font color='blue' size='3'>
<div class='success'><hr class='style5'>$msg<hr class='style5'><br></div></font></bold>";

	    }
	
	if(!isset($_GET['submit'])){
echo"<form action='' method='get'>
	<font color='red' size='5'><bold><hr class='hr-19'>JSON POWER DB IMPLEMENTATION<hr class='hr-19'></bold></font>
<input type='text' name='name'  class='text' placeholder='Enter Your name' required><br><br>
<input type='text' name='address'  class='text' placeholder='Enter Your address' required><br><br>
<input type='text' name='phone'  class='text' placeholder='Enter Your phone number' required><br><br>


";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
?>

    

</center>
</center>
</body>
</html>
