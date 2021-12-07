<div class="container-fluid mt-3">
 <div class="row">
 	<div class="col-md-5">
 		<div class="border">
		<div class="card">
			<div class="card-body">
				<div align="center">
					<h3>Contrat de reservation</h3>
				</div>
				<h4>Date : 06/12/2021 a alger</h4>
				<h5>ce document represente un contrat de reservation entre l'agence de location ABRITEL et sont client <?php echo $_SESSION['name']; ?>.
					<br>
				les clause du contrat sont :<br>
			- clause numero une avec le montant de 10000 da remboursable a la fin de location<br>
			- clause numero deux avec le montant de 30000 da remboursable a la fin de location<br>
			Durée de location du 16/12/2021 au 28/12/2021<br>
			le montant de la transaction et estimé a : 45000da <br>
			La somme a restitué au cas de non letige a la fin de la location est de 40000 DA <br>
			La signature de ce document fait l'objet de l'accéptation des condition de la transaction par le client <?php echo $_SESSION['name']; ?>, de ce fait en cas de letige ou de non respect des delais de location le client ce vera versé le dédomagement en couru suivant la gravité du litige.<br>
		</h5>
		<div align="right">
			Fait le 06/12/2021 a alger <br>
			Signature. 
		</div>
			</div>
		</div>
	</div>
 	</div>
 	<div class="col-md-5">
 		<a href="/location/home/reservations/" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
 		<button class="btn btn-secondary">telecharger le contrat</button>
 	</div>
 </div>
</div>