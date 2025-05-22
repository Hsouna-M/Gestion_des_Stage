
<!-- this page needs to have as holders and values the original values of the student  -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>

 <?php
 $matricule=$ens['matricule']; 
 $nom=$ens['nom']; 
 $prenom=$ens['prenom']; 
?> 
  <form action="/enseignant/update" method="POST"> 
 <?php 
 echo <<<HTML
    <label for="matricule">matricule:</label>
    <input type="text" id="matricule" name="matricule"  value=$matricule required><br><br>
    <label for="nom">nom:</label>
    <input type="text" id="nom" name="nom" value=$nom required><br><br>
    <label for="prenom">prenom:</label>
    <input type="text" id="prenom" name="prenom" value=$prenom required><br><br>
    <button type="submit">update enseignant</button>
    HTML;
 ?>
  </form> 

</body>
</html>


