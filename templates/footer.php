<?php
// require 'config1.php';
$artikel = query("SELECT * FROM artikel ORDER BY id DESC LIMIT 5");
$project = query("SELECT * FROM project ORDER BY id DESC LIMIT 5");
?>


<!-- footer -->
<!-- ======= Footer ======= -->
  <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
              <div class="w-header-a">
              <img src="<?= BASE_URL?>assets/img/ra-1.png" height="180" alt="ra-1">
              </div>
              <div class="w-body-a">
                <p class="w-text-a color-text-a">
                Kami adalah Mahasiswa Universitas Primagraha fakultas Teknik Informatika kelas Ra 1 tahun angkatan 2022.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">Kabar Terbaru</h3>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <?php foreach($artikel as $row) : ?>
                  <ul class="list-unstyled">
                    <li class="item-list-a">
                      <i class="bi bi-chevron-right"></i> <a href="<?= BASE_URL?>blog/ra1_posts?id=<?= $row['id']; ?>"><?= $row['judul']; ?></a>
                    </li>
                  </ul>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">Project Terbaru</h3>
              </div>
              <div class="w-body-a">
                <?php foreach($project as $row) : ?>
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="<?= BASE_URL?>projects/ra1_projects?id=<?= $row['id']; ?>"><?= $row['subject']; ?></a>
                  </li>
                </ul>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-2 section-md-t3">
            <div class="widget-a">
            <a href="https://info.flagcounter.com/k8Bx"><img src="https://s11.flagcounter.com/count2/k8Bx/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="nav-footer">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="<?= BASE_URL?>">Beranda</a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= BASE_URL?>tentang">Tentang</a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= BASE_URL?>projects/">Project</a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= BASE_URL?>blog/">Blog</a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= BASE_URL?>kontak">Kontak</a>
                </li>
              </ul>
            </nav>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="bi bi-github fs-3" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="copyright-footer">
              <p class="copyright color-text-a">
                &copy; Copyright
                <span class="color-a">UPG Teknik Informatika Ra 1 Class 2022</span> All Rights Reserved.
              </p>
            </div>
            <div class="credits">
              Built with <i class="bi bi-heart text-danger"></i> by
              <a href="http://ferlanferlani.rf.gd" target="_blank"
                >Ferlan Ferlani</a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End  Footer -->