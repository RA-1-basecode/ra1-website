<?php
// cetak session admin yang login
if($_SESSION['super_admin']) {
	$login = $_SESSION['super_admin'];

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
                <a
                  class="nav-icon dropdown-toggle d-inline-block d-sm-none"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  <div class="profile">
                  <img
                    src="foto-profile/6343c1c987166.png"
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
                    src="foto-profile/6343c1c987166.png"
                    class="avatar img-fluid rounded me-1"
                    alt="Photo Profile"
                  />
                  <span class="text-dark"><?= $data_admin['nama_lengkap']; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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