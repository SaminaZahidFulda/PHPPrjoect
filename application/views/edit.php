<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
</head>
<body>

<div id="container">
<form action="<?php echo base_url().'dashboard/edit/'.$row->id;?>" method="post">
  <p>Username: <input type="text" name="username" value="<?php echo $row->username;?>" />
  <p>Password: <input type="password" name="password" value="<?php echo $row->password;?>" />
  <p><input type="submit" value="Submit"  />
</form
></div>

</body>
</html>