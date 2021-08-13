@php
    $cat = get_the_category($post->ID);
@endphp
<div class="col-md-6">
  <div class="news__paper">
    <a href="{{ home_url("/category//") }}{!! $cat[0]->slug !!}" class="news__category">{!!$cat[0]->name !!}</a>
    <div class="news__paper-thumbai">
      <a href="{{ home_url('/') }}{!! $post->post_name  !!}" rel="bookmark" title="{!! $post->post_title  !!}">
        <span class="entry-thumb" data-bg="">
          <img src="{!!wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'large' )!!}" alt="">
        </span>
      </a>
    </div>
  </div>
  <div class="news__info">
    <h3 class="news__info-smtile">
      <a href="{{ home_url('/') }}{!! $post->post_name  !!}" rel="bookmark" title="{!! $post->post_title  !!}">
        {!! $post->post_title !!}
      </a>
    </h3>
  </div>

</div>