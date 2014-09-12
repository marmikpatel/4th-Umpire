<table table table-hover >

<tr>
	<td>Name :</td>
	<td> <?php echo $data['Player']['first_name'].$data['Player']['last_name'] ?></td>
</tr>
<tr>
	<td>Date of birth :</td>
	<td><?php echo $data['Player']['bday'] ?></td>
</tr>
<tr>
	<td>Email Id :</td>
	<td><?php echo $data['Player']['email'] ?></td>
</tr>
<tr>
	<td>Phone number :</td>
	<td><?php echo $data['Player']['phone_number'] ?></td>
</tr>

</table>

   <img src=<?php echo '/4th-Umpire/'.$image['Image']['url']; ?> alt="icon">











