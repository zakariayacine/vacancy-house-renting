<div class="container-fluid mt-3">
	
		<div class="card">
			<div class="card-body">
				<form>
					<div class="row">
						<div class="col-md-12"><h5><a href="<?php echo $_SESSION['href'].'home' ?>" class="btn btn-success"><i class="fas fa-arrow-left"></i></a> informations général du bien</h5><hr></div>
						<div class="col-md-6">
							<label class="form-label">Titre</label>
							<input type="text" class="form-control" name="titre">
							<label class="form-label">surface</label>
							<input type="text" class="form-control" name="surface">
							<label class="form-label">Nombre de pieces</label>
							<input type="number" class="form-control" name="nbpiece">
							<label class="form-label">Prix</label>
							<input type="text" class="form-control" name="prix">
						</div>
						<div class="col-md-6">
							<label class="form-label">Description</label>
							<textarea class="form-control" name="description"
							          rows="6">
							</textarea>
							<div class="mt-1">
							  <label for="formFile" class="form-label">Selectionnez les images du bien</label>
							  <input class="form-control" type="file" id="formFile">
							</div>
						</div>
						<div class="col-md-6">
							<hr>
							<h5>Ajouter des equipments</h5>
							<hr>
							<div id="container">
							<div class="btn-group" role="group" aria-label="Basic example">
								<input type="number" class="form-control" name="nom" placeholder="Nom">
								<select class="form-control">
									<option value="non indiqué">Etat</option>
									<option value="bon">Bon</option>
									<option value="moyen">Moyen</option>
									<option value="mauvais">Mauvais</option>
								</select>
							</div>
							</div>
						</div>
						<div class="col-md-6">
							<hr>
							<h5>Ajouter des comoditées</h5>
							<hr>
							<div class="btn-group" role="group">
								<input type="text" class="form-control" name="nom" placeholder="nom">
								<input type="text" class="form-control" name="distance" placeholder="distance">
								<input type="text" class="form-control" name="type" placeholder="type">
							</div>
						</div>
					</div>
					<hr>
					<button class="btn btn-success"> Ajouter votre produit</button>
				</form>
			</div>
		</div>
	
</div>
