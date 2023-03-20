<!--
<nav class="light-blue">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=home" class="brand-logo">Billy Tabonkeng - web dev</a>
            
            

            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                <li class="<?php echo ($page=="projets")?"active" : ""; ?>"><a href="index.php?page=projets">Mes projets</a></li>
                <li class="<?php echo ($page=="curriculum")?"active" : ""; ?>"><a href="index.php?page=curriculum">Curriculum vitae</a></li>
                <li class="<?php echo ($page=="tutoriel")?"active" : ""; ?>"><a href="index.php?page=tutoriel">Tutoriels & liens utiles</a></li>
                <li class="<?php echo ($page=="contact")?"active" : ""; ?>"><a href="index.php?page=contact">Contact</a></li>
            </ul>

            

           

        </div>
    </div>
</nav>

-->

<input type="checkbox" id="menu-toggle"/>
  <label id="trigger" for="menu-toggle"></label>
  <label id="burger" for="menu-toggle"></label>
  <ul id="menu">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home" class="hoverBtn">Accueil</a></li>
                <li class="<?php echo ($page=="projets")?"active" : ""; ?>"><a href="index.php?page=projets" class="hoverBtn">Mes projets</a></li>
                <li class="<?php echo ($page=="curriculum")?"active" : ""; ?>"><a href="index.php?page=curriculum" class="hoverBtn">Curriculum vitae</a></li>
                <li class="<?php echo ($page=="tutoriel")?"active" : ""; ?>"><a href="index.php?page=tutoriel" class="hoverBtn">Tutoriels & liens utiles</a></li>
                <li class="<?php echo ($page=="contact")?"active" : ""; ?>"><a href="index.php?page=contact" class="hoverBtn">Contact</a></li>
  </ul>
