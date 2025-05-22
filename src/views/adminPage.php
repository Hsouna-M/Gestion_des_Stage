<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS to match previous pages -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        .dashboard-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard-card {
            max-width: 600px;
            width: 100%;
        }
        .btn-action {
            width: 100%;
            max-width: 200px;
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
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Admin Dashboard -->
    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="card shadow-sm p-4">
                <h1 class="card-title text-center mb-4">Welcome Back, <?php echo htmlspecialchars($_SESSION['admin']); ?>!</h1>
                <div class="list-group">
                    <div class="list-group-item">
                        <h5 class="mb-3">Gérer Soutenance</h5>
                        <a href="/soutenance" class="btn btn-primary btn-action">Consulter</a>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-3">Gérer Étudiant</h5>
                        <a href="/etudiant" class="btn btn-primary btn-action">Consulter</a>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-3">Gérer Enseignant</h5>
                        <a href="/enseignant" class="btn btn-primary btn-action">Consulter</a>
                    </div>
                    <div class="list-group-item text-center">
                        <a href="/login" class="btn btn-outline-danger btn-action">Logout</a>
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