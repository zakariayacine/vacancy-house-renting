<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-md-4">
				<img src="dev/images/register.jpg" class="img-fluid">
			</div>
			<div class="col-md-8">
				<div class="card">
				<form action="useradd.php" method="post">
					<div class="card-header">
						<h5><a href="index" class="btn btn-success">retour</a> Formulaire d'inscription</h5> 		
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<label class="form-label">*Nom</label>
								<input type="text" class="form-control" name="nom" required>
								<label class="form-label">*telephone</label>
								<input type="text" class="form-control" name="telephone" required>				
							</div>
							<div class="col-md-6">
								<label class="form-label">*Prenom</label>
								<input type="text" class="form-control" name="prenom" required>
								<label class="form-label">*Email</label>
								<input type="text" class="form-control" name="email" required>
							</div>
							<div class="col-md-12">
								<label class="form-label">*Adresse</label>
								<input type="text" class="form-control" name="Adresse" required>
							</div>
							<div class="col-md-6">
								<label class="form-label">*Mot de passe</label>
								<input class="form-control" type="password" name="password" required>
							</div>
							<div class="col-md-6">
								<label class="form-label">*Confirmez le mot de passe</label>
								<input class="form-control" type="password" name="confpassword" required>
							</div>
						</div>

						
											
					<label class="form-label">Si vous avez deja un compte ! <a style="color: blue !important" href="connexion.php">connectez-vous !</a></label>	
					</div>
					<div class="card-footer">
						<button class="btn btn-success">S'inscrire</button>
					</div>
				</form>
				</div>
			</div>
		</div>
</div>
