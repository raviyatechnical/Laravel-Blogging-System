<table border="1">
	<thead>
		<th>Post ID</th>
		<th>Status</th>
		<th>IP</th>
		<th>User Agent</th>
	</thead>
	<tbody>
		@foreach ($comments as $comment)
		<tr>
			<td>{{$comment->post_id}}</td>
			<td><a class="badge">{{$comment->status}}</a></td>
			<td>{{$comment->ip}}</td>
			<td>{{$comment->user_agent}}</td>
		</tr>
		@endforeach
	</tbody>
</table>