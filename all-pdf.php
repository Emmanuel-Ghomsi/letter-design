<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="design a letter for entreprise" />
    <meta name="author" content="Emmanuel GHOMSI GHOMSI" />
    <title>Lettre pour entreprises</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Hkdigitals</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Remplir les adresses des entreprises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all-pdf.php">Générer le PDF complet</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <h1 class="my-3 text-center">Choisir les fichiers</h1>
        <form class="my-4" action="combine-pdf.php" method="post" enctype="multipart/form-data">
            <div class="form-group my-3">
                <label for="name">Selectionner les pdf</label>
                <input type="file" class="form-control" id="name" name="upload[]" accept="application/pdf" required multiple />
            </div>
            <div class="form-group my-3 d-flex justify-content-evenly">
                <input type="submit" class="btn btn-primary" value="Génerer le PDF" />
            </div>
        </form>
    </main>
</body>

</html>