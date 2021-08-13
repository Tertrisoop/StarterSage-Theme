@php $ojb = App::getPostrandom();  @endphp
@if ($ojb)
@php
   $postrd = $ojb->posts[0];
    $cate = get_the_category($postrd->ID);

@endphp
<section class="slider" style="background-image: url('{!!wp_get_attachment_url( get_post_thumbnail_id($postrd->ID), 'thumbnail' )!!}  '); ">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="banner__news ban">
          <div class="ban__info">
            <a href="{{ home_url("/category//") }}{!! $cate[0]->slug  !!}" class="ban__info-category">{{$cate[0]->name}} </a>
          </div>
          <h2 class="ban__title">
            <a href="{{ home_url('/') }}{{$postrd->post_name}}" rel="bookmark" title="Here is Why You Should Be Avoiding Crowds Because of COVID19">
              {!! $postrd->post_title  !!}
            </a>
          </h2>
          <div class="ban__date">
            <span>
              <time class="ban__date" datetime="">{{$postrd->post_date }}</time>
            </span>
          </div>
          <div class="ban__excerpt">
            {!! strip_tags(substr( $postrd->post_content,0,160 )) !!}...
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

<section class="sc-total">
  <div class="container">
    <div class="row">
      <div class="col-6 col-sm-6 col-md-3 statiscal">
        <div class="total__country">
          <div class="total__country-count" id="total">
            191,225,672
          </div>
          <div class="total__country-start">
            Confirmed cases
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3 statiscal">
        <div class="total__country">
          <div class="total__country-count" id="death">
            4,105,847
          </div>
          <div class="total__country-start">
            Total deaths
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3 statiscal">
        <div class="total__country">
          <div class="total__country-count" id="recover">
            172,462,518
          </div>
          <div class="total__country-start">
            Total recovered
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3 statiscal">
        <div class="total__country">
          <div class="total__country-count" id="active">
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
      @php $post = App::getPostByCategory('2,5',5);  @endphp
      @if($post)
        @foreach($post->get_posts() as $post)  
          @php $loop->iteration; @endphp
          @if ($loop->iteration == 1)
            @include('post.p-40')
          <div class="col-md-4">
            <div class="row">
          @else
            @include('post.p-20')
         
          @endif

        @endforeach
            </div>
          </div>
      @endif
      <div class="col-md-3">
        @php $post = App::getPostByCategory('6',5); @endphp
        @if($post)
          @foreach($post->get_posts() as $post)  @php
              $cat = get_the_category($post->ID);
          @endphp    
          @include('post.p-sidebar')
          @endforeach
        @endif
          
      </div>
    </div>
  </div>
</section>
<section class="quick-read">
  <div class="container">
    @php $cate = 3;  $post = App::getPostByCategory($cate,6); @endphp
    <h4 class="td-block-title">
      <span class="td-pulldown-size">
        @php
           echo( get_category($cate)->cat_name);
        @endphp
      </span>
    </h4>
    <div class="row">
        @if($post)
          @foreach($post->get_posts() as $post)    
          @include('post.p-30')
          @endforeach
        @endif
    </div>
  </div>
</section>
<section class="video">
  <div class="container-fluid">
    <h4 class="td-block-title">
      <span class="td-pulldown-size">
        Video 
      </span>
    </h4>
    <div class="row">
      <div class="col-12">
        @php dynamic_sidebar('sidebar-video') @endphp 
      </div>
    </div>
  </div>
</section>
<section class="articles">
  <div class="container">
    <h3 class="tdm-title tdm-title-sm">Bài Mới </h3>
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          @php $post = App::getPostByCategory('',6); @endphp
          @if($post)
            @foreach($post->get_posts() as $post)    
            @include('post.p-25')
            @endforeach
          @endif
        </div>
      </div>
      <div class="col-md-3">
        <div class="articles__img">
          <a href="#">
            <span>
              <img src="@php echo get_stylesheet_directory_uri() @endphp/dist/images/maxresdefault_8201f8ac.jpg')"  class="img-fluid" alt="" title="">
            </span>
          </a>
        </div>
        <div class="articles__aside">
          <h3 class="articles__title--aside">
            <a href="https://ncov.moh.gov.vn/" rel="bookmark" title="">
              TRANG TIN VỀ DỊCH BỆNH VIÊM ĐƯỜNG HÔ HẤP CẤP COVID-19
            </a>
          </h3>
          <h3 class="articles__title--aside">
            <a href="https://moh.gov.vn/" rel="bookmark" title="">
              Trang chủ - Cổng thông tin Bộ Y tế
            </a>
          </h3>
          <h3 class="articles__title--aside">
            <a href="#" rel="bookmark" title="">
              Trang Tổ Chức y tế thế giới (WHO)
          </h3>
          <h3 class="articles__title--aside">
            <a href="https://www.facebook.com/thongtinchinhphu" rel="bookmark" title="">
              thông tin chính phủ
            </a>
          </h3>
          <h3 class="articles__title--aside">
            <a href="https://suckhoedoisong.vn/" rel="bookmark" title="">
              Báo Sức Khỏe và đời sống
            </a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>
</main>