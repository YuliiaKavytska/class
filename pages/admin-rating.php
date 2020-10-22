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
			<?php

			$sqlRating = "SELECT * FROM rating WHERE subject=" . $_COOKIE["teacher"];
			$resultRating = mysqli_query($connect, $sqlRating);
			$col_rating = mysqli_num_rows($resultRating);
		?>

			<table id="admin-rating">

				<tr>
					<th>№</th>
					<th>Учень</th>
					<th>Предмет</th>
					<th>Дата</th>
					<th>Оцінка</th>
					<th>Видалення</th>
				</tr>
				<?php
			
            $i = 0;
              // пока в перемменной хранится значение меньше чем кол-во оценок
              while($i < $col_rating) {
				$rating = mysqli_fetch_assoc($resultRating);
				$sqlStudent = "SELECT * FROM contacts WHERE id=" . $rating["student_id"];
				$resultStudentResult = mysqli_query($connect, $sqlStudent);
				$student = mysqli_fetch_assoc($resultStudentResult);
				$sqlTeacher = "SELECT * FROM contacts WHERE id=" . $rating["subject"];
				$resultTeacher = mysqli_query($connect, $sqlTeacher);
				$teacher = mysqli_fetch_assoc($resultTeacher);
             				
                ?>
				<tr>
					<td><?php echo $rating["id"]; ?></td>
					<td><?php echo $student["name"]; ?></td>
					<td><?php echo $teacher["subject"]; ?></td>
					<td><?php echo $rating["date"]; ?></td>
					<td><?php echo $rating["rating"]; ?></td>
					<td>Видалити</td>
				</tr>
				<?php
            	// Увеличиваем счетчик
            	$i = $i + 1;
		  	}
		  	?>
				
			</table>
		</div>
	</main>
	
</body>
</html>