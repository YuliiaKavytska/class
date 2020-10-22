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
		include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
		if(!isset($_COOKIE["teacher"])){
			header("Location: /log-in.php");
		}
	?>

	<main id="main">
		<div id="content" class="flex">
			<p class="admin-title">Оголосити про нове домашнє завдання</p>
			<form action="">
				<input type="text" placeholder="Дата перевірки">
				<input type="text" placeholder="Завдання">
				<button>Оголосити</button>
			</form>

			<?php
			$sqlHomework = "SELECT * FROM homework WHERE subject=" . $_COOKIE["teacher"];
			$resultHomework = mysqli_query($connect, $sqlHomework);
			$col_homework = mysqli_num_rows($resultHomework);
			?>

			<table id="admin-home">
				<tr>
					<th>№</th>
					<th>Предмет</th>
					<th>Дата перевірки</th>
					<th>Завдання</th>
				</tr>

				<?php
			
				$i = 0;
				// пока в перемменной хранится значение меньше чем кол-во ДЗ
				while($i < $col_homework) {
					$homework = mysqli_fetch_assoc($resultHomework);
					$sqlTeacher = "SELECT * FROM contacts WHERE id=" . $homework["subject"];
					$resultTeacher = mysqli_query($connect, $sqlTeacher);
					$teacher = mysqli_fetch_assoc($resultTeacher);
             				
                ?>
				
				<tr>
					<td><?php echo $homework["id"]; ?></td>
					<td><?php echo $teacher["subject"]; ?></td>
					<td><?php echo $homework["day"]; ?></td>
					<td><?php echo $homework["homework"]; ?></td>
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