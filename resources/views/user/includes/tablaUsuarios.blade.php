<table class=table id="usuarios">
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Confirmado</th>
        <th>Acciones</th>
    </tr>
@foreach($users as $key => $data)
        <tr>
            <td>
                {{ $data->name }}
            </td>
            <td>
                {{ $data->email }}
            </td>
            <td>
                @if($data->confirmado)
                   Si
                 @else
                    No
                @endif
            </td>
            <td>
                <button class="btn btn-sm btn-danger" onclick="eliminarUser('{{ $data->email }}')">
                    <span class="fa fa-times"></span>
                </button>
            </td>
        </tr>
@endforeach
</table>