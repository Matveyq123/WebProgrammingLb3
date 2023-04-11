<!DOCTYPE html>
<html>
<head>
	<title>Коробєйніков Матвій</title>
</head>
<body>
	<h1>Лабораторна Робота 3 <br>
		Коробєйніков Матвій КІУКІ-19-7 Варіант 6</h1>
	<form action="get1.php" method="get">
		<label for="date">Выберите дату:</label>
		<input type="date" name="date" id="date">
		<input type="submit" value="Найти доход">
	</form>
	<form action="get2.php" method="get">
		<label for="vendor">Выберите производителя:</label>
		<select name="vendor" id="vendor">
			<?php
				include('connect.php');
				try {
					$stmt = $dbh->query("SELECT ID_Vendors, Name FROM vendors");
					$res = $stmt->fetchAll();

					foreach($res as $row)
					{
						echo "<option value='$row[0]'>$row[1]</option>";
					}
				}
				catch(PDOException $ex) {
					echo $ex->GetMessage();
				}

				$dbh = null;
			?>
		</select>
		<input type="submit" value="Найти автомобили">
	</form>
	<form action="get3.php" method="get">
		<label for="date">Выберите дату:</label>
		<input type="date" name="date" id="date">
		<input type="submit" value="Найти свободные автомобили">
	</form>
</body>
</html>
