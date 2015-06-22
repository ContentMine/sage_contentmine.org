<?php
/*
Template Name: Contact
Template for contact page.
*/
?>

<div class="container">
	<div class="intro text-center">
		Do you have questions or feedback for ContentMine? Please let us know how to serve you best.
	</div>
	<div class="contact-nav">
		<ul class="nav">
			<li class="col-md-6 col-xs-12"><a href="#question" class="btn btn-lg btn-primary"><i class="fa fa-comments-o"></i><span> Ask a question </span></a></li>
			<li class="col-md-6 col-xs-12"><a href="#report" class="btn btn-lg btn-primary"><i class="fa fa-exclamation-circle"></i><span> Report a Problem </span></a></li>
		</ul>
	</div>
	<div class="google-twitter">
		<div class="google-group col-xs-12 col-lg-8">
			<h2 class="icon-heading"><i class="fa fa-users"></i> Google Group </h2>
			<div class="section-intro">
				<div class="col-sm-6">                    
					<a class="ext-link tooltips block-link btn btn-primary btn-sm" href="https://groups.google.com/forum/#!forum/contentmine-workshops" title="This link will direct you to an external website that may have different content and privacy policies from ContentMine."> Ask the community </a>                                
				</div>
			</div>
			<?php echo do_shortcode( '[sz-ggroups height="400"]'); ?>
		</div>
		<div class="sidebar-page col-xs-12 col-lg-4">
			<?php get_template_part('templates/sidebar', 'twitter'); ?>
		</div>
	</div>
	<div class="contact-us col-xs-12">
		<a name="question" class="contact-heading"><h2 class="icon-heading"><i class="fa fa-comments-o"></i> Ask a Question </h2></a>
		<p>You can use this form to contact the ContentMine team or feel free to email us directly at <strong><a href="mailto:contact@contentmine.org" title="Email">contact@contentmine.org</a></strong></p>
		<div id="contact-us-form">
			<?php echo do_shortcode( '[contact-form-7 id="' . get_post_meta($post->ID, 'contact_form', single) . '" title="Contact us"]' ); ?>		
		</div>
	</div>
	<section class="report-problem">
		<div class="col-xs-12">
			<a name="report" class="contact-heading"><h2 class="icon-heading"><i class="fa fa-exclamation-circle"></i><span> Report a Problem </span></h2></a>
		</div>
		<ul class="nav contact-link">
			<li class="col-md-6"><a href="https://github.com/ContentMine/sage_contentmine.org/blob/master/README.md#contributing"><i class="fa fa-github"></i><span> Report a problem with the website </span></a></li>
			<!--<li class="col-md-6"><a href="https://github.com/ContentMine/"><i class="fa fa-github"></i><span> Report a problem with ContentMine software </span></a></li>-->
		</ul>
	</section>
</div>
