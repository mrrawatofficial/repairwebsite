<?php 
  $page='contact';
  include 'common/header.php' 
?>

<!-- breadcrumb -->
<div class="breadcrumb d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<h2>Contact Us</h2>
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

<section class="contact-page pb-0 shape">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 d-flex justify-content-center flex-column">
        <h3>Get In touch</h3>
          <address>
            <strong>  Visit us at: </strong>
            F2 Technology LLC <br>
            15th Floor, Office 1504, Millennium Plaza Hotel Tower, <br>
            Near Emirates Tower Metro Station Exit 2, <br>
            Sheikh Zayed Road, 
            Dubai (UAE) <br>
            <strong> Timing 9AM to 6PM (Saturday to Thursday)</strong>
          </address>
      </div>
      <div class="col-lg-5">
      <?php include 'common/shared/contact-form.php' ?>
      </div>
    </div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14438.27427050856!2d55.278395!3d25.217768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x78751cd1bcaf6a89!2sF2%20Technology%20LLC!5e0!3m2!1sen!2sin!4v1627043205181!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
</section>


<!-- <?php //include 'common/shared/how-it-works.php' ?>
<div class="devider"></div>
<?php //include 'common/shared/testimonials.php' ?>
<?php //include 'common/shared/newsletter.php' ?> -->

<?php include 'common/footer.php' ?>
