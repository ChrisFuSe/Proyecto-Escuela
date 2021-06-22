@extends('templates.pagina-menu-botones')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
@endsection

@section('header-scripts')
<script src="{{asset('js\jquery-3.5.1.js')}}"></script>
<script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js\responsive.bootstrap5.min.js')}}"></script>
@endsection

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion','Cambiar Precios')

@section('cuerpo')
<div class="card" style="margin-top: 1%">
    <div class="card-body">
        <form action="{{route('cambiar.precios')}}" method="POST" class="row">
            @csrf
            <div class="col input-group">
                <label class="input-group-text">Concepto</label>
                <select name="concepto" class="form-select">
                    <option disabled>Seleccione...</option>
                    @if (empty($conceptos))
                    @else
                    @foreach ($conceptos as $concepto)
                    <option value="{{$concepto->id_concepto}}">{{$concepto->id_concepto}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="col input-group">
                <label class="input-group-text">Precio</label>
                <input type="number" class="form-control" name="precio" placeholder="$" min="0" required>
            </div>
            <div class="col-2" style="margin-top:1%;">
                <button type="submit" class="btn btn-dark">Cambiar</button>
            </div>
        </form>
    </div>
</div>


<div class="card" id="carta_pagos">
    <div class="card-body">
        <table id="costos" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="table-primary" scope="col">Concepto</th>
                    <th class="table-primary" scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                @if (empty($conceptos))
                @else
                @foreach ($conceptos as $concepto)
                <tr>
                    <td>{{$concepto->id_concepto}}</td>
                    <td>{{$concepto->monto}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        let pagos = $('#costos').DataTable();
    });
</script>
@endsection