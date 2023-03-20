
<?php
echo"r";
?>


<!--
  <?php
    $retour = mail('billy.tab@hotmail.com', 'Envoi depuis la page Contact', $_POST['message'], $_POST['email'], $_POST['firstname'], 'no-reply@webdev-cf2m.be');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
-->   
  
<div  id="formulaireTI">
  <div class="row">
    <form class="col s12" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Prénom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="firstname" class="validate">
          <label for="last_name">Nom de famille</label>
        </div>
      </div>
      
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="mail">Adresse mail</label>
        </div>
      </div>
      <!--
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      -->  
      <div class="row">
        <div class="input-field col s11">
          <input id="message" type="text" name="message" class="validate">
          <label for="email">Votre message</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
      <i class="material-icons right">send</i>
    </button>
        </div>
      </div>
    </form>
  </div>
 </div>     

