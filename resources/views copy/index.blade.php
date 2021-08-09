@extends('layouts.app')

@section('content')
  <main>
    <section class="vaccine">
      <div class="container-fluid">
        <div class="block-inner">
          {{-- <div class="tdb-add-text">
            Category:
          </div>
          <h1 class="tdb-title-text">
            {!! App::title() !!}
          </h1>
        </div> --}}
        
        <div class="row">
          <div class="col" align="center">
            <img class="banner-ad__img" src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/recl1.jpg" alt="">
          </div>
        </div>
        @include('partials.page-header')
      </div>
    </section>
    <section class="list-content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-12 col-lg-9">
              <div class="row">
                @if (!have_posts())
              <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
              </div>
              {!! get_search_form(false) !!}
            @endif
            @while (have_posts()) @php the_post() @endphp
              {{-- @include('partials.content-'.get_post_type()) --}}
              <div class="col-md-3 mb-3">
                <div class="list-content__thumb">
                    <a href="#" rel="bookmark" title="">
                      <span>
                        <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="">
                      </span>
                    </a>
                  </div>
                  <div class="list-content__info">
                    <a href="#">Research</a>
                    <h3 class="list-content__title">
                      <a href="#" rel="bookmark" title="">
                        Clinical Research Fails to Provide a Complete COVID19 Pattern
                      </a>
                    </h3>
                  </div>
              </div>
            @endwhile

              </div>
          </div>
          <div class="col-12 col-lg-3">
          @php dynamic_sidebar('sidebar-footer') @endphp
          </div>
        </div>
      </div>
    </section>
  </main>
  
  {!! get_the_posts_navigation() !!}
@endsection
