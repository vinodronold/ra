<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Rajanarts';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?= $this->Html->charset() ?>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Rajan Arts Gallery for Indian Contemporary art, Indian Modern Art, Oil Paintings and Batik">
   <meta name="keywords" content="Rajan Arts,Rajan,Art, Arokia Raj,Contemporary art,Contemporary artwork,Indian Contemporary art,Indian Contemporary artwork,Modern Art,Modern Artwork,Indian Modern Art,Indian Modern Artwork,Indian art,Indian artworks,Contemporary paintings,Online Art Gallery,wall painting,paintings,Indian artist,chennai artist,paintings for sale,online art,Oil Paintings,Batik">
   <meta name="author" content="Arokia Raj">

   <title>Rajanarts.com</title>
   <?= $this->Html->css(['bootstrap.min.css','ihover.css', 'style.css']) ?>

   <?= $this->fetch('meta') ?>
   <?= $this->fetch('css') ?>
</head>
<body>
   <header>
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <?= $this->Html->link('<strong><span style="color:orange;">R A J A N</span> &nbsp; A R T S</strong>', 
                                           ['controller' => 'Galleries', 'action' => 'index'], 
                                           ['escape' => false, 'class' => 'navbar-brand']); ?>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <?php if ($navhome == 'true') { echo '<li class="active">'; } else { echo '<li>'; } ?>
                     <?= $this->Html->link($this->Html->tag('span', 
                                                            '', 
                                                            ['class' => 'glyphicon glyphicon-home', 'aria-hidden' => 'true']) . 
                                                            '&nbsp' . ' Home', 
                                           ['controller' => 'Galleries', 'action' => 'index'], 
                                           ['escape' => false]); ?>
                  </li>
                  <?php if ($navgallery == 'true') { echo '<li class="active">'; } else { echo '<li>'; } ?>
                     <?= $this->Html->link($this->Html->tag('span', 
                                                            '', 
                                                            ['class' => 'glyphicon glyphicon-th-large', 'aria-hidden' => 'true']) . 
                                                            '&nbsp' . ' My Gallery', 
                                           ['controller' => 'Galleries', 'action' => 'view'], 
                                           ['escape' => false]); ?>
                  </li>
                  <li>
                     <a href="#AboutMe" data-toggle="modal"><span class="glyphicon glyphicon-user"></span>&nbsp; About me</a>
                  </li>
                  <?php if ($navcontact == 'true') { echo '<li class="active">'; } else { echo '<li>'; } ?>
                     <?= $this->Html->link($this->Html->tag('span', 
                                                            '', 
                                                            ['class' => 'glyphicon glyphicon-envelope', 'aria-hidden' => 'true']) . 
                                                            '&nbsp' . ' Contact', 
                                           ['controller' => 'Contacts', 'action' => 'index'], 
                                           ['escape' => false]); ?>
                  </li>
               </ul>
            </div><!--/.nav-collapse -->
         </div>
      </nav>
   </header>

   <section>
      <div class="container-fluid">
         <?= $this->fetch('content') ?>
      </div>
   </section>

	<footer class="footer" id="Contentfooter">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="page-header">
						<h3><p class="text-muted">Links</p></h3>
					</div>
					<ul class="list-unstyled">
						<li class="active">
                     <?= $this->Html->link($this->Html->tag('span', 
                                                            '', 
                                                            ['class' => 'glyphicon glyphicon-home', 'aria-hidden' => 'true']) . 
                                                            '&nbsp' . ' Home', 
                                           ['controller' => 'Galleries', 'action' => 'index'], 
                                           ['escape' => false]); ?>
                  </li>
                  <li>
                     <?= $this->Html->link($this->Html->tag('span', 
                                                            '', 
                                                            ['class' => 'glyphicon glyphicon-th-large', 'aria-hidden' => 'true']) . 
                                                            '&nbsp' . ' My Gallery', 
                                           ['controller' => 'Galleries', 'action' => 'index'], 
                                           ['escape' => false]); ?>
                  </li>
                  <li>
                     <a href="#AboutMe" data-toggle="modal"><span class="glyphicon glyphicon-user"></span>&nbsp; About me</a>
                  </li>
                  <li>
                     <?= $this->Html->link($this->Html->tag('span', 
                                                            '', 
                                                            ['class' => 'glyphicon glyphicon-envelope', 'aria-hidden' => 'true']) . 
                                                            '&nbsp' . ' Contact', 
                                           ['controller' => 'Contacts', 'action' => 'index'], 
                                           ['escape' => false]); ?>
                  </li>
					</ul>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="page-header">
						<h3><p class="text-muted">About me</p></h3>
					</div>
					<?= $this->Html->image('profile/myPhoto.jpg', 
					                       ['alt' => 'photo', 
					                        'style' => 'float: left; margin: 0px 15px 15px 0px;', 
					                        'height' => '125', 
					                        'width' => '125',
					                         'class' => 'img-responsive img-rounded']) ?>
					<p class="text-muted">
					I am Artist Rajan. I have around 25 years of experience as an artist and specializing in Indian Contemporary art, Indian Modern Art, Oil Paintings and Batik.
					</p>
					<a href="#AboutMe" data-toggle="modal">Check more about me...</a>
				</div>
			</div>
			<p class="text-muted">Developed & Maintained by <a href="http://www.fivefrets.com">fivefrets.com<a></p>
		</div>
	</footer>

   <!-- Modal -->
   <div class="modal fade" id="AboutMe" tabindex="-1" role="dialog" aria-labelledby="AboutMeLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title" id="AboutMeLabel">About Me</h3>
				</div>
				<div class="modal-body">
			      <?= $this->Element('aboutme'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
    
   <?= $this->Html->script(['jquery.min.js', 'bootstrap.min.js']) ?>
   <?= $this->fetch('script') ?>
</body>
</html>
