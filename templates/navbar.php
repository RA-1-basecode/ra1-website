<?php
require 'config1.php';
?>



<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?= base_url('/ra1-website/'); ?>">Ra 1<span class="color-b"> Class</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/ra1-website/'); ?>"">Beranda</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('/ra1-website/tentang'); ?>">Tentang</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('/ra1-website/projects/'); ?>"">Project</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('/ra1-website/blog'); ?>"/">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('/ra1-website/galeri'); ?>"">Galeri</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('/ra1-website/kontak'); ?>"">Kontak</a>
          </li>
        </ul>
      </div>
     <a href="<?= base_url('/ra1-website/login')?>" class="btn btn-b-n rounded mb-4">Masuk</a>
    </div>
  </nav><!-- End Header/Navbar -->
  