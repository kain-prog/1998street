<nav class="navbar navbar-expand-lg" style="background: #010101; border-bottom:1px solid #ffffff1f">
    <div class="container w-100 d-flex align-items-center justify-content-between" >
        <div class="col-3">

        </div>

        <h1 class="col-6 d-flex align-items-center justify-content-center">
            <a href="#">
                <img src="/imgs/logo.png" alt="logo 1999Street" style="width: 165px;">
            </a>
        </h1>

        <div id="info-login" class="col-3 d-flex align-items-center justify-content-center">
            
            {{-- <div class="d-flex align-items-center justify-content-center ">
                <a class="text-decoration-none" href="#" style="color: #ffffffdb;">Entrar</a>
                <span class="mx-4" style="color: #ffffffdb;">|</span>
                <a class="text-decoration-none" href="#" style="color: #ffffffdb;">Cadastrar</a>
            </div> --}}

            <div class="dropdown me-3">
          
              <a href="#" id="name-account" class="text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffffdb;">
                  <img class="avatar rounded-circle border border-secondary me-1" src="/imgs/avatar/pxllera-avatar.jpeg" alt="avatar" width="30px" height="30px">
                  <span>Paullo Gabriel</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Minha Conta</a></li>
                <li><a class="dropdown-item" href="#">Meus Pedidos</a></li>
                <li><a class="dropdown-item text-danger" href="#">Sair</a></li>
              </ul>
            </div>

            <a id="notification" class="position-relative ms-3" href="">
                <i class="fa-solid fa-bell" style="color: #ffffffdb; font-size: 20px;"></i>
                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-secondary rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                </span>
            </a>

            <a id="cart" class="position-relative ms-4" href="#">
                <i class="fa-solid fa-cart-shopping" style="color: #ffffffdb; font-size: 25px;"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    7
                    <span class="visually-hidden">Carrinhos Adicionados</span>
                </span>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars" style="color: #ffffffdb;"></i>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel" style="background: #010101;">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title text-center" id="sidebarLabel">
                <img src="/imgs/logo.png" alt="logo 1999Street" style="width: 100px;">
              </h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#" style="color: #ffffffdb;">Minha Conta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: #ffffffdb;">Meus Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Sair</a>
                </li>
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffffdb;">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#" style="color: #ffffffdb;">Action</a></li>
                    <li><a class="dropdown-item" href="#" style="color: #ffffffdb;">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#" style="color: #ffffffdb;">Something else here</a></li>
                  </ul>
                </li> --}}
              </ul>
              {{-- <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form> --}}
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg" style="background: #010101;">
    <div class="container d-flex align-items-center justify-content-center">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="" style="font-size: 13px; color: #ffffffdb;">Todos os Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="" style="font-size: 13px; color: #ffffffdb;">Categorias</a></li>
            <li class="nav-item"><a class="nav-link" href="" style="font-size: 13px; color: #ffffffdb;">Mais Vendidos</a></li>
            <li class="nav-item"><a class="nav-link" href="" style="font-size: 13px; color: #ffffffdb;">Descontos</a></li>
        </ul>
    </div>
</nav>