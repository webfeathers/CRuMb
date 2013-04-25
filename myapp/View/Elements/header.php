<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="brand" href="/">CRuMb - Simplest CRM</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<?php if($role != ''){ //role is set in AppController, based on user  ?>
					<li class="active"><a href="/">Home</a></li>
					<li><a href="/checkin">Check In</a></li>
					<li><a href="/customer">Customers</a></li>
					<?php if($role == 'admin'){  //role is set in AppController, based on user ?>
					<li class="dropdown"> <a href="/admin" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/admin/employees">Employees</a></li>
							<li><a href="/admin/distributors">Distributor Admin</a></li>
							<li><a href="/admin/checkins">Check ins</a></li>
						</ul>
					</li>
					<?php } // end if is admin ?>
					
					<li><a href="/users/logout">Log out</a></li>
					<?php } // end if is logged in ?>

				</ul>
			</div>
			<!--/.nav-collapse --> 
		</div>
	</div>
</div>
