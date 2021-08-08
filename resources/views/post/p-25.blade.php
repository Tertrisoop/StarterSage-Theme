<div class="col-md-4">
    <div class="articles__thumb">
        <a href="{{ home_url('/') }}{!! $project->post_name  !!}" rel="bookmark" title="">
            <span>
                <img src="{!!wp_get_attachment_url( get_post_thumbnail_id($project->ID), 'thumbnail' )!!}" alt="" title="">
            </span>
        </a>
    </div>
    <div class="articles__info">
        <a href="#">Research</a>
        <h3 class="articles__title">
            <a href="{{ home_url('/') }}{!! $project->post_name  !!}" rel="bookmark" title="">
                {!! $project->post_title  !!}
            </a>
        </h3>
    </div>
</div>

