@foreach ($model as $m)
         <br>

                <img  src="img/model/qr-{{$m->name}}{{$m->id}}.png" width="500" height="500" alt="">


        <div>Modelo: {{$m->name}}</div>
@endforeach
