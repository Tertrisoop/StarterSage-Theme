<article @php post_class() @endphp>
  <main>
    @php
    $cat = get_the_category($post->ID); 
    $tags = get_the_tags();
  @endphp 
    <section class="img">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="img__link">
                      <img  src="{!!wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' )!!}" alt="">
                        <div class="img__color" style="background-color: rgba(0,0,0,0.6) !important"></div>
                        <div class="img__title">
                            <span>
                                <a href="{{ home_url("/") }}">Home</a>
                            </span>
                            <i class="fas fa-chevron-right"></i>
                            <span>
                                <a href="{{ home_url("/category//") }}{!! $cat[0]->slug !!}">{!! $cat[0]->name !!}</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-sm-1">
                    <!-- category -->
                    <div class="content__category">
                        <a href="{{ home_url("/category//") }}{!! $cat[0]->slug !!}" title="">
                          {!! $cat[0]->name !!}
                        </a>
                    </div>
                    <!-- title -->
                    <div class="content__title">
                      <h1 class="entry-title">{!! get_the_title() !!}</h1>  
                    </div>
                    <!-- author -->
                    <div class="content__fixi">
                        <a href="#" title="">
                          <img class="avatar" src="{{ get_avatar_url('ID') }}" alt="">
                        </a>
                        <div class="content__name">
                            <span>by</span>
                            <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}">{{ get_the_author() }}</a>
                        </div>
                        <div class="content__date">
                            <span>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                                    <path d="M22.528 503.735h978.944v35.84h-978.944v-35.84z"></path>
                                </svg>
                            </span>
                            <time class="entry-date" datetime="">{{ get_the_date() }}</time>
                        </div>
                    </div>
                    <div class="content__blog">
                      <div class="entry-content">
                        @php the_content() @endphp
                      </div>
                    </div>
                    <!-- content tag -->
                    <div class="content__tag">
                        <ul class="tdb-tags">
                          @foreach ($tags as $item)
                            <li><a href="{{ home_url("/tag//") }}{!! $item->slug !!}">{{$item->name }}</a></li>
                          @endforeach
                         </ul>
                    </div>
                    <!-- block template -->
                    <div class="content__template">
                        <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="tdb-author-photo"> 
                          <img src="{{ get_avatar_url('ID') }}" alt="">
                        </a>
                        <div class="content__template-author element-style">
                            <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="author-name">{{ get_the_author() }}</a>
                            <div class="content__template-descr">
                              {{get_the_author_meta('description')}}
                            </div>
                        </div>
                    </div>
                    <!-- Get in Touch -->
                    <div class="content__touch">
                        <div class="content__touch-title">
                            <h3>Bình Luận </h3>
                        </div>
                        <div class="row">
                              <div class="col-md-12">
                                <footer>
                                  {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
                                </footer>
                                @php comments_template('/partials/comments.blade.php') @endphp
                              </div>
                        </div>
                    </div>
                    <!-- Related Articles -->
                    <div class="content__related">
                        <h4 class="content__related-title">
                            <span>
                                Bài Viết Liên Quan
                            </span>
                        </h4>
                </div>
                <div class="row">
                  @php $postrelate = App::getPostByCategory($cat[0]->term_id,3); @endphp
                    @if($postrelate)
                    @foreach($postrelate->get_posts() as $postrelate) 
                      @include('post.p-relate')
                      @endforeach
                    @endif
            </div>
        </div>
                <div class="col-xl-3 col-sm-1">
                    {{-- <div class="asider__socical">
                        <div class="asider__socical-title">
                            <h3>Bình Luận</h3>
                        </div>
                        <div class="asider__socical-facebook">
                            <a href="#" target="_blank" rel="noopener">
                              <div class="asider__socical-icon">
                                  <i class="fab fa-facebook-f"></i>
                              </div>
                              <span class="asider__socical-name">Fans</span>
                            </a>
                        </div>
                        <div class="asider__socical-youtube">
                            <a href="#" target="_blank" rel="noopener">
                            <div class="asider__socical-icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <span class="asider__socical-name">Fans</span>
                        </a>
                        </div>
                    </div> --}}
                    @php dynamic_sidebar('sidebar-primary') @endphp 
                </div>

        </div>
    </section>
</main>
</article>
