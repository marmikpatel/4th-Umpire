
<?php  //echo "<pre>"; print_r($album); exit; ?>

<div>
		<table class="table table-hover">
			<?php foreach ($album as $key => $value) { 
					
					$ext=substr($value['Video']['0']['url'],-3);

			?>
			<tr>			
				<td> 
					<video width="170" height="138" controls>
  						<source src=<?php echo '/4thUmpire/'.$value['Video']['0']['url']; ?> type=<?php echo 'video/'.$ext; ?>>
					</video>
				</td>
				<td>
					<?php echo $this->Html->link($value['VideoAlbum']['title'],array('controller'=>'VideoAlbums','action'=>'album_videos',$value['VideoAlbum']['id'])); ?>
				</td>
				
			</tr>

			<?php } ?>
		</table>

</div>