<?php
require 'config2.php';

?>


<!-- footer -->
<!-- ======= Footer ======= -->
  <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">Ra1 <span style="color: #2eca6a;">Class</span></h3>
              </div>
              <div class="w-body-a">
                <p class="w-text-a color-text-a">
                Kami adalah Mahasiswa Universitas Primagraha fakultas Teknik Informatika kelas Ra 1 tahun angkatan 2022.
                </p>
              </div>
              <div class="w-footer-a">
                <ul class="list-unstyled">
                  <li class="color-a">
                    <span class="color-text-a">Admin: </span>085813100467
                  </li>
                  <li class="color-a">
                    <span class="color-text-a">Email : </span> ferlanferlani.id@gmail.com
                  </li>
                </ul>
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
                      <i class="bi bi-chevron-right"></i> <a href="blog/ra1_posts?id=<?= $row['id']; ?>"><?= $row['judul']; ?></a>
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
                    <i class="bi bi-chevron-right"></i> <a href="projects/ra1_projects?id=<?= $row['id']; ?>"><?= $row['subject']; ?></a>
                  </li>
                </ul>
                <?php endforeach; ?>
              </div>
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
                  <a href="<?= base_url('/ra1-website/'); ?>">Beranda</a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= base_url('/ra1-website/tentang'); ?>">Tentang</a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= base_url('/ra1-website/projects/'); ?>">Project</a>
                </li>
                <li class="list-inline-item">
                  <a href="blog/">Blog</a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= base_url('/ra1-website/kontak'); ?>">Kontak</a>
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
                <span class="color-a">Ra 1 Class</span> All Rights Reserved.
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