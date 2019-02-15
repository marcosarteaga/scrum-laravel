<h1>Hello Wolrd</h1>

<p>El cristian huele...</p>
<ul>
@foreach($projectes as $projecte )
	<li>{{$projecte->nom}}</li>
@endforeach
</ul>