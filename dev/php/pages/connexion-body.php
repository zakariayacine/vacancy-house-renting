<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-md-4">
				<img src="dev/images/login.jpg" class="img-fluid">
			</div>
			<div class="col-md-8">
				<div class="card">
				<form action="login.php" method="post">
					<div class="card-header">
						<h5><a href="index" class="btn btn-success">retour</a> Formulaire de connexion</h5> 		
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label class="form-label">*Email</label>
								<input type="text" class="form-control" name="email" required>
							</div>
							<div class="col-md-12">
								<label class="form-label">*Mot de passe</label>
								<input class="form-control" type="password" name="password" required>
							</div>
						</div>					
					<label class="form-label">Si vous n'avez pas de compte ! <a style="color: blue !important" href="inscription.php">inscrivez-vous !</a></label>	
					</div>
					<div class="card-footer">
						<button class="btn btn-success">Connexion</button>
					</div>
				</form>
				</div>
			</div>
		</div>
</div>
