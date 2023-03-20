 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('images/eotc-logo-original-2.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
              <a href="index.php" class="nav-link home ">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
               </li>
            <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="margin-left:10px;background-color:#282828;border-radius:5px;">
              <li class="nav-item">
                <a href="User.php" class="nav-link ">
                  <i class="fas fa-angle-right"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Role.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Role</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Menu
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="margin-left:10px;background-color:#282828;border-radius:5px;">
              <li class="nav-item">
                <a href="{{ route('admin.menu.topMenu') }}" class="nav-link ">
                  <i class="fas fa-angle-right"></i>
                  <p>Top menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Role.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Submenu</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>
                About us
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview"  style="margin-left:10px;background-color:#282828;border-radius:5px;">
              <li class="nav-item">
                <a href="Presidentmessage.php" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>President message</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="MissionVision.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Mission/Vision</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="Boardmemeber.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Board Members</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Senatecouncil.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Senate council</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Legislation.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Legislation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Background.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Background</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Gallery.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Contact.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <a href="Statistics.php" class="nav-link list">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Statistics

                </p>
              </a>
               </li>
               <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Academics
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview"  style="margin-left:10px;background-color:#282828;border-radius:5px;">
            <li class="nav-item">
                <a href="Campus.php" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Campus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Institues.php" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Institute</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="College.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>College</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Department.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Department</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Announcement
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview"  style="margin-left:10px;background-color:#282828;border-radius:5px;">
            <li class="nav-item">
                <a href="news" class="nav-link ">
                  <i class="fas fa-angle-right"></i>
                  <p>News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Events.php" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Institues.php" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Institute</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="College.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>College</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Department.php" class="nav-link">
                <i class="fas fa-angle-right"></i>
                  <p>Department</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
