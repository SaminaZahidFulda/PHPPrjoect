<table>
	<tr>
    	<td>Name</td>
    	<td>Username</td>
    	<td>Action</td>
    </tr>
<?php foreach($result as $row){?>
	<tr>
    	<td><?php echo $row->name;?></td>
    	<td><?php echo $row->username;?></td>
    	<td><a href="dashboard/edit/<?php echo $row->id;?>">Edit</a></td>
    </tr>
<?php } ?>
</table>