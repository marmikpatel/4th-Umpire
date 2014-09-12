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

	<div style="height:49px;">
		<?php if(!$this->Session->check('admin') && !$this->Session->check('superadmin')) { ?>
		<ul style="list-style-type: none; height: 13px; margin-top: 27px; margin-left: 134px;" class="ullist">
			<li><a href="/4th-Umpire/Admins/index">Login</a></li>
		</ul>

		<?php }
			if($this->Session->check('admin') || $this->Session->check('superadmin')){
		  ?>
		  <ul style="list-style-type: none; height: 13px; margin-top: 27px; margin-left: 134px;" class="ullist">
			<li><a href="<?php echo $this->Html->url(array
                                                        ('controller' => 'Admins',
                                                        'action' => 'logout'
                                                     ));?>">
                                         Logout
                </a>
            </li>
		</ul>
		<?php } ?>
	</div>

