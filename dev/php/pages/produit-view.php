<?php include $_SESSION['tables']."articles.php"; ?>
<div class="container-fluid">
	<div class="container mt-5">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo $_SESSION['href'].$article1['image']?>" class="img-fluid">
					</div>
					<div class="col-md-6">
						<?php
						$article1 = $articles[1];
						echo $article1['titre'].'<br>';
						echo $article1['description'].'<br>';
						echo $article1['prix'].'<br>';
						echo '<a href="'.$_SESSION['href'].'home/rdv/create.php?id="'.$article1['id'].'" class="btn btn-primary">Crée un rendez-vous</a><br>';
						?>
						<h5></h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>