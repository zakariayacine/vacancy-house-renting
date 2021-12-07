<div class="container-fluid mt-3">
		<div class="card">
			<div class="card-header">
				<h5><a href="<?php echo $_SESSION['href'].'home' ?>" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>	Liste de vos produits</h5>
			</div>
			<div class="card-body">
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Titre</th>
				      <th scope="col">description</th>
				      <th scope="col">prix</th>
				      <th scope="col">action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	include $_SESSION['tables']."articles.php";
				  		foreach ($articles as $article) {
				  			echo '<tr>
				      <th scope="row"> '.$article['id'].' </th>
				      <td> '.$article['titre'].' </td>
				      <td> '.$article['description'].' </td>
				      <td> '.$article['prix'].' </td>
				      <td><div class="btn-group" role="group"><a class="btn btn-primary btn-sm" href="view.php?id='.$article['id'].'"><i class="fas fa-eye"></i></a>
				      <a class="btn btn-success btn-sm" href="edit.php?id='.$article['id'].'"><i class="far fa-edit"></i></a>
				      <a class="btn btn-danger btn-sm" href="delete.php?id='.$article['id'].'"><i class="fas fa-trash-alt"></i></a></div></td>
				    </tr>';
				  		}
				  	?>
				    
				  </tbody>
				</table>
			</div>
		</div>
	
</div>