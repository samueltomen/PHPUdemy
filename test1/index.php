<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['image']['size'] <= 1000000000) {
        // Testons si l'extension est autorisée
        $fileInfo = pathinfo($_FILES['image']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        if (in_array($extension, $allowedExtensions)) {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Hebergeur d'image</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header class="text-center">
        <h1 class="d-inline-block text-center justify-content-center bg-primary display-1">Hebergeur d'image</h1>

    </header>
    <main>
        <h2 class="bg-danger p-2 text-center font-size-lg display-2 text-uppercase">Photoshoot</h2>
        <div class="container">
            <!-- F0RMULAIRE -->
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <!-- Ajout des champs email et message -->

                <!-- Ajout champ d'upload ! -->
                <div class="mb-3 mt-5">
                    <label for="screenshot" class="form-label border border-2 border-dark p-1">Votre image</label>
                    <input type="file" class="form-control" id="screenshot" name="screenshot" />
                </div>
                <!-- Fin ajout du champ -->
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>