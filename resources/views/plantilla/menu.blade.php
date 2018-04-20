<!-- Wrapper -->
  <div id="wrapper">

    <!-- Header -->
      <header id="header">
        <h1><a href="#">Mi proyecto</a></h1>
        <nav class="links">
          <ul>
            <li><a href="/home" id="home">Inicio</a></li>
            <li><a href="/productos/mostrar" id="productos">Productos</a></li>
            <li><a href="/private">Inicia Sesion</a></li>
            <li><a href="/registro">Registrate</a></li>
            <li><a href="/empleados">Prueba</a></li>
            <li><a href="/noticias">Artículos</a></li>
            <li><a id="myBtn" href="#">Soporte</a></li>

            <li style="float:right;margin:20px"><a href="{{ route('mostrar-carrito') }}"><img src={{ asset('imagenes/carrito.ico') }} width='25' height='25' onclick=""></a></li>
          </ul>
        </nav>
        <nav class="main">
          <ul>
            <li class="search">
              <a class="fa-search" href="#search">Buscar</a>
              <form id="search" method="get" action="#">
                <input type="text" name="query" placeholder="Search" />
              </form>
            </li>
            <li class="menu">
              <a class="fa-bars" href="#menu">Menu</a>
            </li>
          </ul>
        </nav>
      </header>

    <!-- Menu -->
      <section id="menu">

        <!-- Search -->
          <section>
            <form class="search" method="get" action="#">
              <input type="text" name="query" placeholder="Search" />
            </form>
          </section>

        <!-- Links -->
          <section>
            <ul class="links">
              <li>
                <a href="#">
                  <h3>Categoria 1</h3>
                  <p>Enlace a tipo de producto</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <h3>Categoria 2</h3>
                  <p>Tipo de productos 2</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <h3>Categoria 3</h3>
                  <p>Tipo de productos 3</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <h3>Categosria 4</h3>
                  <p>Tipo de productos 4</p>
                </a>
              </li>
            </ul>
          </section>

        <!-- Actions -->
          <section>
            <ul class="actions vertical">
              <li><a href="/private" class="button big fit">Gestión</a></li>
            </ul>
          </section>

      </section>
