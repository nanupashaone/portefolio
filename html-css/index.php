<?php
include 'functions/main-functions.php';

$pages = scandir('pages/');
if(isset($_GET['page']) && !empty($_GET['page'])){
   if(in_array($_GET['page'].'.php',$pages)) {
        $page = $_GET['page'];
        
   } else {
        $page = "error";
 
    } 

} else {
    $page = "home";
}

$pages_functions = scandir('functions/');
if(in_array($page.'.func.php',$pages_functions)){
  include 'functions/'.$page.'.func.php';
}

?>



<!DOCTYPE html>
  <html>
    <head>
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css-materielaze/materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
         @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap');

/** DARKMODE */

#dark-mode-btn {
    right: 50px;
    top: 10px;
    position:fixed;
    background-color: black;
    color: white;
    height: 30px;
    margin-right: 5%;
    border-radius: 15px;
    font-style: 18px "Roboto", sans-serif;
}

#dark-mode-btn:hover {
    transition: 1s ease-in;
    background-color: #fff;
    color: black;
}


body.dark-mode {
  background-color: #333; /* Couleur de fond foncée */
  color: #fff; /* Couleur de texte claire */
}
/**** */

#formulaireTI {
  margin-top: 20%;
  
}

/*** MENU BURGER */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,700);

@keyframes checked-anim {
    50% {
        width: 3000px;
        height: 3000px;
    }
    100% {
        width: 100%;
        height: 100%;
        border-radius: 0;
    }
}
@keyframes not-checked-anim {
    0% {
        width: 3000px;
        height: 3000px;
    }
}
li, a {
    margin: 75px 0 5px 0;
    color: #03A9F4;
    font-style: 19pt "Roboto", sans-serif;
    font-weight: 700;
    line-height: 1.8;
    text-decoration: none;
    text-transform: none;
    list-style: none;
    outline: 0;
    display: none;
    transition: 0.5s ease-in;
    width: 300px;
}

.hoverBtn:hover {
background-color: #03A9F4;
color: white;
}

li {
    width: 230px;
    text-indent: 56px;}
a:focus {
    display: block;
    color: #333;
    background-color: #eee;
    transition: all .5s;
}
aside {
    position: absolute;
    color: white;
    top: 35%;
    right: 10%;
    text-align: right;
}
h1 {
    line-height: 0;
    font-size: 4vw;
    font-weight: 700;
}
h3 {
    float: right;
    line-height: .3;
    font-size: 2.5vw;
    font-weight: lighter;
}
h4 {
    float: left;
    margin-left: -2%;
    font-size: 1.5vw;
    font-weight: lighter;
}

html, body {
    margin: 0;
    padding: 0;
    background-color: #03A9F4;
    font-family: 'Roboto', sans-serif;
    overflow: hidden;
    transition: 1s ease-in;
    
}

#trigger, #burger, #burger:before, #burger:after {
    position: absolute;
    top: 25px;
    left: 25px;
    background: #03A9F4;
    width: 30px;
    height: 5px;
    transition: .2s ease;
    cursor: pointer;
    z-index: 1000;

}
#trigger {
    height: 25px;
    background: none;
}
#burger:before {
    content: " ";
    top: 10px;
    left: 0;
}
#burger:after {
    content: " ";
    top: 20px;
    left: 0;
}
#menu-toggle:checked + #trigger + #burger {
    top: 35px;
    transform: rotate(180deg);
    transition: transform .2s ease;
}

#menu-toggle:checked + #trigger + #burger:before {
    width: 20px;
    top: -2px;
    left: 18px;
    transform: rotate(45deg) translateX(-5px);
    transition: transform .2s ease;
}
#menu-toggle:checked + #trigger + #burger:after {
    width: 20px;
    top: 2px;
    left: 18px;
    transform: rotate(-45deg) translateX(-5px);
    transition: transform .2s ease;
}
#menu {
    position: absolute;
    margin: 0; padding: 0;
    width: 110px;
    height: 110px;
    background-color: #fff;
    border-bottom-right-radius: 100%;
    box-shadow: 0 2px 5px rgba(0,0,0,0.26);
    animation: not-checked-anim .2s both;
    transition: .2s;
    background-color: lightblue;
    z-index: 1;
    
}
#menu-toggle:checked + #trigger + #burger + #menu {
    animation: checked-anim 1s ease both;
}
#menu-toggle:checked + #trigger ~ #menu > li, a {
    display: block;
}
[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
    display: none;
}



/***** FIN MENU BURGER */

  .tutoriel {
    padding: 30px 30px 30px 30px;
          margin-top: 10%;
          -webkit-box-shadow: 2px -1px 48px 5px rgba(120,228,255,1);
          -moz-box-shadow: 2px -1px 48px 5px rgba(120,228,255,1);
          box-shadow: 2px -1px 48px 5px rgba(120,228,255,1);
          border-radius: 15px; 
          font-size: 28px;
  }

  #tutoTI {
    border: solid 1px black;
    
  }

  #liens {
    font-size: 20px;
  }

  .container {
    width: 100%;
   
  }       
        
      
  .projet {
    width: 100%;
    margin-left: 20%;
  }


        .présentationDePage {
          font-size: 32px;
          padding: 30px 30px 30px 30px;
          margin-top: 10%;
          -webkit-box-shadow: 2px -1px 48px 5px rgba(120,228,255,1);
          -moz-box-shadow: 2px -1px 48px 5px rgba(120,228,255,1);
          box-shadow: 2px -1px 48px 5px rgba(120,228,255,1);
          border-radius: 15px; 
          
        }  


        
        


  /*** ANIMATION BACKGROUND */

        @keyframes move {
          100% {
                    transform: translate3d(0, 0, 1px) rotate(360deg);
              }
        }

       

      

          .background {
              
              width: 100vw;
              height: 100vh;
              top: 0;
              left: 0;
              background: white;
              overflow: scroll;
              font-family: 'EB Garamond', serif;
              
              
          }

          .background span {
              width: 20vmin;
              height: 20vmin;
              border-radius: 20vmin;
              backface-visibility: hidden;
              position: absolute;
              animation: move;
              animation-duration: 10s;
              animation-timing-function: linear;
              animation-iteration-count: infinite;
              opacity: 0.4;
          }


          .background span:nth-child(0) {
              color: #adc6ff;
              top: 43%;
              left: 5%;
              animation-duration: 101s;
              animation-delay: -220s;
              transform-origin: 22vw 2vh;
              box-shadow: 40vmin 0 5.541316018217228vmin currentColor;
          }
          .background span:nth-child(1) {
              color: #e59a5d;
              top: 93%;
              left: 40%;
              animation-duration: 188s;
              animation-delay: -173s;
              transform-origin: 16vw -21vh;
              box-shadow: 40vmin 0 5.305146045776656vmin currentColor;
          }
          .background span:nth-child(2) {
              color: #e59a5d;
              top: 70%;
              left: 61%;
              animation-duration: 227s;
              animation-delay: -177s;
              transform-origin: -3vw -3vh;
              box-shadow: -40vmin 0 5.878582345156995vmin currentColor;
          }
          .background span:nth-child(3) {
              color: #04aee7;
              top: 50%;
              left: 5%;
              animation-duration: 166s;
              animation-delay: -56s;
              transform-origin: -20vw -24vh;
              box-shadow: 40vmin 0 5.808187227963542vmin currentColor;
          }
          .background span:nth-child(4) {
              color: #e59a5d;
              top: 56%;
              left: 59%;
              animation-duration: 194s;
              animation-delay: -10s;
              transform-origin: -16vw 1vh;
              box-shadow: -40vmin 0 5.751248169961698vmin currentColor;
          }
          .background span:nth-child(5) {
              color: #04aee7;
              top: 69%;
              left: 81%;
              animation-duration: 108s;
              animation-delay: -105s;
              transform-origin: -14vw 3vh;
              box-shadow: -40vmin 0 5.6715347914893055vmin currentColor;
          }
          .background span:nth-child(6) {
              color: #04aee7;
              top: 93%;
              left: 36%;
              animation-duration: 143s;
              animation-delay: -221s;
              transform-origin: 12vw 24vh;
              box-shadow: -40vmin 0 5.9171187488193535vmin currentColor;
          }
          .background span:nth-child(7) {
              color: #04aee7;
              top: 26%;
              left: 3%;
              animation-duration: 67s;
              animation-delay: -214s;
              transform-origin: 12vw 7vh;
              box-shadow: 40vmin 0 5.556524583541761vmin currentColor;
          }
          .background span:nth-child(8) {
              color: #e59a5d;
              top: 64%;
              left: 45%;
              animation-duration: 219s;
              animation-delay: -20s;
              transform-origin: 11vw -15vh;
              box-shadow: -40vmin 0 5.7772695262516365vmin currentColor;
          }
          .background span:nth-child(9) {
              color: #e59a5d;
              top: 56%;
              left: 61%;
              animation-duration: 68s;
              animation-delay: -80s;
              transform-origin: 24vw -17vh;
              box-shadow: 40vmin 0 5.184868328489744vmin currentColor;
          }
          .background span:nth-child(10) {
              color: #adc6ff;
              top: 15%;
              left: 85%;
              animation-duration: 20s;
              animation-delay: -205s;
              transform-origin: 12vw -8vh;
              box-shadow: 40vmin 0 5.491565176583039vmin currentColor;
          }
          .background span:nth-child(11) {
              color: #04aee7;
              top: 93%;
              left: 17%;
              animation-duration: 222s;
              animation-delay: -248s;
              transform-origin: 18vw -5vh;
              box-shadow: -40vmin 0 5.896101992344276vmin currentColor;
          }
          .background span:nth-child(12) {
              color: #04aee7;
              top: 92%;
              left: 65%;
              animation-duration: 70s;
              animation-delay: -113s;
              transform-origin: -10vw -21vh;
              box-shadow: -40vmin 0 5.6106087900425266vmin currentColor;
          }
          .background span:nth-child(13) {
              color: #04aee7;
              top: 64%;
              left: 98%;
              animation-duration: 129s;
              animation-delay: -242s;
              transform-origin: -18vw 2vh;
              box-shadow: -40vmin 0 5.893728906077204vmin currentColor;
          }
          .background span:nth-child(14) {
              color: #e59a5d;
              top: 37%;
              left: 69%;
              animation-duration: 154s;
              animation-delay: -189s;
              transform-origin: -1vw -7vh;
              box-shadow: 40vmin 0 5.028525131632141vmin currentColor;
          }
          .background span:nth-child(15) {
              color: #adc6ff;
              top: 41%;
              left: 25%;
              animation-duration: 165s;
              animation-delay: -82s;
              transform-origin: 23vw -8vh;
              box-shadow: -40vmin 0 5.890816839668469vmin currentColor;
          }
          .background span:nth-child(16) {
              color: #adc6ff;
              top: 93%;
              left: 44%;
              animation-duration: 210s;
              animation-delay: -216s;
              transform-origin: 21vw 17vh;
              box-shadow: -40vmin 0 5.359057950825701vmin currentColor;
          }
          .background span:nth-child(17) {
              color: #e59a5d;
              top: 15%;
              left: 56%;
              animation-duration: 152s;
              animation-delay: -163s;
              transform-origin: 22vw -20vh;
              box-shadow: 40vmin 0 5.417581750999315vmin currentColor;
          }
          .background span:nth-child(18) {
              color: #adc6ff;
              top: 96%;
              left: 54%;
              animation-duration: 76s;
              animation-delay: -12s;
              transform-origin: 19vw 10vh;
              box-shadow: -40vmin 0 5.339997675908524vmin currentColor;
          }
          .background span:nth-child(19) {
              color: #e59a5d;
              top: 64%;
              left: 61%;
              animation-duration: 64s;
              animation-delay: -212s;
              transform-origin: -17vw -11vh;
              box-shadow: -40vmin 0 5.718205909857737vmin currentColor;
          }
/*** FIN ANIMATION BACKGROUND */
                </style>
    </head>

    <body class="background">

    
  <button id="dark-mode-btn">Mode sombre</button>

          
      
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>




        
        <?php
             include "body/togbar.php";
        ?>
        <div class="container">
            <?php
                include 'pages/'.$page.'.php';
            ?>
        </div>
          
        <?php
             include "body/footer.php";
        ?>

      <!--PARTIE JS-->
      
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
      <script>
        $('.button-collapse').sideNav({
    menuWidth: 300, 
    edge: 'left', 
    closeOnClick: false, 
    draggable: true 
  });
      </script>

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>

const darkModeBtn = document.querySelector("#dark-mode-btn");

darkModeBtn.addEventListener("click", function() {
  document.body.classList.toggle("dark-mode");
});

  
</script>


    </body>
  </html> 

    