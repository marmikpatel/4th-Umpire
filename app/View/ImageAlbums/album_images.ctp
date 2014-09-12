<?php //echo "<pre>"; print_r($album_img); exit;   ?>
<STYLE TYPE="text/css">
	.album_list_img li
	{
		list-style-type: none;
		float: left;
		padding: 20px 95px;
	}
</STYLE>

<div>
	<ul class="album_list_img"> 
	<?php foreach ($album_img as $key => $value) {

		foreach ($value['Image'] as $k => $v) {
			//echo "<pre>"; print_r($v); ?>
			<li>
				<img src=<?php echo '/4th-Umpire/'.$v['url']; ?> alt="icon">
			</li>
	<?php	}//exit;
	} ?>
</ul>
</div>