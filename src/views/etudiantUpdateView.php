<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Étudiant</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous">
    <!-- Custom CSS to match previous pages -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        .form-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-card {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar (matching previous pages) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Update Étudiant Form -->
    <div class="form-container">
        <div class="form-card">
            <div class="card shadow-sm p-4">
                <h2 class="card-title text-center mb-4">Update Étudiant</h2>
                <?php
                $nce = htmlspecialchars($etudiantInstance['nce']);
                $nom = htmlspecialchars($etudiantInstance['nom']);
                $prenom = htmlspecialchars($etudiantInstance['prenom']);
                $classe = htmlspecialchars($etudiantInstance['classe']);
                ?>
                <form action="/etudiant/update" method="POST">
                    <div class="mb-3">
                        <label for="nce" class="form-label">NCE</label>
                        <input type="text" class="form-control" id="nce" name="nce" value="<?php echo $nce; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $nom; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $prenom; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="classe" class="form-label">Classe</label>
                        <input type="text" class="form-control" id="classe" name="classe" value="<?php echo $classe; ?>" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Étudiant
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer (matching previous pages) -->
    <footer class="bg-light text-center py-3">
        <div class="container">
            <p class="mb-0">© 2025 My App. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>