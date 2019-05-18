<?php $str="" ;
$usrnm = "";
$email = "";
$adultes ="";
$date = "";
$date1="";
$telephone = "";
$enfants = "" ;?>
<!Doctype>
<html>

<head>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" style="text/css" href="Style.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



</head>

<body id="bod">

     
      

    
    <div id="nav-f" class="nav_fixe">
        <div id="change">
        <ul>
            <li><a onclick="changeAtt()">Attraction</a></li>
            <li><a onclick="changeDet()">Detente</a></li>
             <li><a onclick="changeParc()">Parc</a></li>
            <li><a onclick="changeB2b()">B2B</a></li>
             
             
            </ul></div>
         <div class="langue" style="line-height: 130px;margin-left: 100px;margin-right: 100px">
                    <a style="margin-right: 10px">choisissez la langue </a>
                    <a href="#"><img src="img/france.png" alt="Avatar" class="avatar"></a>
                    <a><img src="img/italy.png" alt="Avatar" class="avatar"></a>
                    <a><img src="img/united-kingdom.png" alt="Avatar" class="avatar"></a>
                    <a><img src="img/germany.png" alt="Avatar" class="avatar"></a></div>
        <div class="listee">
                    <ul>
                        <li><a style="cursor: pointer"  onclick="document.getElementById('id02').style.display='block'">se connecter</a></li>
                        <li><a href="#" onclick="return false;" onmousedown="autoScrollTo5('next')">informations</a></li>
                        <li><a href="#" onclick="return false;" onmousedown="autoScrollTo6('next')">comment venir?</a></li>
                        <li><a href="#">photos et videos</a></li>
                    </ul>
                </div>
    </div>
     
                     <?php 
                     include_once "reservation_form.php";
                     $fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if (strpos($fullurl, "reserv=success") == true ){
        include "item.php";
      } 
      if($error==true){
        
            include "script-reserv.php";
        
      }
      

     
      
      
       
      

      ?>
    

    <?php include "signup.php" ?>
    <div style="display: flex;flex-wrap: wrap;position: relative;align-items: stretch;flex-direction: column;">
        <div id="pg" class="page">
            <div class="header" id="hd">

                <div href="#" id="title"><b> Aqua Park </b><br> Le Pirate
                </div>
                <div class="social_bar">

                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span>
</a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google+</span>
</a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i><span>Youtube</span>
            </a></li>
                        </ ul>
                </div>
                <div class="langue">
                    <a style="margin-right: 10px">choisissez la langue </a>
                    <a href="#"><img src="img/france.png" alt="Avatar" class="avatar"></a>
                    <a><img src="img/italy.png" alt="Avatar" class="avatar"></a>
                    <a><img src="img/united-kingdom.png" alt="Avatar" class="avatar"></a>
                    <a><img src="img/germany.png" alt="Avatar" class="avatar"></a></div>
                

                <div class="listee">
                    <ul>
                        <li><a href="#" onclick="document.getElementById('id02').style.display='block'">se connecter</a></li>
                        <li><a href="#" onclick="return false;" onmousedown="autoScrollTo5('next')">informations</a></li>
                        <li><a href="#" onclick="return false;" onmousedown="autoScrollTo6('next')">comment venir?</a></li>
                        <li><a href="#">photos et videos</a></li>
                    </ul>
                </div>

                <a  id="reservation" href="#" onclick="document.getElementById('id01').style.display='block'" ><i class="fas fa-check-square"></i>

 Reserver </a>



            </div>
            <div class="cover">     <img id="cover_img" class="slide fade" src="img/2.jpg">         <img id="cover_img" class="slide fade" src="img/pic1.jpg">  <img id="cover_img" class="slide fade" src="img/19388605_1249009108555147_2630791312727461922_o.jpg"> 
                <img id="cover_img" class="slide fade" src="img/3.jpg"><img id="cover_img" class="slide fade" src="img/599c16397742a.jpg">
                <div class="opacity"></div>
                <div id="nav-g" class="nav_gauche">
                    <ul id="ul-g">
                        <li><a href="#" onclick="return false;" onmousedown="autoScrollTo1('next')" ;>Attraction</a></li>
                        <li><a href="#" onclick="return false;" onmousedown="autoScrollTo2('next')">Detente</a></li>
                    </ul>
                </div>
                <div id="nav-d" class="nav_droit">
                    <ul id="ul-d">
                        <li><a href="#" onclick="return false;" onmousedown="autoScrollTo3('next')" >PARC</a></li>
                        <li><a href="#" onclick="return false;" onmousedown="autoScrollTo4('next')">B2B</a></li>
        
                    </ul>
                </div>
            </div>
            <div class="logo"> <img id='logoID' src="img/logo.png"></div>

        </div>
        <div style="display: none" id="next">
         
            <div class="bariere">
            </div>
            <div class="video-container" id="vid-c">
                <div class="cerclee"><div class="share"><i class="fas fa-share-alt" style="font-size: 300%;    line-height: 100px;"></i>

                </div><ul>
    <li><a><i class="fab fa-facebook-f" style="font-size: 300%;"></i></a></li>
    <li><a><i class="fab fa-youtube" style="font-size: 300%;"></i></a></li>
    <li><a><i class="fab fa-google-plus-g" style="font-size: 300%;"></i></a></li>
    <li><a><i class="fab fa-twitter" style="font-size: 300%;"></i></a></li>
                </ul></div>
                <div class="Up" id="up" onclick="return false;" onmousedown="resetScroller('pg')"  ><i class="fas fa-angle-double-up"></i></div>
                <video autoplay muted loop id="vid" class="myVideo">
  <source src="img/59fdaea409b84-aquapark00.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
   
                <div class="bodypageAtt" id="attrac">
                    <img src="img/logo1.png" style="float: right;margin: 29px 4px;width: 92px;">
                    <h1>ATTRACTION</h1>
                    <hr>
                    <h1 style="margin-left:0cm"><strong>Space Hole:</strong></h1>

                    <p style="margin-left:0cm">Longueur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BOWL+30 m</p>

                    <p style="margin-left:0cm">Hauteur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11m</p>

                    <p style="margin-left:0cm">Le ‘SpaceHole’est un toboggan qui est à la fois passionnant et excitant, il est conçu pour créer de l’excitation ultime. Le client bénéfice de trois sensations d’excitation différentes en un toboggan : l’excitation d’être enfermé dans un tunnel sortant d’une énorme boule ouverte et continuant avec plusieurs tourbillons autour de cette boule grâce à cette force centrifuge et en finissant avec un grand plongeon dans le ‘trou’.&nbsp;&nbsp;</p>

                    <p style="margin-left:0cm">&nbsp;</p>

                    <h1 style="margin-left:0cm"><strong>Multi Slide:</strong></h1>

                    <p style="margin-left:0cm">Longueur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20m</p>

                    <p style="margin-left:0cm">Hauteur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11m</p>

                    <p style="margin-left:0cm">Multislideest le toboggan avec lequel le client commence à glisser la tête en premieret fait apprécier la joie d’une course au coude à coude.</p>

                    <p style="margin-left:0cm">&nbsp;</p>

                    <h1 style="margin-left:0cm"><strong>Kamikaze:</strong></h1>

                    <p style="margin-left:0cm">Longueur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 m</p>

                    <p style="margin-left:0cm">Hauteur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11m</p>

                    <p style="margin-left:0cm">LE Kamikaze a été habillement conçus pour offrir une expérience de sensations forte à grande vitesse. La configuration de Kamikaze représente un parcours de toboggans composé de plus d’une chute. Vous éprouvez l’excitation et le plaisir de tomber sur un couloir d’avalanche multi-bosse, en assurant un atterrissage en douceur avec un maximum de sécurité.</p>

                    <p style="margin-left:0cm">&nbsp;</p>

                    <h1 style="margin-left:0cm"><strong>Tunnel freefall :</strong></h1>

                    <p style="margin-left:0cm">Longueur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15m</p>

                    <p style="margin-left:0cm">Hauteur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11m</p>

                    <p style="margin-left:0cm">En ce qui concerne le Tunnel Body Slide, c’est un modèle avec un rayon de 1.5 m Ø qui est réservé pour ceux qui aiment les descentes en chute libre.</p>

                    <p style="margin-left:0cm">&nbsp;</p>

                    <h1 style="margin-left:0cm"><strong>Rafting Slide:</strong></h1>

                    <p style="margin-left:0cm">Longueur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 105m</p>

                    <p style="margin-left:0cm">Hauteur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11 m</p>

                    <p style="margin-left:0cm">Le Rafting Slide est le modèle avec un rayon de 800x1400mm. Rafting Slide est un toboggan à canal ouvert qui offre une expérience inoubliable. À chaque instant, le client va découvrir de nouvelles émotions. Les amis, les conjoints, les parents peuvent ressentir la joie de glisser ensemble.</p>

                    <p style="margin-left:0cm">&nbsp;</p>

                    <h1 style="margin-left:0cm"><strong>BlackHole:</strong></h1>

                    <p style="margin-left:0cm">Longueur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 113 m</p>

                    <p style="margin-left:0cm">Hauteur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11 m</p>

                    <p style="margin-left:0cm">Le ‘Blackhole’ est un toboggan fermé est tout simplement le tour le plus populaire qui offre une expérience de glisse unique et incroyable avec une variété d’effets spéciaux à ce toboggan. Tout ce que vous avez besoin c’est de la lumière naturelle pour obtenir un effet visuel spectaculaire. Les effets de lumière naturelle créent une harmonie visuelle avec l’eau à l’intérieur du toboggan et de ce fait ce voyage devient encore plus attrayant pour nos clients. Le client peut voyager à haute vitesse tout en appréciant les effets visuels autour.</p>

                    <p style="margin-left:0cm">&nbsp;</p>

                    <h1 style="margin-left:0cm"><strong>Turbolance:</strong></h1>

                    <p style="margin-left:0cm">Longueur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15m</p>

                    <p style="margin-left:0cm">Le ‘TurboLance’ un des plus extrêmes des toboggans, a été spécialement conçu pour lesclients qui aiment vivre la joie de trajectoires de descentes différentes. Les clients éprouvent d’abord une chute raide/grande et ensuite ils sont propulsés pour une montée verticale. Après ils vivent une autre expérience inoubliable, cette fois un parcours inverse les prenant sur un heurt et finissant dans un Splash Pool. Le client peutdescendre le toboggan avec des bouées simple ou double.</p>

                    <p style="margin-left:0cm">&nbsp;</p>

                    <h1 style="margin-left:0cm"><strong>KidsPlay&amp;fun:</strong></h1>

                    <p style="margin-left:0cm">Surface &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 600m²</p>

                    <p style="margin-left:0cm"><strong>• <em>PirateShip:</em></strong></p>

                    <p style="margin-left:0cm">Le bateau pirate permet de créer une atmosphère excitante et attrayante dans les aires de jeux pour les enfants. Notre bateau Pirate est un espace de jeux passionnant pour nos jeunes invités avec sa thématisassions, ses articles d’animations décoratives et ses toboggans aquatiques de différents couleurs et types.</p>

                    <p style="margin-left:0cm"><strong>•&nbsp;<em>Dolphin:</em></strong></p>

                    <p style="margin-left:0cm">A ces débuts La Fontaine Dauphin a été principalement utilisé comme une fontaine ou une mascotte située au bord de la piscine.</p>

                    <p style="margin-left:0cm"><strong>• <em>Mush Room:</em></strong></p>

                    <p style="margin-left:0cm">Le Champignon est une fontaine avec des couleurs variées, le champignon renforce la beauté du parc aquatique.</p>

                    <p style="margin-left:0cm"><strong>•&nbsp;<em>Snake Slide:</em></strong></p>

                    <p style="margin-left:0cm">Notre Fontaine Serpent enrichit la décoration de notre parc. İl s’agit d’un serpent capricieux dont l’eau jaillie de sa bouche et de son corps. Avec ses couleurs et son style agréable, La Fontaine Serpent produit à chaque fois de grands sourires sur les visages de nos petits clients.</p>
                </div>
                <div class="bodypageDet" id="detente">
                    <img src="img/logo1.png" style="float: right;margin: 29px 4px;width: 92px;">
                    <h1>Détente</h1>
                    <hr>
                    <h1 style="margin-left:0cm"><strong>Wave Pool:</strong></h1>

                    <p style="margin-left:0cm">Surface 440m²</p>

                    <p style="margin-left:0cm">Les systèmes de Piscines à Vagues sont conçus pour la durabilité, la facilité d'exploitation, l'entretien, la sécurité et bien sûr le plaisir. La piscine à vagues assure des heures de plaisir et de rires pour nos clients en transformant la piscine en un océan de plaisir pour les nageurs.</p>

                    <p style="margin-left:0cm">&nbsp;</p>

                    <h1 style="margin-left:0cm"><strong>Lazyriver:</strong></h1>

                    <p style="margin-left:0cm">Longueur400m</p>

                    <p style="margin-left:0cm">La Rivière douce est une attraction amusante et relaxante permettant de se déplacer tout au long d’un parcours immense avec un courant faible similaire à une rivière réelle.</p>
                </div>
                <div class="bodypageParc" id="parc">
		<img src="img/logo1.png" style="float: right;margin: 29px 4px;width: 92px;transform: scale(1.5)">
                    <div style="display: flex;width: 100% ">
                    <div style="width: 50%">
				<h1>PARC</h1>
		<hr style="width: 200%">
		<p style="margin-left:0cm">Aqua Park le pirate est l’un des plus grands parcs aquatiques en Tunisie, le premier au sud. Il est situé juste à côté de la plage de l’hôtel Sunconnect Djerba Aqua Resort.</p>

<p style="margin-left:0cm">C’est une attraction palpitante qui est à la fois passionnante et existante, conçue pour créer la joie de trajectoires de différentes descentes en offrant des cries, de l’adrénaline et du plaisir…</p>

<p style="margin-left:0cm">Dévalez les sensationnels toboggans et immergez-vous dans cette aventure passionnante pour toute &nbsp;la famille !</p>	</div>	
                    <div style="width: 50%;position: relative"><img src="img/logo.png" style="position: absolute;top: 40%;left: 35%;transform: scale(1.5)"></div>
                    </div></div>
                <div class="bodypageB2b" id="b2b">
                    		<img src="img/logo1.png" style="float: right;margin: 29px 4px;width: 92px;transform: scale(1.7);position: absolute;top: 100px;right: 90px">

                    <h1 style="width: 100%;font-family: sans-serif;auto;font-size: 250%;margin:100px">Decouvrez Notre Parc</h1>
                    <hr style="width: 100%;margin:0px 100px;margin-bottom: 100px">
                    <div class="b2bIm-container"><img src="img/b2b/1.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/2.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                   <div class="b2bIm-container"><img src="img/b2b/3.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                   <div class="b2bIm-container"><img src="img/b2b/4.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                   <div class="b2bIm-container"><img src="img/b2b/5.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/6.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/7.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/8.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/9.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/10.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/11.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/12.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/13.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/14.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/15.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/16.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                    <div class="b2bIm-container"><img src="img/b2b/17.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                     <div class="b2bIm-container"><img src="img/b2b/18.jpeg">
                        <div class="opacityB2b"><i class="fas fa-download"></i></div></div>
                </div>
                <div class="bodypageInfo" id="info">
		<img src="img/logo1.png" style="float: right;margin: 29px 4px;width: 92px;transform: scale(1.5)">
				<h1 style="font-size: 70;font-weight: bold">Informations</h1>
		<hr>
		<p style="text-align:center"><span style="font-size:50"><span style="color:#ffffff"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Pour votre confort et votre sécurité nous vous remercions de lire attentivement et de respecter le présent règlement : </span></span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Il est interdit d'introduire dans le parc boissons, aliments et objets en verre, uniquement les aliments pour bébés sont autorisés.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Il est interdit de jouer au ballon dans les piscines, de plaisanter grossièrement dans l'eau ou dans les espaces autour des piscines et de nuire aux clients.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Il est recommandé d'amener un maillot de bain qui permet l'usage des toboggans (absence de tirettes et boutons en métal).</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Pour des raisons d'hygiène, il est recommandé de ne pas nager avec les vêtements, l'utilisation d'un maillot est impérative, ou d'un vêtement avec un tissu de maillot, toute personne nageant avec des vêtements non conformes sera sorti de l'eau.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Pour des raisons d'hygiène les enfants en bas âge qui mettent des Couches culottes doivent utiliser des couches culottes imperméables lorsqu'ils sont dans les piscines et les toboggans.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Il est recommandé de mettre des bouées pour les enfants de moins de 12 ans qui ne savent pas nager.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Durant les orages les baigneurs doivent sortir au plutôt de l'eau.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Les personnes d'un âge supérieur à 12 ans ne pourront pas utiliser les jeux réservés aux enfants.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:inherit">- Les enfants moins de 12 ans ne sont pas autorisé à utiliser certains jeux réservés aux adultes (plus d'informations dans la section du site "attractions").</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:inherit">- Les parents ne sont pas autorisés à prendre leurs enfants en bas âge dans les bras ou entre les jambes afin d'utiliser les toboggans pour adulte.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:inherit">- Il est recommandé aux personnes ayant des problèmes de santé et aux femmes enceintes de ne pas utiliser les attractions.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:inherit">- Il est interdit aux baigneurs d'exécuter des plongeons acrobatiques ou de pousser les personnes dans l'eau, même par jeu.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:inherit">- Le personnel de service peut intervenir contre les perturbateurs même sur signalisation des autres baigneurs.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:inherit">- Les maîtres nageurs sur les piscines sont présent uniquement pour plus de sécurité, ils ne sont pas là pour remplacer les parents, chaque parents est responsable des enfants qui l'accompagne et l'<strong><em>Acqua Palace</em></strong> décline toute responsabilité pour les enfants non accompagnés.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:inherit">- La direction du parc ne répond pas des objets et des valeurs introduits dans l'établissement non déposes à la consigne, il est préférable de ne pas apporter d'objet précieux, ainsi que de ne pas laisser vos effets personnels sans surveillance.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:inherit">- Il est aussi formellement interdit d'introduire des animaux domestiques dans le parc.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Les dommages provoqués aux plates-bandes fleurs et plantes par négligence ou par inobservation des normes et du règlement devront être indemnisés par le responsable dans le cas ou la personne ne possède pas d'argent, les affaires personnels de ce dernier constitue un dépôt de garantie.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Il est interdit d'accéder dans les cabines, vestiaires à plus d'une personne à la fois.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Il est obligatoire de se servir des paniers à papier et des poubelles pour déposer les déchets.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- L'eau utilisée dans les piscines et attractions n'est pas chauffée.</span></span></span></p>

<p><span style="font-size:30"><span style="color:#ffffff"><span style="font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;">- Les agents de sécurité sont autorisés à intervenir pour faire observer le présent règlement et pour sanctionner ou pour expulser les éventuels transgresseurs.</span></span></span></p>

<p style="text-align:right"><span style="font-size:30"><span style="color:#ffffff"><strong><span style="font-family:inherit">Merci pour votre compréhension </span></strong></span></span></p>			</div>
                <div class="bodypageLoca" id="loca">
                <img src="img/logo1.png" style="float: right;margin: 29px 4px;width: 92px;">
                    <h1>Comment venir ?</h1>
                    <hr>
<div id="map" style="width:100%;height:600px;margin-top: 40px;"></div>

                 

                </div>

            </div>

        </div>
    </div>

    <script>
        
        window.onscroll = function() {
            myFunction();
            
                    
        }


        var nav_droit = document.getElementById("nav-d");
        var height = nav_droit.offsetHeight;
        var navbar = document.getElementById("logoID");
        var header = document.getElementById("hd");
        var page = document.getElementById("page")

        var nav_gauche = document.getElementById("nav-g");
        var nav_fixe = document.getElementById("nav-f");
        var cover_img = document.getElementById("pg");
        var video = document.getElementById("vid")
        var height1 = header.offsetHeight;
        var sticky = header.offsetHeight + header.offsetHeight * 0.15;
        var bodyy = document.getElementById('bod');
        var up=document.getElementById('up');





        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("desepear");
                nav_droit.classList.add("desepear1");
                nav_gauche.classList.add("desepear2");
                nav_fixe.classList.add("appearf");
                uld.classList.add("desepear11");
                ulg.classList.add("desepear22");
                video.classList.add("fix_video");
               

               



            } else {
                navbar.classList.remove("desepear");
                nav_droit.classList.remove("desepear1");
                nav_gauche.classList.remove("desepear2");
                nav_fixe.classList.remove("appearf");
                uld.classList.remove("desepear11");
                ulg.classList.remove("desepear22");
                video.classList.remove("fix_video");
                next.style.display = "none";
            
                


                cover_img.classList.remove("cover_img_desepear");
                


            }
         
              
           
            

        }
    </script>
    <script>
        
  
    </script>
    <script>
        var uld = document.getElementById("ul-d")
        var ulg = document.getElementById("ul-g")
        var navbar = document.getElementById("logoID");
        var parent = document.getElementById("pg");
        var attrac = document.getElementById("attrac");
        centerPopup(navbar);

        function centerPopup(element) {
            var height = element.offsetHeight; 
            var width = element.offsetWidth; 
            var myParent = element.parentNode;
            var pHeight = parent.offsetHeight; 
            var pWidth = parent.offsetWidth; 
            var sTop = parent.scrollTop; 
            var sLeft = parent.scrollLeft; 
            var posY = (pHeight / 2) - (height / 2) + sTop; 
            var posX = (pWidth / 2) - (width / 2) + sLeft; 

            element.style.position = 'absolute'
            element.style.left = posX;
            uld.style.marginLeft = width * 0.4;
            ulg.style.marginRight = width * 0.4;
        }
    </script>
    <script>
        var slideIndex = 1;
        var t = 1;


        showSlides(slideIndex);

        function plusSlides(n) {

            showSlides(slideIndex += n);

        }

        function currentSlide(n) {
            t = 0;
            showSlides(slideIndex = n);
            t = 1;
        }

        function showSlides(n) {

            var i;
            var slides = document.getElementsByClassName("slide");


            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            if (slideIndex < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";

            slideIndex++;
            setTimeout(showSlides, 9000);

        }
    </script>
    <script>
        function attraction() {
            var next = document.getElementById("next")
            next.style.display = "block";

        }
    </script>

    <script>
        var scrollY = 0;
        var distance = 40;
        var speed = 30;

        function autoScrollTo1(el) {
            var next = document.getElementById("next");
            next.style.display = "block";
           init();
            attrac.classList.add("bodypageAtt1");
            var currentY = window.pageYOffset;
            var targetY = document.getElementById(el).offsetTop-700;
            var bodyHeight = document.body.offsetHeight;
            var yPos = currentY + window.innerHeight;
            var animator = setTimeout('autoScrollTo1(\'' + el + '\')', 30);
            if (yPos > bodyHeight) {
                clearTimeout(animator);
            } else {
                if (currentY < targetY - distance) {
                    scrollY = currentY + distance;
                    window.scroll(0, scrollY);
                } else {
                    clearTimeout(animator);
                }
            }
        }

        function autoScrollTo2(el) {
            var detente = document.getElementById("detente");
            var next = document.getElementById("next");
            next.style.display = "block";
            init();
            detente.classList.add("bodypageDet1");
            var currentY = window.pageYOffset;
            var targetY = document.getElementById(el).offsetTop-700;
            var bodyHeight = document.body.offsetHeight;
            var yPos = currentY + window.innerHeight;
            var animator = setTimeout('autoScrollTo2(\'' + el + '\')', 30);
            if (yPos > bodyHeight) {
                clearTimeout(animator);
            } else {
                if (currentY < targetY - distance) {
                    scrollY = currentY + distance;
                    window.scroll(0, scrollY);
                } else {
                    clearTimeout(animator);

                }
            }
        }
        function autoScrollTo3(el) {
            var parc = document.getElementById("parc");
            var next = document.getElementById("next");
            next.style.display = "block";
            init();
            parc.classList.add("bodypageParc1");
            var currentY = window.pageYOffset;
            var targetY = document.getElementById(el).offsetTop-700;
            var bodyHeight = document.body.offsetHeight;
            var yPos = currentY + window.innerHeight;
            var animator = setTimeout('autoScrollTo3(\'' + el + '\')', 30);
            if (yPos > bodyHeight) {
                clearTimeout(animator);
            } else {
                if (currentY < targetY - distance) {
                    scrollY = currentY + distance;
                    window.scroll(0, scrollY);
                } else {
                    clearTimeout(animator);
                }
            }
        }
             function autoScrollTo4(el) {
            var b2b = document.getElementById("b2b");
            var next = document.getElementById("next");
            next.style.display = "block";
            init();
            b2b.classList.add("bodypageB2b1");
            var currentY = window.pageYOffset;
            var targetY = document.getElementById(el).offsetTop-700;
            var bodyHeight = document.body.offsetHeight;
            var yPos = currentY + window.innerHeight;
            var animator = setTimeout('autoScrollTo4(\'' + el + '\')', 30);
            if (yPos > bodyHeight) {
                clearTimeout(animator);
            } else {
                if (currentY < targetY - distance) {
                    scrollY = currentY + distance;
                    window.scroll(0, scrollY);
                } else {
                    clearTimeout(animator);
                }
            }
        }
         function autoScrollTo5(el) {
            var parc = document.getElementById("parc");
            var next = document.getElementById("next");
            next.style.display = "block";
            init();
            info.classList.add("bodypageInfo1");
            var currentY = window.pageYOffset;
            var targetY = document.getElementById(el).offsetTop-700;
            var bodyHeight = document.body.offsetHeight;
            var yPos = currentY + window.innerHeight;
            var animator = setTimeout('autoScrollTo5(\'' + el + '\')', 30);
            if (yPos > bodyHeight) {
                clearTimeout(animator);
            } else {
                if (currentY < targetY - distance) {
                    scrollY = currentY + distance;
                    window.scroll(0, scrollY);
                } else {
                    clearTimeout(animator);
                }
            }
        }
         function autoScrollTo6(el) {
            var parc = document.getElementById("parc");
            var next = document.getElementById("next");
            next.style.display = "block";
            init();
            loca.classList.add("bodypageLoca1");
            var currentY = window.pageYOffset;
            var targetY = document.getElementById(el).offsetTop-700;
            var bodyHeight = document.body.offsetHeight;
            var yPos = currentY + window.innerHeight;
            var animator = setTimeout('autoScrollTo6(\'' + el + '\')', 30);
            if (yPos > bodyHeight) {
                clearTimeout(animator);
            } else {
                if (currentY < targetY - distance) {
                    scrollY = currentY + distance;
                    window.scroll(0, scrollY);
                } else {
                    clearTimeout(animator);
                }
            }
        }


        function resetScroller(el) {
            var currentY = window.pageYOffset;
            var targetY = document.getElementById(el).offsetTop;
            var animator = setTimeout('resetScroller(\'' + el + '\')', speed);
        
            if (currentY > targetY) {
                scrollY = currentY - distance;
                window.scroll(0, scrollY);
                up.classList.add("Updesepear");
            } else {
                clearTimeout(animator);
                up.classList.remove("Updesepear");
                 video.classList.remove("fix_video");
               
            }
             
        }
    </script>
    <script>
        var parc = document.getElementById("parc");
        var detente = document.getElementById("detente");
        var b2b=document.getElementById("b2b");
        var info=document.getElementById("info");
        var loca=document.getElementById("loca");

        function init() {
            attrac.classList.remove("bodypageAtt1");
            attrac.classList.add("bodypageAtt");
            
            b2b.classList.remove("bodypageB2b1");
            b2b.classList.add("bodypageB2b");
            
            parc.classList.remove("bodypageParc1");
            parc.classList.add("bodypageParc");

            detente.classList.remove("bodypageDet1");
            detente.classList.add("bodypageDet");
            
            info.classList.remove("bodypageInfo1");
            info.classList.add("bodypageInfo");
            
            loca.classList.remove("bodypageLoca1");
            loca.classList.add("bodypageLoca");
        }

        function changeAtt() {
            init();
            attrac.classList.add("bodypageAtt1");

        }

        function changeDet() {
            init();
            detente.classList.add("bodypageDet1");

        }
        
                function changeParc() {
            init();
            parc.classList.add("bodypageParc1");

        }
          function changeB2b() {
            init();
            b2b.classList.add("bodypageB2b1");

        }
         function changeInfo() {
            init();
            info.classList.add("bodypageInfo1");

        }
                 function changeLoca() {
            init();
            loca.classList.add("bodypageLoca1");

        }
    </script>
    <script>
        var lastScrollTop = 0;
       
        window.addEventListener("scroll", function() { 
            var st = window.pageYOffset || document.documentElement.scrollTop; 
            if (window.pageYOffset <= ((navbar.offsetTop) + 100)) {
                if (st > lastScrollTop) {
                    next.style.display = "none";


                } else {

                }
            }
            lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        }, false);
    </script>
    <script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal11 = document.getElementById('id011');

window.onclick = function(event) {
    if (event.target == modal11) {
        modal11.style.display = "none";
    }
}
</script>
    <script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>
     <script>
var modal2 = document.getElementById('id02');

window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


  

</body>



</html>