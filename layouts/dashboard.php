<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Wulan">

	<title>PBWL  | TUGAS 1 Wulan Indah Lestari</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/a.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style1.css">

	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>

</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/logo.png" class="brand">
			<div class="user"><?php echo $_SESSION['user_nama']; ?></div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home-button.png" alt="" style="margin-left: 2px"> Home
					</a>
				</li>
				<li>
				<a href="<?php echo URL; ?>/pelanggan">
    <img class="icon" src="<?php echo AST; ?>/img/menuu.png" alt="" style="width: 30px; height: 30px;margin-right: -5px;"> Pelanggan
</a>


				</li>
				<li>
					<a href="<?php echo URL; ?>/golongan">
						<img class="icon" src="<?php echo AST; ?>/img/menuu.png" alt="" style="width: 30px; height: 30px;margin-right: -5px;"> Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/menuu.png" alt=""style="width: 30px; height: 30px;margin-right: -5px;"> Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/dashboard/logout">
						<img class="icon" src="<?php echo AST; ?>/img/logout.png" alt="" style="width: 20px; height: 20px;margin-left: 7px;"> Logout
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; Wulan - <?php echo date('Y'); ?>. 
		</footer>
	</main>

	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>

</body>

</html>