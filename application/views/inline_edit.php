<body class="skin-blue fixed">
	<script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.6.0/ui-bootstrap-tpls.min.js"></script>
	<!-- header logo: style can be found in header.less -->
	<?php 
		$CI = &get_instance(); 
		$CI->load->view('main/main_header');
	?>
	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- Right side column. Contains the navbar and content of the page -->
		<aside class="right-side strech">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div>
					<a id="clock-container">
						<i class="fa fa-calendar"></i>
						<span id="server_time"></span>
					</a>
				</div>
				<h1>
					PIT STOP
					<small>Control panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-wrench"></i> Main Menu</a></li>
					<li class="active">Pit Stop</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
						<form role="form" action="PitStopWO" method="POST" onSubmit="return submitMutation();">
							<div class="box box-warning">
								
								<div class="box-body">

									<div class="form-group">
										<label>
												SEND TO
										</label>
										<div class="radio">
											<label>
												<input type="radio" name="sendto" id="sendtolocation" value="location" checked>
												LOCATION
											</label>
											<label>
												<input type="radio" name="sendto" id="sendtovendor" value="vendor">
												VENDOR
											</label>
										</div>
									</div>
									<div class="form-group">
										<label for="nowo">NO WO</label>
										<input type="text" class="form-control" id="nowo" name="nowo">
									</div>
									<div class="form-group">
										<label for="tglwo">Date</label>
										<div class="bfh-datepicker" data-format="d-m-y" id="tglwo" data-name="tglwo"></div>
									</div>
									<div class="form-group">
										<label>FROM LOCATION </label>
										<select id="from_location" class="form-control" name="from_location">
											<option value="Location_1">From Location 1</option>
											<option value="Location_2">From Location 2</option>
											<option value="Location_3">From Location 3</option>
											<option value="Location_4">From Location 4</option>
											<option value="Location_5">From Location 5</option>
										</select>
									</div>
									<div class="form-group">
										<label>FROM LOCATION </label>
										<select id="from_location" class="form-control" name="from_location">
											<option value="Location_1">From Location 1</option>
											<option value="Location_2">From Location 2</option>
											<option value="Location_3">From Location 3</option>
											<option value="Location_4">From Location 4</option>
											<option value="Location_5">From Location 5</option>
										</select>
									</div>
									<button id="append" type="button" class="btn btn-default">Append</button>
									<div class="table-responsive">
										<table id="grid-mutation" class="table table-condensed table-hover table-striped" data-selection="true" data-multi-select="true" data-row-select="true" data-keep-selection="true">
											<thead>
												<tr>
													<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
													<th data-filterable="true" data-visible="false" data-column-id="id" data-identifier="true" data-type="numeric" data-align="right">ID</th>
													<th data-filterable="true" data-column-id="tireidset" data-formatter="tireidset" data-type="numeric" data-align="right">TIRE ID</th>
													<th data-column-id="location" data-formatter="location" data-sortable="false">WAREHOUSE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td></td>
													<td>1</td>
													<td>me@rafaelstaib.com</td>
													<td>11.12.2014</td>
													<td>Link</td>
												</tr>
												<tr>
													<td></td>
													<td>12</td>
													<td></td>
													<td>12.12.2014</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div><!-- /.box-body -->
								<div class="box-footer" style="text-align:center;">
									<input type="submit" name="submit" value="SUBMIT" class="btn btn-warning"/>
								</div>
							</div>
						</form>
						<div class="box box-warning">
							<div class="box-body">
								<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
								<div ng-app="app" ng-controller="Ctrl">
									<table class="table table-bordered table-hover table-condensed">
									<tr style="font-weight: bold">
									  <td style="width:35%">Name</td>
									  <td style="width:20%">Status</td>
									  <td style="width:20%">Group</td>
									  <td style="width:25%">Edit</td>
									</tr>
									<tr ng-repeat="user in users">
									  <td>
										<!-- editable username (text with validation) -->
										<span editable-text="user.name" e-name="name" e-form="rowform" onbeforesave="checkName($data, user.id)" e-required>
										  {{ user.name || 'empty' }}
										</span>
									  </td>
									  <td>
										<!-- editable status (select-local) -->
										<span editable-select="user.status" e-name="status" ng-change="alert('tes');" ng-model="customSelected" e-form="rowform" e-ng-options="s.value as s.text for s in statuses">
										  {{ showStatus(user) }}
										</span>
									  </td>
									  <td>
										<!-- editable group (select-remote) -->
										<span editable-select="user.group" e-name="group" onshow="loadGroups()" e-form="rowform" e-ng-options="g.id as g.text for g in groups">
										  {{ showGroup(user) }}
										</span>
									  </td>
									  <td style="white-space: nowrap">
										<!-- form -->
										<form editable-form name="rowform" onbeforesave="saveUser($data, user.id)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == user">
										  <button type="submit" ng-disabled="rowform.$waiting" class="btn btn-primary">
											save
										  </button>
										  <button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default">
											cancel
										  </button>
										</form>
										<div class="buttons" ng-show="!rowform.$visible">
										  <button class="btn btn-primary" ng-click="rowform.$show()">edit</button>
										  <button class="btn btn-danger" ng-click="removeUser($index)">del</button>
										</div>  
									  </td>
									</tr>
								  </table>

								  <button class="btn btn-default" ng-click="addUser()">Add row</button>
								  <button class="btn btn-default" ng-click="submitThisForm()">Add row</button>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.row -->
			</section><!-- /.content -->
		</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->
	<script src="<?php echo base_url('assets/js/bootstrap-formhelpers.js') ?>"></script>
	<script>

	</script>
	<!-- this is script for auto typeahead -->
	


<script type='text/javascript'>//<![CDATA[ 

var app = angular.module("app", ["xeditable","ui.bootstrap"]);

app.run(function(editableOptions) {
  editableOptions.theme = 'bs3';
});

app.controller('Ctrl', function($scope, $filter, $http) {
 $scope.users = [
    {id: 1, name: 'awesome user1', status: 2, group: 4, groupName: 'admin'},
    {id: 2, name: 'awesome user2', status: undefined, group: 3, groupName: 'vip'},
    {id: 3, name: 'awesome user3', status: 2, group: null}
  ]; 

  $scope.statuses = [
    {value: 1, text: 'status1'},
    {value: 2, text: 'status2'},
    {value: 3, text: 'status3'},
    {value: 4, text: 'status4'}
  ]; 

  $scope.groups = [];
  $scope.loadGroups = function() {
    return $scope.groups.length ? null : $http.get("<?php echo base_url()?>mutation/getGroup").success(function(data) {
      $scope.groups = data;
    });
  };

  $scope.showGroup = function(user) {
    if(user.group && $scope.groups.length) {
      var selected = $filter('filter')($scope.groups, {id: user.group});
      return selected.length ? selected[0].text : 'Not set';
    } else {
      return user.groupName || 'Not set';
    }
  };

  $scope.showStatus = function(user) {
    var selected = [];
    if(user.status) {
      selected = $filter('filter')($scope.statuses, {value: user.status});
    }
    return selected.length ? selected[0].text : 'Not set';
  };

  $scope.checkName = function(data, id) {
    if (id === 2 && data !== 'awesome') {
      return "Username 2 should be `awesome`";
    }
  };

  $scope.saveUser = function(data, id) {
    //$scope.user not updated yet
    angular.extend(data, {id: id});
    return $http.post('/saveUser', data);
  };

  // remove user
  $scope.removeUser = function(index) {
    $scope.users.splice(index, 1);
  };

  // add user
  $scope.addUser = function() {
    $scope.inserted = {
      id: $scope.users.length+1,
      name: '',
      status: null,
      group: null 
    };
    $scope.users.push($scope.inserted);
  };
  $scope.submitThisForm = function(){
	alert($scope.users.toSource());
  };
  
  $scope.selected = undefined;
  $scope.states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Dakota', 'North Carolina', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
  // Any function returning a promise object can be used to load values asynchronously
  $scope.getLocation = function(val) {
    return $http.get('http://maps.googleapis.com/maps/api/geocode/json', {
      params: {
        address: val,
        sensor: false
      }
    }).then(function(response){
      return response.data.results.map(function(item){
        return item.formatted_address;
      });
    });
  };
  
  
  
  
  
});
// --------------- mock $http requests ----------------------

//]]>  

</script>

