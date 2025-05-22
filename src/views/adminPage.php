<!-- this page will just welcome the admin and offer him links and buttons to do actions  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
    <h1>Welcome Back  <?php echo $_SESSION['admin']; ?> </h1>
    <h1><?php echo $_SESSION['auth']; ?> </h1>
    <div>
        <h2>Gerer soutenance</h2>
        <a href="/soutenance">consulter</a>
    </div>
    <div>
        <h2>Gerer etudiant</h2>
        <a href="/etudiant">consulter</a>
    </div>
    <div>
        <h2>Gerer enseignant</h2>
        <a href="/enseignant">consulter</a>
    </div>
    <div>
        <a href="/login">logout</a>
    </div>
   
</body>

</html>