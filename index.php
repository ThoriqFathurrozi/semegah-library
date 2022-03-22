<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.min.css">
  <script src="https://kit.fontawesome.com/c80485df49.js" crossorigin="anonymous"></script>
  <title>Semegah Library</title>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo">
      <div class="logo-icon"></div>
      <h2 class="logo-text"> Semegah Library</h2>
    </div>
    <nav class="nav">
      <a class="nav-item active" href="#" >Beranda</a>
      <a class="nav-item" href="#" >Info</a>
      <a class="nav-item" href="#" >Event</a>
      <a class="nav-item" href="#" >Berita</a>
      <a class="nav-item" href="#" >Tentang</a>
    </nav>
    <a href="https://katalog.smkn1glagah.sch.id/" class="btn">Katalog Kami</a>
  </header>

  <!-- Main -->
  <main>
    <section class="karya-wrap box">
      <h1 class="karya-title">Karya Kami</h1>
      <p class="karya-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, delectus.</p>
      <div class="karya-box-wrap">
        <div class="karya-box-item">
          <h2>Buku</h2>
          <p>Cek Karya Buku Kami.</p>
          <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        <div class="karya-box-item">
          <h2>Karyaku</h2>
          <p>Cek Karya Kami Yang Lain.</p>
          <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </div>
    </section>

    <section class="new-book-wrap box">
      <h1 class="new-book-title">Koleksi Baru</h1>
      <p class="new-book-desc">Buku Baru, Bacaan Baru</p>
      <div class="new-book-list">
        <div class="new-book-item">
          <img class="new-book-item-img" src="./img/book-peony.jpg" alt="Image Buku">
          <h3 class="new-book-item-title">Judul Buku</h3>
          <p class="new-book-item-author">Penulis</p>
        </div>
        <div class="new-book-item">
          <img class="new-book-item-img" src="./img/book-hidden-world.jpg" alt="Image Buku">
          <h3 class="new-book-item-title">Judul Buku</h3>
          <p class="new-book-item-author">Penulis</p>
        </div>
        <div class="new-book-item">
          <img class="new-book-item-img" src="./img/book-tom.png" alt="Image Buku">
          <h3 class="new-book-item-title">Judul Buku</h3>
          <p class="new-book-item-author">Penulis</p>
        </div>
      </div>
    </section>

    <section class="popular-book-wrap"></section>
    <section class="event -wrap"></section>
    <section class="author-wrap"></section>
  </main>

</body>
</html>