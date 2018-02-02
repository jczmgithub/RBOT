<table class="table" id="userRobot">
    <tr>
        <th>Usuario</th>
        <th>Robot</th>
        <th>Acciones</th>
    </tr>

        <tr>
            <form method="post" action="{{ route("user.asignarRobot") }}">
                {{ csrf_field() }}
            <td>
                <select name='selectUser' class='form-control selector' id="selectUser">
                    <option value='null'>-Seleccione el Usuario-</option>
                    @foreach($users as $key => $user)
                        <option> {{$user->name}} </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select name='selectRobot' class='form-control selector' id="selectRobot">
                    <option value='null'>-Seleccione el Robot-</option>
                    @foreach($robots as $key => $robot)
                    <option> {{$robot->modelo}} </option>
                    @endforeach
                </select>
            </td>
                <td>
                    <button type="submit" class="btn btn-warning">Asignar</button>
                </td>
            </form>
        </tr>
</table>