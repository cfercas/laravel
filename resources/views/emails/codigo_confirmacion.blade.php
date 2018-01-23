
    <div class="post">
      <h1>Confirmación de email</h1>
      <h2>Hola {{ $name }}, gracias por registrarte en
        <strong>en nuestra tienda online</strong> !</h2>
    <p>Por favor confirma tu correo electrónico.</p>
    <p>Para ello simplemente debes hacer click en el siguiente enlace:</p>

    <a href="{{ url('/verificar/email/' . $confirmation_code) }}">
        Clic para confirmar tu email
    </a>
	</div>
