<!-- this page needs to have as holders and values the original values of the student  -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
 <?php
 $nce=$etudiantInstance['nce']; 
 $nom=$etudiantInstance['nom']; 
 $prenom=$etudiantInstance['prenom']; 
 $classe=$etudiantInstance['classe']; 
?> 
  <form action="/etudiant/update" method="POST"> 
 <?php 
 echo <<<HTML
    <label for="nce">nce:</label>
    <input type="text" id="nce" name="nce"  value=$nce required><br><br>
    <label for="nom">nom:</label>
    <input type="text" id="nom" name="nom" value=$nom required><br><br>
    <label for="prenom">prenom:</label>
    <input type="text" id="prenom" name="prenom" value=$prenom required><br><br>
    <label for="classe">classe:</label>
    <input type="text" id="classe" name="classe" value=$classe required><br><br>
    <button type="submit">update Etudiant</button>
    HTML;
 ?>
  </form> 

</body>
</html>


