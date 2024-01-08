<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>SOLUSI PERDANA TEHNIK</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<!-- ======= Carousel Section ======= -->
<div class="container-fluid">
  <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('/assets/img/home1.jpg'); ?>" class="d-block w-100" alt="Gambar 1" />
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('/assets/img/home2.jpg'); ?>" class="d-block w-100" alt="Gambar 2" />
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('/assets/img/home3.jpg'); ?>" class="d-block w-100" alt="Gambar 3" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlide" data-bs-slide="prev">
      <i class="bi bi-chevron-left" style="color: #067fe2" aria-hidden="true"></i>

    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselSlide" data-bs-slide="next">
      <i class="bi bi-chevron-right" style="color: #067fe2" aria-hidden="true"></i>

    </button>
  </div>
</div>
<!-- End Carousel -->

<main id="main">

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <p>Our Products</p>
      </header>
      <div class="clients-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
          <?php foreach ($merk as $key => $value) : ?>
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>/assets/img/logo/<?= $value->gambar_merk; ?>" class="img-fluid" alt="">
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- End Clients Section -->


  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0 d-flex">
        <div class="col-lg-7 d-flex flex-column justify-content-center order-sm-last order-md-last order-lg-first" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Anti Seize</h2>
            <p>
              Tersedia berbagai macam - macam anti seize yang anda butuhkan untuk perusahaan anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('antiseize'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex justify-content-center order-sm-first order-md-first order-lg-last" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/antiseize.png" class="img-content img-fluid shadow" alt="">
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/rust.png" class="img-content img-fluid shadow" alt="">
        </div>
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Rust Cleaner</h2>
            <p>
              Tersedia berbagai macam - macam Rust cleaner untuk melindungi logam!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('rustcleaner'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0 d-flex">
        <div class="col-lg-7 d-flex flex-column justify-content-center order-sm-last order-md-last order-lg-first" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Electronic Cleaner</h2>
            <p>
              Tersedia berbagai macam - macam Electronic Cleaner untuk anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('electroniccleaner'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center order-sm-first order-md-first order-lg-last" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/electronic.png" class="img-content img-fluid shadow" alt="">
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/engine.png" class="img-content img-fluid shadow" alt="">
        </div>
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Lubricant</h2>
            <p>
              Tersedia berbagai macam - macam pelumas untuk kendaraan anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('lubricant'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0 d-flex">
        <div class="col-lg-7 d-flex flex-column justify-content-center order-sm-last order-md-last order-lg-first" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Air Freshener</h2>
            <p>
              Tersedia berbagai macam - macam pengharum ruangan untuk anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('airfreshener'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center order-sm-first order-md-first order-lg-last" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/lemon.jpg" class="img-content img-fluid shadow" alt="">
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>