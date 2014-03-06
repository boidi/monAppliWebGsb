<?php
/** 
 * Page d'accueil de l'application web AppliFrais
 * @package default
 * @todo  RAS
 */
  $repInclude = './include/';
  require($repInclude . "_init.inc.php");

  // page inaccessible si utilisateur non connecté
  if ( ! estUtilisateurConnecte() ) 
  {
        header("Location: Seconnecter.php");  
  }
  require($repInclude . "entete.inc.html");
  require($repInclude . "_sommaire.inc.php");
?>
  <!-- Division principale -->
  <div id="contenu">
      <h2>Bienvenue sur l'intranet GSB</h2>
  </div>
<?php        
  require($repInclude . "pied.inc.html");
  require($repInclude . "_fin.inc.php");
?>
