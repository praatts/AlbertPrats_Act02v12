<h1>Vista administrador</h1>
<p>Usuarios disponibles</p>
<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Nombre</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->email }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->role }}</td>
        </tr>
        @endforeach
    </tbody>
</table>