
<?php  //echo "<pre>"; print_r($album); exit; ?>

<div>
		<table class="table table-hover">
			<?php foreach ($album as $key => $value) { 
					// echo "<pre>"; print_r($value); exit;
			?>
			<tr>			
				<td> 
					<img src=<?php echo '/4th-Umpire/'.$value['Image']['0']['url']; ?> alt="icon">
				</td>
				<td>
					<?php  echo $this->Html->link($value['ImageAlbum']['title'],array('controller'=>'ImageAlbums','action'=>'album_images',$value['ImageAlbum']['id'])); ?>
				</td>
				<td>

					<?php echo $value['ImageAlbum']['description']; ?>
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