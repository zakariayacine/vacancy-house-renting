<div class="baground">
<div class="pb-5">
  <div class="pb-5">
    <div align="center" class="container pt-5 pb-5">
      <div class="logo">Abritel.com</div>
        <div class="info">La première plateforme de location de maison de vacance en algerie </div>
        <form class="search" action="search.php" method="get">
          <input class="form-control me-2 mb-2" type="search" placeholder="Prix minimum la nuité ex: 4000.00 DA/nuit" aria-label="prix" name="prix">
          <select class="form-control mb-2" name="wilaya">
            <?php include $_SESSION['composants']."wilaya.php" ?>
          </select>
          <input class="form-control mb-2" type="date" name="date">
          <button class="btn btn-secondary mt-3" type="submit">Rechercher</button>
          <a href="" class="btn btn-secondary mt-3">Populaire</a>
        </form> 
    </div>
  </div>
</div> 
</div>
