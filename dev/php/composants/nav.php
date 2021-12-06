</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Abritel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $_SESSION['href'].'index.php'?>">Accueil</a>
        </li>
      </ul>
      <div class="d-flex">
      <?php if (isset($_SESSION['role'])) {
        echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="'.$_SESSION['href'].'home/profil.php">'.$_SESSION['name'].'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'.$_SESSION['href'].'home/logout.php">deconnexion</a>
        </li>
      </ul>';
      }else{
        echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php">Connexion</a>
        </li>
      </ul>';
      }; ?>

      </div>
    </div>
  </div>
</nav>