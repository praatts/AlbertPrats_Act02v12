<h1>Vista usuario</h1>
<p>Usuarios disponibles</p>
<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->email }}</td>
            <td>{{ $user->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
