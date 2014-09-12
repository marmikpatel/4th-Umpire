<?php //echo "<pre>"; print_r($album_img); exit;   ?>
<STYLE TYPE="text/css">
	.album_list_video li
	{
		list-style-type: none;
		float: left;
		padding: 20px 95px;
	}
</STYLE>

<div>
	<ul class="album_list_video">
	<?php foreach ($album_img as $key => $value) {
		foreach ($value['Video'] as $k => $v) {
			//echo "<pre>"; print_r($v); 
			$ext=substr($v['url'],-3);

		?>
			<li>
				<!-- <embed src=<?php echo '/4th-Umpire/'.$v['url']; ?> alt="icon"> -->
				<video width="170" height="138" controls>
  					<source src=<?php echo '/4th-Umpire/'.$v['url']; ?> type=<?php echo 'video/'.$ext; ?>>
				</video>
			</li>
	<?php	}//exit;
	} ?>
	</ul>
</div>