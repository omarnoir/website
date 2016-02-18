<!DOCTYPE html>
<html>
     <head>
        <title>website of Eric and Omar-Yann</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="website of Eric and Omar-Yann" />
        <meta name="keywords" content="web,site,depannage, réseau, réseaux, informatique, ordinateur, formation, assistance, problème, internet" />
        <meta name="author" content="Eric Lorand and Omar-Yann Diabira" />
        <link href="css/header-style.css" type="text/css" rel="stylesheet" />
        <link href="css/style.css" type="text/css" rel="stylesheet" />
        <link href="css/body-style.css" type="text/css" rel="stylesheet" />
        <link href="css/form-style.css" type="text/css" rel="stylesheet" />
     </head>

     <body>
        <?php include("part/header.php"); ?>


       <section id="section1">
           <ul id="icons">
            <li>
                <a href="screen.php">
                <img src="icons/computer1.png" alt="" />
                <span>Pb sur un écran ?</span>
                </a>
            </li>
             <li>
                  <a href="#">
                  <img src="icons/computer2.png" alt="" />
                  <span>Pb sur un PC de bureau ?</span>
                  </a>
             </li>
                 <li>
                  <a href="#">
                  <img src="icons/internet.png" alt="" />
                  <span>Pb lié à internet ?</span>
                  </a>
             </li>
                 <li>
                  <a href="#">
                  <img src="icons/laptop.png" alt="" />
                  <span>Pb sur un Ordinateur portable ?</span>
                  </a>
             </li>
                 <li>
                  <a href="#">
                  <img src="icons/smartphone.png" alt="" />
                  <span>Pb sur un Smartphone</span>
                  </a>
             </li>
                 <li>
                  <a href="#">
                  <img src="icons/tablet.png" alt="" />
                  <span>Pb sur une tablette ?</span>
                  </a>
             </li>
                     <li>
                  <a href="#">
                  <img src="icons/wireless.png" alt="" />
                  <span>Pb de réseaux sans fils ?</span>
                  </a>
             </li> 
            </ul>
       </section>
            
        <section id="section2">
            <h1>Un problème avec votre ecran ?</h1>
            <p>Avant d'avoir recours à un dépanneur, nous vous conseillons fortement d'avoir au minimum fait les vérifications listées ci-après, cela peux vous permettre d'identifier le problème sans avoir recours à un dépanneur. Sinon, contactez nous au 06.XX.XX.XX.XX</p> 
            <h2>Conseil n°1 : Vérifier le cable reliant le l'écran au PC</h2>
            <p>DVI, HDMI, VGA </p> 
            <h2>Conseil n°2 : Vérifier le cable d'alimentation de l'ordinateur</h2>
            <p>Reliant le PC à la prise éléctrique. Si possiblre, essayer une autre prise... ajouter des images aussi.</p>
            <h2>Conseil N°3</h2>
       </section>
        <section id="section3">
            
        </section>
       <aside>
         <p>menu vertical</p>
       </aside>
            
            
<!--voir attributs "size", "COLS", "ROWS", "type=hidden"-->
            
<form action="php/formtreatment.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name"/>
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input type="email" id="email" name="email"/>
    </div>
    <div>
        <label for="subject">Objet :</label>
        <input type="text" id="subject" name="subject"/>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>

       <footer>
         <p>pied de page</p>
       </footer>
         </div>
            
        <script src="js/classie.js"></script>
		<script src="js/cbpAnimatedHeader.min.js"></script>
        
     </body>
</html>
