<h1>Formulario de login</h1>
<form action="/enviar-formulario" method="POST">
    @csrf
    <label for="">Nombre de usuario:</label>
    <input type="text" name="username">
    <br><br>
    <label for="">Contraseña:</label>
    <input type="password" name="password">
    <br><br>
    <input type="submit" value="Iniciar sesión">
    <br><br>
    <a href="/registro">¿No tienes cuenta? Registrate</a>
</form>