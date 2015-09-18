<? include 'header.php' ?>


<div class="container" ng-controller="appController">

	<h3>Your Trip</h3>
	<br>
	<h4>Status: <span class='recording' style="color: #449D44" ng-hide="viz">Recording</span><span class='stopped' style="color: #D9534F" ng-show="viz">Stopped</span></h4>
	<br>
	<table class="table table-striped" style="max-width: 600px">
		<tr>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Accuracy</th>
		</tr>
		<tr>
			<td>{{ currentPos.latitude }}</td>
			<td>{{ currentPos.longitude }}</td>
			<td>{{ currentPos.accuracy}}</td>
		</tr>
	</table>
	<br>
	<button class="btn btn-success" ng-click="recordTrip()">Start Trip</button>
	<button class="btn btn-danger" ng-click="endTrip()" ng-hide="test">End Trip</button>
</div>

<? include 'footer.php' ?>
<script src="../app/vendor/jquery.js"></script>
<script src="../app/vendor/moment.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="../app/vendor/angular-resource.js"></script>
<script src="../app/app.js"></script>
</body>
</html>