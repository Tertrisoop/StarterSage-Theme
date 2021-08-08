<header class="banner" id="header">
	<section id="mobile-header">
		<nav class="navbar mobile-navbar">
			<a class="mobile-navbar-brand" href="{{ home_url('/') }}">
				<img src="@asset('images/logo.jpg')" alt="Logo">
				

			</a>
			<a class="mobile-navbar-toggler" href="#mobile_navigation">
				<i class="fas fa-bars"></i>
			</a>

			@if (has_nav_menu('mobile_navigation'))
				@php
				wp_nav_menu([
					'theme_location'  => 'mobile_navigation',
					'depth'           => 2,
					'container_id'    => 'mobile_navigation',
				]);
				@endphp 
			@endif
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
