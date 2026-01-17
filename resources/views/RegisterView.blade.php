<h1>Formulario de registro</h1>
<form action="/register" method="POST">
    @csrf
    <label for="">Nombre completo: </label>
    <input type="text" name='name'>
    <br><br>
    <label for="">Nombre de usuario: </label>
    <input type="text" name="username">
    <br><br>
    <label for="">Correo electrónico: </label>
    <input type="email" name="email">
    <br><br>
    <label for="">Contraseña: </label>
    <input type="password" name="password">
    <br><br>
    <input type="submit" value="Registrarme">
    <br><br>
    <a href="/">¿Ya tienes cuenta? Inicia sesión</a>
</form>
