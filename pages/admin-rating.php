<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/style/style.css">
	<link rel="stylesheet" type="text/css" href="/style/chat.css">
	<link rel="stylesheet" type="text/css" href="/style/admin.css">
	<link rel="shortcut icon" type="image/x-icon" href="/images/logo1.png" />
	<title>Адміністрування</title>
</head>
<body>

	<?php
		include $_SERVER['DOCUMENT_ROOT'] . "/pice-of-site/header.php";
		if(!isset($_COOKIE["teacher"])){
			header("Location: /log-in.php");
		}
	?>

	<main id="main">
		<div id="content" class="flex">
			<p class="admin-title">Поставити учню оцінку</p>
			
			<form action="POST">
				<select name="student">
					<?php
						$allStudentsSql = "SELECT * FROM contacts WHERE user_status = 0";
						$studentResult = $connect->query($allStudentsSql);
						while($student = mysqli_fetch_assoc($studentResult)){
							if($student["id"] == 1){
								continue;
							}
							echo "<option value='". $student["id"] . "'>". $student["name"] . "</option>";
						}
					?>
				</select>
				<input type="text" placeholder="10.10.2020">
				<input type="text" placeholder="12">
				<button>Виставити</button>
			</form>
			<table id="admin-rating">
				<tr>
					<th>№</th>
					<th>Учень</th>
					<th>Предмет</th>
					<th>Дата</th>
					<th>Оцінка</th>
					<th>Видалення</th>
				</tr>
				<tr>
					<td>1</td>
					<td>А А</td>
					<td>Алгебра</td>
					<td>2020-10-10</td>
					<td>10</td>
					<td>Видалити</td>
				</tr>
				
			</table>
		</div>
	</main>
	
</body>
</html>