<!doctype html>
<html>

<head>
	<title>Evacuees List</title>
	<meta charset="UTF-8">

	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<script src="https://kit.fontawesome.com/1e3283d2da.js" crossorigin="anonymous"></script>
	<link type="text/css" href="{{ asset('./css/agency.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/datatables/datatables.css">
	<style>
		.table-striped tbody tr:nth-child(even) td,
		.table-striped tbody tr:nth-child(even) th {
			background-color: #E5E4E2;
		}

		th {
			text-align: center;

		}

		td {
			text-align: center;

		}
	</style>
</head>

<body onload="initClock()">
	<div class="sidebar">
		<div class="logo-details">
			<img src="/img/ears.jpg" class="logo">
			<span class="logo_name">E A M S</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="{{ url('/eams') }}">
					<i class="fa-solid fa-house"></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{ url('/evacuation') }}">
					<i class="fa-sharp fa-solid fa-school"></i>
					<span class="links_name">Evacuation</span>
				</a>
			</li>
			<li>
				<a href="{{ url('/main/search') }}">
					<i class="fa-sharp fa-solid fa-magnifying-glass"></i>
					<span class="links_name">Search</span>
				</a>
			</li>
			<li>
				<a href="{{ url('/main/list') }}" class="active">
					<i class="fa-regular fa-folder"></i>
					<span class="links_name">Evacuees list</span>
				</a>
			</li>
		</ul>
	</div>

	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class='bx bx-menu sidebarBtn'></i>
			</div>
			<div class="sidebar-button">
				<h6 style="text-align: center;">Agency Administrator</h6>
			</div>
			<div class="profile-details">
				<span class="user_name">{{ Auth::user()->fName }}</span>
			</div>

		</nav>

		<div class="home-content">


			<div class="container">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<a class="btn btn-success" href="{{ URL::to('main/list/pdf') }}">Export to PDF</a>
						<h2 style="text-align: center;">Evacuees List</h2>
					</div>
					<table class="table">
						<tr>
							<th>Number Individuals</th>
							<th>Number of Families</th>
						</tr>
						<tr>
							<td>{{ $count}} </td>
							<td>{{ $counts}} </td>
						</tr>
					</table>
					<div class="panel-body">
						<table class="datatable table table-striped table-bordered">
							<thead>
								<tr style="background-color: #93C572;">
									<th>#</th>
									<th>Name</th>
									<th>Member</th>
									<th>Address</th>
									<th>Evacuation</th>
									<th>Room</th>
									<th>Date Entered</th>
									<th>Date Leave</th>
								</tr>
							</thead>
							<tbody>
								@foreach($evac as $item)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $item->fname}} {{ $item->lname }}</td>
									<td>{{ $item->member }}</td>
									<td>{{ $item->address }}</td>
									<td>{{ $item->Evacuation }}</td>
									<td>{{ $item->room }}</td>
									<td>{{ $item->date_entered }}</td>
									<td>{{ $item->date_leave}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>

				</div>
			</div>

		</div>
	</section>


	<script src="../../js/function.js"></script>
	<script type="text/javascript">
		// function for sidebar
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function() {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else
				sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		}
	</script>
	<script>
		var sList = "";
		$('input[type=checkbox]').each(function() {
			sList += "(" + $(this).val() + "-" + (this.checked ? "checked" : "not checked") + ")";
		});
		console.log(sList);
	</script>
	@livewireScripts
</body>

</html>