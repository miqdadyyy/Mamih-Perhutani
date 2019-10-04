@extends('include.include-mandor')

@section('content-page')


@extends('include.include-mandor')

@section('content-page')

<div class="row">
<div class="col-md-8">	
<section class="panel">
	<div class="panel-body">
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptates voluptatibus ullam voluptate ea dolorum qui nemo quia, consequatur distinctio. Rerum magnam quae magni itaque voluptas qui nihil maxime, quam.</div>
		<div>Provident accusantium dignissimos cumque quidem perferendis ratione obcaecati perspiciatis voluptate, deleniti cum quae iure odit libero molestiae recusandae quibusdam sed numquam molestias excepturi nisi quam rem a. Impedit, enim aspernatur!</div>
		<div>Vel minus ullam dolorem deserunt non. Ullam labore commodi molestias, voluptas autem expedita veritatis, error eveniet, maiores optio aspernatur placeat magnam hic. Animi soluta, dolor sapiente a similique, mollitia repellat!</div>
		<div>Accusantium, minus officiis illum non explicabo. Odio, officia. Dicta quis esse placeat magni pariatur aut facere nesciunt, iste? Laboriosam, illum similique! Dignissimos rem vero voluptatum, dolores error consequuntur dolor porro.</div>
		<div>Natus voluptatum ab ullam non, eaque officia, nobis tempora suscipit illo, itaque deserunt ducimus quis, minus error reprehenderit. Quae possimus, in eaque! Tempore totam fugit voluptatibus quos sapiente, aspernatur eum.</div>
	</div>
</section>
</div>
<div class="col-md-4">	
<section class="panel">
	<div class="panel-body">
		<table class="table table-hover table-stripped">
			<thead>
				<th>#</th>
				<th>ID</th>
				<th>Nama Tanaman</th>
			</thead>
			<tbody>
				@foreach($tanaman as $t)
				<tr>
					<td>
						<input type="checkbox" value="{{$t->id}}">
					</td>
					<td>{{$t->id}}</td>
					<td>{{$t->nama_tanaman}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>
</div>
</div>
@stop

@stop