<?php 
  $page='service-details';
  include 'common/header.php' 
?>

<!-- breadcrumb -->
<div class="breadcrumb d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<h2>Services Details</h2>
			</div>
		</div>
	</div>
</div>


<section class="services-single shape">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" >
					<img src="<?=base_url();?>assets/img/about.png" alt="" >
			</div>
			<div class="col-lg-6">
				<h2>iMac & Mackbood Repair</h2>
				<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolorem voluptatum ut quasi reprehenderit voluptatem!</strong></p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veritatis delectus aut, fuga accusamus inventore sint quidem modi ipsum incidunt!</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veritatis delectus aut, fuga accusamus inventore sint quidem modi ipsum incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veritatis delectus aut, fuga accusamus inventore sint quidem modi ipsum incidunt!</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum veritatis delectus aut, fuga accusamus inventore sint quidem modi ipsum incidunt!</p>
			</div>
		</div>
	</div>
</section>


<?php include 'common/shared/how-it-works.php' ?>
<div class="devider"></div>

<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 ms-auto">
        <?php include 'common/shared/contact-form.php' ?>
      </div>
    </div>
  </div>
</section>

<?php include 'common/shared/testimonials.php' ?>
<?php include 'common/shared/newsletter.php' ?>

<?php include 'common/footer.php' ?>
