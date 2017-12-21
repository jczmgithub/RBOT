<div id="ModificarUsu" class="tabcontent">

    <div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </table>
    </div>

    @foreach($users as $key => $data)
        <p>
            nombre: {{ $data->name }}
            <br>
            email: {{ $data->email }}
        </p>
    @endforeach

</div>