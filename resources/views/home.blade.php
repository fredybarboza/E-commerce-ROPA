@extends('layouts.app')

@section('content')

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 350px;
  height: 70px;
  padding: 10px;
  border: 1px solid #aaaaaa;"></div>
<br>
<img id="drag1" src="https://i.pinimg.com/originals/40/e3/e4/40e3e44bb71c1f6e945f60073418834c.jpg" draggable="true" ondragstart="drag(event)" width="336" height="69">


    <script> 
        function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
    </script>
@endsection

@section('js')
    
@stop


