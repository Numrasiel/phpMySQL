<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>testphp</title>
	</head>
	<body id="dt_example">
		<div id="container">
			<h1>Tabla</h1>
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="verbos">
				<thead>
					<tr>
						<th>c1</th>
						<th>c2</th>
						<th>c3</th>
					</tr>
				</thead>
				<tbody>
					 <?php
						include 'db_connect.php';  //include the db_connect.php file
						$get = new Connection("db1");
						$query = $get->query("SELECT * travelmanager.end_point");
						$rowarray = $get->fetch($query);
						foreach ($rowarray as $row) {
							print "<tr>";
							foreach ($row as $col) {
								print '<td>'.$col.'</td>';
							}
							print "</tr>";
						}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>c1</th>
						<th>c2</th>
						<th>c3</th>
						<th></th>
					</tr>
				</tfoot>
			</table>
		</div>
		<footer>
		</footer>
	</body>
</html>