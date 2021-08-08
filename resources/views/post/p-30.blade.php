<div class="col-12 col-md-6 col-lg-4 mb-5">
    <div class="quick-read__thumb">
      <a href="{{ home_url('/') }}{!! $project->post_name  !!}" rel="bookmark" title="">
        <span>
          <img src="{!!wp_get_attachment_url( get_post_thumbnail_id($project->ID), 'thumbnail' )!!}" alt="G">
      </a>
    </div>
    <div class="quick-read__info">
      <a href="#">Research</a>
      <h3 class="quick-read__title">
        <a href="{{ home_url('/') }}{!! $project->post_name  !!}" rel="bookmark" title="">
            {!! $project->post_title  !!}
        </a>
      </h3>
    </div>
  </div>