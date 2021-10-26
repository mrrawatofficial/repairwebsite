<?php 
  $page='about';
  include 'common/header.php' 
?>

<!-- breadcrumb -->
<div class="breadcrumb d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<h2>About</h2>
			</div>
		</div>
	</div>
	<!-- <nav>
		<ol>
			<li>
				<a href="<?=base_url();?>"> Home </a>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-arrow-right"></i>
				</a>
			</li>
			<li>
				<a href="<?=base_url();?>about"> About </a>
			</li>
		</ol>
	</nav> -->
</div>


<section class="about shape">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" >
				<div class="img-box">
					<img src="<?=base_url();?>assets/img/about.png" alt="" >
				</div>
			</div>
			<div class="col-lg-6">
				<h2>About Us</h2>
				<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolorem voluptatum ut quasi reprehenderit voluptatem!</strong></p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veritatis delectus aut, fuga accusamus inventore sint quidem modi ipsum incidunt!</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veritatis delectus aut, fuga accusamus inventore sint quidem modi ipsum incidunt!</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veritatis delectus aut, fuga accusamus inventore sint quidem modi ipsum incidunt!</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veritatis delectus aut, fuga accusamus inventore sint quidem modi ipsum incidunt!</p>
			</div>
		</div>
	</div>
</section>


<?php include 'common/shared/how-it-works.php' ?>
<div class="devider"></div>
<?php include 'common/shared/testimonials.php' ?>
<?php include 'common/shared/newsletter.php' ?>

<?php include 'common/footer.php' ?>
