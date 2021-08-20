<div class="media asider__category-pos">
    <div class="media-body">
      <h3 class="asider__aside">
        <a href="{{ home_url('/') }}{!! $postw->post_name  !!}" title="" rel="bookmark">
            {!! $postw->post_title  !!}
        </a>
      </h3>
    </div>
    <img class="ml-1 asider__img" src="{!!wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'large' )!!}" alt="" loading="lazy">
</div>