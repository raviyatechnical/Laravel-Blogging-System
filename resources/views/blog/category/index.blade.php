<table border="1">
	<thead>
		<th>Title</th>
		<th>Slug</th>
		<th>Description</th>
	</thead>
	<tbody>
		@foreach ($categories as $category)
		<tr>
			<td>{{$category->name}}</td>
			<td><a href="{{$category->slug}}">{{$category->slug}}</a></td>
			<td>{{$category->description}}</td>
		</tr>
		@endforeach
	</tbody>
</table>