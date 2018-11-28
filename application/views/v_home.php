    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Aplikasi pembelajaran query berbasis website. Pelajari lebih dalam mengenai query dalam database di GoQuery.com</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <?php if (!$this->session->userdata('username')): ?>
                <div class="form-row">
                  <div class="col-12 col-md-3 offset-md-4">
                    <a href="<?=base_url('register')?>" class="btn btn-block btn-lg btn-primary">Sign up!</a>
                  </div>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="fas fa-heart m-auto text-primary"></i>
              </div>
              <h3>Teknik Pembelajaran</h3>
              <p class="lead mb-0">Teknik pembelajaran berupa pembahasan materi, latihan soal dan quiz, disertai dengan solusi dan kunci jawaban.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="fas fa-flask m-auto text-primary"></i>
              </div>
              <h3>Target Pembelajaran</h3>
              <p class="lead mb-0">Membantu pengguna untuk mempelajari dan memahami serta mengimplementasikan query dalam database.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="fas fa-trophy m-auto text-primary"></i>
              </div>
              <h3>Pencapaian Pembelajaran</h3>
              <p class="lead mb-0">Tersedianya pantauan terhadap perkembangan pengguna dalam proses pembelajaran yang telah dilakukan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2  ">
            <i style="font-size: 50px" class="fas fa-comment py-4"></i>
            <p>“Jika seseorang bepergian dengan tujuan mencari ilmu, maka Allah akan menjadikan perjalanannya seperti perjalanan menuju surga”</p>
            <h4><br/>Nabi Muhammad SAW.</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="<?=base_url()?>assets/#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="<?=base_url()?>assets/#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="<?=base_url()?>assets/#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="<?=base_url()?>assets/#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Goquery 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  </body>

</html>
