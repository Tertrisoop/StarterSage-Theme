@extends('layouts.app')

@section('content')
  <main>
    <section class="vaccine">
      <div class="container-fluid">
        <div class="block-inner">
        <div class="row">
          
            <img class="banner-ad__img img-fluid" src="@asset('images/recl1.jpg')" alt="" style="margin: 0 auto;
            margin-bottom: 20px;">
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
              <div class="col-12 alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
              </div>
              {!! get_search_form(false) !!}
            @endif
            @while (have_posts()) @php the_post() @endphp
              @include('post.p-25')
            @endwhile

              </div>
          </div>
          <div class="col-12 col-lg-3 animatable bounceInRight">
          @php dynamic_sidebar('sidebar-primary') @endphp
          </div>
        </div>
      </div>
    </section>
  </main>
  
  {!! get_the_posts_navigation() !!}
@endsection
