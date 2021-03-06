<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tienda online</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{ asset('Future/assets/css/main.css')}}" />
		<link rel="stylesheet" href="{{ asset('phantom/assets/css/main1.css') }}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="{{ asset('Future/assets/js/jquery.min.js') }}"></script>
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
		    <script>
		        CKEDITOR.replace( 'ckeditor' );
		    </script>
		<script type="text/javascript">
				$(window).load(function() {
					$(".loader").fadeOut("slow");
				});
				$(document).ready(function(){
					/*$("#lateral").load(home);
					/*$("#home1").click(function(){
						alert("Al Inicio");
						$("#contenidos").load("/home1");
					});
					$("#home").click(function(){
    					$.get("/home1", function(home){
							$("#lateral").html(plantilla.lateral);
							});
					});
					/*$("#productos").click(function(){
							$("#contenidos").load('/productos/mostrar');
					});*/

           /* function elimi () {
                var eli = confirm("\u00BFEsta seguro de que quiere eliminar este registro?");
                    return eli;
            };
            function modifi () {
                var mod = confirm("\u00BFEsta seguro de que quiere modificar este registro?");
                    return mod;
            };*/
						$(".update-producto").on('click', function(e){
							//quita la funcion predeterminada que tiene el enlace
							e.preventDefault();
							var id = $(this).data('id');
							var href =$(this).data('href');
							var cantidad = $("#producto_"+id).val();
							//agregar url la cantidad nueva
							//alert(cantidad);
							window.location.href = href +'/'+cantidad;
							return $cantidad;
						});
						// Coger el modal
						var modal = document.getElementById('myModal');
						// coger el boton que habre el modal
						var btn = document.getElementById("myBtn");
						// coge el elemento <span> que cierra el modal
						var span = document.getElementsByClassName("close")[0];
						// Cuando el usuario hace clic abre el modal
						btn.onclick = function() {
						    modal.style.display = "block";
						}
						// cuando el usuario hace clic <span> (x), cierra el modal
						span.onclick = function() {
						    modal.style.display = "none";
						}
						// Cuando el usuario hace clic en cualquier otro sitio tambien cierra modal
						window.onclick = function(event) {
						    if (event.target == modal) {
						        modal.style.display = "none";
						    }
						}
			});

		</script>
	</head>
	<body>

		@if (!Auth::check())
			 @include('plantilla.menu')
		@elseif (Auth::check() && Auth::user()-> type != "Admin" && Auth::user()-> confirmed == "1")
			@include('plantilla.menusesion')
		@elseif (Auth::check() && Auth::user()-> type == "Admin")
			@include('plantilla.menuadmin')
		@elseif (Auth::check())
				 @include('plantilla.menu')
		@endif
<div class="loader"></div>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>Contacte con soporte</h1>
		<p>Si esta teniendo problemas con la plataforma o cualquier otra incidiencia no dude en ponerse en contacto con nosotros, nuestros grupo de soporte al cliente resolverá cualquier duda o problema lo antes posible<br/>
		Puede contactar a través de nuestro correo electronico cristinitalaravel@gmail.com o del número de teléfono 928252525. </p>
  </div>
</div>
		<!-- ************Aqui estaba el menu -->
				<!-- Main -->
					<div id="main">
<!--***************************Aqui iran los contenidos en el contenedor principal-->
						<div id="contenidos">
						@yield('contenido')
						</div>

						<!-- Pagination -->
						<div class="post">
	            <ul class="actions pagination">
	              <li><a href="#" class="disabled button big previous">Página anterior</a></li>
	              <li><a href="#" class="button big next">Pagina siguiente</a></li>
	            </ul>
						</div>
					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
            <div class="">


							<section id="intro">
								<!--<a href="#" class="logo"><img src="{{ asset('Future/images/logo.jpg') }}" alt="" /></a>-->
								<header>
									<h2>Tienda Online</h2>
									<p>Venta de productos online</p>
								</header>
							</section>
							<div id="lateral">

							</div>
						@include('plantilla.lateral')


						<!-- About -->
							<section class="blurb">
								<h2>Sobre Nosotros</h2>
								<p>Descripcion de empresa</p>
								<ul class="actions">
									<li><a href="#" class="button">Leer más</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="mailto:cristinitalaravel@gmail.com" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Cristina Fernández. Diseño: <a href="http://html5up.net">HTML5 UP</a>. Imagenes: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('Future/assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('Future/assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="('assets/js/ie/respond.min.js') }}"></script><![endif]-->
			<script src="{{ asset('Future/assets/js/main.js') }}"></script>

			<!-- Scripts -->
				<script src='https://www.google.com/recaptcha/api.js'></script>
				<script src="{{ asset('phantom/assets/js/jquery.min.js') }}"></script>
				<script src="{{ asset('phantom/assets/js/skel.min.js') }}"></script>
				<script src="{{ asset('phantom/assets/js/util.js') }}"></script>
				<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
				<script src="{{ asset('phantom/assets/js/main.js') }}"></script>

	</body>
</html>
