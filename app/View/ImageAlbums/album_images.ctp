<?php //echo "<pre>"; print_r($album_img); exit;   ?>


<div>
	<?php foreach ($album_img as $key => $value) {
		foreach ($value['Image'] as $k => $v) {
			//echo "<pre>"; print_r($v); ?>
			<div>
				<img src=<?php echo '/4thUmpire/'.$v['url']; ?> alt="icon">
			</div>
	<?php	}//exit;
	} ?>

</div>