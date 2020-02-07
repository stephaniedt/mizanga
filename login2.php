<!DOCTYPE html>
<html lang="en">
<?php require('./includes/head.php'); ?>

<body>

	<div class="container-fluid">
		<div>
			<?php require('./includes/navbar.php'); ?>
		</div>
	</div>

	<main class="container">

		<!-- início config -->

		<!-- início do login -->
		<div class="row">
			<div class="col-6 offset-3">

				<form method="post">

					<div class="form-group">
						<label for="nome">Usuário</label>
						<input type="text" class="form-control <?= $nomeOK ? '' : 'is-invalid'; ?>" id="usuario" name="usuario"  required>
						<div class="invalid-feedback">Digite um usuário válido</div>
					</div>

					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="senha" required>
					</div>
					<button class="btn btn-primary" type="submit">Login</button>
				</form>
			</div>

		</div>
	</main>
	<div style="height: 270px;">

	</div>
	<div>
		<?php require('./includes/footer.php'); ?>
		<?php require('./includes/script.php'); ?>
	</div>
</body>

</html>