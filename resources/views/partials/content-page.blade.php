{{-- @php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!} --}}

<section class="slider">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="banner__news ban">
          <div class="ban__info">
            <a href="" class="ban__info-category">Prevention</a>
          </div>
          <h2 class="ban__title">
            <a href="#" rel="bookmark" title="Here is Why You Should Be Avoiding Crowds Because of COVID19">
              Here is Why You Should Be Avoiding Crowds Because of COVID19
            </a>
          </h2>
          <div class="ban__date">
            <span>
              <time class="ban__date" datetime="">April 8, 2020</time>
            </span>
          </div>
          <div class="ban__excerpt">
            Prevention Sugar seems to have developed a reputation as the big bad wolf in relation to health. We have
            reported on numerous studies associating sugar...
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sc-total">
  <div class="container">
    <div class="row">
      <div class="col-3 md-3">
        <div class="total__country">
          <div class="total__country-name"></div>
          <div class="total__country-count">
            191,230,672
          </div>
          <div class="total__country-start">
            Confirmed cases
          </div>
        </div>
      </div>
      <div class="col-3 md-3">
        <div class="total__country">
          <div class="total__country-name"></div>
          <div class="total__country-count">
            4,105,847
          </div>
          <div class="total__country-start">
            Total deaths
          </div>
        </div>
      </div>
      <div class="col-3 md-3">
        <div class="total__country">
          <div class="total__country-name"></div>
          <div class="total__country-count">
            172,462,518
          </div>
          <div class="total__country-start">
            Total recovered
          </div>
        </div>
      </div>
      <div class="col-3 md-3">
        <div class="total__wrapper">
          <div class="total__country-name"></div>
          <div class="total__country-count">
            14,662,307
          </div>
          <div class="total__country-start">
            Total active cases
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="news">
  <div class="container">
    <div class="row">
      @php $projects = App::getPostByCategory('ho-tro'); @endphp
      @if($projects)
        @foreach($projects->get_posts() as $project) 
          @php $loop->iteration; @endphp
          @if ($loop->iteration == 1)
            @include('post.p-40')
          <div class="col-md-2">
          @else
            @include('post.p-20')
          </div>
          @endif
        @endforeach
      @endif
      
      <div class="col-md-2">
        <!-- blog 1 -->
        <div class="news__paper">
          <a href="#" class="news__category">Behavior</a>
          <div class="news__paper-thumbai">
            <a href="#" rel="bookmark" title="The Coronavirus Exposes Massive Education Digital Generation Gap">
              <span class="entry-thumb" data-bg="">
                <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/29-696x464.jpg" alt="">
              </span>
            </a>
          </div>
        </div>
        <div class="news__info">
          <h3 class="news__info-smtile">
            <a href="#" rel="bookmark" title="The Coronavirus Exposes Massive Education Digital Generation Gap">
              The Coronavirus Exposes Massive Education Digital Generation Gap
            </a>
          </h3>
        </div>
        <!-- blog 2 -->
        <div class="news__paper">
          <a href="#" class="news__category">Behavior</a>
          <div class="news__paper-thumbai">
            <a href="#" rel="bookmark" title="The Coronavirus Exposes Massive Education Digital Generation Gap">
              <span class="entry-thumb" data-bg="">
                <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/29-696x464.jpg" alt="">
              </span>
            </a>
          </div>
        </div>
        <div class="news__info">
          <h3 class="news__info-smtile">
            <a href="#" rel="bookmark" title="The Coronavirus Exposes Massive Education Digital Generation Gap">
              The Coronavirus Exposes Massive Education Digital Generation Gap
            </a>
          </h3>
        </div>
      </div>
      <div class="col-md-3">
        <!-- post 1 -->
        <div class="media news__category-pos">
          <div class="media-body">
            <h3 class="news__aside">
              <a href="#" title="" rel="bookmark">
                Clinical Research Fails to Provide a Complete COVID19 Pattern
              </a>
            </h3>
          </div>
          <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" class="ml-1 news__img"
            alt="Generic placeholder image">
        </div>
        <!-- post 2 -->
        <div class="media news__category-pos">
          <div class="media-body">
            <h3 class="news__aside">
              <a href="#" title="" rel="bookmark">
                Clinical Research Fails to Provide a Complete COVID19 Pattern
              </a>
            </h3>
          </div>
          <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" class="ml-1 news__img"
            alt="Generic placeholder image">
        </div>
        <!-- post 3 -->
        <div class="media news__category-pos">
          <div class="media-body">
            <h3 class="news__aside">
              <a href="#" title="" rel="bookmark">
                Clinical Research Fails to Provide a Complete COVID19 Pattern
              </a>
            </h3>
          </div>
          <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" class="ml-1 news__img"
            alt="Generic placeholder image">
        </div>
        <!-- post 4 -->
        <div class="media news__category-pos">
          <div class="media-body">
            <h3 class="news__aside">
              <a href="#" title="" rel="bookmark">
                Clinical Research Fails to Provide a Complete COVID19 Pattern
              </a>
            </h3>
          </div>
          <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" class="ml-1 news__img"
            alt="Generic placeholder image">
        </div>
        <!-- post 5 -->
        <div class="media news__category-pos">
          <div class="media-body">
            <h3 class="news__aside">
              <a href="#" title="" rel="bookmark">
                Clinical Research Fails to Provide a Complete COVID19 Pattern
              </a>
            </h3>
          </div>
          <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" class="ml-1 news__img"
            alt="Generic placeholder image">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="quick-read">
  <div class="container">
    <h4 class="td-block-title">
      <span class="td-pulldown-size">
        Quick Read
      </span>
    </h4>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="quick-read__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="G">
          </a>
        </div>
        <div class="quick-read__info">
          <a href="#">Research</a>
          <h3 class="quick-read__title">
            <a href="#" rel="bookmark" title="">
              Anxiety Research: Your Nose Itches: Allergies, Flu or COVID19?
            </a>
          </h3>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="quick-read__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="G">
          </a>
        </div>
        <div class="quick-read__info">
          <a href="#">Research</a>
          <h3 class="quick-read__title">
            <a href="#" rel="bookmark" title="">
              Anxiety Research: Your Nose Itches: Allergies, Flu or COVID19?
            </a>
          </h3>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="quick-read__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="G">
          </a>
        </div>
        <div class="quick-read__info">
          <a href="#">Research</a>
          <h3 class="quick-read__title">
            <a href="#" rel="bookmark" title="">
              Anxiety Research: Your Nose Itches: Allergies, Flu or COVID19?
            </a>
          </h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="quick-read__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="G">
          </a>
        </div>
        <div class="quick-read__info">
          <a href="#">Research</a>
          <h3 class="quick-read__title">
            <a href="#" rel="bookmark" title="">
              Anxiety Research: Your Nose Itches: Allergies, Flu or COVID19?
            </a>
          </h3>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="quick-read__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="G">
          </a>
        </div>
        <div class="quick-read__info">
          <a href="#">Research</a>
          <h3 class="quick-read__title">
            <a href="#" rel="bookmark" title="">
              Anxiety Research: Your Nose Itches: Allergies, Flu or COVID19?
            </a>
          </h3>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="quick-read__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="G">
          </a>
        </div>
        <div class="quick-read__info">
          <a href="#">Research</a>
          <h3 class="quick-read__title">
            <a href="#" rel="bookmark" title="">
              Anxiety Research: Your Nose Itches: Allergies, Flu or COVID19?
            </a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="prevention">
  <div class="container">
    <h3 class="tdm-title tdm-title-sm">Prevention Strategy</h3>
    <div class="row">
      <div class="col-md-3">
        <a href="#" class="prevention__img">
          <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/recl2.jpg" class="prevention__img"
            alt="G">
        </a>
      </div>
      {{-- <div class="col-md-6">
          <div id="carousel-Controls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
            </div>
            <button class="right carousel-control-prev" type="button" data-bs-target="#carousel-Controls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
            <button class="left carousel-control-next" type="button" data-bs-target="#carousel-Controls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
          </div>
        </div> --}}
      <div class="col-md-3">
        <div class="prevention__thumb">
          <a href="#" rel="bookmark" title="">
            <span class="entry-thumb">
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/11-485x360.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="prevention__in">
          <a href="#">Prevention</a>
          <h3 class="prevention__tit">
            <a href="#" rel="bookmark" title="">
              Can Authorities Really Track the Spread of the Coronavirus?
            </a>
          </h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
        <div class="prevention__thumb">
          <a href="#" rel="bookmark" title="">
            <span class="entry-thumb">
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/11-485x360.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="prevention__in">
          <a href="#">Prevention</a>
          <h3 class="prevention__tit">
            <a href="#" rel="bookmark" title="">
              Can Authorities Really Track the Spread of the Coronavirus?
            </a>
          </h3>
        </div>
      </div>
      {{-- <div class="col-md-6">
          <div id="carousel-ls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
            </div>
            <button class="right carousel-control-prev" type="button" data-bs-target="#carousel-ls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
            <button class="left carousel-control-next" type="button" data-bs-target="#carousel-ls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
          </div>
        </div> --}}
    </div>
  </div>
</section>
<section class="global">
  <div class="container">
    <h3 class="tdm-title tdm-title-sm">Global Impact</h3>
    <div class="row">
      <div class="col-md-3">
        <div class="prevention__thumb">
          <a href="#" rel="bookmark" title="">
            <span class="entry-thumb">
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/11-485x360.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="prevention__in">
          <a href="#">Prevention</a>
          <h3 class="prevention__tit">
            <a href="#" rel="bookmark" title="">
              Can Authorities Really Track the Spread of the Coronavirus?
            </a>
          </h3>
        </div>
      </div>
      {{-- <div class="col-md-6">
          <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
            </div>
            <button class="right carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
            <button class="left carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
          </div>
        </div> --}}
      <div class="col-md-3">
        <a href="#" class="prevention__img">
          <img class="prevention__img" src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/recl2.jpg"
            alt="" title="">
        </a>
      </div>
    </div>
    <div class="row">
      {{-- <div class="col-md-6">
          <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
              <div class="carousel-item">
                <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
              <div class="carousel-item">
                <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="" title="">
                <div class="prevention__info">
                  <a href="#" title="" class="post-category">Prevention</a>
                  <h3 class="prevention__title">
                    <a href="#" rel="bookmark" title="">
                      Coronavirus Symptoms: What Are They and Should I See a Doctor?
                    </a>
                  </h3>
                </div>
              </div>
            </div>
            <button class="right carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
            <button class="left carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
          </div>
        </div> --}}
      <div class="col-md-3">
        <div class="prevention__thumb">
          <a href="#" rel="bookmark" title="">
            <span class="entry-thumb">
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/11-485x360.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="prevention__in">
          <a href="#">Prevention</a>
          <h3 class="prevention__tit">
            <a href="#" rel="bookmark" title="">
              Can Authorities Really Track the Spread of the Coronavirus?
            </a>
          </h3>
        </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
  </div>
</section>
<section class="video">
  <div class="container-fluid">
    <h4 class="td-block-title">
      <span class="td-pulldown-size">
        Video News
      </span>
    </h4>
    <div class="row">
      <div class="col-12">
        <div class="fotorama">
          <a href="https://www.youtube.com/watch?v=8RWT0YY5zRc" data-img="desert-rose.jpg">
            <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/maxresdefault.webp" alt=""
              title="">
          </a>
          <a href="https://www.youtube.com/watch?v=8RWT0YY5zRc" data-img="desert-rose.jpg">
            <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/maxresdefault.webp" alt=""
              title="">
          </a>
          <a href="https://www.youtube.com/watch?v=8RWT0YY5zRc" data-img="desert-rose.jpg">
            <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/maxresdefault.webp" alt=""
              title="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="articles">
  <div class="container">
    <h3 class="tdm-title tdm-title-sm">Latest Articles</h3>
    <div class="row">
      <div class="col-md-3">
        <div class="articles__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="articles__info">
          <a href="#">Research</a>
          <h3 class="articles__title">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
        </div>
        <div class="articles__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="articles__info">
          <a href="#">Research</a>
          <h3 class="articles__title">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="articles__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="articles__info">
          <a href="#">Research</a>
          <h3 class="articles__title">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
        </div>
        <div class="articles__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="articles__info">
          <a href="#">Research</a>
          <h3 class="articles__title">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="articles__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="articles__info">
          <a href="#">Research</a>
          <h3 class="articles__title">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
        </div>
        <div class="articles__thumb">
          <a href="#" rel="bookmark" title="">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="articles__info">
          <a href="#">Research</a>
          <h3 class="articles__title">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="articles__img">
          <a href="#">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/recl4.jpg" alt="" title="">
            </span>
          </a>
        </div>
        <div class="articles__aside">
          <h3 class="articles__title--aside">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
          <h3 class="articles__title--aside">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
          <h3 class="articles__title--aside">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
          <h3 class="articles__title--aside">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
          <h3 class="articles__title--aside">
            <a href="#" rel="bookmark" title="">
              Clinical Research Fails to Provide a Complete COVID19 Pattern
            </a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>
</main>