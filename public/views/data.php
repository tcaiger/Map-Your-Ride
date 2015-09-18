<? include 'header.php' ?>

<div class="container" ng-controller="dataController">

	<h3>Trip History</h3>

	<table class="table table-striped" style="max-width: 600px">
		<tr>
			<th>id</th>
			<th>Trip id</th>
			<th>Latitude</th>
			<th>Longitide</th>
			<th>Accuracy</th>
			<th>Time</th>
		</tr>
		<tr ng-repeat="coord in coords">
			<td>{{ coord.id }}</td>
			<td>{{ coord.trip_id }}</td>
			<td>{{ coord.lat }}</td>
			<td>{{ coord.lng }}</td>
			<td>{{ coord.accuracy }}</td>
			<td>{{ coord.time | myDateFormat }}</td>
		</tr>
	</table>
</div>

<? include 'footer.php' ?>
<script src="../app/vendor/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="../app/vendor/angular-resource.js"></script>
<script src="../app/data.js"></script>
</body>
</html>