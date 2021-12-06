<div class="container-fluid mt-5">
	<div class="container">
		<nav class="navbar navbar-light bg-light">
		  <div class="container-fluid">
		    <form class="d-flex" action="search.php" method="get">
		    	<input class="form-control me-2" type="search" placeholder="Prix minimum la nuité" aria-label="prix" name="prixmin">
		    	<input class="form-control me-2" type="search" placeholder="Prix maximum la nuité" aria-label="prix" name="prixmax">
		    	<select class="form-control me-2" name="wilaya">
		    		<option value="0">Wilaya</option>
            		<?php include $_SESSION['composants']."wilaya.php" ?>
          		</select>
		      <input class="form-control me-2" type="search" name="text" placeholder="Titre" aria-label="Search">
		      <button class="btn btn-outline-success" type="submit">rechercher</button>
		    </form>
		  </div>
		</nav>
		<div class="row">
			<?php
			include $_SESSION['tables']."articles.php";
			foreach ($articles as $article) {
				echo '<div class="col-md-3 mt-3">
						<div class="card" style="width: 17rem;">
						  <img src="'.$article['image'].'" class="card-img-top" alt="'.$article['imageDescription'].'">
						  <div class="card-body">
						    <h5 class="card-title">'.$article['titre'].'</h5>
						    <p class="card-text">'.$article['description'].'</p>
						    <p class="card-text">Prix : '.$article['prix'].'</p>
						    <a href="article/index.php?id='.$article['id'].'" class="btn btn-primary">Plus d\'information</a>
						  </div>
						</div>
			          </div>';
			}
			?>
		</div>
	</div>
</div>