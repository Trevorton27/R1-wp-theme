<?php /*home page template*/ ?>

<?php get_header(); ?>

    <div id="desktop-jumbotron" class="jumbotron jumbotron-fluid .d-sm-flex">
      <div  class="container" id="title-container">
		<div class="title-container">
			<div class="row justify-content-center" id="site-title-wrapper">
			<h1 class="main-title">Southern Pharmacy</h1>
			</div>
			<div class="row justify-content-center">
				<span id="sub-title">
					サザン薬局グループ
				</span>
			</div>
	   </div>
	</div>
  </div>


<?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="home-page-content">

 <?php the_content(); ?>
 </div><!-- /.blog-post -->
 <?php
 endwhile;
 } 
 ?>
  



<?php get_footer(); ?>