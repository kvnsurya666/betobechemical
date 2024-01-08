<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>SOLUSI PERDANA TEHNIK</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>

<!-- ======= Carousel Section ======= -->
<div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/img/about1.jpg" class="d-block w-100" alt="Gambar 1" />
          </div>
          <div class="carousel-item">
            <img src="/assets/img/about2.jpg" class="d-block w-100" alt="Gambar 2" />
          </div>
          <div class="carousel-item">
            <img src="/assets/img/about3.jpg" class="d-block w-100" alt="Gambar 3" />
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
</div>
<!-- End Carousel -->

<main id="main">
  <section class="container">
    <div class="teks">
      <div class="judul">
        <h2 class="fw-bold">Profil Perusahaan</h2>
      </div>
      <div class="deskripsi">
        <p class="lh-base">
          PT. Solusi Perdana Tehnik berdiri sejak tahun 2023 kami berlokasi di Jalan Mahakam FP-9, Waru, Sidoarjo sebagai office.
        </p>
        <p class="lh-base">
          Kami selalu memberikan pelayanan yang nyaman, aman, dan terpercaya pada customer kami.
        </p>
        <p class="lh-base">
          Banyak item tersedia dalam ready stock dan fast delivery.
        </p>
      </div>
      <div class="row">
        <div class="col-sm-10 col-md-6 col-lg-7 mx-auto">
          <div class="card">
            <img class="card-img" src="/assets/img/kunjungan WEIDA.jpg" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact Us</h2>
      <p>Send us your contact to give more information.</p>
    </div>

    <div class="row">

      <div class="col-md-6 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <form action="<?= site_url('email'); ?>" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" placeholder="Type your message here..." required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center pb-3"><button type="submit">Send Message</button></div>
        </form>
      </div>

      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.940801175178!2d112.76988009938346!3d-7.247578198504547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f998e9faaaab%3A0x5a12e7e7c8ce4369!2sCV.%20CIPTA%20JAYA%20LESTARI!5e0!3m2!1sen!2sid!4v1661408605561!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        

      </div>

    </div>

  </div>
</section><!-- End Contact Us Section -->
</main><!-- End #main -->


<?= $this->endSection(); ?>