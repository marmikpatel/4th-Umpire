<table table table-hover >

<tr>
	<td>Name :</td>
	<td> <?php echo $data['player']['first_name'].$data['player']['last_name'] ?></td>
</tr>
<tr>
	<td>Date of birth :</td>
	<td><?php echo $data['player']['bday'] ?></td>
</tr>
<tr>
	<td>Email Id :</td>
	<td><?php echo $data['player']['email'] ?></td>
</tr>
<tr>
	<td>Phone number :</td>
	<td><?php echo $data['player']['phone_number'] ?></td>
</tr>

</table>

<?php echo $image['Image']['url'] ?>










