
<nav class="navbar p-0 fixed-top d-flex flex-row">
    
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      
      <ul class="navbar-nav navbar-nav-right">     
        <li class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
            <div class="navbar-profile">
              <img class="img-xs rounded-circle" src="{{asset('assets/images/faces/face15.jpg')}}" alt="">
              <p class="mb-0 d-none d-sm-block navbar-profile-name">Usuário Teste</p>
              <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <h6 class="p-3 mb-0">Perfil</h6>
            <div class="dropdown-divider"></div>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-logout text-danger" data-toggle="modal" data-target="#logoutModal"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1" data-toggle="modal" data-target="#logoutModal">Sair</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center" ></p>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav>