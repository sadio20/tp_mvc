tester la vue!!!


<?php include "header.php"; ?>

<?php
// Connecter à la BD

database();
require_once "Article.php";
?>
<h1>Liste des articles </h1>
<?php
// recuperer l ensemble des données des utilisateurs
$entry = Article::all();

foreach($entry as $monarticle){
    echo "<a href='unarticle.php?id=".$monarticle->id."'> $monarticle->titre $monarticle->description </a>
    
    -   <a href='aj_fav.php?id=".$monarticle->id."'>Ajouter au favoris</a>-
    
  -   <a href='modifier.php?id=".$monarticle->id."'>Modifier</a>-
    
    
    <a href='supprimer.php?id=".$monarticle->id."'>Supprimer</a><hr>";
    
    
    //<a href='unutilisateur.php?id=".$monarticle->id."'>$monarticle->prenom."  ".$monarticle->nom."</a> <hr>";
}

// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>

<!-- include "header.php"; ?>

<?php
if ( (isset($_POST['titre'])==true) && 
(isset($_POST['description'])==true) &&
(isset($_POST['prix'])==true)) 
{
 
 
 // Connexion BD
 
 bd();
 // Insertion BD
 
   require_once "Article.php";

   $entry = new Article;
   $entry->titre = $_POST['titre'];
   $entry->description = $_POST['description'];
   $entry->prix =$_POST['prix'];
   $entry->image = "";
   $entry->save();
    

}

?>
<form method="POST" action="ajouter_article.php">
    <input type="text" placeholder="Veuillez entrez Le titre" name="titre" /> <br />
    <input type="text" placeholder="Veuillez entrez La description" name="description" /> <br />
    <input type="text" placeholder="Veuillez entrez le prix" name="prix" /> <br />
    <input type="submit" value="Ajouter article !" />
</form>   -->

<?php include "footer.php"; ?>