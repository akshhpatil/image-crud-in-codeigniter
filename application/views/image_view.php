<!DOCTYPE html>
<html>
<head>
   <title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width.initial-scale=1.0">

</head>
<body>
<div class="container">

<center><form method="post" enctype="multipart/form-data"><center>
<h1 class="h1" >Contact Us</h1>
<table align="center" cellpadding="5">

<tr>
 <td><label> Name:</label></td>
 <td> 
 <input type="text" placeholder="name" name="name">
 </td>
 
 <tr>
 <td>
 <br>
 <label>Email:</label>
 </td>
 <td>
 <br>
 <input type="email" placeholder="Email" name="email">
 </td>
</tr>


<tr>
<td>
 <br>
 <label>userprofile</label>
 </td>
 <td>
 <br>
 <input type="file" placeholder="profile" name="userprofile">
 </td>
</tr>
</table>

<br><br>

<input type ="submit" name="submit">

</form>
</div>

</body>
</html>