<?php
// cetak session admin yang login
if($_SESSION['admin']) {
	$login = $_SESSION['admin'];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $login");
	$data_admin = mysqli_fetch_assoc($result);
}
?>




<nav class="navbar navbar-expand navbar-light navbar-bg">
          <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
          </a>

          <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
              <li class="nav-item dropdown">
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
                    alt="Charles Hall"
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
                    alt="Charles Hall"
                  />
                  <span class="text-dark"><?= $data_admin['nama_lengkap']; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="profile"
                    ><i class="align-middle me-1" data-feather="user"></i>
                    Profile</a
                  >
                  <a class="dropdown-item" href="diskusi"
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