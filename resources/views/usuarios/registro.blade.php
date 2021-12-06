<h1>Registro de nuevo usuario</h1>
<form action="registro" method="post">
    <label>Nombre de Usuario: </label><input type="text" name="username"><br>
    <label>Mail: </label><input type="text" name="mail"><br>
    <label>Contraseña: </label><input type="password" name="password"><br>
    <button type="submit">Registrarme</button>
</form>

<table>
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Mail</th>
            <th>Contraseña</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td> {{ $item->username }} </td>
                <td> {{ $item->mail }} </td>
                <td> {{ $item->password }} </td>
            </tr>
        @endforeach
    </tbody>
</table>