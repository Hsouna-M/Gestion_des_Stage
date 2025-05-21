 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

  <form action="/etudiant/add" method="POST"> 

    <label for="nce">nce:</label>
    <input type="text" id="nce" name="nce" required><br><br>

    <label for="nom">nom:</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">prenom:</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="classe">classe:</label>
    <input type="text" id="classe" name="classe" required><br><br>

    <button type="submit">Add Etudiant</button>
  </form> 
</body>
</html>


