
<?php
session_start();
// JIKA TIDAK ADA SESSION, PAKSA BALIK KE LOGIN
if (!isset($_SESSION['nama_user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Santri</title>
  <link rel="stylesheet" href="dashboard.css">

</head>
<body>

  <!-- ===== SIDEBAR ===== -->
  <aside class="sidebar">
    <div class="sidebar-logo">
      <img src="images/smartsantri.jpg" alt="SmartSantri">
    </div>
    <div class="sidebar-user">
      <p><strong>Nida Kamilia</strong></p>
      <span class="status active">Aktif</span>
    </div>

    <h4>TAHAP KEMAJUAN</h4>
    <ul>
      <li>Metode Penelitian <span>95%</span></li>
      <li>Pembelajaran Al-Qur’an <span>80%</span></li>
      <li>Adab dan Akhlak <span>70%</span></li>
    </ul>

    <h4>NASIONAL</h4>
    <ul>
      <li>Kompetisi <span>50%</span></li>
      <li>Fikih Kontemporer <span>30%</span></li>
    </ul>

    <h4>INTERNASIONAL</h4>
    <ul>
      <li>Submit Jurnal <span>10%</span></li>
      <li>Bahasa Internasional <span>5%</span></li>
    </ul>

  
  </aside>

  <!-- ===== MAIN ===== -->
  <main class="main-content">

   <header class="topbar">
  <ul class="topbar-nav">
    <li><a href="#" class="active">Dashboard</a></li>
    <li><a href="modulpembelajaran.html">Modul Pembelajaran</a></li>
    <li><a href="mentoring.html">Mentoring</a></li>
    <li><a href="tips penelitian.html">Tips Penelitian</a></li>
    <li><a href="progress dan pencapaian.html">Progres & Pencapaian</a></li>
    <li><a href="forum diskusi.html">Forum Diskusi</a></li>
    <li><a href="cari partner riset.html">Cari Partner Riset</a></li>
  </ul>
  <div class="user-avatar">
    <img src="images/user.jpg" alt="User">
  </div>
</header>


    <!-- ===== DASHBOARD CONTENT ===== -->
    <section class="dashboard">
      <h1>Dashboard Santri</h1>

      <!-- Modul -->
      <div class="section-header">
        <h2>Modul Pembelajaran</h2>
        <span class="level">Level 4 - Ahli</span>
        <span class="points">2,450 Poin</span>
        <span class="badge">Lencana Emas Coding</span>
        <span class="rank">Peringkat Nasional #12</span>
      </div>

      <div class="card-grid">
        <!-- Modul 1 -->
        <div class="card">
          <img src="images/python.jpg" alt="">
          <div class="card-body">
            <h3>Dasar-dasar Pemrograman Python</h3>
            <p>Pelajari sintaks dasar, tipe data, dan struktur kontrol dalam Python untuk memulai coding.</p>
            <div class="progress"></div>
            <button class="btn-primary">Mulai Pelajaran</button>
          </div>
        </div>
        <!-- Modul 2 -->
        <div class="card">
          <img src="images/What-is-data-science-2.jpg" alt="">
          <div class="card-body">
            <h3>Pengenalan Ilmu Data</h3>
            <p>Jelajahi konsep dasar ilmu data, statistik, dan visualisasi menggunakan studi kasus nyata.</p>
            <div class="progress"></div>
            <button class="btn-primary">Mulai Pelajaran</button>
          </div>
        </div>
        <!-- Modul 3 -->
        <div class="card">
          <img src="images/fisika.png" alt="">
          <div class="card-body">
            <h3>Fisika Dasar: Mekanika</h3>
            <p>Pahami hukum gerak Newton, energi, dan momentum dengan video interaktif dan kuis.</p>
            <div class="progress"></div>
            <button class="btn-primary">Mulai Pelajaran</button>
          </div>
        </div>
      </div>

    <section class="projects-section">
  <h2>Proyek & Kompetisi</h2>

  <div class="project-grid">
    <!-- Card 1 -->
    <div class="project-card">
      <span class="tag orange">Tantangan Bulanan</span>
      <h3>Membuat Aplikasi Pengingat Salat</h3>
      <p>Kembangkan aplikasi seluler sederhana yang mengingatkan waktu salat harian dengan fitur adzan.</p>
      <span class="deadline">Tenggat: 25 Mei</span>
      <button class="btn-outline">Lihat Detail</button>
    </div>

    <!-- Card 2 -->
    <div class="project-card">
      <span class="tag orange">Proyek Mini</span>
      <h3>Visualisasi Data Populasi Dunia</h3>
      <p>Gunakan dataset publik untuk membuat visualisasi interaktif tren populasi global.</p>
      <span class="deadline">Selesai</span>
      <button class="btn-outline">Lihat Detail</button>
    </div>

    <!-- Card 3 -->
    <div class="project-card">
      <span class="tag orange">Kompetisi Esai</span>
      <h3>Peran Santri di Era Digital</h3>
      <p>Tulis esai tentang bagaimana santri dapat berkontribusi pada kemajuan teknologi dan masyarakat.</p>
      <span class="deadline">Sedang Berlangsung</span>
      <button class="btn-outline">Lihat Detail</button>
    </div>
  </div>
</section>

<!-- ===== MENTORSHIP & FEEDBACK ===== -->
<section class="mentorship">
  <h2>Mentorship & Feedback</h2>
  <div class="mentor-grid">

    <!-- Mentor 1 -->
    <div class="mentor-card">
      <img src="images/ustadzah.jpg" alt="Ustadzah Fatimah" class="mentor-photo">
      <div class="mentor-info">
        <h3>Ustadzah Fatimah</h3>
        <p>Pembimbing Bahasa Arab & Qur'an</p>
        <div class="mentor-actions">
          <button class="btn-outline">💬 Chat</button>
          <button class="btn-outline">🎥 Video Call</button>
        </div>
      </div>
      <span class="status-dot online"></span>
    </div>

    <!-- Mentor 2 -->
    <div class="mentor-card">
      <img src="images/Budi-Utomo.jpg" alt="Dr. Budi Santoso" class="mentor-photo">
      <div class="mentor-info">
        <h3>Dr. Budi Santoso</h3>
        <p>Mentor Coding & Data Science</p>
        <div class="mentor-actions">
          <button class="btn-outline">💬 Chat</button>
          <button class="btn-outline">🎥 Video Call</button>
        </div>
      </div>
      <span class="status-dot away"></span>
    </div>

  </div>
</section>

<!-- ===== NOTIFIKASI ===== -->
<section class="notifications">
  <h2>Notifikasi</h2>

  <div class="notif-item">
    <div class="notif-icon green">🔔</div>
    <div class="notif-text">
      <h4>Umpan Balik Mentor</h4>
      <p>Ustadzah Fatimah telah memberikan umpan balik pada esai Anda: 'Peran Santri di Era Digital'.</p>
      <span class="time">10 menit yang lalu</span>
    </div>
  </div>

  <div class="notif-item">
    <div class="notif-icon gray">ℹ️</div>
    <div class="notif-text">
      <h4>Jadwal Baru</h4>
      <p>Sesi Mentorship dengan Dr. Budi Santoso dijadwalkan ulang menjadi Jumat, 17 Mei pukul 14:00.</p>
      <span class="time">1 jam yang lalu</span>
    </div>
  </div>

  <div class="notif-item">
    <div class="notif-icon green">🔔</div>
    <div class="notif-text">
      <h4>Peringatan</h4>
      <p>Tantangan Bulanan: 'Membuat Aplikasi Pengingat Salat' akan segera berakhir. Pastikan untuk mengirimkan proyek Anda!</p>
      <span class="time">3 jam yang lalu</span>
    </div>
  </div>
</section>


<!-- ===== TIPS KOLABORASI INTERNASIONAL ===== -->
<section class="tips-collab">
  <div class="tips-container">
    <div class="tips-header">
      <span class="tips-icon">🌐</span>
      <h2>Tips Kolaborasi Internasional</h2>
    </div>
    <p>
      Pelajari cara berpartisipasi dalam proyek global dan membangun jaringan dengan rekan-rekan dari seluruh dunia. 
      Temukan mentor yang berpengalaman dalam kolaborasi internasional atau gunakan template email kami untuk kontak awal.
    </p>
    <div class="tips-actions">
      <button class="btn-green">Cari Mentor</button>
      <button class="btn-outline">Template Email</button>
    </div>
  </div>
</section>

<!-- ===== KOMPETISI & INFO PENDANAAN ===== -->
<section class="funding">
  <h2>Kompetisi & Info Pendanaan</h2>

  <div class="funding-grid">
    <!-- Card 1 -->
    <div class="fund-card">
      <h3>Lomba Karya Tulis Ilmiah Santri 2025</h3>
      <p>Kesempatan bagi santri untuk mengembangkan kemampuan menulis dan berpikir kritis
         tentang isu-isu kontemporer.</p>
      <span class="deadline">Tenggat: 20 November 2024</span>
      <button class="btn-green">Daftar</button>
    </div>

    <!-- Card 2 -->
    <div class="fund-card">
      <h3>Hibah Riset Pesantren</h3>
      <p>Dukungan finansial untuk proyek penelitian inovatif yang berfokus pada pengembangan komunitas pesantren.</p>
      <span class="deadline">Tenggat: 15 Desember 2024</span>
      <button class="btn-green">Lihat Detail</button>
    </div>

    <!-- Card 3 -->
    <div class="fund-card">
      <h3>Call for Paper: Jurnal Pendidikan Islam</h3>
      <p>Undangan untuk mengirimkan artikel ilmiah ke jurnal terkemuka di bidang pendidikan Islam.</p>
      <span class="deadline">Tenggat: 30 Januari 2025</span>
      <button class="btn-green">Lihat Detail</button>
    </div>

    <!-- Card 4 -->
    <div class="fund-card">
      <h3>Beasiswa Mahasiswa Berprestasi</h3>
      <p>Program beasiswa bagi santri berprestasi yang ingin melanjutkan pendidikan tinggi di dalam dan luar negeri.</p>
      <span class="deadline">Tenggat: 10 Februari 2025</span>
      <button class="btn-green">Daftar</button>
    </div>
  </div>

  <a href="#" class="see-all">Lihat Semua</a>
</section>

</body>
</html>
