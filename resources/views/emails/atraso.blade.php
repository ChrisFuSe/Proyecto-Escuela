@extends('templates.correo')

@section('cuerpo')
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    <tr>
        <td style="padding: 0">
            <img style="padding: 0; display: block; border-radius: 3%;" src="{{asset('img/Cabecera-Prestige.png')}}" width="100%">
        </td>
    </tr>
    
    <tr>
        <td style="background-color: #ecf0f1">
            <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
                <h2 style="color: #e67e22; margin: 0 0 7px">Se le recuerda que tiene un atraso a su adeudo</h2>
                <p style="margin: 2px; font-size: 15px">Adeudo: {{$detalles['concepto']}}</p>
                <p style="margin: 2px; font-size: 15px">Monto: ${{$detalles['monto']}}</p>
                <p style="margin: 2px; font-size: 15px">Adeudo generado el: {{$detalles['fecha']}}</p>
                <p style="margin: 2px; font-size: 15px">Se le pide de favor pagarlo lo más pronto posible, muchas gracias.</p>
                <p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">Prestige English School 2007</p>
            </div>
        </td>
    </tr>
</table>
@endsection