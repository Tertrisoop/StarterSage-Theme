
<footer>
  <section class="footer"    >
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-auto">
            <a href="#" class="footer__logo">
              <h1>
                <span class="footer__img">
                  {{-- <img src="./img/corona-symbol-transparent.webp" alt=""> --}}
                </span>
                <span class="footer__text-wrap">
                  <span class="footer__text-title">{{ get_bloginfo('name', 'display') }}</span>
                  <span class="footer__text-tagline">{{ get_bloginfo('description', 'display') }}</span>
                </span>
              </h1>
            </a>
        </div>
        <div class="col-auto">
          @php dynamic_sidebar('sidebar-foot') @endphp 
        </div>
      </div>
    </div>
  </section>
  <section class="foot" style=" background-image: url('@asset('images/footer-bg.jpg')'); ">
    <div class="container">
      <div class="row">
        @php dynamic_sidebar('sidebar-footer') @endphp
      </div>
    </div>
    
    
  </section>
</footer>
