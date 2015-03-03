@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">All Projects</div>

				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Organization</th>
								<th>Author</th>
							</tr>
						</thead>
						<tbody>

							@forelse($projects as $project)

								<tr>
									<td>{!! $project->title !!}</td>
									<td>{!! $project->client->name !!}</td>
									<td>{!! $project->user->name !!}</td>
								</tr>

							@empty

								<tr>
									<td colspan="3" class="text-center">It&rsquo;s quiet here!</td>
								</tr>

							@endforelse

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
