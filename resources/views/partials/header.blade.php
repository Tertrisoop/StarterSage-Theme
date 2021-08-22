<header class="banner" id="header">
	<section id="mobile-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<a class="navbar-brand" href="{{ home_url('/') }}">
				<img src="@asset('images/logo.jpg')" alt="Logo">
				{{ get_bloginfo('name', 'display') }}
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="fas fa-bars" style="font-size: 30px"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			  @if (has_nav_menu('mobile_navigation'))
				@php
				wp_nav_menu([
					'theme_location'  => 'mobile_navigation',
					'depth'           => 2,
					'container_id'    => 'mobile_navigation',
					'walker'          => new \App\wp_bootstrap4_navwalker(),
				]);
				@endphp 
			@endif
			</div>
		  </nav>
	</section>

	<section id="desktop-header">
		<nav id="desktop-navbar-main" class="navbar navbar-expand">
			<div class="container">
				<a class="navbar-brand" href="{{ home_url('/') }}">
					<img src="@asset('images/logo.jpg')" alt="Logo">
					{{ get_bloginfo('name', 'display') }}
				</a>
				@if (has_nav_menu('primary_navigation'))
					@php
					wp_nav_menu([
						'theme_location'  => 'primary_navigation',
						'depth'           => 2,
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new \App\wp_bootstrap4_navwalker(),
					]);
					@endphp 
				@endif
				<!-- Button trigger modal -->
  <i class="fas fa-search" data-toggle="modal" data-target="#exampleModal"></i>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		{!! get_search_form(false) !!}
		  
		</div>
	  </div>
	</div>
  </div>
			</div>
		</nav>
		<nav id="desktop-navbar-bottom" class="navbar navbar-expand">
			<div class="container">
				<a class="navbar-brand" href="{{ home_url('/') }}">
					<img src="@asset('images/logo.jpg')" alt="Logo">					
						{{ get_bloginfo('name', 'display') }}			
				</a>
				@if (has_nav_menu('primary_navigation'))
					@php
					wp_nav_menu([
						'theme_location'  => 'primary_navigation',
						'depth'           => 2,
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new \App\wp_bootstrap4_navwalker(),
					]);
					@endphp 
				@endif
			</div>
		</nav>
	</section>
</header>
