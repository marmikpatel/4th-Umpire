
<?php  //echo "<pre>"; print_r($album); exit; ?>

<div>
		<table class="table table-hover">
			<?php foreach ($album as $key => $value) { 
					
					$ext=substr($value['Video']['0']['url'],-3);

			?>
			<tr>			
				<td> 
					<video width="170" height="138" controls>
  						<source src=<?php echo '/4th-Umpire/'.$value['Video']['0']['url']; ?> type=<?php echo 'video/'.$ext; ?>>
					</video>
				</td>
				<td>
					<?php echo $this->Html->link($value['VideoAlbum']['title'],array('controller'=>'VideoAlbums','action'=>'album_videos',$value['VideoAlbum']['id'])); ?>
				</td>
				<td>
				<?php if($this->Session->check('admin')){ ?>

					<p><?php echo $this->Html->link("Edit",array('controller'=>'','action'=>'')); ?></p>
						<p><?php echo $this->Html->link("Delete",array('controller'=>'','action'=>'')); ?></p>
				<?php  }?>
				</td>
				
			</tr>

			<?php } ?>
		</table>

</div>