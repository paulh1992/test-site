<div class="right-content">
	<div class="container">
		<div class="row">
			<div class="content col col-lg-6 hidden-lg-down">
				<h2>@php the_field('right_content_title') @endphp</h2>
				<p>@php the_field('right_content') @endphp </p>
			</div>

			<div class="image col col-lg-6 hidden-lg-down" style="background-image: url('@php the_field('right_image') @endphp');">
			</div>

			<!-- change order for tablet down -->
			<div class="image col col-xs-12 col-sm-12 col-md-12 visible-lg-down" style="background-image: url('@php the_field('right_image') @endphp');">
			</div>

			<div class="content col col-xs-12 col-sm-12 col-md-12 visible-lg-down">
				<h2>@php the_field('right_content_title') @endphp</h2>
				<p>@php the_field('right_content') @endphp </p>
			</div>	
		</div>
	</div>
</div>
