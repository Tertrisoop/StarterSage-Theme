@php
    $cat = get_the_category($post->ID);
@endphp
<div class="col-12 col-md-6 col-lg-4 mb-5">
    <div class="quick-read__thumb">
      <a href="{{ home_url('/') }}{!! $post->post_name  !!}" rel="bookmark" title="">
        <span>
          <img src="{!!wp_get_attachment_image_url( get_post_thumbnail_id($post->ID),'large' )!!}" alt="G">
      </a>
    </div>
    <div class="quick-read__info">
      <a href="{{ home_url("/category//") }}{!! $cat[0]->slug  !!}">{{$cat[0]->name}}</a>
      <h3 class="quick-read__title">
        <a href="{{ home_url('/') }}{!! $post->post_name  !!}" rel="bookmark" title="">
            {!! $post->post_title  !!}
        </a>
      </h3>
    </div>
  </div>