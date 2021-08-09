@php
    $cat = get_the_category($post->ID);
@endphp
<div class="col-md-5">
    <div class="news__paper">
        <a href="{{ home_url("/category//") }}{!! $cat[0]->slug  !!}" class="news__category">{{$cat[0]->name}} </a>
      <div class="news__paper-thumb">
        <a href="{{ home_url('/') }}{!! $post->post_name  !!}" rel="bookmark" title="{!! $post->post_title  !!}">
          <span class="entry-thumb" data-bg="">
            <img src="{!!wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' )!!}" alt="">
          </span>
        </a>
      </div>
    </div>
    <div class="news__info">
      <h3 class="news__info-tile">
        <a href="{{ home_url('/') }}{!! $post->post_name  !!}" rel="bookmark" title="{!! $post->post_title  !!}">
          {!! $post->post_title  !!}
        </a>
      </h3>
      <div class="news__info-date">
        <span class="td-post-date">
          <time class="entry-date" datetime="">{{date("d/m/Y-h:i:s",strtotime($post->post_date))}}</time>
        </span>
      </div>
      <div class="news__info-excerpt">
        {!! substr( $post->post_content,0,160 ) !!}...
      </div>
    </div>
  </div>