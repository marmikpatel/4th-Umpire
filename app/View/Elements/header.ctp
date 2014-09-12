<STYLE TYPE="text/css">

.ullist li
{
	display: inline;

}
.ullist li a
{
	color:#fff;
	text-decoration: none;
}
</STYLE>
<header>
	<div style="height:49px;">
		<?php if( $this->request->params['controller']!== "Admins" && !$this->Session->check('admin') && !$this->Session->check('superadmin')) {  ?>
		<ul style="list-style-type: none; height: 13px; margin-top: 27px; margin-left: 134px;" class="ullist">
			<li><a href="/4th-Umpire/Home/index">Home</a></li>
			<li>AboutUs</li>
			<li>News</li>
			<li>Players</li>
			<li><a href="/4th-Umpire/Fixtures/index">Fixture</a></li>
			<li><a href="/4th-Umpire/ImageAlbums/index">Image Gallery</a></li>
			<li><a href="/4th-Umpire/VideoAlbums/index">Video Gallery</a></li>
		</ul>
		<?php   } 
			if($this->Session->check('admin'))
			{  ?>
			<ul style="list-style-type: none; height: 13px; margin-top: 27px; margin-left: 134px;" class="ullist">
					<li>HOME</li>
					<li>AboutUs</li>
					<li>News</li>
					<li>Players</li>
					<li><a href="/4th-Umpire/Fixtures/index">Fixture</a></li>
					<li>Image Gallery</li>
					<li>Video Gallery</li>
					<li>Team</li>
			</ul>

		<?php 		
			}

		 ?>
				 	


	</div>

</header>