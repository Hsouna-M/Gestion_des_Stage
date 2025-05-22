<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant List</title>
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
        .main-content {
            flex: 1;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .table-container {
            max-width: 900px;
        }
        .btn-action {
            width: 100%;
            max-width: 120px;
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

    <!-- Main Content -->
    <div class="main-content">
        <div class="container table-container">
            <h2 class="text-center mb-4">Étudiant List</h2>
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>NCE</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Classe</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($etudiantList as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['nce']); ?></td>
                                    <td><?php echo htmlspecialchars($row['nom']); ?></td>
                                    <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                                    <td><?php echo htmlspecialchars($row['classe']); ?></td>
                                    <td>
                                        <a href="/etudiant/update?nce=<?php echo urlencode($row['nce']); ?>" class="btn btn-outline-primary btn-sm btn-action">
                                            <i class="fas fa-edit"></i> Update
                                        </a>
                                    </td>
                                    <td>
                                        <form action="/etudiant/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                            <input type="hidden" name="nce" value="<?php echo htmlspecialchars($row['nce']); ?>">
                                            <button type="submit" class="btn btn-outline-danger btn-sm btn-action">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="text-center mt-4">
                        <a href="/etudiant/add" class="btn btn-primary btn-action">
                            <i class="fas fa-plus"></i> Ajouter Étudiant
                        </a>
                    </div>
                </div>
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