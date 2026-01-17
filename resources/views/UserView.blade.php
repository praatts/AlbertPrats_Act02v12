<h1>Vista usuario</h1>
<p>Usuarios disponibles</p>
<table>
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Nombre completo</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
