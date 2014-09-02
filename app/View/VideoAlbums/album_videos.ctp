<?php //echo "<pre>"; print_r($album_img); exit;   ?>


<div>
	<?php foreach ($album_img as $key => $value) {
		foreach ($value['Video'] as $k => $v) {
			//echo "<pre>"; print_r($v); 
			$ext=substr($v['url'],-3);

		?>
			<div>
				<!-- <embed src=<?php echo '/4thUmpire/'.$v['url']; ?> alt="icon"> -->
				<video width="170" height="138" controls>
  					<source src=<?php echo '/4thUmpire/'.$v['url']; ?> type=<?php echo 'video/'.$ext; ?>>
				</video>
			</div>
	<?php	}//exit;
	} ?>

</div>