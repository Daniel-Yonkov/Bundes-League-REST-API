<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upcoming matches</title>
	<style>
	*{
		margin:0;
		padding: 0;
	}
		table {
			margin: 5vh auto;
		}
		table, th,td {
			border: 1px solid black;
		}
		td {
			text-align: center
		}
		#vs {
			margin-left:5px;
		}
		td > div, td > div >*{
			display:inline-block;
		}
		td> div >img{
			max-width: 20px;
			vertical-align: sub;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Date (UTC)</th>
			<th>Match</th>
			@yield('table-header');
		</tr>
			@yield('results')
	</table>
</body>
</html>
