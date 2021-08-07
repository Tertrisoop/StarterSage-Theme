<div class="news__paper">
    <a href="#" class="news__category">Behavior</a>
  <div class="news__paper-thumbai">
    <a href="{{ home_url('/') }}{!! $project->post_name  !!}" rel="bookmark" title="{!! $project->post_title  !!}">
      <span class="entry-thumb" data-bg="">
          <img src="{!!wp_get_attachment_url( get_post_thumbnail_id($project->ID), 'thumbnail' )!!}" alt="">
      </span>
    </a>
  </div>
</div>
<div class="news__info">
  <h3 class="news__info-smtile">
    <a href="{{ home_url('/') }}{!! $project->post_name  !!}" rel="bookmark" title="{!! $project->post_title  !!}">
      {!! $project->post_title  !!}
    </a>
  </h3>
</div>