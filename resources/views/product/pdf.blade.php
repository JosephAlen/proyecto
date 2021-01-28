@foreach ($product as $m)
        <div style="text-align: center;">
        	<b>DETALLE DEL PRODUCTO</b>
        </div>
        <div style="text-align: center;"><b>Producto:</b> {{$m->name}}</div>
        <div style="text-align: center;"><b>Codigo:</b> {{$m->code}}</div>
        <div style="text-align: center;"><b>Serial:</b> {{$m->serial}}</div>
        <img  src="img/model/qr-{{$m->name}}{{$m->id}}.png" width="500" height="500" alt="">
@endforeach
