<div class="media news__category-pos">
    <div class="media-body">
      <h3 class="news__aside">
        <a href="{{ home_url('/') }}{!! $project->post_name  !!}" title="" rel="bookmark">
            {!! $project->post_title  !!}
        </a>
      </h3>
    </div>
    <img src="{!!wp_get_attachment_url( get_post_thumbnail_id($project->ID), 'thumbnail' )!!}" class="ml-1 news__img"
      alt="Generic placeholder image">
  </div>