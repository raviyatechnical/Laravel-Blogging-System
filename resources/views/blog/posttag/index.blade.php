<table border="1">
	<thead>
		<th>Tag ID</th>
		<th>Post ID</th>
	</thead>
	<tbody>
		@foreach ($posttags as $posttag)
		<tr>
			<td>{{$posttag->tag_id}}</td>
			<td>{{$posttag->post_id}}</td>
		</tr>
		@endforeach
	</tbody>
</table>