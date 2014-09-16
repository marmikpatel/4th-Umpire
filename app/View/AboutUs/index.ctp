<?php //echo "<pre>"; print_r($data); exit; ?>

<h2><?php echo  $data['AboutUs']['title'] ;?></h2>
<p>
	<img src=<?php echo '/4th-Umpire/'.$data['Image']['url'] ; ?> alt="icon">
</p>
<p>
	<h4><?php echo  $data['AboutUs']['description'] ;?></h4>
</p>


