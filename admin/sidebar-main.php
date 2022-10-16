<?php
// cetak session admin yang login
if($_SESSION['admin']) {
	$login = $_SESSION['admin'];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $login");
	$data_admin = mysqli_fetch_assoc($result);
}




$notifikasi = query("SELECT * FROM kontak ORDER BY id DESC LIMIT 3");

$result = mysqli_query($conn, "SELECT * FROM kontak");

$cout = mysqli_num_rows($result);



?>




<nav class="navbar navbar-expand navbar-light navbar-bg">
          <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
          </a>

          <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator"><?= $cout; ?></span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									 Notifikasi Terbaru
								</div>
								<div class="list-group">
									<?php foreach($notifikasi as $row) : ?>
										<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="mail"></i>
											</div>
											<div class="col-10">
												<div class="text-dark"><?= $row['email']; ?></div>
												<div class="text-muted small mt-1"><?= $row['nama']; ?></div>
												<div class="text-muted small mt-1"><?= $row['hari']; ?></div>
												<div class="text-muted small mt-1"><?= $row['menit']; ?></div>
											</div>
										</div>
									</a>
								<?php endforeach; ?>
								</div>
								<div class="dropdown-menu-footer">
									<a href="pesan" class="text-muted">Tampilkan Semua Notifikasi</a>
								</div>
							</div>
            <li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" onclick="return confirm('Mohon maaf halaman ini belum bisa di akses,  dikarenakan masih dalam tahap pengembangan! Terimakasih by: Ferlan Ferlani')" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
						</li>
              <li class="nav-item dropdown">
                <a
                  class="nav-icon dropdown-toggle d-inline-block d-sm-none"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  <div class="profile">
                  <img
                    src="foto-profile/<?= $data_admin['photo']; ?>"
                    class="avatar img-fluid rounded me-1"
                    alt="<?= $data_admin['nama_lengkap']; ?>"
                  />
                  </div>
                </a>

                <a
                  class="nav-link dropdown-toggle d-none d-sm-inline-block"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  <img
                    src="foto-profile/<?= $data_admin['photo']; ?>"
                    class="avatar img-fluid rounded me-1"
                    alt="Photo Profile"
                  />
                  <span class="text-dark"><?= $data_admin['nama_lengkap']; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="profile"
                    ><i class="align-middle me-1" data-feather="user"></i>
                    Profile</a
                  >
                  <a class="dropdown-item" href="#"  onclick="return confirm('Mohon maaf halaman ini belum bisa di akses, dikarenakan masih dalam tahap pengembangan! Terimakasih by: Ferlan Ferlani')"
                    ><i
                      class="align-middle me-1"
                      data-feather="message-square"
                    ></i>
                    Diskusi</a
                  >
                  <a class="dropdown-item" href="settings"
                    ><i
                      class="align-middle me-1"
                      data-feather="settings"
                    ></i>
                    Settings</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout"
                    ><i
                      class="align-middle me-1"
                      data-feather="log-out"
                    ></i>
                    Keluar</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </nav>