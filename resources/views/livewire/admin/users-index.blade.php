<div>
    <div class="card">
      <div class="card-header">
        <input wire:model="search" class="form-control">
      </div>
      @if($users->count())
       <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">E-MAIL</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $u)
              <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                @csrf
                <td width="10px"><a class="btn btn-primary" href="{{route('usuarios.edit',$u)}}">Editar</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
       </div>
       <div class="card-footer">
          {{$users->links()}}
       </div>
    </div>
    @else
    <div class="card-body">
        <strong>No se han encontrado resultados para tu búsqueda</strong>
    </div>
    @endif
</div>

