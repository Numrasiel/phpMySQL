<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>testphp</title>
	</head>
	<body id="dt_example">
		<div id="container">
			<h1>Tabla 2</h1>
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="verbos">
				<thead>
					<tr>
						<th>direccion</th>
						<th>nombre</th>
					</tr>
				</thead>
				<tbody>
					 <?php
						include 'db_connect.php';  //include the db_connect.php file
						$get = new Connection("db1");
						$query = $get->query("SELECT * FROM travelmanager.start_point");
						$rowarray = $get->fetch($query);
						foreach ($rowarray as $row) {
							print "<tr>";
							print '<td>'.$col[1].'</td>';
							print '<td>'.$col[2].'</td>';
							print "</tr>";
							/*print "<tr>";
							$i=0;
							foreach ($row as $col) {
								if($i==1 || $i==2){
									print '<td>'.$col.'</td>';
								}
								$i++;
							}
							print "</tr>";*/
						}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>c1</th>
						<th>c2</th>
						<th></th>
					</tr>
				</tfoot>
			</table>
		</div>
		<footer>
		</footer>
	</body>
</html>