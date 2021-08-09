{{-- <footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer> --}}
<footer>
  <section class="footer"    >
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-auto">
            <a href="#" class="footer__logo">
              <h1>
                <span class="footer__img">
                  <img src="./img/corona-symbol-transparent.webp" alt="">
                </span>
                <span class="footer__text-wrap">
                  <span class="footer__text-title">Coronavirus</span>
                  <span class="footer__text-tagline">Medicine</span>
                </span>
              </h1>
            </a>
        </div>
        <div class="col-auto">
            <ul class="footer__socical-list">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="foot row" style=" background-image: url('@asset('images/footer-bg.jpg')'); ">
    @php dynamic_sidebar('sidebar-footer') @endphp
    
  </section>
</footer>
