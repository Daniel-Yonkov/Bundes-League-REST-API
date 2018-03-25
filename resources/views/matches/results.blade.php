@foreach($response as $matches)
	<tr>
		<td>
			{{\Carbon\Carbon::parse($matches->MatchDateTimeUTC)}}	
		</td>
		<td>
			<div>
				<img src="{{$matches->Team1->TeamIconUrl}}" alt="teamicon">
				<p>{{$matches->Team1->TeamName}}</p><p id="vs">VS</p>
				<img src="{{$matches->Team2->TeamIconUrl}}" alt="teamicon"><p>{{$matches->Team2->TeamName}}</p>
			</div>
			@if(isset($matchResults))
				<td>
					@if($matches->MatchIsFinished)
						<p>{{$matches->MatchResults[1]->PointsTeam1}} - {{$matches->MatchResults[1]->PointsTeam2}}</p>
					@else
						<p> - </p> 
					@endif
				</td>
			@endif
		</td>
	</tr>
@endforeach