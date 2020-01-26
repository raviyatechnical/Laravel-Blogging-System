<table border="1">
	<thead>
		<th>Name</th>
		<th>Slug</th>
	</thead>
	<tbody>
		@foreach ($tags as $tag)
		<tr>
			<td>{{$tag->name}}</td>
			<td>{{$tag->slug}}</td>
		</tr>
		@endforeach
	</tbody>
</table>