<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="author" content="Martinez Manuel" />
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Css Materialize -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>
  <!-- Css perso -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/style.css"/>
  <!-- lancement du jquery pour que les scripts passent -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="Materialize/js/materialize.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Documentation</title>
</head>
<body>
    <script type="text/javascript" >
    $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    });
    </script>
    <script>
    $(document).ready(function() {
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
    $(document).ready(function() {
    $('select').material_select();
  });
    </script>
  <strong>  <h1>Demande de documentation</h1> </strong>
   <form method="POST" action="traitement1.php">
    <div class="container">
        <select class="browser-default" name="base" id="base">
          <!-- Liste des bases Agram en cas de rajout ajouter une ligne entre les select -->
            <option value="Beauvechain">Beauvechain</option>
            <option value="Poperinge">Poperinge</option>
            <option value="Urvillers">Urvillers</option>
            <option value="Sourdeval">Sourdeval</option>
            <option value="Loudéac">Loudéac</option>
            <option value="Arçonnay">Arçonnay</option>  
            <option value="Andrezé">Andrezé</option>
            <option value="Lathus">Lathus</option>
            <option value="Montbron">Montbron</option>
            <option value="Sallespisse">Sallespisse</option>
            <option value="Mirande">Mirande</option>
            <option value="Naucelle">Naucelle</option>
            <option value="Langeac">Langeac</option>
            <option value="Crocq">Crocq</option>
            <option value="St Jean sur Veyle">St Jean sur Veyle</option>
            <option value="Chantenay">Chantenay</option>
            <option value="Dombasle en Xaintois">Dombasle en Xaintois</option>
            <option value="Foucheres">Foucheres</option>
            <option value="Saint Hubert">Saint Hubert</option>  
        </select>
    </div>
    <div class="container">
      <!--class qui permet de lancer l'effet accordéon -->
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header">
              <!--titre de l'accordéon -->
            <h2>Bois</h2> 
            </div>
            <!--effet accordéon qui ce deplie au click de souris -->
            <div class="collapsible-body" id="centrage">
              <ul>
                <!--liste double pour avoir la designation et la quantité sur la même ligne -->
                <li id="double">
                  <input type="checkbox" class="filled-in" name="bois[0]" value="dechiqueteuse-jet-chipper" id="dechiqueteuse-jet-chipper"/>
                  <label for="dechiqueteuse-jet-chipper">Déchiqueteuse JET CHIPPER 600 </label>
                </li >
                <li id="double">
                  &nbsp;&nbsp;<input id="quantidechi" name="quantidechi" type="number" min='0' class="validate"/>
                  <label for="quantidechi">quantité</label> 
                </li>
                <!--En cas de rajout de matériel il faut recopier les lignes entre les balises <div></div> et surtout modifier le numéro entre crochet du name  -->
                <div>
                <li id="double" >        
                <input type="checkbox" class="filled-in" name="bois[1]"  value="enfonce-pieux" id="enfonce-pieux"/>
                  <label for="enfonce-pieux">Enfonce pieux HARD BUMP </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantipieu" name="quantipieu" type="number" min='0' class="validate"/>
                  <label for="quantipieu">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double" >        
                <input type="checkbox" class="filled-in" name="bois[2]" value="fendeuses" id="fendeuses"/>
                  <label for="fendeuses">Fendeuses JET SPLIT 14T-16T-19T-19T treuil
                   </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantifen" name="quantifen" type="number" min='0' class="validate"/>
                  <label for="quantifen">quantité</label> 
                </li>
                </div>
                <div>  
                <li id="double" >       
                <input type="checkbox" class="filled-in" name="bois[3]" value="broyeur-w-forest" id="broyeur-w-forest"/>
                  <label for="broyeur-w-forest">Broyeur forestier W_FOREST </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantibroyeu" name="quantibroyeu" type="number" min='0' class="validate"/>
                  <label for="quantibroyeu">quantité</label> 
                </li>
                </div>
              </ul>
            </div>
          </li>
          <li>  
            <div class="collapsible-header">
            <h2>Culture </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[0]" value="cover-crop-gxt" id="cover-crop-gxt"/>
                  <label for="cover-crop-gxt">Cover-crop extra lourd GXT EN X </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigxt" name="quantigxt" type="number" min='0' class="validate"/>
                  <label for="quantigxt">quantité</label> 
                </li>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[1]" value="cover-crop-gsl" id="cover-crop-gsl"/>
                  <label for="cover-crop-gsl">Cover-crop lourd GSL EN X </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigsl" name="quantigsl" type="number" min='0' class="validate"/>
                  <label for="quantigsl">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[2]" value="culti-c" id="culti-c"/>
                  <label for="culti-c">Déchaumeur à dents chisel CULTIC </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quanticultic" name="quanticultic" type="number" min='0' class="validate"/>
                  <label for="quanticultic">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[3]" value="culti-f" id="culti-f"/>
                  <label for="culti-f">Déchaumeur cultivateur GEO CULTI F </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quanticultif" name="quanticultif" type="number" min='0' class="validate"/>
                  <label for="quanticultif">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[4]" value="dechaumeur-kdr" id="dechaumeur-kdr"/>
                  <label for="dechaumeur-kdr">Déchaumeurs KDR - KDA </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantikdr" name="quantikdr" type="number" min='0' class="validate"/>
                  <label for="quantikdr">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[5]" value="terragro" id="terragro"/>
                  <label for="terragro">Déchaumeurs à dents TERRAGRO FRONTAL </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiterragro" name="quantiterragro" type="number" min='0' class="validate"/>
                  <label for="quantiterragro">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[6]" value="dechaumeur-geosol" id="dechaumeur-geosol"/>
                  <label for="dechaumeur-geosol">Déchaumeurs à dents GEO SOL </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigsol" name="quantigsol" type="number" min='0' class="validate"/>
                  <label for="quantigsol">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[7]" value="dechaumeur-geosub" id="dechaumeur-geosub"/>
                  <label for="dechaumeur-geosub">Déchaumeurs à dents GEO SUB </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigsub" name="quantigsub" type="number" min='0' class="validate"/>
                  <label for="quantigsub">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[8]" value="discagro" id="discagro"/>
                  <label for="discagro">Déchaumeurs à disques DISCAGRO </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantidisca" name="quantidisca" type="number" min='0' class="validate"/>
                  <label for="quantidisca">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[9]" value="dechaumeur-geo-culti" id="dechaumeur-geo-culti"/>
                  <label for="dechaumeur-geo-culti">Déchaumeurs cultivateurs GEO-CULTI SÉRIE 100 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantidechau" name="quantidechau" type="number" class="validate"/>
                  <label for="quantidechau">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[10]" value="geo-culti" id="geo-culti"/>
                  <label for="geo-culti">Déchaumeurs cultivateurs GEO-CULTI SÉRIE 1000 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigocult" name="quantigocult" type="number" min='0' class="validate"/>
                  <label for="quantigocult">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[11]" value="germagro" id="germagro"/>
                  <label for="germagro">Déchaumeurs cultivateurs GERMAGRO </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigerma" name="quantigerma" type="number" min='0' class="validate"/>
                  <label for="quantigerma">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[12]" value="geodisc" id="geodisc"/>
                  <label for="geodisc">Déchaumeurs GEO DISC GEO DISC F </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigodis" name="quantigodis" type="number" min='0' class="validate"/>
                  <label for="quantigodis">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[13]" value="decompacteur-geo-combi" id="decompacteur-geo-combi"/>
                  <label for="decompacteur-geo-combi">Décompacteurs GEO-COMBI_GEO-DEC </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantidecomp" name="quantidecomp" type="number" min='0' class="validate"/>
                  <label for="quantidecomp">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[14]" value="herses-rotatives" id="herses-rotatives"/>
                  <label for="herses-rotatives">Herses rotatives RA 302S - 3002 - 3502 - 4002 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantihrota" name="quantihrota" type="number" min='0' class="validate"/>
                  <label for="quantihrota">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[15]" value="rota-fraise" id="rota-fraise"/>
                  <label for="rota-fraise">Rota fraise FAC 2185 - 2210 - 2240 - 3000 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantifac" name="quantifac" type="number" min='0' class="validate"/>
                  <label for="quantifac">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[16]" value="cultipaker" id="cultipaker"/>
                  <label for="cultipaker">Rouleau CULTIPAKER 320 et 400 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantipaker" name="quantipaker" type="number" min='0' class="validate"/>
                  <label for="quantipaker">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[17]" value="rouleau-frontal" id="rouleau-frontal"/>
                  <label for="rouleau-frontal">Rouleau frontal ROLL AVANT </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantirfront" name="quantirfront" type="number" min='0' class="validate"/>
                  <label for="quantirfront">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[18]" value="roll-compact" id="roll-compact"/>
                  <label for="roll-compact">Rouleaux autoporteurs ROLL-COMPACT PENDULAIRE </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantihrcompa" name="quantihrcompa" type="number" min='0' class="validate"/>
                  <label for="quantihrcompa">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[19]" value="gaufre-avant" id="gaufre-avant"/>
                  <label for="gaufre-avant">Rouleaux GAUFRÉS AVANT </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigoav" name="quantigoav" type="number" min='0' class="validate"/>
                  <label for="quantigoav">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[20]" value="roll-mass" id="roll-mass"/>
                  <label for="roll-mass">Rouleaux portés ROLL-MASS </label>
                </li>
                <li id="double">
                 &nbsp;&nbsp; <input id="quantihromas" name="quantihromas" type="number" min='0' class="validate"/>
                  <label for="quantihromas">quantité  </label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[21]" value="tanit" id="tanit"/>
                  <label for="tanit">Semoir en lignes TANIT 3000 - 4000 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantitanit" name="quantitanit" type="number" min='0' class="validate"/>
                  <label for="quantitanit">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[22]" value="geo-sub" id="geo-sub"/>
                  <label for="geo-sub">Sous soleur GEO-SUB </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigosub" name="quantigosub" type="number" min='0' class="validate"/>
                  <label for="quantigosub">quantité</label> 
                </li>
                </div>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="culture[23]" value="roll-avant" id="roll-avant"/>
                  <label for="roll-avant">Tasse avant rouleau ROLL AVANT </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantirolav" name="quantirolav" type="number" min='0' class="validate"/>
                  <label for="quantirolav">quantité</label> 
                </li>
                </div>
              </ul>
            </div>
          </li>
          <li>   
            <div class="collapsible-header">
            <h2>Broyeurs </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[0]" value="gyro-forest" id="gyro-forest"/>
                  <label for="gyro-forest">Broyeur forestier léger GYRO-FOREST 180 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigyrofo" name="quantigyrofo" type="number" min='0' class="validate"/>
                  <label for="quantigyrofo">quantité</label> 
                </li>
                <div>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[1]" value="titan" id="titan"/>
                  <label for="titan">Broyeur TSR  TITAN </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantititan" name="quantititan" type="number" min='0' class="validate"/>
                  <label for="quantititan">quantité</label> 
                </li>
                </div>
                <div>  
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[2]" value="cipan" id="cipan"/>
                  <label for="cipan">Broyeur frontal TURBO CIPAN </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quanticipan" name="quanticipan" type="number" min='0' class="validate"/>
                  <label for="quanticipan">quantité</label> 
                </li>
                </div>
                <div>  
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[3]" value="gyro-mulch" id="gyro-mulch"/>
                  <label for="gyro-mulch">Broyeur large GYRO MULCH 280N - 280S </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantimulch" name="quantimulch" type="number" min='0' class="validate"/>
                  <label for="quantimulch">quantité</label> 
                </li>
                </div>
                <div>  
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[4]" value="farmer" id="farmer"/>
                  <label for="farmer">Broyeur d'accotements FARMER - PRESTIGE </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantifarmer" name="quantifarmer" type="number" min='0' class="validate"/>
                  <label for="quantifarmer">quantité</label> 
                </li>
                </div>
                <div>  
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[5]" value="broyeur-wgr" id="broyeur-wgr"/>
                  <label for="broyeur-wgr">Broyeur WGR </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiwgr" name="quantiwgr" type="number" min='0' class="validate"/>
                  <label for="quantiwgr">quantité</label> 
                </li>
                </div>
                <div>  
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[6]" value="gyrodebroussailleur" id="gyrodebroussailleur"/>
                  <label for="gyrodebroussailleur">Broyeur gyrodebroussailleur S120 - S150 - SX180 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigyrodeb" name="quantigyrodeb" type="number" min='0' class="validate"/>
                  <label for="quantigyrodeb">quantité</label> 
                </li>
                 </div> 
                 <div>  
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[7]" value="TS-prairial" id="TS-prairial"/>
                  <label for="TS-prairial">TSPrairial </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantitsprairial" name="quantitsprairial" type="number" min='0' class="validate"/>
                  <label for="quantitsprairial">quantité</label> 
                </li>
                 </div> 
                 <div>  
                <li id="double">        
                <input type="checkbox" class="filled-in" name="broyeur[8]" value="broyeurgyromulch" id="broyeurgyromulch"/>
                  <label for="broyeurgyromulch">Broyeur Gyromulch 3500 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantibroyeurgyromulch" name="quantibroyeurgyromulch" type="number" min='0' class="validate"/>
                  <label for="quantibroyeurgyromulch">quantité</label> 
                </li>
                 </div>
              </ul>
            </div>
          </li>
          <li>   
            <div class="collapsible-header">
            <h2>Élevage </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">      
                <input type="checkbox" class="filled-in" name="elevage[0]" value="entrave-veau" id="entrave-veau"/>
                  <label for="entrave-veau">Entraves à veaux CAROLINE </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantientrav" name="quantientrav" type="number" min='0' class="validate"/>
                  <label for="quantientrav">quantité</label> 
                </li>
                <div>
                <li id="double">       
                <input type="checkbox" class="filled-in" name="elevage[1]" value="niches-veaux" id="niches-veaux"/>
                  <label for="niches-veaux">Niches à veaux </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantinich" name="quantinich" type="number" min='0' class="validate"/>
                  <label for="quantinich">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="elevage[2]" value="galva" id="galva"/>
                  <label for="galva">Gamme galva </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigalva" name="quantigalva" type="number" min='0' class="validate"/>
                  <label for="quantigalva">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="elevage[3]" value="herse-prairie" id="herse-prairie"/>
                  <label for="herse-prairie">Gamme toutes herses HERSES DE PRAIRIES </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiherseprai" name="quantiherseprai" type="number" min='0' class="validate"/>
                  <label for="quantiherseprai">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="elevage[4]" value="jet-malax" id="jet-malax"/>
                  <label for="jet-malax">Malaxeur à béton JET MALAX </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantijetmal" name="quantijetmal" type="number" min='0' class="validate"/>
                  <label for="quantijetmal">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="elevage[5]" value="big-feed" id="big-feed"/>
                  <label for="big-feed">Mélangeuse BIG-FEED </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantibigfeed" name="quantibigfeed" type="number" min='0' class="validate"/>
                  <label for="quantinigfeed">quantité</label> 
                </li>
                </div>
              </ul>
            </div>
          </li>
          <li>   
            <div class="collapsible-header">
            <h2>Stockage </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">       
                <input type="checkbox" class="filled-in" name="stockage[0]" value="ventilateurs" id="ventilateurs"/>
                  <label for="ventilateurs">Ventilateurs </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiventil" name="quantiventil" type="number" min='0' class="validate"/>
                  <label for="quantiventil">quantité</label> 
                </li>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="stockage[1]" value="vis-hydraulique" id="vis-hydraulique"/>
                  <label for="vis-hydraulique">Vis à grains hydraulique sur remorque </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantivis" type="number" min='0' name="quantivis" class="validate"/>
                  <label for="quantivis">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="stockage[2]" value="jet-grains" id="jet-grains"/>
                  <label for="jet-grains">Vis à grains sur chariot JET GRAINS </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantijetgrains" name="quantijetgrains" type="number" min='0' class="validate"/>
                  <label for="quantijetgrains">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="stockage[3]" value="armoires" id="armoires"/>
                  <label for="armoires">Armoires et containers phyto </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiarmoir" name="quantiarmoir" type="number" min='0' class="validate"/>
                  <label for="quantiarmoir">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="stockage[4]" value="silos" id="silos"/>
                  <label for="silos">Silos ED - TOILE - POLYETHYLENE </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantisilo" name="quantisilo" type="number" min='0' class="validate"/>
                  <label for="quantisilo">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="stockage[5]" value="tunnel" id="tunnel"/>
                  <label for="tunnel">Tunnel MAXI 7 - MEGA 8 - GIGA 9 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantitunel" name="quantitunel" type="number" min='0' class="validate"/>
                  <label for="quantitunel">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="stockage[6]" value="caniveaux" id="caniveaux"/>
                  <label for="caniveaux">Caniveaux </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quanticani" name="quanticani" type="number" min='0' class="validate"/>
                  <label for="quanticani">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="stockage[7]" value="suceuse-agri-vac" id="suceuse-agri-vac"/>
                  <label for="suceuse-agri-vac">Suceuse AGRI-VAC </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiagrivac" name="quantiagrivac" type="number" min='0' class="validate"/>
                  <label for="quantiagrivac">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="stockage[8]" value="suceuse-jet-vac" id="suceuse-jet-vac"/>
                  <label for="suceuse-jet-vac">Suceuse JET-VAC </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantijetvac" name="quantijetvac" type="number" min='0' class="validate"/>
                  <label for="quantijetvac">quantité</label> 
                </li>
                </div>
              </ul>
            </div> 
          </li>
          <li>  
            <div class="collapsible-header">
            <h2>Manutention </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">       
                <input type="checkbox" class="filled-in" name="manutention[0]" value="leve-sac" id="leve-sac"/>
                  <label for="leve-sac">Lève sac </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantilev" name="quantilev" type="number" min='0' class="validate"/>
                  <label for="quantilev">quantité</label> 
                </li>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="manutention[1]" value="outil-indus" id="outil-indus"/>
                  <label for="outil-indus">Outils de chargeurs INDUS </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiindus" name="quantiindus" type="number" min='0' class="validate"/>
                  <label for="quantiindus">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="manutention[2]" value="outil-agri" id="outil-agri"/>
                  <label for="outil-agri">Outils de chargeurs AGRI </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiagri" name="quantiagri" type="number" min='0' class="validate"/>
                  <label for="quantiagri">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="manutention[3]" value="godets" id="godets"/>
                  <label for="godets">Bennes 3 Points - Godets Bennettes - Godets </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigodet" name="quantigodet" type="number" min='0' class="validate"/>
                  <label for="quantigodet">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="manutention[4]" value="elevateur" id="elevateur"/>
                  <label for="elevateur">Elevateurs </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantielevateur" name="quantielevateur" type="number" min='0' class="validate"/>
                  <label for="quantielevateur">quantité</label> 
                </li>
                </div>
              </ul>
            </div>
          </li>
          <li>   
            <div class="collapsible-header">
            <h2> Entretien </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">      
                <input type="checkbox" class="filled-in" name="entretien[0]" value="acrobat" id="acrobat"/>
                  <label for="acrobat">Débroussailleuse ACROBAT 500 - 650 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiacrobat" name="quantiacrobat" type="number" min='0' class="validate"/>
                  <label for="quantiacrobat">quantité</label> 
                </li>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="entretien[1]" value="agradisc" id="agradisc"/>
                  <label for="agradisc">Lamier - AGRADISC </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiagradisc" name="quantiagradisc" type="number" min='0' class="validate"/>
                  <label for="quantiagradisc">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="entretien[2]" value="balayeuse" id="balayeuse"/>
                  <label for="balayeuse">Balayeuse BA 2001 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiba" name="quantiba" type="number" min='0' class="validate"/>
                  <label for="quantiba">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="entretien[3]" value="tariere" id="tariere"/>
                  <label for="tariere">Tarière BPO 1000 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantibpo" name="quantibpo" type="number" min='0' class="validate"/>
                  <label for="quantibpo">quantité</label> 
                </li>
                </div> 
                <div>
                  <li id="double">        
                <input type="checkbox" class="filled-in" name="entretien[4]" value="alpinist" id="alpinist"/>
                  <label for="alpinist">Alpinist 500 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantialpi" name="quantialpi" type="number" min='0' class="validate"/>
                  <label for="quantialpi">quantité</label> 
                </li>
                </div>
                <div>
                  <li id="double">        
                <input type="checkbox" class="filled-in" name="entretien[5]" value="athletic" id="athletic"/>
                  <label for="athletic">Athletic 502 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiathle" name="quantithle" type="number" min='0' class="validate"/>
                  <label for="quantiathle">quantité</label> 
                </li>
                </div>
              </ul>
            </div>
          </li>
          <li>   
            <div class="collapsible-header">
            <h2>Fenaison </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">       
                <input type="checkbox" class="filled-in" name="fenaison[0]" value="jet-cut-p" id="jet-cut-p"/>
                  <label for="jet-cut-p">Faucheuse JET CUT P 2287 - 2328 Standard </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantijetcut" name="quantijetcut" type="number" min='0' class="validate"/>
                  <label for="quantijetcut">quantité</label> 
                </li>
                <div> 
                <li id="double">       
                <input type="checkbox" class="filled-in" name="fenaison[1]" value="jet-cut-p-soft-act" id="jet-cut-p-soft-act"/>
                  <label for="jet-cut-p-soft-act">Faucheuse JET CUT P 2287 - 2328 AZ soft active </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantifaup" name="quantifaup" type="number" min='0' class="validate"/>
                  <label for="quantifaup">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="fenaison[2]" value="jet-cut-l" id="jet-cut-l"/>
                  <label for="jet-cut-l">Faucheuse JET CUT L 1215 - 1246 - 1287 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantil" name="quantil" type="number" min='0' class="validate"/>
                  <label for="quantil">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="fenaison[3]" value="jet-fan" id="jet-fan"/>
                  <label for="jet-fan">Faneuse JET FAN 554 - 696 - 806 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantijetfan" name="quantijetfan" type="number" min='0' class="validate"/>
                  <label for="quantijetfan">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="fenaison[4]" value="jetrevers" id="jet-revers"/>
                  <label for="jet-revers">Andaineur double rotor JET REVERS 6000 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiandain" name="quantiandain" type="number" min='0' class="validate"/>
                  <label for="quantiandain">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="fenaison[5]" value="quad" id="quad"/>
                  <label for="quad">Andaineur double quad QUAD 6500 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiquad" name="quantiquad" type="number" min='0' class="validate"/>
                  <label for="quantiquad">quantité</label> 
                </li>
                </div>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="fenaison[6]" value="quadtwin" id="quadtwin"/>
                  <label for="quadtwin">QUAD 344 414 TWIN 342 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiquadtwin" name="quantiquadtwin" type="number" min='0' class="validate"/>
                  <label for="quantiquadtwin">quantité</label> 
                </li>
                </div>  
              </ul>
            </div> 
          </li>
          <li>  
            <div class="collapsible-header">
            <h2>Distributeurs à engrais </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="distributeurs[0]" value="jet-salt" id="jet-salt"/>
                  <label for="jet-salt">Distributeurs sel-sable JET SALT </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantijetsalt" name="quantijetsalt" type="number" min='0' class="validate"/>
                  <label for="quantijetsalt">quantité</label> 
                </li>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="distributeurs[1]" value="jet-ferti" id="jet-ferti"/>
                  <label for="jet-ferti">Distributeur JET FERTI 28 - 36 DI </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantijetfert" name="quantijetfert" type="number" min='0' class="validate"/>
                  <label for="quantijetfert">quantité</label> 
                </li>
                </div> 
              </ul>
            </div>
          </li>
          <li>   
            <div class="collapsible-header">
            <h2>Espaces verts </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
               <li id="double">        
                <input type="checkbox" class="filled-in" name="ev[0]" value="garden" id="garden"/>
                  <label for="garden">Gamme garden Toutes doc </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantigard" name="quantigard" type="number" min='0' class="validate"/>
                  <label for="quantigard">quantité</label> 
                </li>
              </ul>
            </div>
          </li>
          <li>   
            <div class="collapsible-header">
            <h2>Semis </h2>
            </div>
            <div class="collapsible-body" id="centrage">
              <ul>
                <li id="double">        
                <input type="checkbox" class="filled-in" name="semis[0]" value="turbo-planteur" id="turbo-planteur"/>
                  <label for="turbo-planteur">Semoir céréales TURBOPLANTEUR
                 </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantiturboplant" name="quantiturboplant" type="number" min='0' class="validate"/>
                  <label for="quantiturboplant">quantité</label> 
                </li>
                <div> 
                <li id="double">        
                <input type="checkbox" class="filled-in" name="semis[1]" value="jet-sem" id="jet-sem"/>
                  <label for="jet-sem">Semoir petites graines JET SEM </label>
                </li>
                <li id="double">
                  &nbsp;&nbsp;<input id="quantijetsem" name="quantijetsem" type="number" min='0' class="validate"/>
                  <label for="quantijetsem">quantité</label> 
                </li>
                <div> 
              </ul>
            </div>   
          </li>
        </ul> 
        <div class="button"> 
        <button class="btn waves-effect waves-light light-blue" id="recap" type="submit"  value="recap" >
          <i class="material-icons right"></i>Récapitulatif
        </button> 
      </div> 
      </form>     
    </div>  

</body>
</html>    