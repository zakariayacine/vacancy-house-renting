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
				      <th scope="col">date demander</th>
				      <th scope="col">date prevue</th>
				      <th scope="col">heure prevue</th>
				      <th scope="col">statut</th>
				      <th scope="col">actions</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	include $_SESSION['tables']."articles.php";
				  		foreach ($articles as $article) {
				  			echo '<tr>
				      <th scope="row"> '.$article['id'].' </th>
				      <td> '.$article['titre'].' </td>
				      <td>12/15/2021</td>
				      <td>13h00</td>
				      <td>en attente</td>
				      <td>en cours de traitement</td>
				      <td><div class="btn-group" role="group"><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#informations">point de rendez-vous</button>
				      <div class="btn-group" role="group"><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#reservation">reservez</button>
				      <a class="btn btn-danger btn-sm" href="dismiss.php?id='.$article['id'].'">Annuler</a>
				      </div></td>
				    </tr>';
				  		}
				  	?> 
				  </tbody>
				</table>
			</div>
		</div>
	</div>


<div class="modal fade" id="informations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div>
        		<a href="https://goo.gl/maps/78FhTmAF6arBECT99" target="_blank" class="btn btn-success">Itinairaire</a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="reservation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div>
        		<form id="FORMID" action="ajoutreservation.php" method="post">
        			<label class="form-label">Date de debut</label>
        			<input class="form-control" type="date" name="datedebut">
        			<label class="form-label">Date de fin</label>
        			<input class="form-control" type="date" name="datefin">
        			<label class="form-label">Type de reservation</label>
        			<select class="form-control" name="type">
        			<option value="lointaine">reservation lointaine</option>
        			<option value="imediate">reservation imediate</option></select>
        			<input  type="hidden" name="id" value="id">
        			<small>faudra payer 30% a l'avance pour une reservation lointaine </small>
        		</form>
        </div>
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-success" form="FORMID">Reservez</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
