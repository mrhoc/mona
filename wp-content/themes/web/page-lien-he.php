<?php get_header()?>
<style>
	input,textarea{

	}
	label{
		display: block;
		margin-bottom: 10px;
	}
	input{
		height: 40px;
		width: 100%;
	}
	textarea{
		width: 100%;
		resize:none
	}
</style>
<div class="container">
	<br>
	<br>
	<h1 style="font-weight: bold;text-align: center;margin-bottom: 50px;">Liên hệ với chúng tôi</h1>
	<div class="row">
		<div class="col-md-6">
			<?php if(have_posts()):while (have_posts()):the_post() ?>
				<?php the_content()?>
			<?php endwhile;endif;?>
		</div>
		<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d967.9156895386775!2d105.78266325512985!3d20.976360644779298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acd2d5ee32a7%3A0x1cb37556ec1bb2d!2zMTQ0IFRy4bqnbiBQaMO6LCBQLiBN4buZIExhbywgSMOgIMSQw7RuZywgSMOgIE7hu5lpIDEwMDAwMA!5e0!3m2!1svi!2s!4v1695617582181!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
	<br>
	<br>
	<br>

</div>
<?php get_footer()?>