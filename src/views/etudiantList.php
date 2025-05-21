 <!-- this page should be included in the controller when handling the fetching so the reqults inside the controller could be accessed throught this view , see grock for more details 
 and inthat case there will be no loadView function for the StudentList -->

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Etudiant List</title>

     <!-- bootstrap styling -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- font awsome cdn  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==">

 </head>

 <body>
     <div class="row">
         <div class="col-md-6 m-auto">
             <!-- fetch the data -->
             <table class="table table-striped border my-5px">
                 <thead>
                     <th>NCE</th>
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>classe</th>
                     <th>Update</th>
                     <th>Delete</th>
                 </thead>
                 <tbody>
                     <?php
                        foreach ($etudiantList as $row) {
                            echo <<< HTML
                            <tr>
                                <td>{$row['nce']}</td>
                                <td>{$row['nom']}</td>
                                <td>{$row['prenom']}</td>
                                <td>{$row['classe']}</td>
                                <td>
                                 <a href="/etudiant/update?nce={$row['nce']}">Update</a>
                                </td>
                                <td>
                                    <form action="/etudiant/delete" method="POST">
                                        <input type="hidden" id="nce" name="nce" value="{$row['nce']}" >
                                        <button type="submit"> Delete </button>
                                    </form>
                                </td>
                            </tr>                            
                        HTML;
                        }
                        ?>
                 </tbody>
             </table>
                 <a href="/etudiant/add">Ajouter Etudiant</a>
         </div>
     </div>
 </body>

 </html>