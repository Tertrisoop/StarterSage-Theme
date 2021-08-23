<div class="col-md-4">
    <div class="content__related__thumb">
        <a href="{{ home_url('/') }}{!! $postrelate->postrelate_name  !!}" rel="bookmark" title="">
          <span>
            <img src="{!!wp_get_attachment_image_url( get_post_thumbnail_id($postrelate->ID), 'large' )!!}" alt="" loading="lazy">
          </span>
        </a>
      </div>
      <div class="content__related__info">
        <a href="{{ home_url("/category//") }}{!! $cat[0]->slug ?? "#"  !!}">{{$cat[0]->name ?? "page"}}</a>
        <h3 class="content__related__title">
          <a href="{{ home_url('/') }}{!! $postrelate->post_name  !!}" rel="bookmark" title="">
            {!! $postrelate->post_title  !!}
          </a>
        </h3>
      </div>
</div>