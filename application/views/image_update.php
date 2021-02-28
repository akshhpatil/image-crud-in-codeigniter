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
 <input type="text" placeholder="name" name="name"
 value="<?php echo $fetch_useriddata->Name; ?>">
 </td>
 
 <tr>
 <td>
 <br>
 <label>Email:</label>
 </td>
 <td>
 <br>
 <input type="email" placeholder="Email" name="email"

 value="<?php echo $fetch_useriddata->Email;?>">
 </td>
</tr>


<tr>
<td>
 <br>
 <label>userprofile</label>
 </td>
 <td>
 <br>
 <!-- <input type="file" placeholder="profile" name="userprofile">
 <img src="<?php// echo base_url('assets/uploads/').$row->profile ;?>" height="100" width="100"/></td> -->

 <input type="file" name="userprofile"><img src="<?php echo base_url();?>assets/uploads/<?php echo $fetch_useriddata->profile; ?>" width="100px" height="100px" alt=""></td>
           

</tr>
</table>

<br><br>

<input type ="submit" name="submit">

</form>
</div>

</body>
</html>