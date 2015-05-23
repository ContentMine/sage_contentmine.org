<?php
/*
Template Name: Contact
Template for contact page.
*/
?>

<div class="container">
	<div id="contact-wrapper">
		<div class="row intro">
			<div class="container">
				<p>Do you have questions or feedback for ContentMine? Please let us know how to serve you best.</p>
			</div>
		</div>
		<div class="row contact-nav">
			<ul class="nav">
				<li class="col-md-4"><a href="#question"><i class="fa fa-comments-o"></i><span>Ask a question</span></a></li>
				<li class="col-md-4"><a href="#request"><i class="fa fa-lightbulb-o"></i><span>Make a Request</span></a></li>
				<li class="col-md-4"><a href="#report"><i class="fa fa-exclamation-circle"></i><span>Report a Problem</span></a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="entry-content col-md-9">
			<?php while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; 
			wp_reset_postdata(); ?>
		</div>
		<div class="col-md-3">
			<div>
				<h3>Twitter</h3>
				<div class="twitter-feed">
					<?php echo do_shortcode( '[twitter-widget username="TheContentMine" items="3" hidereplies="false" title=" " showintents="false" showretweets="true"]' ) ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row contact-form">
		<h3><i class="fa fa-comments-o"></i></h3>
			<p>You can use this form to contact the ContentMine team or feel free to email us directly at <a href="mailto:">XXXXX</a></p>
			<?php echo do_shortcode( '[contact-form-7 id="' . get_post_meta($post->ID, 'contact_form', single) . '" title="Contact us"]' ); ?>		
	</div>
	<section class="row">
		<div class="col-md-12">
			<a name="request" class="contact-heading"><h1 class="icon-heading"><i class="fa fa-lightbulb-o"></i><span>Make a Request</span></h1></a>
		</div>
		<ul class="nav contact-link">
			<li class="col-md-6"><a href="https://github.com/ContentMine/sage_contentmine.org/#submitting-an-issue"><i class="fa fa-github"></i>Suggest new ContentMine features</span></a></li>
			<li class="col-md-6"><a href="/request"><i class="fa fa-check-circle-o" ></i><span>Request new website features</span></a></li>
		</ul>
	</section>
	<section class="row">
		<div class="col-md-12">
			<a name="report" class="contact-heading"><h1 class="icon-heading"><i class="fa fa-exclamation-circle"></i><span>Report a Problem</span></h1></a>
		</div>
		<ul class="nav contact-link">
			<li class="col-md-6"><a href="https://github.com/ContentMine/sage_contentmine.org/#submitting-an-issue"><i class="fa fa-github"></i><span>Report a problem with the website</span></a></li>
			<li class="col-md-6"><a href="/issue"><i class="fa fa-exclamation-circle"></i><span>Report a problem with a dataset</span></a></li>            
		</ul>
	</section>
</div>
