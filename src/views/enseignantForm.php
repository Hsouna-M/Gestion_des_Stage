 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modifier Enseignant</title>
</head>
<body>

  <form action="/enseignant/add" method="POST"> 

    <label for="matricule">matricule:</label>
    <input type="text" id="matricule" name="matricule" required><br><br>

    <label for="nom">nom:</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">prenom:</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <button type="submit">Ajouter</button>
  </form> 
</body>
</html>


