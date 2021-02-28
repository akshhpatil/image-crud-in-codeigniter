<!DOCTYPE html>
<html>
<head>
<title>records</title>
<meta charset="utf-8">
<style type="text/css">
body{
      background:white;
    }
th  {
    color:red;
    font-family: sans-serif,bold;
    }
tr  {
    color:black;
    font-family: sans-serif;
    }

</style>
</head>
<body>

<?php echo "<a href='savedata'?>Add new record</a>";?>
<table width="1300" border="1" cellspacing="7" cellpadding="7">
  <tr style="background:#ccc">
    <th>Id</th>
    <th>name</th>
    <th>email</th>
    <th>profile</th>
    <th>Update</th>
    <th>Delete</th>

  </tr>
  <?php
  foreach ($fetch_userdata as $row)
  {
  ?>
    <tr>
  <td> <?php echo $row->id;?></td>
  <td> <?php echo $row->Name;?></td>
  <td> <?php echo $row->Email;?></td>
  <td><img src="<?php echo base_url('assets/uploads/').$row->profile ;?>" height="100" width="100"/></td>
  <td><a href="<?php echo base_url();?>index.php/Image/UpdateData/<?php echo $row->id; ?>">update</a></td> 
  <td> <a href="<?php echo base_url();?>index.php/Image/DeleteData/<?=$row->id?>/<?=$row->profile;?>">Delete</a></td>
</tr>



  <?php
  }
  ?>
</table>
</body>
</html>


     
