<div id="ModificarUsu" class="tabcontent">

    @foreach($users as $key => $data)
        <p>
            nombre: {{ $data->name }}
            <br>
            email: {{ $data->email }}
        </p>
    @endforeach

</div>