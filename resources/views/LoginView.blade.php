<h1>Formulario de login</h1>
<form action="/enviar-formulario" method="POST">
    @csrf
    <label for="">Correo electrónico:</label>
    <input type="email" name="email">
    <br><br>
    <label for="">Contraseña:</label>
    <input type="password" name=password>
    <input type="submit" value="Iniciar sesión">
</form>