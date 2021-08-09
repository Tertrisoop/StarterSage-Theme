<article @php post_class() @endphp>
  {{-- <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div> --}}
  <main>
    @php
    $cat = get_the_category($post->ID);
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
                          <img class="avatar" src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/author-150x150.jpg" alt="">
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
                    <!-- share socical -->
                    {{-- <div class="content__social">
                        <div class="content__social-share socical-handle">
                            <div class="social__text socical__icon">
                                <i class="fas fa-share-alt"></i>
                                Share
                            </div>
                        </div>
                        <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                            href="#" title="Facebook"
                            style="transition: opacity 0.2s ease 0s; opacity: 1; border-radius: 99px; margin-left: 10px;">
                            <div class="td-social-but-text td-social-but-icon">
                                <i class="fab fa-facebook-f"></i>
                                Facebook
                            </div>
                        </a>
                        <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                            href="#" title="Facebook"
                            style="transition: opacity 0.2s ease 0s; opacity: 1; border-radius: 99px; margin-left: 10px;">
                            <div class="td-social-but-text td-social-but-icon">
                                <i class="fab fa-twitter"></i>
                                Twitter
                            </div>
                        </a>
                        <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                            href="#" title="Facebook"
                            style="transition: opacity 0.2s ease 0s; opacity: 1; border-radius: 99px; margin-left: 10px;">
                            <div class="td-social-but-text td-social-but-icon">
                                <i class="fab fa-whatsapp"></i>
                                Whatsapp
                            </div>
                        </a>
                        <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                            href="#" title="Facebook"
                            style="transition: opacity 0.2s ease 0s; opacity: 1; border-radius: 99px; margin-left: 10px;">
                            <div class="td-social-but-text td-social-but-icon">
                                <i class="far fa-envelope"></i>
                                Email
                            </div>
                        </a>
                    </div> --}}
                    <!-- content blog -->
                    <div class="content__blog">
                      <div class="entry-content">
                        @php the_content() @endphp
                      </div>
                        {{-- <h2>Prevention</h2>
                        <p>Sugar seems to have developed a reputation as the big bad wolf in relation to health. We have reported on numerous studies associating sugar intake with increased aging, cardiovascular disease, obesity and even cancer. But many of the foods we consume contain “added” sugars – sugar that we add to a product ourselves to enhance the flavor or sugar that has been added to a product by a manufacturer.</p>
                        <blockquote>
                            <p>Such research has led to many health experts around the globe calling for reductions</p>
                        </blockquote>
                        <p>
                            Such research has led to many health experts around the globe calling for reductions in recommended sugar intake, with some saying we should cut out sugar completely. But is it really that bad for our health? While a review paper from the World Health Organization notes an increase in the consumption of such beverages correlates with the increase in obesity.
                        </p>
                        <figure id="attachment_494" aria-describedby="caption-attachment-494" style="width: 825px" class="wp-caption alignnone">
                            <a href="#" class="td-modal-image">
                              <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                            </a>
                            <figcaption id="caption-attachment-494" class="wp-caption-text">
                                Woman outside during the Covid19 Pandemic
                            </figcaption>
                        </figure>
                        <h3>Behavior</h3>
                        <p>There are many different types, including glucose, fructose, lactose, maltose and sucrose. Some of these sugars, such as glucose, fructose and lactose, occur naturally in fruits, vegetables and other foods. But many of the foods we consume contain “added” sugars – sugar that we add to a product ourselves to enhance the flavor or sugar that has been added to a product by a manufacturer.</p>
                        <h3>Strategy</h3>
                        <p>The most common sources of added sugars include soft drinks, cakes, pies, chocolate, fruit drinks and desserts. Just a single can of cola can contain up to 7 tsps of added sugar, while an average-sized chocolate bar can contain up to 6 tsps. Please visit <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">https://www.who.int/emergencies/diseases/novel-coronavirus-2019 </a>for more details.</p>
                        <figure id="attachment_494" aria-describedby="caption-attachment-494" style="width: 825px" class="wp-caption alignnone">
                            <a href="#" class="td-modal-image">
                                <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                            </a>
                            <figcaption id="caption-attachment-494" class="wp-caption-text">
                                Woman outside during the Covid19 Pandemic
                            </figcaption>
                        </figure>
                        <h3>Treatment</h3>
                        <p>It is added sugars that have been cited as a contributor to many health problems. In December 2014, MNT reported on a study in the journal Open Heart claiming added sugars may increase the risk of high blood pressure, even more so than sodium. And in February 2014, a study led by the Centers for Disease Control and Prevention (CDC) associated high added sugar intake with increased risk of death from cardiovascular disease (CVD).</p>
                        <blockquote>
                            <p>Added sugars may increase the risk of high blood pressure, even more so than sodium</p>
                            </blockquote>
                            <h3>Research</h3>
                            <p>A 2020 study published in The American Journal of Clinical Nutrition suggested that consumption of sugar-sweetened beverages increases weight gain in both children and adults, while a review paper from the World Health Organization (WHO) notes an increase in the consumption of such beverages correlates with the increase in obesity.</p> --}}
                    </div>
                    <!-- content tag -->
                    <div class="content__tag">
                        <ul class="tdb-tags">
                            <li><a href="#">coronavirus</a></li>
                            <li><a href="#">covid</a></li>
                            <li><a href="#">medicine</a></li>
                            <li><a href="#">newspaper</a></li>
                            <li><a href="#">theme</a></li>
                            <li><a href="#">wordpress</a></li>
                         </ul>
                    </div>
                    <!-- block template -->
                    <div class="content__template">
                        <a href="#" class="tdb-author-photo"> 
                          <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/author-150x150.jpg" alt="">
                        </a>
                        <div class="content__template-author element-style">
                            <a href="#" class="author-name">{{ get_the_author() }}</a>
                            <a href="#" class="author-url">https://demo.tagdiv.com/newspaper_medicine_pro/</a>
                            <div class="content__template-descr">
                                The most common sources of added sugars include soft drinks, cakes, pies, chocolate, fruit drinks and desserts. Just a single can of cola can contain up to 7 tsps of added sugar.
                            </div>
                            <div class="content__template-socical">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Get in Touch -->
                    <div class="content__touch">
                        <div class="content__touch-title">
                            <h3>Get in Touch</h3>
                        </div>
                        <div class="row">
                              {{-- <div class="col md-12 col-lg-12">
                                <div class="content__touch-comment">
                                    <h3>leave a reply</h3>
                                </div>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="comment: "></textarea>
                              </div>
                              <div class="col-auto form-touch">
                                <input type="name" class="form-control content__touch-form" id="exampleFormControlInput1" placeholder="Name: ">
                              </div>
                              <div class="col-auto form-touch">
                                <input type="email" class="form-control content__touch-form" id="exampleFormControlInput1" placeholder="Email">
                              </div>
                              <div class="col-auto form-touch">
                                <input type="text" class="form-control content__touch-form" id="exampleFormControlInput1" placeholder="Website">
                              </div>
                             <div class="col md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Save my name, email, and website in this browser for the next time I comment.
                                    </label>
                                  </div>
                             </div>
                              <div class="col-md-12">
                                <button type="submit" class="content__touch-btn">POST COMMENT</button>
                              </div> --}}
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
                                Related Articles
                            </span>
                        </h4>
                        {{-- <div class="content__related-filter">
                            <ul>
                                <li><a href="#">ALL</a></li>
                                <li><a href="#">BEHAVIOR</a></li>
                                <li><a href="#">CORONAVIRUS</a></li>
                                <li><a href="#">FACTS</a></li>
                                <li><a href="#">GLOBAL</a></li>
                                <li><a href="#">IMPACT</a></li>
                                <li><a href="#">PREVENTION</a></li>
                            </ul>
                        </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="content__related__thumb">
                            <a href="#" rel="bookmark" title="">
                              <span>
                                <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="">
                              </span>
                            </a>
                          </div>
                          <div class="content__related__info">
                            <a href="#">Research</a>
                            <h3 class="content__related__title">
                              <a href="#" rel="bookmark" title="">
                                Clinical Research Fails to Provide a Complete COVID19 Pattern
                              </a>
                            </h3>
                          </div>
                      <!-- <div class="col-inner">
                       
                      </div> -->
                    </div>
                    <div class="col-md-4">
                        <div class="content__related__thumb">
                            <a href="#" rel="bookmark" title="">
                              <span>
                                 <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="">
                              </span>
                            </a>
                          </div>
                          <div class="content__related__info">
                            <a href="#">Research</a>
                            <h3 class="content__related__title">
                              <a href="#" rel="bookmark" title="">
                                Clinical Research Fails to Provide a Complete COVID19 Pattern
                              </a>
                            </h3>
                          </div>
                      <!-- <div class="col-inner">
                       
                      </div> -->
                    </div>
                    <div class="col-md-4">
                        <div class="content__related__thumb">
                            <a href="#" rel="bookmark" title="">
                              <span>
                                 <img src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/57.jpg" alt="">
                              </span>
                            </a>
                          </div>
                          <div class="content__related__info">
                            <a href="#">Research</a>
                            <h3 class="content__related__title">
                              <a href="#" rel="bookmark" title="">
                                Clinical Research Fails to Provide a Complete COVID19 Pattern
                              </a>
                            </h3>
                          </div>
                      <!-- <div class="col-inner">
                       
                      </div> -->
                    </div>
            </div>
        </div>
                <div class="col-xl-3 col-sm-1">
                    <div class="asider__socical">
                        <div class="asider__socical-title">
                            <h3>Get in Touch</h3>
                        </div>
                        <div class="asider__socical-facebook">
                            <a href="#" target="_blank" rel="noopener">
                            <div class="asider__socical-icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <span class="asider__socical-couner">22,041</span>
                            <span class="asider__socical-name">Fans</span>
                        </a>
                        </div>
                        <div class="asider__socical-twiter">
                            <a href="#" target="_blank" rel="noopener">
                            <div class="asider__socical-icon">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span class="asider__socical-couner">22,041</span>
                            <span class="asider__socical-name">Fans</span>
                        </a>
                        </div>
                        <div class="asider__socical-youtube">
                            <a href="#" target="_blank" rel="noopener">
                            <div class="asider__socical-icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <span class="asider__socical-couner">22,041</span>
                            <span class="asider__socical-name">Fans</span>
                        </a>
                        </div>
                    </div>
                    <div class="asider__late-post">
                        <h3 class="asider__late-post-title">Latest Posts</h3>
                        <div class="media asider__category-pos">
                            <div class="media-body">
                              <h3 class="asider__aside">
                                <a href="#" title="" rel="bookmark">
                                  Clinical Research Fails to Provide a Complete COVID19 Pattern
                                </a>
                              </h3>
                            </div>
                            <img class="ml-1 asider__img" src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                          </div>
                          <div class="media asider__category-pos">
                            <div class="media-body">
                              <h3 class="asider__aside">
                                <a href="#" title="" rel="bookmark">
                                  Clinical Research Fails to Provide a Complete COVID19 Pattern
                                </a>
                              </h3>
                            </div>
                            <img class="ml-1 asider__img" src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                          </div>
                          <div class="media asider__category-pos">
                            <div class="media-body">
                              <h3 class="asider__aside">
                                <a href="#" title="" rel="bookmark">
                                  Clinical Research Fails to Provide a Complete COVID19 Pattern
                                </a>
                              </h3>
                            </div>
                            <img class="ml-1 asider__img" src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                          </div>
                          <div class="media asider__category-pos">
                            <div class="media-body">
                              <h3 class="asider__aside">
                                <a href="#" title="" rel="bookmark">
                                  Clinical Research Fails to Provide a Complete COVID19 Pattern
                                </a>
                              </h3>
                            </div>
                            <img class="ml-1 asider__img" src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                          </div>
                          <div class="media asider__category-pos">
                            <div class="media-body">
                              <h3 class="asider__aside">
                                <a href="#" title="" rel="bookmark">
                                  Clinical Research Fails to Provide a Complete COVID19 Pattern
                                </a>
                              </h3>
                            </div>
                            <img class="ml-1 asider__img" src="@php echo get_stylesheet_directory_uri() @endphp/assets/images/p1.jpg" alt="">
                          </div>
                    </div>
                </div>

        </div>
    </section>
</main>
</article>
