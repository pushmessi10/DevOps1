<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<html><head>
<title>validation</title>
 <script language="javascript">
 function verify() {
 if (document.form1.Name.value == "")
     {
                alert("Please give the name");
                document.form1.Name.focus();
                return false;
            }
  if (document.form1.Address.value == "") 
            {
                alert("Please give address");
                document.form1.Address.focus();
                return false;
            }
 return( true );
}
</script> 
</head>
<!-- Creating Form -->
<body background="https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/tribal-dance-african-artist.jpg"><center><font size=10>
<form method="POST" action="registration.php" >
<b><h3>REGISTRATION FORM</h3></b>
<table border=1 align=center bgcolor="Lavender" cellpadding=20px><br>
<td colspan=6 align=center><b>STUDENT INFORMATION</td> 
<form name ="registration Form" action="registration.php " method="POST"><tr>
<td>Name:</td><td> <input type = "text" name = "Name" size=30 maxlength=30></td></tr>
<tr><td>Phone_No :</td> <td><input type = "text" name = "Ph_no" size=12 maxlength=12></td></tr>
<tr><td>Address :</td><td><textarea name="Address" id="Address" size=30 maxlength=30></textarea> </td></tr>
<tr><td>email_id:</td><td> <input type = "text" name = "eid" size=30 maxlength=30></td></tr>
<tr><td>Date:</td><td><textarea name="date" rows="2" cols="20"></textarea></td></tr>
<tr><td> Dance_Type:<td><select name="dance_type"> 
<option value="-1" selected>select..</option> 
<option value="Classical">Classical</option> 
<option value="Hip-Hop">Hip-Hop</option>
<option value="Bollywood">Bollywood</option> 
<option value="Jazz">Jazz</option></select></td> </td></tr> 
<tr><td colspan =2 align="center"> 
<button type="submit">submit</button>
<button type="Reset">Reset</button></td></tr></table><br /><br />
