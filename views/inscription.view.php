<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>S'enregistrer</title>
  <?php include('../include/include.php');  ?>
  
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Eczar" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="../css/inscription.css" rel="stylesheet" type="text/css" />
</head>

<body>  
  <?php include('../include/header.php'); ?>

        
<div class="container">
<div class="row">
<div id="formulaire" class="col-md-9 offset-4">
    
    
<div class="row">
<div class="col-md-offset-2 col-md-8 titre">
<h1> Inscris toi</h1>

</div>   
</div>

    

<form method="POST">
             <?php   if(isset($erreur))
            echo '<br /><p class="erreur">'.$erreur.'</p>';

          elseif(isset($validate))
            echo '<br /><p class="validate">'.$validate.'</p>';
        ?>
<div class="row civ">
    <div class="form-check form-check-inline">

    &nbsp; &nbsp; <input class="form-check-input" type="radio"  name="civilite" id="civilite" value="Femme">
    <label class="form-check-label" for="inlineRadio1">Madame</label>
    </div>
    
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="civilite" id="civilite" value="Homme">
    <label class="form-check-label" for="inlineRadio1">Monsieur</label>
    </div>
   
</div>
          
<div class="row">
    
    <div class="col-md-offset-2 col-md-3">
        <div class="form-group">
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="<?php if(isset($nom)){echo $nom;} ?>" >
        </div>
    </div>
    
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" value="<?php if(isset($prenom)){echo $prenom;} ?>" >
        </div>
    </div>
</div>

<div class="row">
    
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
        <label for="Email">Adresse Email</label>
        <input type="email" class="form-control" id="mail" name="mail" placeholder="Votre email" value="<?php if(isset($mail)){echo $mail;} ?>" >
    </div>
    </div>
    
     <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
        <label for="Email">Confirmez votre Email</label>
        <input type="email" class="form-control" id="mail2" name="mail2" placeholder="Retapez votre email" value="<?php if(isset($mail)){echo $mail;} ?>" >
    </div>
    </div>
    
</div>
    
   
    <div class="row">
        
        <div class="col-md-offset-2 col-md-3">
             <div class="form-group">
        <label for="Pseudo">Votre pseudo</label>
        <input type="text" class="form-control" id="nom" name="pseudo" placeholder="Inscrivez votre pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>" >
        </div>
            
        </div>
        
         <div class="col-md-offset-1 col-md-3">
            <div class="form-group">
            <label for="Email">Date de naissance</label>
            <input type="date" class="form-control" id="email" name="anniversaire" placeholder="date de naissance">
            </div>
        </div>
        
    </div>

<div class="row">
    <div class="col-md-offset-2 col-md-3">
        <div class="form-group">
        <label for="Password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
    </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
        <label for="Vpassword">V&eacute;rification mot de passe</label>
        <input type="password" class="form-control" id="vpassword" name="password2" placeholder="verification mot de passe">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-offset-2 col-md-3">
    
        <div class="input-group">
        <span class="input-group-addon glyphicon glyphicon-globe"></span>
        <input type="text" class="form-control" placeholder="Adresse" aria-describedby="basic-addon1" name="adresse" value="<?php if(isset($adresse)){echo $adresse;} ?>" />
        </div>
 
    <div class="input-group">
        
        <input type="text" class="form-control" placeholder="Code postal" aria-describedby="basic-addon1" name="cp" value="<?php if(isset($cp)){echo $cp;} ?>" >
    </div>  
        
     <div class="input-group">
        
        <input type="text" class="form-control" placeholder="ville" aria-describedby="basic-addon1" name="ville" value="<?php if(isset($ville)){echo $ville;} ?>" >
    </div>     
        
        
        
        <div class="input-group">
            <select class="form-control" id="pays" name="pays">
            <option>France</option>
            <option>Belgique</option>
            <option>Suisse</option>
            </select>
        </div> 
    
  
    
    </div>
</div>

<br/>
<div class="row bouton" >
        <input type="submit" class="btn btn-success btn-sm" name="form_inscription" value="Envoyer" />
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="btn btn-secondary btn-sm" value="Recommencer" />  
</div>
    

    

</form>
    
</div>
 </div>
</div>
    
    
    
</body>
   
</html>
