<style>
  /* ===== Utility: potong teks panjang ===== */
.highlight-content h2,
.program-header h3,
.program-item .item-content h4,
.news-card-title {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  overflow-wrap: anywhere;
}
.highlight-content h2 { -webkit-line-clamp: 3; }
.program-header h3,
.program-item .item-content h4,
.news-card-title { -webkit-line-clamp: 2; }

/* ===== Card besar: Berita Terkini ===== */
.program-banner {
  background: #fff;
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 18px 45px rgba(11, 31, 51, .12);
  display: flex;
  flex-direction: column;
  height: 100%;
}
.program-banner .banner-image {
  position: relative;
  height: 280px;
  overflow: hidden;
}
.program-banner .banner-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .8s ease;
}
.program-banner:hover .banner-image img { transform: scale(1.07); }

.program-banner .banner-info {
  padding: 26px 28px 28px;
  display: flex;
  flex-direction: column;
  flex: 1;
}
.program-banner .program-header h3 {
  font-size: 1.35rem;
  font-weight: 700;
  line-height: 1.35;
  margin-bottom: 12px;
}
.program-banner .banner-excerpt {
  font-size: 15px;
  line-height: 1.75;
  color: #5b6773;
  margin-bottom: 22px;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.program-banner .discover-btn { margin-top: auto; align-self: flex-start; }

/* ===== List berita kecil di sebelah kanan ===== */
.program-item {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 14px;
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 10px 26px rgba(11, 31, 51, .08);
  transition: transform .3s ease, box-shadow .3s ease;
}
.program-item:hover {
  transform: translateY(-4px);
  box-shadow: 0 16px 34px rgba(11, 31, 51, .14);
}
.program-item .item-icon {
  flex: 0 0 96px;
  width: 96px;
  height: 96px;
  border-radius: 14px;
  overflow: hidden;
}
.program-item .item-icon img { width: 100%; height: 100%; object-fit: cover; }
.program-item .item-content { flex: 1; min-width: 0; }
.program-item .item-content h4 { font-size: 1rem; font-weight: 700; line-height: 1.4; margin-bottom: 6px; }
.program-item .item-content p {
  font-size: 13.5px;
  line-height: 1.6;
  color: #66737f;
  margin-bottom: 6px;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.program-item .meta-info { font-size: 12.5px; color: #8a96a1; }

/* ===== Card berita: Semua Berita ===== */
.news-card {
  display: flex;
  flex-direction: column;
  height: 100%;
  background: #fff;
  border-radius: 22px;
  overflow: hidden;
  text-decoration: none;
  color: inherit;
  box-shadow: 0 12px 32px rgba(11, 31, 51, .09);
  transition: transform .35s ease, box-shadow .35s ease;
}
.news-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 22px 46px rgba(11, 31, 51, .18);
  color: inherit;
}

.news-card-img {
  position: relative;
  aspect-ratio: 16 / 10;
  overflow: hidden;
}
.news-card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .8s ease;
}
.news-card:hover .news-card-img img { transform: scale(1.08); }

.news-card-tag {
  position: absolute;
  top: 14px;
  left: 14px;
  padding: 5px 14px;
  border-radius: 999px;
  background: var(--accent-color, #087f5b);
  color: #fff;
  font-size: 11.5px;
  font-weight: 600;
  letter-spacing: .05em;
  text-transform: uppercase;
}

.news-card-body {
  display: flex;
  flex-direction: column;
  flex: 1;
  padding: 22px 22px 20px;
}
.news-card-title {
  font-size: 1.1rem;
  font-weight: 700;
  line-height: 1.4;
  color: var(--heading-color, #0b1f33);
  margin: 0 0 10px;
}
.news-card-text {
  font-size: 14px;
  line-height: 1.7;
  color: #66737f;
  margin: 0 0 18px;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.news-card-foot {
  margin-top: auto;
  padding-top: 14px;
  border-top: 1px solid #eef1f4;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 12.5px;
  color: #8a96a1;
}
.news-card-more {
  color: var(--accent-color, #087f5b);
  font-weight: 600;
}
.news-card-more i { transition: transform .3s ease; }
.news-card:hover .news-card-more i { transform: translateX(4px); }

@media (max-width: 576px) {
  .program-banner .banner-image { height: 220px; }
  .program-item .item-icon { flex-basis: 80px; width: 80px; height: 80px; }
}
/* ==========================================================
   Highlight & Announcement Cards — modern, elegant treatment
   ========================================================== */
.highlight-card-box {
  position: relative;
  display: flex;
  align-items: center;
  min-height: 380px;
  border-radius: 28px;
  overflow: hidden;
  isolation: isolate;
  box-shadow: 0 26px 55px rgba(11, 31, 51, .18);
  transition: transform .4s ease, box-shadow .4s ease;
}

.highlight-card-box:hover {
  transform: translateY(-6px);
  box-shadow: 0 34px 65px rgba(11, 31, 51, .26);
}

/* Background Image */
.highlight-bg {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  transform: scale(1.04);
  transition: transform .9s cubic-bezier(.19, 1, .22, 1);
}

.highlight-card-box:hover .highlight-bg {
  transform: scale(1.12);
}

/* Overlay Gradient */
.highlight-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(115deg, rgba(11, 31, 51, .93) 10%, rgba(8, 127, 91, .55) 58%, rgba(11, 31, 51, .12) 100%);
}

/* Content */
.highlight-content {
  position: relative;
  z-index: 2;
  max-width: 620px;
  padding: 56px;
  color: #fff;
}

/* Badge */
.badge-highlight {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255, 255, 255, .14);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, .3);
  color: #fff;
  padding: 7px 16px;
  border-radius: 999px;
  font-weight: 600;
  font-size: 12.5px;
  letter-spacing: .06em;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.badge-highlight.badge-announcement {
  background: rgba(255, 193, 7, .18);
  border-color: rgba(255, 193, 7, .45);
  color: #ffd875;
}

/* Title */
.highlight-content h2 {
  font-size: clamp(1.4rem, 2.6vw, 2rem);
  font-weight: 700;
  line-height: 1.28;
  margin-bottom: 14px;
  text-shadow: 0 2px 20px rgba(0, 0, 0, .25);
}

/* Desc */
.highlight-content p {
  font-size: 15.5px;
  line-height: 1.75;
  color: rgba(255, 255, 255, .86);
  margin-bottom: 28px;
}

/* Button */
.btn-highlight {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 26px;
  background: #fff;
  color: var(--heading-color, #0b1f33);
  border-radius: 999px;
  font-weight: 600;
  font-size: 14px;
  text-decoration: none;
  box-shadow: 0 12px 26px rgba(0, 0, 0, .2);
  transition: all .3s ease;
}

.btn-highlight i {
  transition: transform .3s ease;
}

.btn-highlight:hover {
  background: var(--accent-color, #087f5b);
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 16px 32px rgba(8, 127, 91, .35);
}

.btn-highlight:hover i {
  transform: translateX(4px);
}

/* Responsive */
@media (max-width: 768px) {
  .highlight-card-box {
    min-height: unset;
  }

  .highlight-content {
    padding: 30px;
  }
}

/* Pengumuman */

.announcement-box {
  margin-top: 30px;
}

/* Overlay beda warna (biar distinguish dari news) */
.announcement-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(115deg, rgba(11, 31, 51, .88) 10%, rgba(255, 193, 7, .35) 70%, rgba(11, 31, 51, .15) 100%);
}
</style>
  
  
  <main class="main">

  <!-- section  -->

  <section id="highlight-card" class="highlight-card section">

  <div class="container">
    <?php if (!empty($news_highlight)): ?>

      <div class="highlight-card-box">

        <!-- Background Image -->
        <div class="highlight-bg"
             style="background-image: url('<?= base_url('uploads/news/' . $news_highlight['thumbnail']) ?>');">
        </div>

        <!-- Overlay -->
        <div class="highlight-overlay"></div>

        <!-- Content -->
        <div class="highlight-content">

          <span class="badge-highlight"><i class="bi bi-lightning-charge-fill"></i> Highlight</span>

          <h2>
            <?= esc($news_highlight['title']) ?>
          </h2>

          <p>
            <?= word_limiter(strip_tags($news_highlight['content']), 20) ?>
          </p>

          <a href="<?= base_url('news/' . $news_highlight['news_id']) ?>"
             class="btn-highlight">
            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
          </a>

        </div>

      </div>

    <?php endif; ?>
  </div>

</section>

  <!-- section -->

<!--Section pengumuman -->
<section id="announcement" class="announcement section">

  <div class="container">
    <?php if (!empty($announcement)): ?>

      <div class="highlight-card-box announcement-box">

        <!-- Background -->
        <div class="highlight-bg"
             style="background-image: url('<?= base_url('uploads/announcement/' . $announcement['thumbnail']) ?>');">
        </div>

        <!-- Overlay (beda warna biar beda vibe) -->
        <div class="announcement-overlay"></div>

        <!-- Content -->
        <div class="highlight-content">

          <span class="badge-highlight badge-announcement">
            <i class="bi bi-megaphone-fill"></i> Pengumuman <?= esc($announcement['year']) ?>
          </span>

          <h2>
            Pengumuman Terbaru
          </h2>

          <p>
            <?= word_limiter(strip_tags($announcement['content']), 25) ?>
          </p>

          <!-- OPTIONAL kalau nanti mau detail page -->
          <!--
          <a href="<?= base_url('announcement/' . $announcement['announcement_id']) ?>"
             class="btn-highlight">
            Lihat Detail
          </a>
          -->

        </div>

      </div>

    <?php endif; ?>
  </div>

</section>

<!--Section pengumuman -->
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-wrapper">
        <div class="container">
          <div class="row align-items-center g-5">
            <div class="col-lg-7 hero-content" data-aos="fade-right" data-aos-delay="100">
              <span class="hero-eyebrow"><i class="bi bi-mortarboard-fill"></i> Madrasah Aliyah Negeri</span>
              <h1>
  <?= isset($opening) ? esc($opening['header']) : 'Smart, Disiplin, Religius' ?>
</h1>
<p>
  <?= isset($opening)
      ? esc(strip_tags($opening['content']))
      : 'MAN 2 Mandailing Natal berkomitmen menyelenggarakan pendidikan yang bermutu...' ?>
</p>              <div class="action-buttons">
                <a href="#" class="btn-primary">Start Your Journey</a>
                <a href="<?= base_url('sejarah') ?>" class="btn-secondary">Kenali Kami <i class="bi bi-arrow-right"></i></a>
              </div>

              <div class="hero-pillars">
                <div class="pillar-item">
                  <span class="pillar-index">01</span>
                  <div class="pillar-body">
                    <h4><i class="bi bi-book-fill"></i> Smart</h4>
                    <p>Mengembangkan kecerdasan intelektual, kreativitas, dan kemampuan berpikir kritis peserta didik melalui pembelajaran yang aktif, inovatif, dan berorientasi pada prestasi.</p>
                  </div>
                </div>

                <div class="pillar-item">
                  <span class="pillar-index">02</span>
                  <div class="pillar-body">
                    <h4><i class="bi bi-laptop-fill"></i> Disiplin</h4>
                    <p>Menanamkan sikap tertib, tanggung jawab, dan konsistensi dalam belajar maupun berperilaku sebagai fondasi utama kesuksesan di masa depan.</p>
                  </div>
                </div>

                <div class="pillar-item">
                  <span class="pillar-index">03</span>
                  <div class="pillar-body">
                    <h4><i class="bi bi-people-fill"></i> Religius</h4>
                    <p>Membentuk karakter peserta didik yang beriman, berakhlak mulia, dan menjadikan nilai-nilai keislaman sebagai pedoman dalam kehidupan sehari-hari.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 hero-media" data-aos="zoom-in" data-aos-delay="200">
              <div class="hero-media-frame">
<img src="<?= isset($opening) && $opening['image']
    ? base_url('uploads/opening/' . $opening['image'])
    : base_url('assets2/img/education/image1.jpeg') ?>"
     alt="Education"
     class="img-fluid main-image">
              </div>
              <div class="image-overlay">
                <div class="badge-accredited">
                  <i class="bi bi-patch-check-fill"></i>
                  <span>Accredited Excellence</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-up" data-aos-delay="200">
              <h3>Cerita Kami</h3>
              <h2>Menapaki Sejarah, Membangun Generasi Berilmu dan Berakhlak</h2>
              <p>Perjalanan panjang membangun madrasah unggulan yang berlandaskan ilmu pengetahuan, kedisiplinan, dan nilai-nilai keislaman.</p>

              <div class="timeline">

  <?php if (!empty($histories)): ?>
    <?php foreach ($histories as $row): ?>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <h4><?= esc($row['tahun']) ?></h4>
          <p><?= esc($row['history']) ?></p>
        </div>
      </div>
    <?php endforeach ?>
  <?php endif ?>

</div>

            </div>
          </div>

          <div class="col-lg-6">
  <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
    <img src="<?= base_url('assets2/img/image1.jpg') ?>"
         alt="Campus"
         class="img-fluid rounded">

    <div class="mission-vision" data-aos="fade-up" data-aos-delay="400">

      <!-- MISSION -->
      <div class="mission">
        <h3><i class="bi bi-bullseye"></i> Misi Kami</h3>
        <?= isset($mission)
            ? $mission['content']
            : '<p>Mission content not available.</p>' ?>
      </div>

      <!-- VISION -->
      <div class="vision">
        <h3><i class="bi bi-eye-fill"></i> Visi Kami</h3>
        <?= isset($vision)
            ? $vision['content']
            : '<p>Vision content not available.</p>' ?>
      </div>

    </div>
  </div>
</div>
      </div>

    </section><!-- /About Section -->

    <!-- Featured Programs Section -->
    <section id="featured-programs" class="featured-programs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terkini</h2>
        <p>Informasi Terkini Mengenai MAN 2 Mandailing Natal</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
  <?php if (!empty($news_highlight)): ?>
    <div class="program-banner">
      <div class="banner-image">
        <img src="<?= base_url('uploads/news/' . $news_highlight['thumbnail']) ?>"
             alt="Berita"
             class="img-fluid">
        <div class="banner-badge">
          <span class="badge-text"><i class="bi bi-star-fill"></i> Highlight</span>
        </div>
      </div>

      <div class="banner-info">
        <div class="program-header">
          <h3><?= esc($news_highlight['title']) ?></h3>
        </div>

        <p class="banner-excerpt">
  <?= word_limiter(strip_tags($news_highlight['content']), 30) ?>
</p>

        <a href="<?= base_url('news/' . $news_highlight['news_id']) ?>"
           class="discover-btn">
          Baca Berita <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  <?php endif ?>
</div>


<div class="col-lg-6">
  <div class="programs-grid">
    <div class="row g-3">

      <?php foreach ($news_normal as $i => $row): ?>
        <div class="col-12" data-aos="fade-left" data-aos-delay="<?= 200 + ($i * 100) ?>">
          <div class="program-item">

            <div class="item-icon">
              <img src="<?= base_url('uploads/news/' . $row['thumbnail']) ?>"
                   alt="Berita"
                   class="img-fluid">
            </div>

            <div class="item-content">
              <h4><?= esc($row['title']) ?></h4>
              <p><?= esc(substr(strip_tags($row['content']), 0, 100)) ?>...</p>
              <div class="meta-info">
                <span><i class="bi bi-calendar3"></i> <?= date('d M Y', strtotime($row['created_at'])) ?></span>
              </div>
            </div>

            <div class="item-arrow">
              <a href="<?= base_url('news/' . $row['news_id']) ?>">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>

          </div>
        </div>
      <?php endforeach ?>

    </div>
  </div>
</div>
</div>
</div>

    </section><!-- /Featured Programs Section -->

    
    <!-- Recent News Section -->
    <section id="recent-news" class="recent-news section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Semua Berita</h2>
        <p>Kumpulan Berita dan Kegiatan Terbaru MAN 2 Mandailing Natal</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

<?php foreach ($news as $item): ?>
  <div class="col-md-6 col-xl-4" data-aos="fade-up">
    <a href="<?= base_url('news/' . $item['news_id']) ?>" class="news-card">

      <div class="news-card-img">
        <img src="<?= base_url('uploads/news/' . $item['thumbnail']) ?>"
             alt="<?= esc($item['title']) ?>"
             loading="lazy">
        <span class="news-card-tag">Berita</span>
      </div>

      <div class="news-card-body">
        <h3 class="news-card-title"><?= esc($item['title']) ?></h3>

        <p class="news-card-text">
          <?= word_limiter(strip_tags($item['content']), 22) ?>
        </p>

        <div class="news-card-foot">
          <span><i class="bi bi-calendar3"></i> <?= date('d M Y', strtotime($item['created_at'])) ?></span>
          <span class="news-card-more">Baca <i class="bi bi-arrow-right"></i></span>
        </div>
      </div>

    </a>
  </div>
<?php endforeach ?>


</div>


      </div>

    </section><!-- /Recent News Section -->


   <!-- section navigasi -->
<section class="navigation-section py-5">
  <div class="container">

    <span class="nav-eyebrow"><i class="bi bi-grid-1x2-fill"></i> Akses Cepat</span>
    <h3 class="section-title mb-2">Navigasi</h3>
    <p class="section-subtitle mb-5">Akses Fitur Website Lebih Cepat</p>

    <div class="row g-4">

      <!-- Item -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="https://www.ppdb.mansatumandailingnatal.sch.id/" class="nav-card">
          <span class="nav-icon"><i class="bi bi-star-fill"></i></span>
          <span class="nav-label">SNPBD</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="https://rdm.man1mandailingnatal.sch.id/auth#!/dashboard" class="nav-card">
          <span class="nav-icon"><i class="bi bi-journal-text"></i></span>
          <span class="nav-label">RAPORT</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="<?= base_url('outtracat') ?>" class="nav-card">
          <span class="nav-icon"><i class="bi bi-box-arrow-in-right"></i></span>
          <span class="nav-label">PTSP</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="#" class="nav-card">
          <span class="nav-icon"><i class="bi bi-info-circle-fill"></i></span>
          <span class="nav-label">PPID</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="<?= base_url('outzona-integrasi') ?>" class="nav-card">
          <span class="nav-icon"><i class="bi bi-pencil-square"></i></span>
          <span class="nav-label">ZONA INTEGRITAS</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="https://rdm.man1mandailingnatal.sch.id/auth#!/dashboard" class="nav-card">
          <span class="nav-icon"><i class="bi bi-exclamation-circle-fill"></i></span>
          <span class="nav-label">LAPOR</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="<?= base_url('outmutasi-siswa') ?>" class="nav-card">
          <span class="nav-icon"><i class="bi bi-people-fill"></i></span>
          <span class="nav-label">KESISWAAN</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="<?= base_url('outsks') ?>" class="nav-card">
          <span class="nav-icon"><i class="bi bi-book-fill"></i></span>
          <span class="nav-label">KURIKULUM</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="#" class="nav-card">
          <span class="nav-icon"><i class="bi bi-people-network"></i></span>
          <span class="nav-label">HUMAS</span>
        </a>
      </div>

    </div>
  </div>
</section>

<style>
/* section wrapper */
.navigation-section {
  position: relative;
  overflow: hidden;
  background: linear-gradient(160deg, var(--heading-color, #0b1f33) 0%, #13324a 55%, var(--heading-color, #0b1f33) 100%);
  color: #fff;
  border-radius: 28px;
  padding: 64px 32px;
}

.navigation-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 88% 8%, rgba(8, 127, 91, .35), transparent 45%),
    radial-gradient(circle at 6% 95%, rgba(8, 127, 91, .22), transparent 42%);
  pointer-events: none;
}

.navigation-section .container {
  position: relative;
  z-index: 1;
}

.navigation-section .nav-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 16px;
  margin-bottom: 16px;
  border-radius: 999px;
  background: rgba(255, 255, 255, .08);
  border: 1px solid rgba(255, 255, 255, .2);
  color: #8de2c3;
  font-size: 12.5px;
  font-weight: 600;
  letter-spacing: .06em;
  text-transform: uppercase;
}

.navigation-section .section-title {
  font-weight: 700;
  color: #fff;
  text-align: left;
  font-size: clamp(1.5rem, 2.6vw, 2rem);
}

.navigation-section .section-subtitle {
  color: rgba(255, 255, 255, .68);
  text-align: left;
}

/* card styling */
.nav-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 14px;
  padding: 30px 18px;
  background: rgba(255, 255, 255, .04);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, .14);
  border-radius: 18px;
  text-align: center;
  color: #fff;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: .02em;
  transition: all .35s ease;
  width: 100%;
  min-height: 150px; /* bikin semua card rata tinggi */
  box-sizing: border-box;
}

.nav-card .nav-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  border-radius: 16px;
  background: linear-gradient(135deg, rgba(8, 127, 91, .4), rgba(8, 127, 91, .12));
  color: #8de2c3;
  font-size: 1.6rem;
  transition: all .35s ease;
}

/* hover effect */
.nav-card:hover {
  background: var(--accent-color, #087f5b);
  border-color: var(--accent-color, #087f5b);
  color: #fff;
  text-decoration: none;
  transform: translateY(-6px);
  box-shadow: 0 22px 42px rgba(8, 127, 91, .35);
}

.nav-card:hover .nav-icon {
  background: rgba(255, 255, 255, .22);
  color: #fff;
  transform: scale(1.08);
}

@media (max-width: 576px) {
  .navigation-section {
    padding: 44px 20px;
  }
}
</style>
  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-6 footer-about">
          <a href="<?= base_url('home') ?>" class="logo d-flex align-items-center">
            <span class="sitename">MAN 2 Mandailing Natal</span>
          </a>
          <p class="footer-tagline">Madrasah Aliyah Negeri yang Smart, Disiplin, dan Religius — mencetak generasi berilmu dan berakhlak mulia.</p>
          <div class="footer-contact pt-3">
            <p><i class="bi bi-geo-alt-fill"></i> RH5C+3V8, Parbangunan, Kec. Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara 22952</p>
            <p><i class="bi bi-telephone-fill"></i> <span>+62 812 3456 7890</span></p>
            <p><i class="bi bi-envelope-fill"></i> <span>info@man1mandailingnata.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Tautan Cepat</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('home') ?>">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('sejarah') ?>">Sejarah</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('visi-misi') ?>">Visi &amp; Misi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('berita') ?>">Berita</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('pengumuman') ?>">Pengumuman</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-3 footer-links">
          <h4>Layanan</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('outtracat') ?>">PTSP</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('kalender-akademik') ?>">Kalender Akademik</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('outzona-integrasi') ?>">Zona Integritas</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('outmutasi-siswa') ?>">Mutasi Siswa</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="https://pmb.man1mandailingnatal.sch.id/">PPDB Online</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MAN 2 Mandailing Natal</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Wartech Id</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/glightbox/js/glightbox.min.js') ?>"></script>

<!-- Main JS File -->
<script src="<?= base_url('assets2/js/main.js') ?>"></script>


</body>

</html>