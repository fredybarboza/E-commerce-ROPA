@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <h3>Listado de Pedidos</h3>
   
    <div>
    <table class="table">
  <thead class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUCTOS</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">COLOR</th>
      <th scope="col">TALLA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>a</td>
      <td>a</td>
      <td>a</td>
      <!--<td>
      
      </td>-->
    </tr>
    <tr>
      <th scope="row">Detalles</th>
      <td>Departamento: Itapúa<br>
      Ciudad: Coronel Bogado <br>
      Barrio: Santa Librada 
      </td>
      <td colspan="2">
      Direccion: Atyuwe, ewidj 8329 <br>
      Celular: 0985 67 55 87
      </td>
      <td>
      
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
             Default checkbox
          </label> 
          
        </div>
        <hr>
        <button class="btn btn-secondary">Guardar</button>
        
        
      </td>
      
    </tr>
  </tbody>
</table>
<hr>
</div>
@stop