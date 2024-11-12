<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <a href="https://smkassalaambandung.sch.id/"><img src="https://pklsmk.com/wp-content/uploads/2022/02/5a1e12ade5d4d.png" class="logo-img"></a>
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0"></h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
          <li>
            <a href="{{ url('/home') }}">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
          <li>

            </a>
          </li>
            {{-- <a href="{{ route('user.index') }}">
              <div class="parent-icon"><i class="material-icons-outlined">person</i>
              </div>
              <div class="menu-title">User Management</div>
            </a>
          </li> --}}
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
              </div>
              <div class="menu-title">Tasty Food</div>
            </a>
            <ul>
              <li><a href="{{ route('berita.index') }}"><i class="material-icons-outlined">arrow_right</i>Berita</a>
              </li>
              <li><a href="{{ route('gallery.index') }}"><i class="material-icons-outlined">arrow_right</i>Gallery</a>
              </li>
              <li><a href="{{ route('kontak.index') }}"><i class="material-icons-outlined">arrow_right</i>Kontak</a>
              </li>
              {{-- <li><a href="{{ route('tentang.index') }}"><i class="material-icons-outlined">arrow_right</i>Tentang</a>
              </li> --}}
              <li><a href="{{ route('message.index') }}"><i class="material-icons-outlined">arrow_right</i>Message</a>
              </li>
            </ul>
          </li>
         </ul>
        <!--end navigation-->
    </div>
  </aside>
