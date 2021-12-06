<div class="container-fluid mt-3">
		<div class="card">
			<div class="card-header">
				<h5><a href="<?php echo $_SESSION['href'].'home' ?>" class="btn btn-success">retour</a>	Liste de vos produits</h5>
			</div>
			<div class="card-body">
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Titre du bien</th>
				      <th scope="col">periode</th>
				      <th scope="col">type de reservation</th>
				      <th scope="col">Montant a payer</th>
				      <th scope="col">statut</th>
				      <th scope="col">actions contrat</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	include $_SESSION['tables']."articles.php";
				  		foreach ($articles as $article) {
				  			echo '<tr>
				      <th scope="row"> '.$article['id'].' </th>
				      <td> '.$article['titre'].' </td>
				      <td> 12/15/2021 - 12/16/2021</td>
				      <td>Imediate</td>
				      <td> '.$article['prix'].' </td>
				      <td> en attente pour signature</td>
				      <td><div class="btn-group" role="group"><a class="btn btn-primary btn-sm" href="view.php?id='.$article['id'].'">Telecharger contrat</a>
				      <a class="btn btn-danger btn-sm" href="dismiss.php?id='.$article['id'].'">Annuler</a>
				      <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">information importante</button></div></td>
				    </tr>';
				  		}
				  	?> 
				  </tbody>
				</table>
			</div>
		</div>
	</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #ffc107 !important;">
        <h5 class="modal-title" id="exampleModalLabel">Informations importantes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
        	Veuillez télécharger et signer le contrat de location, puis le ramener au niveau de notre agence à fin de compléter la transaction. un délai de 2 jours est accordé pour compléter la réservation. si le délai est dépassé votre demande de réservation sera annulé.
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
