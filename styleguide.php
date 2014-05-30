<?php /* Template Name: Styleguide */ get_header(); ?>

<?php // Style Guide ONLY Wireframe Styles ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/styles/styleguide.css">

<?php // Color Swatches ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="page-header">Colors</h1>
			<div class="color-box">
				<span class="color-swatch" style="background: #ff0000;">
					<span class="hex-code">#ff0000</span>
				</span>
			</div>
			<div class="color-box">
				<span class="color-swatch" style="background: #ff0000;">
					<span class="hex-code">#ff0000</span>
				</span>
			</div>
			<div class="color-box">
				<span class="color-swatch" style="background: #ff0000;">
					<span class="hex-code">#ff0000</span>
				</span>
			</div>
			<div class="color-box">
				<span class="color-swatch" style="background: #ff0000;">
					<span class="hex-code">#ff0000</span>
				</span>
			</div>
			<div class="color-box">
				<span class="color-swatch" style="background: #ff0000;">
					<span class="hex-code">#ff0000</span>
				</span>
			</div>
			<div class="color-box">
				<span class="color-swatch" style="background: #ff0000;">
					<span class="hex-code">#ff0000</span>
				</span>
			</div>
		</div>
	</div>
</div>

<?php // Typography ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="page-header">Typography</h1>
			<!-- H1 -->
			<h1>H1 - Bootstrap Heading <small>Text Inside &lt;small&gt;</small> and a <a href="#">link</a></h1>

			<!-- H2 -->
			<h2>H2 - Bootstrap Heading <small>Text Inside &lt;small&gt;</small> and a <a href="#">link</a></h2>

			<!-- H3 -->
			<h3>H3 - Bootstrap Heading <small>Text Inside &lt;small&gt;</small> and a <a href="#">link</a></h3>

			<!-- H4 -->
			<h4>H4 - Bootstrap Heading <small>Text Inside &lt;small&gt;</small> and a <a href="#">link</a></h4>

			<!-- H5 -->
			<h5>H5 - Bootstrap Heading <small>Text Inside &lt;small&gt;</small> and a <a href="#">link</a></h5>

			<!-- H6 -->
			<h6>H6 - Bootstrap Heading <small>Text Inside &lt;small&gt;</small> and a <a href="#">link</a></h6>

			<!-- p -->
			<p>Here is just a normal paragraph. This will be used as your default body text. Bacon ipsum dolor sit amet tenderloin kielbasa pork chop turkey biltong strip steak meatball boudin spare ribs drumstick ground round cow chicken brisket turducken. Tail spare ribs pork pork chop leberkas short loin ground round ham hock boudin kielbasa landjaeger. Tongue turducken salami shoulder turkey. Pork chop ribeye shank short ribs jowl ground round flank tenderloin bacon, sausage pancetta beef turducken venison. Chicken leberkas brisket turkey sirloin turducken short ribs ham hock pork loin jerky pancetta beef ribeye sausage biltong. Pastrami andouille ribeye, pork chop pork flank rump pig capicola biltong shank doner ham pancetta. Kevin ribeye porchetta pork chop short ribs. Here is a <a href="#">link</a> inside a &lt;p&gt;</p>
		</div>
	</div>
</div>

<?php // Buttons ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="page-header">Buttons</h1>

			<h3>Options</h3>
			<!-- Standard button -->
			<button type="button" class="btn btn-default">.btn .btn-default</button>

			<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			<button type="button" class="btn btn-primary">.btn .btn-primary</button>

			<!-- Indicates a successful or positive action -->
			<button type="button" class="btn btn-success">.btn .btn-success</button>

			<!-- Contextual button for informational alert messages -->
			<button type="button" class="btn btn-info">.btn .btn-info</button>

			<!-- Indicates caution should be taken with this action -->
			<button type="button" class="btn btn-warning">.btn .btn-warning</button>

			<!-- Indicates a dangerous or potentially negative action -->
			<button type="button" class="btn btn-danger">.btn .btn-danger</button>

			<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
			<button type="button" class="btn btn-link">.btn .btn-link</button>

			<h3>Sizes</h3>
			<p>
				<button type="button" class="btn btn-default btn-lg">.btn-lg</button>
				<button type="button" class="btn btn-primary btn-lg">.btn-lg</button>
				<button type="button" class="btn btn-success btn-lg">.btn-lg</button>
				<button type="button" class="btn btn-info btn-lg">.btn-lg</button>
				<button type="button" class="btn btn-warning btn-lg">.btn-lg</button>
				<button type="button" class="btn btn-danger btn-lg">.btn-lg</button>
				<button type="button" class="btn btn-link btn-lg">.btn-lg</button>
			</p>
			<p>
				<button type="button" class="btn btn-default">Default</button>
				<button type="button" class="btn btn-primary">Default</button>
				<button type="button" class="btn btn-success">Default</button>
				<button type="button" class="btn btn-info">Default</button>
				<button type="button" class="btn btn-warning">Default</button>
				<button type="button" class="btn btn-danger">Default</button>
				<button type="button" class="btn btn-link">Default</button>
			</p>
			<p>
				<button type="button" class="btn btn-default btn-sm">.btn-sm</button>
				<button type="button" class="btn btn-primary btn-sm">.btn-sm</button>
				<button type="button" class="btn btn-success btn-sm">.btn-sm</button>
				<button type="button" class="btn btn-info btn-sm">.btn-sm</button>
				<button type="button" class="btn btn-warning btn-sm">.btn-sm</button>
				<button type="button" class="btn btn-danger btn-sm">.btn-sm</button>
				<button type="button" class="btn btn-link btn-sm">.btn-sm</button>
			</p>
			<p>
				<button type="button" class="btn btn-default btn-xs">.btn-xs</button>
				<button type="button" class="btn btn-primary btn-xs">.btn-xs</button>
				<button type="button" class="btn btn-success btn-xs">.btn-xs</button>
				<button type="button" class="btn btn-info btn-xs">.btn-xs</button>
				<button type="button" class="btn btn-warning btn-xs">.btn-xs</button>
				<button type="button" class="btn btn-danger btn-xs">.btn-xs</button>
				<button type="button" class="btn btn-link btn-xs">.btn-xs</button>
			</p>

			<h3>Active States</h3>
			<p>
				<button type="button" class="btn btn-default btn-lg active">Button</button>
				<button type="button" class="btn btn-primary btn-lg active">.btn-primary</button>
				<button type="button" class="btn btn-success btn-lg active">.btn-success</button>
				<button type="button" class="btn btn-info btn-lg active">.btn-info</button>
				<button type="button" class="btn btn-warning btn-lg active">.btn-warning</button>
				<button type="button" class="btn btn-danger btn-lg active">.btn-danger</button>
				<button type="button" class="btn btn-link btn-lg active">.btn-link</button>
			</p>
		</div>
	</div>
</div>

<?php // Form Inputs ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="page-header">Form Inputs</h1>

			<div class="input-container" style="clear:both;">
				<div class="pull-left">
					Text Input
				</div>
				<div class="pull-right">
					<input type="text">
				</div>
			</div>

			<div class="input-container" style="clear:both;">
				<div class="pull-left">
					Text Input with Placeholder
				</div>
				<div class="pull-right">
					<input type="text" placeholder="I'm placeholder text">
				</div>
			</div>

			<div class="input-container" style="clear:both;">
				<div class="pull-left">
					Readonly Input
				</div>
				<div class="pull-right">
					<input type="text">
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>