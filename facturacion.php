<!DOCTYPE html> 



<html>



<head>

 <link href="favicon.ico" rel="icon" type="image/x-icon" />

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Capufe-Factura</title>



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>

<script type="text/javascript" src="scripts/custom-form-elements.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css' />

<link href="jquery.mobile-1.3.2.min.css" rel="stylesheet" type="text/css"/>

<script src="jquery-1.9.1.min.js" type="text/javascript"></script>

<script src="jquery.mobile-1.3.2.min.js" type="text/javascript"></script>

<script src="js/phonegap-1.1.0.js"></script>

<link href="styles.css" type="text/css" rel="stylesheet" />

	<link href="photoswipe.css" type="text/css" rel="stylesheet" />

	<script type="text/javascript" src="lib/klass.min.js"></script>

	<script type="text/javascript" src="code.photoswipe-3.0.5.min.js"></script>	

	<script type="text/javascript">



		(function(window, PhotoSwipe){



			document.addEventListener('DOMContentLoaded', function(){

				var

					options = {},



					instance = PhotoSwipe.attach( window.document.querySelectorAll('#pageDM1 a'), options );

			}, false);

		}(window, window.Code.PhotoSwipe));

	</script>

<style>



.map iframe {



	width: 100%;

	height: 393px;

	border: none;

	margin-top: 0;

	margin-bottom: 0;

	padding-bottom: 0;

}



</style>



	<style>	



	* { margin: 0; padding: 0; }

	.panel-content { 

    padding:15px; 

  }

	#mapa { position: absolute; background: transparent; height: 100%; width: 100%; top: 0; left: 0; right: 0; bottom: 0; }

	#Ubicacion { position: absolute; background: transparent; height: 100%; width: 100%; top: 0; left: 0; right: 0; bottom: 0; }

.nav-search .ui-btn-up-a {

    background-image:none;

	background-color:#F2AD3A;

}

.nav-search .ui-btn-inner {

    border-top: 1px solid #888;

    border-color: rgba(255, 255, 255, .1);

}

.nav-search .ui-btn.ui-first-child {

    border-top-width: 0;

    background: #111;

}



.userform {

    padding: .8em 1.2em;

}



.userform h2 {

    color: #555;

    margin: 0.3em 0 .8em 0;

    padding-bottom: .5em;

    border-bottom: 1px solid rgba(0,0,0,.1);

}



.userform label {

    display: block;

    margin-top: 1.2em;

}



.switch .ui-slider-switch {

    width: 6.5em !important;

}



.ui-grid-a {

    margin-top: 1em;

    padding-top: .8em;

    margin-top: 1.4em;

    border-top: 1px solid rgba(0,0,0,.1);

}

	</style>

<style>

	IMG.displayed {

	display: block;

	margin-left: auto;

	margin-right: auto }



	.input{

		height:25px;

		width:25px;

	}

</style>



    <style>

#bg {

  position: fixed;

  z-index: -1;

  top: 0;

  left: 0;

  width: 100%;

}

#bg2 {

  top: 0;

  left: 0;

  width: 100%;

}

#li_1 label.choice { display:inline; position:relative; margin-left: 0.2em; _top:0.2em; }  

#li_1 input.radio { display: inline; margin-left: 0.5em; }

    </style>

    <style>

  .ui-page {background: transparent;}

  	#mapa { position: absolute; background: transparent; height: 100%; width: 100%; top: 0; left: 0; right: 0; bottom: 0; }



    </style>



</head> 



<body alink="#0000FF"> 



<div data-role="page" id="page">

	<div data-role="header" align="center" data-position="fixed">

   <img src="headerinicio.png" width="100%" height="68">

	</div>

	<div data-role="content">

	<!--</div>

   	<div data-role="content">-->
    
    <ul data-role="listview">
 <li role="columnheader">CUERNAVACA-ACAPULCO</li>
<li><a href="loginregister.php?caseta=107" rel="external">107 - CENTRAL DE ABASTOS</a></li>

 <li data-role="separator" data-theme="f"></li>
 </ul>




<!--<a href="markers.html" rel="external" ><img src="icon6.png" width="65" height="87" img style="float:left;" > </a>-->

	<!--</div>

   	<div data-role="content">-->


	<!--</div>-->



    

    </div>

     <div>
  
     <img id="bg" src="imagenfondo2.jpg" alt="Fondo" />



</div>
  
	<div data-role="footer" data-position="fixed">
                                              
         	 <img id="bg2" src="footerlogo.png" height="68" />
  
	</div>
  
</div>


 <!--tag:complices -->
  <div data-role="page" id="complices">
  	<div data-role="header" align="center" data-position="fixed"><img src="headerinicio.png" width="100%" height="68"></div>
    <div data-role="content">
    <h1>Complices </h1><br><br>
      <ul data-role="listview" data-inset="true" data-icon="false">
        <li heigth="60px">
        <a href="#complice1">
        <img src="http://www.iaasagroup.com.mx/tisolution/appcomere/imgs/complices_avatars/perfil1.jpg" width="35%" /> 
        <h2>Roberto Gomez Torres</h2>
        Hola, soy un experto en comida casera y tradicional mexicana, me encanta lo tradicional y el buen sazon.
        </a>
         </li>
       <li>
        <a href="#complice2">
        <img src="http://www.iaasagroup.com.mx/tisolution/appcomere/imgs/complices_avatars/perfil2.jpg" width="35%" /> 
        <h2>Valeria Ela</h2>
        Hola, soy una usuaria que disfruta de los cafes y los lugares elegantes
        </a>
      </li>
      <li>
        <a href="#complice3">
        <img src="http://www.iaasagroup.com.mx/tisolution/appcomere/imgs/complices_avatars/perfil3.jpg" width="35%" /> 
        <h2>Rosa Narrow</h2>
        Me encanta la cocina sofisticada y de buen ambiente.
        </a>
      </li>
    </div>
   	<div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="68" /> </div>
  </div>
    </div>
    
     <!--tag:complice1 -->
  <div data-role="page" id="complice1">
  	<div data-role="header" align="center" data-position="fixed"><img src="headerinicio.png" width="100%" height="68"></div>
    <div data-role="content" align="center">
        <img src="http://www.iaasagroup.com.mx/tisolution/appcomere/imgs/complices_avatars/perfil1.jpg" width="35%" /> 
        <h2>Roberto Gomez Torres</h2>
        <br>   <br>
        Hola, soy un experto en comida casera y tradicional mexicana, me encanta lo tradicional y el buen sazon.
        <br>  <br>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum."
        <br><br>
        <a href="#recomendaciones">Mira mis recomendaciones mas recientes</a><br>
        <a href="#recomendaciones">Mira mis favoritos</a>
    </div>
   	<div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="68" /> </div>
    </div>
    <!--tag:complic2 -->
  <div data-role="page" id="complice2">
  	<div data-role="header" align="center" data-position="fixed"><img src="headerinicio.png" width="100%" height="68"></div>
    <div data-role="content" align="center">
        <img src="http://www.iaasagroup.com.mx/tisolution/appcomere/imgs/complices_avatars/perfil2.jpg" width="35%" /> 
        <h2>Valeria Ela</h2>
        <br>   <br>
        Hola, soy una usuaria que disfruta de los cafes y los lugares elegantes lo tradicional y el buen sazon.
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum."
        <br><br>
        <a href="#recomendaciones">Mira mis recomendaciones mas recientes</a><br>
        <a href="#recomendaciones">Mira mis favoritos</a>
    </div>
   	<div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="68" /> </div>
    </div>
    <!--tag:complice3 -->
  <div data-role="page" id="complice3">
  	<div data-role="header" align="center" data-position="fixed"><img src="headerinicio.png" width="100%" height="68"></div>
    <div data-role="content" align="center">
        <img src="http://www.iaasagroup.com.mx/tisolution/appcomere/imgs/complices_avatars/perfil3.jpg" width="35%" /> 
        <h2>Rosa Narrow</h2>
        Me encanta la cocina sofisticada y de buen ambiente.
        <br>  <br>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum."
        <br><br>
        <a href="#recomendaciones">Mira mis recomendaciones mas recientes</a><br>
        <a href="#recomendaciones">Mira mis favoritos</a>
    </div>
   	<div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="68" /> </div>
    </div>
    <!--tag:recomedaciones -->
  <div data-role="page" id="recomendaciones">
  	<div data-role="header" align="center" data-position="fixed"><img src="headerinicio.png" width="100%" height="68"></div>
    <div data-role="content">
      <ul data-role="listview" data-inset="true" data-icon="false">
        <li><a href="#page7">Al Andalus</a></li>
        <li><a href="#page15">Azul Histórico </a></li> 
        <li><a href="#page28">Cambalache </a></li> 
        <li><a href="#page30">Carolo </a></li> 
        <li><a href="#page34">Casino Español </a></li> 
      </ul>
    </div>
   	<div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="68" /> </div>
  </div>
    </div>


<!--Busqueda por nombre de restaurant -->

 
 
<div data-role="page" id="pageB">
 


	<div data-role="header" align="center" data-position="fixed">
 


   <img src="headerinicio.png" width="100%" height="68">
 


	</div>
 


    <table width="100%" border="0">
 


      <tr>
 


        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>
  


        <td><div align="center"><a href="#page" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>
  


      </tr>



    </table>



	<div data-role="content">	



		<ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Buscar por nombre">





    <li><a href="#page7">Al Andalus</a></li>



    <li><a href="#page15">Azul Histórico </a></li> 



 <li><a href="#page28">Cambalache </a></li> 



 <li><a href="#page30">Carolo </a></li> 



 <li><a href="#page34">Casino Español </a></li> 



 <li><a href="#page36">Centro Castellano </a></li> 



 <li><a href="#page44">Danubio </a></li> 



 <li><a href="#page50">El Bajío </a></li> 



 <li><a href="#page51">El Cardenal </a></li> 



 <li><a href="#page62">Gruta Ehden </a></li> 



 <li><a href="#page63">Guadiana</a></li> 



 <li><a href="#page66">Hostería de Santo Domingo </a></li> 



 <li><a href="#page72">L´Osteria del Becco </a></li> 



 <li><a href="#page73">La Casserole </a></li> 



 <li><a href="#page79">Limosneros </a></li></a></li> 



 <li><a href="#page82">Loma Linda </a></li></a></li> 



 <li><a href="#page83">Los Arcos </a></li></a></li> 



 <li><a href="#page85">Los Girasoles </a></li></a></li> 



 <li><a href="#page90">Mazurca </a></li></a></li> 



<li><a href="#page91">Mercaderes </a></li></a></li>



 <li><a href="#page96">Monte Cristo </a></li></a></li> 



 <li><a href="#page100">Nagaoka </a></li> 



 <li><a href="#page103">Novecento </a></li> 



 <li><a href="#page108">Padrinos </a></li> 



 <li><a href="#page110">Piantao </a></li> 



 <li><a href="#page111">Porfirios </a></li> 



 <li><a href="#page114">Puerto Getaria </a></li> 



 <li><a href="#page115">Puerto Madero </a></li> 



 <li><a href="#page120">Raíz </a></li> 



 <li><a href="#page121">Rincón Argentino </a></li> 



 <li><a href="#page127">Spuntino </a></li> 



 <li><a href="#page129">Suntory </a></li> 



 

		</ul>



	</div>



    



    <div>



     <img id="bg" src="fondo1.jpg" alt="Fondo" />



	</div>



	<div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



	</div>



</div>







<!--Menu ideal para  // plan -->



<div data-role="page" id="plan">



	<div data-role="header" align="center" data-position="fixed">



   <img src="headerinicio.png" width="100%" height="68">



	</div>	



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



      </tr>



    </table>    



    <div data-role="content">



    



    <ul data-role="listview" data-inset="true" data-icon="false">



    <li><a href="#popupNested1" data-rel="popup">



        <h2>Ambiente</h2></a>



    </li>



    <li><a href="#popupNested2" data-rel="popup">



        <h2>Banquetes / Servicio <br>a domicilio</h2></a>



    </li>



    <li><a href="#popupNested3" data-rel="popup">



        <h2>Brunch</h2></a>



    </li>



    <li><a href="#popupNested4" data-rel="popup">



        <h2>Chic</h2></a>



    </li>



    <li><a href="#popupNested5" data-rel="popup">



        <h2>De vinos</h2></a>



    </li>



    <li><a href="#popupNested6" data-rel="popup">



        <h2>Desayuno</h2></a>



    </li>



    <li><a href="#popupNested7" data-rel="popup">



        <h2>Desvelado</h2></a>



    </li>



    <li><a href="#popupNested8" data-rel="popup">



        <h2>DJ</h2></a>



    </li>



    <li><a href="#popupNested9" data-rel="popup">



        <h2>Familiar con niños</h2></a>



    </li>



    <li><a href="#popupNested10" data-rel="popup">



        <h2>Música en vivo</h2></a>



    </li>



    <li><a href="#popupNested11" data-rel="popup">



        <h2>Negocios</h2></a>



    </li>



    <li><a href="#popupNested12" data-rel="popup">



        <h2>Para llevar /<br> Tienda Gourmet</h2></a>



    </li>



    <li><a href="#popupNested13" data-rel="popup">



        <h2>Pizza y vinos</h2></a>



    </li>



    <li><a href="#popupNested14" data-rel="popup">



        <h2>Postres</h2></a>



    </li>



    <li><a href="#popupNested15" data-rel="popup">



        <h2>Románticos /<br>Ocaciones especiales</h2></a>



    </li>



    <li><a href="#popupNested16" data-rel="popup">



        <h2>Solteros</h2></a>



    </li>



    <li><a href="#popupNested17" data-rel="popup">



        <h2>Terraza</h2></a>



    </li>



    <li><a href="#popupNested18" data-rel="popup">



        <h2>Tomar copa</h2></a>



    </li>



</ul>



    



<div data-role="popup" id="popupNested1" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page9">Alekzander</a></li>



    		<li><a href="#page15">Azul Histórico</a></li>



    		<li><a href="#page21">Bistró 83</a></li>



    		<li><a href="#page23">Bistro Bèc </a></li>



    		<li><a href="#page24">Bonito Popfood </a></li> 



			<li><a href="#page32">Casa D´ Italia</a></li>



 			<li><a href="#page35">Central Central</a></li> 



 			<li><a href="#page37">Comensal</a></li> 



 			<li><a href="#page39">Contramar</a></li> 



			<li><a href="#page41">Costa Guadiana</a></li> 



 			<li><a href="#page45">Decräb</a></li> 



 			<li><a href="#page53">El Japonez</a></li> 



 			<li><a href="#page57">Enrique</a></li> 



 			<li><a href="#page63">Guadiana</a></li> 



			<li><a href="#page72">L'Osteria del Becco</a></li> 



 			<li><a href="#page74">La Nº 20</a></li> 



 			<li><a href="#page75">La Taberna del Chanclas</a></li> 



 			<li><a href="#page79">Limosneros</a></li> 



 			<li><a href="#page80">Lincoln</a></li> 



        	<li><a href="#page86">Maja</a></li>



 			<li><a href="#page89">Maximo Bistrot Local</a></li> 



 			<li><a href="#page94">Mexsi Bocu</a></li> 



 			<li><a href="#page103">Novecento</a></li> 



 			<li><a href="#page106">Olives</a></li> 



 			<li><a href="#page108">Padrinos</a></li> 



 			<li><a href="#page122">Romita Comedor</a></li> 



 			<li><a href="#page123">Rosetta</a></li> 



 			<li><a href="#page128">Sud 777</a></li> 



 			<li><a href="#pagexxx">Tori Tori</a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested2" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e" rel="external">          



        <div data-role="collapsible" data-inset="false" rel="external">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview" rel="external">



			<li><a href="#page7">Al Andalus</a></li> 



			<li><a href="#page8">Alaia</a></li>



            <li><a href="#page16">Bakea</a></li> 



 			<li><a href="#page29">Cantineta del Becco</a></li> 



 			<li><a href="#page57">Enrique</a></li> 



 			<li><a href="#page62">Gruta Ehden</a></li> 



 			<li><a href="#page69">Jaleo</a></li> 



 			<li><a href="#page91">Mercaderes</a></li> 



 			<li><a href="#page119">Quintonil</a></li> 



 			<li><a href="#page120">Raíz</a></li> 



 			<li><a href="#page129">Suntory</a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested3" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page15">Azul Histórico</a></li>



			<li><a href="#page21">Bistró 83</a></li>    



 			<li><a href="#page38">Condesa DF</a></li> 



 			<li><a href="#page46">Delirio</a></li> 



 			<li><a href="#page49">Dulcinea</a></li> 



 			<li><a href="#page50">El Bajío</a></li> 



 			<li><a href="#page63">Guadiana</a></li>  



 			<li><a href="#page85">Los Girasoles</a></li> 



 			<li><a href="#page88">Marentino</a></li> 



 			<li><a href="#page89">Maximo Bistrot Local</a></li> 



 			<li><a href="#page91">Mercaderes</a></li>



            <li><a href="#page99">Moustaches Bistrot</a></li>  



 			<li><a href="#page108">Padrinos</a></li> 



 			<li><a href="#page124">San Ángel Inn</a></li> 



 			<li><a href="#page127">Spuntino</a></li> 



 			<li><a href="#page128">Sud 777</a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested4" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page9">Alekzander</a></li>



			<li><a href="#page17">Bar Tomate</a></li>



 			<li><a href="#page24">Bonito Popfood</a></li> 



 			<li><a href="#page29">Cantinetta del Becco</a></li> 



 			<li><a href="#page35">Central Central</a></li> 



 			<li><a href="#page37">Comensal</a></li> 



 			<li><a href="#page75">La Taberna del Chanclas</a></li> 



 			<li><a href="#page80">Lincoln</a></li> 



 			<li><a href="#page87">Mar del Zur</a></li> 



 			<li><a href="#page89">Maximo Bistrot Local</a></li> 



 			<li><a href="#page122">Romita Comedor</a></li> 



 			<li><a href="#pagexxx">Tori Tori</a></li>  



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested5" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page8">Alaia</a></li> 



 			<li><a href="#page9">Alekzander</a></li> 



 			<li><a href="#page14">Au Pied de Cochon</a></li> 



			<li><a href="#page16">Bakea</a></li>



        	<li><a href="#page20">Biko</a></li>



            <li><a href="#page23">Bistrot Bèc</a></li> 



 			<li><a href="#page29">Cantinetta del Becco</a></li> 



 			<li><a href="#page58">Estoril</a></li> 



			<li><a href="#page61">Gloutonnerie</a></li>



        	<li><a href="#page64">Guría</a></li>



            <li><a href="#page135">Jaso</a></li> 



 			<li><a href="#page72">L´Osteria del Becco</a></li> 



 			<li><a href="#page78">Les Moustaches</a></li> 



			<li><a href="#page97">Mora Blanca</a></li>



        	<li><a href="#page109">Paxia</a></li>



            <li><a href="#page115">Puerto Madero</a></li> 



 			<li><a href="#page116">Pujol</a></li> 



 			<li><a href="#page120">Raíz</a></li> 



			<li><a href="#page126">Sir Winston Churchill´s</a></li>



        	<li><a href="#page130">The Capital Grille</a></li>



            <li><a href="#pageddd">The Palm</a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested6" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page7">Al Andalus</a></li> 



			<li><a href="#page105">Café O2</a></li> 



			<li><a href="#page30">Carolo</a></li> 



			<li><a href="#page33">Casa Portuguesa</a></li>



            <li><a href="#page34">Casino Español</a></li> 



			<li><a href="#pagefff">Distrino Capital</a></li> 



			<li><a href="#page51">El Cardenal</a></li> 



			<li><a href="#page52">El Jamil</a></li>



            <li><a href="#page57">Enrique</a></li> 



			<li><a href="#page62">Gruta Ehden</a></li> 



			<li><a href="#page66">Hosteria de <br>Santo Domingo</a></li> 



			<li><a href="#page73">La Casserole</a></li>



            <li><a href="#page79">Limosneros</a></li> 



			<li><a href="#page82">Loma Linda</a></li> 



			<li><a href="#page101">Nicos</a></li>            



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested7" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page14">Au Pied de Cochon</a></li> 



	        <li><a href="#page15">Azul Condesa</a></li> 



	        <li><a href="#page15">Azul Histórico</a></li>



	        <li><a href="#page16">Bakea</a></li> 



	        <li><a href="#page28">Cambalache</a></li> 



	        <li><a href="#page47">Düke Roma</a></li>



			<li><a href="#page81">Litoral</a></li>



	 		<li><a href="#page115">Puerto Madero</a></li> 



	 		<li><a href="#page126">Sir Winston Churchill's</a></li> 



	  		<li><a href="#page128">Sud 777</a></li>



            <li><a href="#pagexxx">Tori Tori</a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested8" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page9">Alekzander</a></li> 



			<li><a href="#page17">Bar Tomate</a></li> 



			<li><a href="#page18">Beefbar</a></li>



            <li><a href="#page35">Central Central</a></li> 



			<li><a href="#page38">Condesa DF</a></li> 



			<li><a href="#page125">Shu</a></li>



            <li><a href="#pagexxx">Tori Tori</a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested9" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page8">Alaia</a></li>



	    	<li><a href="#page14">Au Pied de Cochon</a></li>



	        <li><a href="#page15">Azul Histórico</a></li>



	 		<li><a href="#page23">Bistro Bèc</a></li>



	        <li><a href="#page30">Carolo</a></li>



			<li><a href="#page34">Casino Español</a></li> 



	 		<li><a href="#page36">Centro Castellano</a></li> 



	 		<li><a href="#page45">Decräb</a></li> 



	        <li><a href="#page50">El Bajío</a></li>



            <li><a href="#page51">El Cardenal</a></li>



	    	<li><a href="#page57">Enrique</a></li>



	        <li><a href="#page66">Hostería de <br> Santo Domingo</a></li>



	 		<li><a href="#page82">Loma Linda</a></li>



	        <li><a href="#page83">Los Arcos</a></li>



			<li><a href="#page93">Mesón Puerto Chico</a></li> 



	 		<li><a href="#page96">Monte Cristo</a></li> 



	 		<li><a href="#page100">Nagaoka</a></li> 



	        <li><a href="#page101">Nicos</a></li>



            <li><a href="#page106">Olives</a></li>



	        <li><a href="#page110">Piantao</a></li>



			<li><a href="#page111">Porfirio´s</a></li> 



	 		<li><a href="#page113">Torre Castilla</a></li> 



	 		<li><a href="#page124">San Ángel Inn</a></li> 



	        <li><a href="#pageddd">The Palm</a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested10" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page5">Adonis</a></li>    



	    	<li><a href="#page11">Arturo's</a></li>



	 		<li><a href="#page57">Enrique</a></li> 



	 		<li><a href="#page58">Estoril</a></li> 



	        <li><a href="#page68">J&G Grille</a></li>   



	 		<li><a href="#page74">La Nº 20</a></li> 



	 		<li><a href="#page78">Les Moustaches</a></li>



	        <li><a href="#page83">Los Arcos</a></li>



	        <li><a href="#pagettt">Tandoor</a></li> 



	        <li><a href="#page131">Villa María</a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested11" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page8">Alaia</a></li>



	    	<li><a href="#page11">Arturo's</a></li> 



	        <li><a href="#page13">Atalaya </a></li> 



			<li><a href="#page14">Au Pied de Cochon</a></li>



            <li><a href="#page28">Cambalache</a></li>



	    	<li><a href="#page36">Centro Castellano</a></li> 



	        <li><a href="#page40">Costa Dorada</a></li> 



			<li><a href="#page51">El Cardenal</a></li>



            <li><a href="#page58">Estoril</a></li>



	    	<li><a href="#page64">Guría</a></li> 



	        <li><a href="#page67">Hunan</a></li> 



			<li><a href="#page68">J&G Grille</a></li>



            <li><a href="#pagelll">La Taberna del Leóon</a></li>



	    	<li><a href="#page78">Les Moustaches</a></li> 



	        <li><a href="#page84">Los Canarios</a></li> 



			<li><a href="#page91">Mercaderes</a></li>



            <li><a href="#page98">Morton's The Steakhouse</a></li>



	    	<li><a href="#page113">Puerta Castilla</a></li> 



	        <li><a href="#page116">Pujol</a></li> 



			<li><a href="#page126">Sir Winston Churchill's</a></li>



            <li><a href="#page130">The Capital Grille</a></li> 



			<li><a href="#pageddd">The Palm</a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested12" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page5">Adonis</a></li>



	    	<li><a href="#page16">Bakea</a></li>  



	        <li><a href="#page30">Carolo</a></li>  



			<li><a href="#page33">Casa Portuguesa</a></li>



	        <li><a href="#page46">Delirio</a></li> 



	        <li><a href="#page57">Enrique</a></li> 



	 		<li><a href="#page62">Gruta Ehden</a></li>



          	<li><a href="#page69">Jaleo</a></li> 



	        <li><a href="#page135">Jaso</a></li> 



	        <li><a href="#page105">O2 Café</a></li>



	        <li><a href="#page123">Rosetta</a></li>



	 		<li><a href="#pagexxx">Tori tori</a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->



<div data-role="popup" id="popupNested13" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page19">Bellaria</a></li>



	    	<li><a href="#page32">Casa D´Italia</a></li>  



	        <li><a href="#page43">D´Amico</a></li>  



			<li><a href="#page59">Farina</a></li>



	        <li><a href="#page46">Delirio</a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->



<div data-role="popup" id="popupNested14" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page12">Astrid & Gastón</a></li>



	    	<li><a href="#page20">Biko</a></li>  



	        <li><a href="#page33">Casa Portuguesa</a></li>  



			<li><a href="#page46">Delirio</a></li>



	        <li><a href="#page48">Dulce Patria</a></li> 



	        <li><a href="#page61">Gloutonnerie</a></li> 



	 		<li><a href="#page62">Gruta Ehden</a></li>



          	<li><a href="#page135">Jaso</a></li> 



	        <li><a href="#page78">Les Moustaches</a></li> 



	        <li><a href="#page109">Paxia</a></li>



	        <li><a href="#page123">Rosetta</a></li>



	 		<li><a href="#page126">Sir Winston Churchill's</a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->



<div data-role="popup" id="popupNested15" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page12">Astrid & Gastón</a></li>



	    	<li><a href="#page14">Au Pied de Cochon</a></li>  



	        <li><a href="#page15">Azul Condesa</a></li>  



			<li><a href="#page16">Bakea</a></li>



	        <li><a href="#page19">Bellaria</a></li> 



	        <li><a href="#page20">Biko</a></li> 



	 		<li><a href="#page28">Cambalache</a></li>



          	<li><a href="#page31">Casa Anis</a></li> 



	        <li><a href="#page32">Casa D´Italia</a></li> 



	        <li><a href="#page47">Düke Roma</a></li>



	        <li><a href="#page56">Eloise Chic Cuisine</a></li>



	 		<li><a href="#page58">Estoril</a></li> 



			<li><a href="#page61">Gloutonniere</a></li>  



			<li><a href="#page67">Hunan</a></li>



	        <li><a href="#page68">J&G Grille</a></li> 



	        <li><a href="#page135">Jaso</a></li> 



	 		<li><a href="#page72">L´Osteria del Becco</a></li>



          	<li><a href="#page73">La Casserole</a></li> 



	        <li><a href="#pagelll">La Taberna del León</a></li> 



	        <li><a href="#page78">Les Moustaches</a></li>



	        <li><a href="#page85">Los Girasoles</a></li>



	 		<li><a href="#page87">Mar del Zur</a></li> 



            <li><a href="#page90">Mazurka</a></li> 



	        <li><a href="#page94">Mexsi Bocu</a></li> 



	        <li><a href="#page96">Monte Cristo</a></li>



	        <li><a href="#page97">Morablanca</a></li>



	 		<li><a href="#page102">Nobu</a></li> 



            <li><a href="#page104">Nueve Nueve<br> Bistrot</a></li> 



	        <li><a href="#page112">Prime house<br>Steak&Seafood </a></li> 



	        <li><a href="#page116">Pujol</a></li>



	        <li><a href="#page118">Quattro</a></li>



	 		<li><a href="#page120">Raíz</a></li> 



            <li><a href="#page123">Rosetta</a></li> 



	        <li><a href="#page124">San Ángel Inn</a></li> 



	        <li><a href="#page126">Sir Winston<br>Churchill's</a></li>



	        <li><a href="#page130">The Capital Grille</a></li>



	 		<li><a href="#pageddd">The Palm</a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->



<div data-role="popup" id="popupNested16" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page17">Bar Tomate</a></li>



	    	<li><a href="#page18">Beefbar</a></li>  



	        <li><a href="#page23">Bistro Bèc</a></li>  



			<li><a href="#page24">Bonito Popfood</a></li>



	        <li><a href="#page35">Central Central</a></li> 



	        <li><a href="#page38">Condesa DF</a></li> 



	 		<li><a href="#page46">Delirio</a></li>



          	<li><a href="#page47">Düke Roma</a></li> 



	        <li><a href="#page53">El Japonez</a></li> 



	        <li><a href="#page72">L`Osteria del Becco</a></li>



	        <li><a href="#page75">La Taberna del Chanclas</a></li>



	 		<li><a href="#page77">Lampugna Bistrot</a></li> 



            <li><a href="#page94">Mexsi Bocu</a></li>  



			<li><a href="#pagennn">Nick San</a></li>



	        <li><a href="#page104">Nueve Nueve Bistrot</a></li> 



	        <li><a href="#page111">Porfirio's</a></li> 



	 		<li><a href="#page117">Puntarena</a></li>



          	<li><a href="#page122">Romita Comedor</a></li> 



	        <li><a href="#page125">Shu</a></li> 



	        <li><a href="#page128">Sud 777</a></li>



	        <li><a href="#page133">Zeru</a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->



<div data-role="popup" id="popupNested17" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page7">Al Andalus</a></li>



	    	<li><a href="#page8">Alaia</a></li>  



	        <li><a href="#page9">Alekzander</a></li>  



			<li><a href="#page14">Au Pied de Cochon</a></li>



	        <li><a href="#page15">Azul Histórico</a></li> 



	        <li><a href="#page18">Beefbar</a></li> 



	 		<li><a href="#page21">Bistró 83</a></li>



          	<li><a href="#page30">Carolo</a></li> 



	        <li><a href="#page31">Casa Anis</a></li> 



	        <li><a href="#page35">Central Central</a></li>



	        <li><a href="#page37">Comensal</a></li>



	 		<li><a href="#page45">Decräb</a></li> 



            <li><a href="#page46">Delirio</a></li>  



			<li><a href="#page47">Düke Roma</a></li>



	        <li><a href="#page52">El Jamil</a></li> 



	        <li><a href="#page61">Gloutonnerie</a></li> 



	 		<li><a href="#page63">Guadiana</a></li>



          	<li><a href="#page64">Guría</a></li> 



	        <li><a href="#page135">Jaso</a></li> 



	        <li><a href="#page70">Jin San Shabu</a></li>



	        <li><a href="#page72">L´Osteria del Becco</a></li>



	 		<li><a href="#page74">La Nº 20</a></li> 



            <li><a href="#page75">La Taberna del Chanclas</a></li>  



			<li><a href="#page79">Limosneros</a></li>



	        <li><a href="#page80">Lincoln</a></li> 



	        <li><a href="#page82">Loma Linda</a></li> 



	 		<li><a href="#page87">Mar del Zur</a></li>



          	<li><a href="#page88">Marentino</a></li> 



	        <li><a href="#page94">Mexsi Bocu</a></li> 



	        <li><a href="#page97">Morablanca</a></li>



	        <li><a href="#page99">Moustaches Bistrot</a></li>



	 		<li><a href="#page100">Nagaoka</a></li> 



            <li><a href="#page102">Nobu</a></li>  



			<li><a href="#page103">Novecento</a></li>



	        <li><a href="#page104">Nueve Nueve Bistrot</a></li> 



	        <li><a href="#page108">Padrinos</a></li> 



	 		<li><a href="#page110">Piantao</a></li>



          	<li><a href="#page112">Prime House<br>Steak & Seafood</a></li> 



	        <li><a href="#page113">Puerta Castilla</a></li> 



	        <li><a href="#page118">Quattro</a></li>



	        <li><a href="#page123">Rosetta</a></li>



	 		<li><a href="#page126">Sir Winston Churchill's</a></li> 



            <li><a href="#page127">Spuntino</a></li>



	 		<li><a href="#page130">The Capital Grille</a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->



<div data-role="popup" id="popupNested18" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page14">Au Pied de Cochon</a></li>



	    	<li><a href="#page17">Bar Tomate</a></li>  



	        <li><a href="#page23">Bistrot Bèc</a></li>  



			<li><a href="#page24">Bonito Popfood</a></li>



	        <li><a href="#page134">Cantina Guadiana</a></li> 



	        <li><a href="#page29">Cantinetta del Becco</a></li> 



	 		<li><a href="#page30">Carolo</a></li>



          	<li><a href="#page35">Central Central</a></li> 



	        <li><a href="#page38">Condesa DF</a></li> 



	        <li><a href="#page39">Contramar</a></li>



	        <li><a href="#page135">Jaso</a></li>



	 		<li><a href="#page72">L`Osteria<br> del Becco</a></li> 



            <li><a href="#page74">La Nº 20</a></li>



	    	<li><a href="#page93">Mesón Puerto Chico</a></li>  



	        <li><a href="#page94">Mexsi Bocu</a></li>  



			<li><a href="#page102">Nobu</a></li>



	        <li><a href="#page104">Nueve Nueve Bistrot</a></li> 



	        <li><a href="#page105">O2</a></li> 



	 		<li><a href="#page106">Olives</a></li>



          	<li><a href="#page108">Padrinos</a></li> 



	        <li><a href="#page125">Shu</a></li> 



	        <li><a href="#page128">Sud 777</a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->



    



	</div>



	<!--<div>



     <img id="bg" src="fondo4.jpg" alt="Fondo" />



	</div>-->



	<div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



	</div>



</div>















<!--Busqueda por zona -->



<div data-role="page" id="pageBZ">



	<div data-role="header" align="center" data-position="fixed">



   <img src="headerinicio.png" width="100%" height="68">



	</div>	



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#page" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



      </tr>



    </table>    



    <div data-role="content">



    



    <ul data-role="listview" data-inset="true" data-icon="false">



    <li><a href="#popupNested1" data-rel="popup">



        <h2>Anzures / Polanco</h2></a>



    </li>



    <li><a href="#popupNested2" data-rel="popup">



        <h2>Azcapotzalco</h2></a>



    </li>



    <li><a href="#popupNested3" data-rel="popup">



        <h2>Centro</h2></a>



    </li>



    <li><a href="#popupNested4" data-rel="popup">



        <h2>Condesa / Roma / Narvate</h2></a>



    </li>



    <li><a href="#popupNested5" data-rel="popup">



        <h2>Cuauhtémoc / Reforma Centro / Tabacalera</h2></a>



    </li>



    <li><a href="#popupNested6" data-rel="popup">



        <h2>Interlomas</h2></a>



    </li>



    <li><a href="#popupNested7" data-rel="popup">



        <h2>Las Lomas</h2></a>



    </li>



    <li><a href="#popupNested8" data-rel="popup">



        <h2>Lindavista</h2></a>



    </li>



    <li><a href="#popupNested9" data-rel="popup">



        <h2>Nápoles / Del Valle / Florida</h2></a>



    </li>



    <li><a href="#popupNested10" data-rel="popup">



        <h2>Santa Fe / Bosques</h2></a>



    </li>



    <li><a href="#popupNested11" data-rel="popup">



        <h2>Satélite</h2></a>



    </li>



    <li><a href="#popupNested12" data-rel="popup">



        <h2>Sur</h2></a>



    </li>



</ul>



    



<div data-role="popup" id="popupNested1" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page5">Adonis</a></li>



    		<li><a href="#page12">Astri&Gaston </a></li>



            <li><a href="#page14">Aud Pied de Cochon </a></li>



    		<li><a href="#page17">Bar Tomate </a></li> 



			<li><a href="#page18">BeefBar </a></li>



            <li><a href="#page19">Bellaria </a></li>



 			<li><a href="#page20">Biko </a></li> 



 			<li><a href="#page23">Bistrot Bec </a></li> 



 			<li><a href="#page26">Bros Oyster </a></li> 



			<li><a href="#page28">Cambalache </a></li>



            <li><a href="#page31">Casa Anís </a></li> 



 			<li><a href="#page33">Casa Portuguesa </a></li> 



            <li><a href="#page36">Centro Castellano </a></li> 



            <li><a href="#page37">El Comensal</a></li> 



            <li><a href="#page30">Carolo </a></li>



 			<li><a href="#page37">Comensal </a></li> 



 			<li><a href="#page40">Costa Dorada </a></li> 



 			<li><a href="#page42">D.O. </a></li> 



			<li><a href="#page43">DAmico </a></li> 



 			<li><a href="#page48">Dulce patria </a></li> 



 			<li><a href="#page49">Dulcinea </a></li> 



            <li><a href="#page50">El Bajío </a></li> 



 			<li><a href="#page53">El Japonez </a></li> 



 			<li><a href="#page58">Estoril </a></li> 



        	<li><a href="#page61">Gloutonnerie </a></li>



 			<li><a href="#page62">Gruta Ehden </a></li> 



 			<li><a href="#page64">Guría </a></li> 



 			<li><a href="#page65">Harry´s </a></li> 



 			<li><a href="#page69">Jaleo </a></li> 



            <li><a href="#page135">Jaso</a></li> 



 			<li><a href="#page72">L´Osteria del Becco </a></li> 



 			<li><a href="#page74">La N° 20 </a></li> 



 			<li><a href="#page77">Lampuga Bistrot </a></li> 



 			<li><a href="#page80">Lincoln </a></li> 



            <li><a href="#page82">Loma Linda </a></li> 



 			<li><a href="#page83">Los Arcos </a></li> 



 			<li><a href="#page84">Los Canarios </a></li> 



 			<li><a href="#page87">Mar del Zur </a></li> 



			<li><a href="#page97">Mora Blanca </a></li> 



 			<li><a href="#page103">Novecento </a></li> 



            <li><a href="#page108">Primos Hermanos </a></li> 



            <li><a href="#page113">Puerta Torre de Castilla</a></li> 



 			<li><a href="#page115">Puerto Madero </a></li> 



        	<li><a href="#page116">Pujol </a></li>



 			<li><a href="#page119">Quintonil </a></li> 



 			<li><a href="#page121">Rincón Argentino </a></li>



 			<li><a href="#page126">Sir Winston Churchill´s </a></li>



 			<li><a href="#page127">Spuntino </a></li> 



            <li><a href="#page138">Tandoor </a></li> 



            <li><a href="#page139">The Palm</a></li> 



            <li><a href="#page140">Tori Tori </a></li> 



            <li><a href="#page141">Torobi </a></li> 



 			<li><a href="#page131">Villa María </a></li> 



 			<li><a href="#page132">Yoshimi </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested2" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page50">El Bajío </a></li> 



			<li><a href="#page101">Nicos </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested3" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page7">Al Andalus</a></li>



			<li><a href="#page15">Azul Histórico </a></li>    



 			<li><a href="#page34">Casino Español </a></li> 



 			<li><a href="#page36">Centro Castellano </a></li> 



 			<li><a href="#page44">Danubio </a></li> 



 			<li><a href="#page51">El Cardenal </a></li> 



 			<li><a href="#page66">Hostería de Santo Domingo </a></li>  



 			<li><a href="#page79">Limosneros </a></li> 



 			<li><a href="#page85">Los Girasoles </a></li> 



 			<li><a href="#page91">Mercaderes </a></li> 



 			<li><a href="#page108">Padrinos </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested4" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page9">Alekzander</a></li>



            <li><a href="#page11">Arturo's </a></li> 



            <li><a href="#page15">Azul Condesa </a></li> 



			<li><a href="#page24">Bonito Popfood </a></li>



 			<li><a href="#page25">Broka Bistrot </a></li> 



 			<li><a href="#page32">Casa D´Italia </a></li> 



 			<li><a href="#page38">Condesa DF </a></li> 



 			<li><a href="#page39">Contramar</a></li> 



 			<li><a href="#page46">Delirio </a></li> 



 			<li><a href="#page47">Duke Roma </a></li> 



            <li><a href="#page50">El Bajío </a></li> 



 			<li><a href="#page52">El Jamil </a></li> 



            <li><a href="#page53">El Japonez </a></li> 



 			<li><a href="#page75">La Taberna del Chanclas </a></li> 



 			<li><a href="#page81">Litoral </a></li> 



 			<li><a href="#page86">Maja </a></li> 



 			<li><a href="#page89">Maximo Bistrot Local </a></li> 



 			<li><a href="#page92">Mero Toro </a></li>  



 			<li><a href="#page94">Mexsi Bocu </a></li> 



 			<li><a href="#page104">Nueve Nueve Bristot </a></li> 



 			<li><a href="#page107">Osteria 8 </a></li> 



            <li><a href="#page108">Primos </a></li>  



 			<li><a href="#page122">Romita Comedor </a></li> 



 			<li><a href="#page123">Rosetta </a></li>



   			<li><a href="#page138">Tandoor </a></li> 



            <li><a href="#page140">Tori Tori </a></li>  



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested5" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page22">Bistrot Arlequín </a></li> 



            <li><a href="#page134">Cantina Guadiana</a></li>  



            <li><a href="#page50">El Bajío</a></li>  



 			<li><a href="#page68">J&G Grill </a></li> 



            <li><a href="#page74">La Nº 20</a></li>  



 			<li><a href="#page78">Les Moustaches </a></li> 



            <li><a href="#page83">Los Arcos</a></li>  



            <li><a href="#page84">Los Canarios</a></li>  



			<li><a href="#page93">Mesón Puerto Chico </a></li>



            <li><a href="#page137">Nick San</a></li>  



        	<li><a href="#page130">The Capital Grille </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested6" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page30">Carolo </a></li> 



			<li><a href="#page50">El Bajío </a></li> 



			<li><a href="#page82">Loma Linda </a></li> 



			<li><a href="#page129">Suntory </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested7" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page16">Bakea </a></li> 



            <li><a href="#page105">Café O</a></li>  



	 		<li><a href="#page45">Decräb </a></li>



	        <li><a href="#page51">El Cardenal </a></li> 



	        <li><a href="#page59">Farina </a></li>



	        <li><a href="#page63">Guadiana</a></li> 



	        <li><a href="#page67">Hunan </a></li> 



	        <li><a href="#page82">Loma Linda </a></li>



			<li><a href="#page88">Marentino </a></li>



	 		<li><a href="#page98">Morton´s the Steakhouse </a></li> 



	 		<li><a href="#page99">Moustaches Bristot </a></li> 



	  		<li><a href="#page117">Puntarena </a></li> 



	        <li><a href="#page129">Suntory </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested8" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page50">El Bajío </a></li> 



			<li><a href="#page28">Cambalache </a></li> 



			<li><a href="#page96">Monte Cristo </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested9" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page7">Al Andalus</a></li>



	    	<li><a href="#page28">Cambalache </a></li>



	        <li><a href="#page50">El Bajío </a></li>



	 		<li><a href="#page62">Gruta Ehden </a></li>



	        <li><a href="#page73">La Casserole </a></li>



			<li><a href="#page90">Mazurca </a></li></a></li> 



	 		<li><a href="#page100">Nagaoka </a></li> 



	 		<li><a href="#page114">Puerto Getaria </a></li> 



	        <li><a href="#page129">Suntory </a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested10" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page13">Atalaya</a></li>    



	    	<li><a href="#page14">Au Pied de Cochon</a></li>



	 		<li><a href="#page19">Bellaria </a></li> 



	 		<li><a href="#page29">Cantinetta del Becco </a></li> 



	        <li><a href="#page30">Carolo </a></li>   



	 		<li><a href="#page35">Central Central </a></li> 



	 		<li><a href="#page41">Costa Guadiana </a></li>



	        <li><a href="#page43">D'Amico </a></li>



	        <li><a href="#page38">Distrito Capital</a></li>



            <li><a href="#page49">Dulcinea </a></li> 



	        <li><a href="#page50">El Bajío </a></li>



	        <li><a href="#page53">El Japonez </a></li> 



	 		<li><a href="#page63">Guadiana</a></li> 



	        <li><a href="#page64">Guría </a></li> 



	 		<li><a href="#page70">Jin San Shabu </a></li> 



	        <li><a href="#page84">Los Canarios </a></li>



	 		<li><a href="#page102">Nobu </a></li> 



	        <li><a href="#page105">O2 Café </a></li> 



	 		<li><a href="#page106">Olives </a></li> 



	        <li><a href="#page108">Padrinos </a></li>



	 		<li><a href="#page112">Prime House Steak & Food </a></li> 



	 		<li><a href="#page113">Puerta Torre de Castilla </a></li>



	        <li><a href="#page115">Puerto Madero </a></li>



	        <li><a href="#page118">Quattro </a></li> 



	        <li><a href="#page125">Shu </a></li> 



            <li><a href="#page139">The Palm </a></li> 



	        <li><a href="#page131">Villa María </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested11" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page36">Centro Castellano </a></li>



	    	<li><a href="#page63">Guadiana</a></li> 



	        <li><a href="#page83">Los Arcos </a></li> 



			<li><a href="#page120">Raíz </a></li>



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->







<div data-role="popup" id="popupNested12" data-theme="none">



    <!--<div data-role="collapsible-set" data-theme="c" data-content-theme="e">          



        <div data-role="collapsible" data-inset="false">



            <h2>Eventos y espectaculos</h2>-->



            <ul data-role="listview">



			<li><a href="#page8">Alaia</a></li>



            <li><a href="#page15">Azul y Oro</a></li> 



	    	<li><a href="#page21">Bistro83 </a></li>  



	        <li><a href="#page28">Cambalache </a></li>  



            <li><a href="#page113">Casa de Castilla</a></li> ````



			<li><a href="#page50">El Bajío </a></li>



	        <li><a href="#page51">El Cardenal </a></li> 



	        <li><a href="#page56">Eloise Chic Cuisine </a></li> 



	 		<li><a href="#page57">Enrique </a></li>



          	<li><a href="#page63">Guadiana</a></li> 



	        <li><a href="#page67">Hunan </a></li> 



            <li><a href="#page136">La Taberna del León</a></li> 



	        <li><a href="#page83">Los Arcos </a></li>



	        <li><a href="#page84">Los Canarios </a></li>



	 		<li><a href="#page100">Nagaoka </a></li> 



	        <li><a href="#page109">Paxia </a></li>



	        <li><a href="#page110">Piantao </a></li>



	        <li><a href="#page111">Porfirios </a></li> 



	 		<li><a href="#page112">Prime House Steak & Food </a></li>



	 		<li><a href="#page117">Puntarena </a></li>



	        <li><a href="#page115">Puerto Madero </a></li>



	 		<li><a href="#page124">San Ángel Inn </a></li>



			<li><a href="#page128">Sud 777 </a></li>



			<li><a href="#page133">Zeru </a></li> 



            </ul>



        <!--</div> /collapsible -->



    <!--</div> /collapsible set -->



</div><!-- /popup -->



    



	</div>



	<!--<div>



     <img id="bg" src="fondo4.jpg" alt="Fondo" />



	</div>-->



	<div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



	</div>



</div>







<!--Menu -->



<div data-role="page" id="menu">



 <div>



     <img id="bg" src="fondoG.jpg" alt="Fondo" />



</div>



	<div data-role="header" align="center" data-position="fixed">

    

    <img src="headerinicio.png" width="100%" height="68">



<a class="ui-btn-right" href="configuracion.html" rel="external" data-iconpos="notext" data-icon="gear">Options</a>

    </div>



	<div data-role="content">	



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



      </tr>



    </table>



    



    <div align="center"><h1>Menú de busqueda</h1></div>     



     <ul data-role="listview" data-inset="true" data-icon="false">



    <li><a href="comidas.html" rel="external">



        <!--<img src="rest/Comesal.jpg" width="60" height="60">-->



        <h2>Por complices</h2></a>



    </li>





    <li><a href="#pageBZ">



        <!--<img src="rest/duke.jpg" width="60" height="60">-->



        <h2>Por zona</h2></a>



    </li>



    <li><a href="#plan">



        <!--<img src="rest/Comesal.jpg" width="60" height="60">-->



        <h2>costos $</h2></a>



    </li>



    <li><a href="#pageB" rel="index">



        <!--<img src="rest/CostaGuadiana.jpg" width="60" height="60">-->



        <h2>Buscar por nombre</h2></a>



    </li>



    <!--<li><a href="#page4">



        <h2>Promociones</h2></a>



    </li>-->



</ul>



    



	</div>







	<div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



	</div>







</div>











<!--Buscar-->



<div data-role="page" id="menuB1" data-theme="b">



	<div data-role="header" align="center" data-position="fixed">



    <img src="headerinicio.png" width="100%" height="68">



	</div>



    



	<div  id="capa" data-role="content">	



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#page" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



      </tr>



    </table>



    



    <div data-role="content">	<!--data-filter="true" data-filter-reveal="true" data-filter-placeholder="Buscar por nombre"-->



		<ul data-role="listview" data-theme="d">



    <li><a href="#page5">Americana</a></li>



    <li><a href="#page6">Arabe</a></li>



    <li><a href="#page7">Argentina</a></li>



    <li><a href="#page8">Carnes</a></li>



    <li><a href="#page9">China</a></li>



    <li><a href="#page10">De autor</a></li>



    <li><a href="#page11">Española</a></li>



    <li><a href="#page12">Francesa </a></li>



    <li><a href="#page13">Hindí</a></li>



    <li><a href="#page14">Internacional</a></li>



    <li><a href="#page15">Italiana</a></li> 



    <li><a href="#page16">Japonesa</a></li> 



    <li><a href="#page17">Libanesa</a></li> 



 <li><a href="#page18">Mediterránea</a></li> 



 <li><a href="#page19">Mexicana</a></li> 



 <li><a href="#page20">Peruana</a></li> 



 <li><a href="#page21">Pescados y mariscos</a></li> 



 <li><a href="#page22">Polaca</a></li> 



 <li><a href="#page23">Portuguesa</a></li> 



 <li><a href="#page24">Vasca</a></li> 



		</ul>



	</div>



   



     </div>







	<div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



	</div>



</div>







<!--Voy a estar-->



<div data-role="page" id="menu2">



	<div data-role="header" align="center" data-position="fixed"> <a href="#page" >Regresar</a>



   <img src="headerinicio.png" width="100%" height="68">



	</div>



    



<div data-role="content">



	







  	<section id="Ubicacion" >	</section>



</div>







	<div data-role="footer" data-position="fixed">



      <div data-role="footer" data-position="fixed">







         	 <img id="bg2" src="footerlogo.png" height="68" />







	</div>



        <h4>Voy a estar</h4>



	</div>



</div>



<!--Voy a estar Resultado-->



<div data-role="page" id="menuV">



	<div data-role="header" align="center" data-position="fixed"> <a href="#page" >Regresar</a>



   <img src="headerinicio.png" width="100%" height="68">



	</div>



    



<div data-role="content">



	



    



    <div id="map_canvas" style="width: 800px; height: 600px"></div>



    



    



    



</div>







	<div>



     <img id="bg" src="fondo4.jpg" alt="Fondo" />



	</div>



	<div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



	</div>



</div>







<!--Lista Restaurants-->



<div data-role="page" id="page2">



	<div data-role="header" align="center" data-position="fixed">



		 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="markers.html" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



      </tr>



    </table>



	<div data-role="content">	



		<ul data-role="listview">



			<li><img src="minis/5.ico" width="40" height="40" img style="float:left"><a href="#page5" align="center">Adonis</a></li>



            <li><img src="minis/6.ico" width="40" height="40" img style="float:left"><a href="#page6" align="center">Agua y Sal</a></li>



			<li><img src="minis/7.ico" width="40" height="40" img style="float:left"><a href="#page7" align="center">Al Andalus</a></li>



            <li><img src="minis/8.ico" width="40" height="40" img style="float:left"><a href="#page8" align="center">Alaia</a></li>



            <li><img src="minis/9.ico" width="40" height="40" img style="float:left"><a href="#page9" align="center">Alekzander</a></li>



			<li><img src="minis/10.ico" width="40" height="40" img style="float:left"><a href="#page10" align="center">Arroyo</a></li>



            <li><img src="minis/11.ico" width="40" height="40" img style="float:left"><a href="#page11" align="center">Arturo's</a></li>



            <li><img src="minis/12.ico" width="40" height="40" img style="float:left"><a href="#page12" align="center">Astrid&Gaston </a></li>



			<li><img src="minis/13.ico" width="40" height="40" img style="float:left"><a href="#page13" align="center">Atalaya</a></li>



            <li><img src="minis/14.ico" width="40" height="40" img style="float:left"><a href="#page14" align="center">Au Pied de Cochon</a></li>



            <li><img src="rest/AZULhist.tif" width="40" height="40" img style="float:left"><a href="#page15" align="center">Azul Histórico </a></li>



            <li><img src="rest/bakea.tif" width="40" height="40" img style="float:left"><a href="#page16" align="center">Bakea </a></li>



            <li><img src="rest/bartomate.jpg" width="40" height="40" img style="float:left"><a href="#page17" align="center">Bar Tomate </a></li>



            <li><img src="rest/beefbar.jpg" width="40" height="40" img style="float:left"><a href="#page18" align="center">BeefBar </a></li>



            <li><img src="rest/Bellaria.jpg" width="40" height="40" img style="float:left"><a href="#page19" align="center">Bellaria </a></li>



            <li><img src="rest/Biko.jpg" width="40" height="40" img style="float:left"><a href="#page20" align="center">Biko </a></li>



            <li><img src="rest/bistro.jpg" width="40" height="40" img style="float:left"><a href="#page21" align="center">Bistro83 </a></li>



            <li><img src="rest/bistroarlequin.jpg" width="40" height="40" img style="float:left"><a href="#page22" align="center">Bistrot Arlequín </a></li>



            <li><img src="rest/bistrobec.jpg" width="40" height="40" img style="float:left"><a href="#page23" align="center">Bistrot Bec </a></li>



            <li><img src="rest/bonito.png" width="40" height="40" img style="float:left"><a href="#page24" align="center">Bonito Popfood </a></li>



            <li><img src="rest/broka.jpg" width="40" height="40" img style="float:left"><a href="#page25"rel="external" align="center">Broka Bistrot </a></li>



            <li><img src="rest/BrosOyster.jpg" width="40" height="40" img style="float:left"><a href="#page26" align="center">Bros Oyster </a></li>



            <li><img src="rest/buca.png" width="40" height="40" img style="float:left"><a href="#page27" align="center">Buca Di Beppo </a></li>



            <li><img src="rest/cambalache.jpg" width="40" height="40" img style="float:left"><a href="#page28" align="center">Cambalache </a></li>



            <li><img src="rest/cantina-guadiana.jpg" width="40" height="40" img style="float:left"><a href="#page134" align="center">Cantina Guadiana</a></li>



            <li><img src="rest/cantineta.jpg" width="40" height="40" img style="float:left"><a href="#page29" align="center">Cantinetta del Becco </a></li>



            <li><img src="rest/carolo.jpg" width="40" height="40" img style="float:left"><a href="#page30" align="center">Carolo </a></li>



            <li><img src="rest/CasaAnis.jpg" width="40" height="40" img style="float:left"><a href="#page31" align="center">Casa Anís </a></li>



            <li><img src="rest/CasaDItalia.jpg" width="40" height="40" img style="float:left"><a href="#page32" align="center">Casa D´Italia </a></li>



			<li><img src="rest/casaportuguesa.jpg" width="40" height="40" img style="float:left"><a href="#page33" align="center">Casa Portuguesa </a></li>



			<li><img src="rest/Casino.jpg" width="40" height="40" img style="float:left"><a href="#page34" align="center">Casino Español </a></li>



			<li><img src="rest/central.jpg" width="40" height="40" img style="float:left"><a href="#page35" align="center">Central Central </a></li>



			<li><img src="rest/centrocastellano.jpg" width="40" height="40" img style="float:left"><a href="#page36" align="center">Centro Castellano </a></li>



			<li><img src="rest/Comesal.jpg" width="40" height="40" img style="float:left"><a href="#page37" align="center">Comensal </a></li>



			<li><img src="rest/Condesa.jpg" width="40" height="40" img style="float:left"><a href="#page38" align="center">Condesa DF </a></li>



			<li><img src="rest/Contramar.jpg" width="40" height="40" img style="float:left"><a href="#page39" align="center">Contramar </a></li>



			<li><img src="rest/CostaDorada.jpg" width="40" height="40" img style="float:left"><a href="#page40" align="center">Costa Dorada </a></li>



            <li><img src="rest/CostaGuadiana.jpg" width="40" height="40" img style="float:left"><a href="#page41" align="center">Costa Guadiana </a></li>



			<li><img src="rest/DO.jpg" width="40" height="40" img style="float:left"><a href="#page42" align="center">D.O. </a></li>



			<li><img src="rest/DAminico.jpg" width="40" height="40" img style="float:left"><a href="#page43" align="center">DAmico </a></li>



			<li><img src="rest/danubio.jpg" width="40" height="40" img style="float:left"><a href="#page44" align="center">Danubio </a></li>



			<li><img src="rest/decrab.jpg" width="40" height="40" img style="float:left"><a href="#page45" align="center">Decräb </a></li>



			<li><img src="rest/delirio.jpg" width="40" height="40" img style="float:left"><a href="#page46" align="center">Delirio </a></li>



			<li><img src="rest/duke.jpg" width="40" height="40" img style="float:left"><a href="#page47" align="center">Duke Roma </a></li>



			<li><img src="rest/dulcepatria.jpg" width="40" height="40" img style="float:left"><a href="#page48" align="center">Dulce patria </a></li>



			<li><img src="rest/dulcinea.jpg" width="40" height="40" img style="float:left"><a href="#page49" align="center">Dulcinea </a></li>



			<li><img src="rest/elbajio.jpg" width="40" height="40" img style="float:left"><a href="#page50" align="center">El Bajío </a></li>



			<li><img src="rest/elcardenal.jpg" width="40" height="40" img style="float:left"><a href="#page51" align="center">El Cardenal </a></li>



			<li><img src="rest/eljamil.jpg" width="40" height="40" img style="float:left"><a href="#page52" align="center">El Jamil </a></li>



			<li><img src="rest/eljaponez.jpg" width="40" height="40" img style="float:left"><a href="#page53" align="center">El Japonez </a></li>



			<li><img src="rest/ElMercat.png" width="40" height="40" img style="float:left"><a href="#page54" align="center">El Mercat </a></li>



			<li><img src="rest/ElPlaza.jpg" width="40" height="40" img style="float:left"><a href="#page55" align="center">El Plaza 77 </a></li>



            <li><img src="rest/eloise.jpg" width="40" height="40" img style="float:left"><a href="#page56" align="center">Eloise Chic Cuisine </a></li>



			<li><img src="rest/enrique.jpg" width="40" height="40" img style="float:left"><a href="#page57" align="center">Enrique </a></li>



			<li><img src="rest/estoril.jpg" width="40" height="40" img style="float:left"><a href="#page58" align="center">Estoril </a></li>



			<li><img src="rest/Farina.jpg" width="40" height="40" img style="float:left"><a href="#page59" align="center">Farina </a></li>



			<li><img src="rest/Fonda.jpg" width="40" height="40" img style="float:left"><a href="#page60" align="center">Fonda El Refugio </a></li>



			<li><img src="rest/Gloutonnerie.jpg" width="40" height="40" img style="float:left"><a href="#page61" align="center">Gloutonnerie </a></li>



			<li><img src="rest/GrutaEhden.jpg" width="40" height="40" img style="float:left"><a href="#page62" align="center">Gruta Ehden </a></li>



			<li><img src="rest/guadiana.jpg" width="40" height="40" img style="float:left"><a href="#page63" align="center">Guadiana</a></li>



			<li><img src="rest/Guria.jpg" width="40" height="40" img style="float:left"><a href="#page64" align="center">Guría </a></li>



			<li><img src="rest/Harrys.jpg" width="40" height="40" img style="float:left"><a href="#page65" align="center">Harry´s </a></li>



            <li><img src="rest/hosteria.jpg" width="40" height="40" img style="float:left"><a href="#page66" align="center">Hostería de Santo Domingo </a></li>



			<li><img src="rest/hunan.jpg" width="40" height="40" img style="float:left"><a href="#page67" align="center">Hunan </a></li>



			<li><img src="rest/J&Ggril.jpg" width="40" height="40" img style="float:left"><a href="#page68" align="center">J&G Grill </a></li>



			<li><img src="rest/jaleo.jpg" width="40" height="40" img style="float:left"><a href="#page69" align="center">Jaleo </a></li>



            <li><img src="rest/jaso.jpg" width="40" height="40" img style="float:left"><a href="#page135" align="center">Jaso </a></li>



			<li><img src="rest/jinsan.png" width="40" height="40" img style="float:left"><a href="#page70" align="center">Jin San Shabu </a></li>



			<li><img src="rest/Kaah.jpg" width="40" height="40" img style="float:left"><a href="#page71" align="center">Kaah Siis </a></li>



			<li><img src="rest/Losteria.jpg" width="40" height="40" img style="float:left"><a href="#page72" align="center">L´Osteria del Becco </a></li>



			<li><img src="rest/La_caserole.jpg" width="40" height="40" img style="float:left"><a href="#page73" align="center">La Casserole </a></li>



			<li><img src="rest/La_n_20.jpg" width="40" height="40" img style="float:left"><a href="#page74" align="center">La N° 20 </a></li>



			<li><img src="rest/la_taberna.jpg" width="40" height="40" img style="float:left"><a href="#page75" align="center">La Taberna del Chanclas </a></li>



            <li><img src="rest/La-Tbaerna-del-leon.jpg" width="40" height="40" img style="float:left"><a href="#page137" align="center">La Taberna del León </a></li>



            <li><img src="rest/LaTrainera.jpg" width="40" height="40" img style="float:left"><a href="#page76" align="center">La Trainera </a></li>



			<li><img src="rest/Lampuga.jpg" width="40" height="40" img style="float:left"><a href="#page77" align="center">Lampuga Bistrot </a></li>



			<li><img src="rest/LesMoustaches.png" width="40" height="40" img style="float:left"><a href="#page78" align="center">Les Moustaches </a></li>



			<li><img src="rest/limosneros.png" width="40" height="40" img style="float:left"><a href="#page79" align="center">Limosneros </a></li>



			<li><img src="rest/lincoln.png" width="40" height="40" img style="float:left"><a href="#page80" align="center">Lincoln </a></li>



            <li><img src="rest/litoral.png" width="40" height="40" img style="float:left"><a href="#page81" align="center">Litoral </a></li>



			<li><img src="rest/lomalinda.png" width="40" height="40" img style="float:left"><a href="#page82" align="center">Loma Linda </a></li>



			<li><img src="rest/losarcos.png" width="40" height="40" img style="float:left"><a href="#page83" align="center">Los Arcos</a></li>



			<li><img src="rest/loscanarios.png" width="40" height="40" img style="float:left"><a href="#page84" align="center">Los Canarios </a></li>



			<li><img src="rest/losgiras.png" width="40" height="40" img style="float:left"><a href="#page85" align="center">Los Girasoles </a></li>



			<li><img src="rest/maja.png" width="40" height="40" img style="float:left"><a href="#page86" align="center">Maja </a></li>



            <li><img src="rest/mardelz.png" width="40" height="40" img style="float:left"><a href="#page87" align="center">Mar del Zur </a></li>



			<li><img src="rest/marentino.png" width="40" height="40" img style="float:left"><a href="#page88" align="center">Marentino </a></li>



			<li><img src="rest/maximobis.png" width="40" height="40" img style="float:left"><a href="#page89" align="center">Maximo Bistrot Local </a></li>



			<li><img src="rest/mazurka.png" width="40" height="40" img style="float:left"><a href="#page90" align="center">Mazurca </a></li>



			<li><img src="rest/mercaderes.png" width="40" height="40" img style="float:left"><a href="#page91" align="center">Mercaderes </a></li>



            <li><img src="rest/merotoro.png" width="40" height="40" img style="float:left"><a href="#page92" align="center">Mero Toro </a></li>



			<li><img src="rest/mesonpc.png" width="40" height="40" img style="float:left"><a href="#page93" align="center">Mesón Puerto Chico</a></li>



			<li><img src="rest/mexsi.png" width="40" height="40" img style="float:left"><a href="#page94" align="center">Mexsi Bocu </a></li>



			<li><img src="rest/Mistral.jpg" width="40" height="40" img style="float:left"><a href="#page95" align="center">Mistral </a></li>



			<li><img src="rest/montecris.png" width="40" height="40" img style="float:left"><a href="#page96" align="center">Monte Cristo </a></li>



            <li><img src="rest/Mora.jpg" width="40" height="40" img style="float:left"><a href="#page97" align="center">Mora Blanca </a></li>



			<li><img src="rest/mortons.png" width="40" height="40" img style="float:left"><a href="#page98" align="center">Morton's the Stakhouse </a></li>



			<li><img src="rest/moustaches.png" width="40" height="40" img style="float:left"><a href="#page99" align="center">Moustaches Bistrot </a></li>



			<li><img src="rest/nagaoka.png" width="40" height="40" img style="float:left"><a href="#page100" align="center">Nagaoka </a></li>



            <li><img src="rest/nicksan.jpg" width="40" height="40" img style="float:left"><a href="#page138" align="center">Nick San </a></li>



			<li><img src="rest/nicos.png" width="40" height="40" img style="float:left"><a href="#page101" align="center">Nicos </a></li>



            <li><img src="rest/nobu.png" width="40" height="40" img style="float:left"><a href="#page102" align="center">Nobu </a></li>



			<li><img src="rest/novecento.png" width="40" height="40" img style="float:left"><a href="#page103" align="center">Novecento</a></li>



			<li><img src="rest/nueve.png" width="40" height="40" img style="float:left"><a href="#page104" align="center">Nueve Nueve Bistrot </a></li>



			<li><img src="rest/O2.png" width="40" height="40" img style="float:left"><a href="#page105" align="center">O2 Café </a></li>



			<li><img src="rest/olives.png" width="40" height="40" img style="float:left"><a href="#page106" align="center">Olives </a></li>



            <li><img src="rest/Osteria8.jpg" width="40" height="40" img style="float:left"><a href="#page107" align="center">Osteria 8 </a></li>



			<li><img src="rest/Padrinos.jpg" width="40" height="40" img style="float:left"><a href="#page108" align="center">Padrinos </a></li>



			<li><img src="rest/Paxia.jpg" width="40" height="40" img style="float:left"><a href="#page109" align="center">Paxia </a></li>



			<li><img src="rest/piantao.png" width="40" height="40" img style="float:left"><a href="#page110" align="center">Piantao </a></li>



			<li><img src="rest/porfirios.png" width="40" height="40" img style="float:left"><a href="#page111" align="center">Porfirios </a></li>



            <li><img src="rest/prime.png" width="40" height="40" img style="float:left"><a href="#page112" align="center">Prime House Steak & Food </a></li>



			<li><img src="rest/PuertaCa.jpg" width="40" height="40" img style="float:left"><a href="#page113" align="center">Puerta Torre de Castilla </a></li>



			<li><img src="rest/PuertoGe.jpg" width="40" height="40" img style="float:left"><a href="#page114" align="center">Puerta Getaria </a></li>



			<li><img src="rest/puertoma.png" width="40" height="40" img style="float:left"><a href="#page115" align="center">Puerto Madero </a></li>



			<li><img src="rest/pujol.png" width="40" height="40" img style="float:left"><a href="#page116" align="center">Pujol </a></li>



            <li><img src="rest/puntaar.png" width="40" height="40" img style="float:left"><a href="#page117" align="center">Punta Arena </a></li>



			<li><img src="rest/Quattro.jpg" width="40" height="40" img style="float:left"><a href="#page118" align="center">Quattro </a></li>



			<li><img src="rest/quintonil.png" width="40" height="40" img style="float:left"><a href="#page119" align="center">Quintonil </a></li>



			<li><img src="rest/Raiz.jpg" width="40" height="40" img style="float:left"><a href="#page120" align="center">Raíz </a></li>



			<li><img src="rest/rincona.png" width="40" height="40" img style="float:left"><a href="#page121" align="center">Rincón Argentino </a></li>



            <li><img src="rest/romita.png" width="40" height="40" img style="float:left"><a href="#page122" align="center">Romita Comedor </a></li>



			<li><img src="rest/roseta.png" width="40" height="40" img style="float:left"><a href="#page123" align="center">Rosetta </a></li>



			<li><img src="rest/sanangel.png" width="40" height="40" img style="float:left"><a href="#page124" align="center">San Ángel Inn </a></li>



            <li><img src="rest/sanborns.jpg" width="40" height="40" img style="float:left"><a href="#sanborns" align="center">Sanborns</a></li>



			<li><img src="rest/shu.png" width="40" height="40" img style="float:left"><a href="#page125" align="center">Shu </a></li>



			<li><img src="rest/sirw.png" width="40" height="40" img style="float:left"><a href="#page126" align="center">Sir Winston Churchill's </a></li>



            <li><img src="rest/spuntino.png" width="40" height="40" img style="float:left"><a href="#page127" align="center">Spuntino </a></li>



			<li><img src="rest/sud.png" width="40" height="40" img style="float:left"><a href="#page128" align="center">Sud 777 </a></li>



			<li><img src="rest/suntory.png" width="40" height="40" img style="float:left"><a href="#page129" align="center">Suntory </a></li>



            <li><img src="rest/tandoor.jpg" width="40" height="40" img style="float:left"><a href="#page139" align="center">Tandoor </a></li>



			<li><img src="rest/thecap.png" width="40" height="40" img style="float:left"><a href="#page130" align="center">The Capital Grille </a></li>



            <li><img src="rest/the-palm.jpg" width="40" height="40" img style="float:left"><a href="#page140" align="center">The Palm </a></li>



            <li><img src="rest/toritori.jpg" width="40" height="40" img style="float:left"><a href="#page141" align="center">Tori Tori </a></li>



            <li><img src="rest/toribi.jpg" width="40" height="40" img style="float:left"><a href="#page142" align="center">Torobi </a></li>



			<li><img src="rest/Villa.jpg" width="40" height="40" img style="float:left"><a href="#page131" align="center">Villa María </a></li>



            <li><img src="rest/vips.jpg" width="40" height="40" img style="float:left"><a href="#vips" align="center">Vips</a></li>



            <li><img src="rest/yoshimi.png" width="40" height="40" img style="float:left"><a href="#page132" align="center">Yoshimi </a></li>



			<li><img src="rest/zeru.png" width="40" height="40" img style="float:left"><a href="#page133" align="center">Zeru </a></li>



		</ul>		



	</div>



	<div data-role="footer" data-position="fixed">



   <div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



</div>



        <h4>Restaurants</h4>



	</div>



</div>







<!-- Marco Beteta-->



<div data-role="page" id="page3">



	<div data-role="header" align="center" data-position="fixed">



		 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <p>



    <a href="#page" data-role="button" data-mini="true" data-inline="true" data-theme="b">Regresar</a>



	</p>



	<div data-role="content">	



		<div>



        	<img src="Foto_home.jpg" width="100%">



        </div>



        <br>



Conoce las obras de arte de Marco <a href="http://marcobeteta.com.mx">aquí</a>.<br><br>        







Mexicano, empresario, artista plástico y sibarita. Su vida gira en torno al buen vivir, la gastronomía, el arte, los viajes y la cultura; explorando nuevas tendencias y experiencias en restaurantes, hoteles, spas y destinos, para recomendar y compartir con todos sus fans, followers y lectores.<br><br>







A través de los años sus guías de restaurantes y Spas; además de su implacable valoración de cada establecimiento y servicio lo han establecido como el referente más creíble del mercado mexicano.<br><br>







Su editorial expresa sus opiniones, recomendaciones y las sugerencias de su equipo de colaboradores; donde día a día realizan un seguimiento y descubrimiento de nuevos lugares donde disfrutar.<br><br>



        



	</div>		



	    



	<div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



		<h4>Marco Beteta</h4>



	</div>



</div>







<!--Promociones-->



<div data-role="page" id="page4">



	<div data-role="header" align="center" data-position="fixed">



		 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#page" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



      </tr>



    </table>



    <div data-role="content">



    



    <ul data-role="listview" data-inset="true">



     <li><a href="#page5e">



        <h2>Adonis</h2>



        <p>15% de descuento de lunes a jueves</p>



        <h3>Muestra esta promoción a tu mesero</h3></a>



    </li>



    <li><a href="#page6e">



        <h2>Agua y Sal</h2>



        <p>Botella de vino Terrazas minimo 4 comensales</p>



        <h3>Muestra esta promoción a tu mesero</h3></a>



    </li>



</ul>



	



    </div>



  <div>



     <img id="bg" src="fondoG.jpg" alt="Fondo" />



</div>



 	<div data-role="footer" data-position="fixed">



         	 <img id="bg2" src="footerlogo.png" height="68" />



	</div>



</div>











<!--Comentarios-->



<div data-role="page" id="page06">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a href="#page" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Adonis">



Email (opcional)<textarea name="Email" rows="1" cols="40"></textarea> Tu opinion<textarea name="comentario" rows="10" cols="50"></textarea> 



<input type="submit"  value="comentar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>







<!--Empiezan Restaurants-->



<!--Restaurant Adonis-->



<div data-role="page" id="page5">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa1" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/Adonis1.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Adonis </h4></div> <!--<a href="#page5e"><img src="icon2.png" width="35%"  img style="float:right"></a>--><br>



	<b>Cocina: Árabe</b>  <br>



    <a href="tel:55318081">Llamar</a><br/><br>    



    <div>



    <a href="#page5c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



	<a href="#page5a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page5b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page5d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.5</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.1</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font>



	<b>Costo promedio por persona:</b> $540<br><br>



	Hegel 205. Polanco. 5531 8081/6940



    



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page5d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Adonis">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>







<div data-role="page" id="page5a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa1" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page5a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		El servicio, la consistencia y la cálida personalidad de Rafat Hibrahim, su propietario, indudablemente han consolidado a este amplio feudo de atmósfera adulta como un clásico intemporal en su género. Sugiero pedir al centro para compartir, acompañando su comida con el tradicional Arak. El plus: surtida tienda gourmet, con comida para llevar.<br><br>



        



        <div align="center"><img src="rest/Adonis1.png" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      <div >



		<a href="#page5c">  <img src="Detalle3.png" width="27%"  img style="float:left"> </a>



		<a href="#page5a">  <img src="Detalle1.png" width="27%"  img style="float:right"> </a>



		<a href="#page5b">  <img src="Detalle2.png" width="27%"  class="displayed"> </a>



		</div>



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Adonis</h4>-->



		</div>



</div>







<div data-role="page" id="page5b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="markers.html" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa1" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page5b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Gente de oficina entre semana.<br>



Fines de semana en familia.<br>



Disfrutar un buen show de danza árabe viernes y sábados a partir de las 10 p.m.<br><br>



	<div align="center"><img src="rest/Adonis1.png" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        <div >



		<a href="#page5c">  <img src="Detalle3.png" width="27%"  img style="float:left"> </a>



		<a href="#page5a">  <img src="Detalle1.png" width="27%"  img style="float:right"> </a>



		<a href="#page5b">  <img src="Detalle2.png" width="27%"  class="displayed"> </a>



		</div>



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page5c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa1" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page5c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



		<br>



• Jocoque con pepino.<br>



• Kibbe crudo, bola y charola.<br>



• Tripas rellenas.<br>



• Sesos empanizados.<br>



• Pastel de nata con miel.<br><br>



						



     </div>   



     <div align="center"><img src="rest/Adonis1.png" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--<div data-role="page" id="page5e">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



    </div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa1" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



		<h1>Adonis</h1>



		<h2>15% de descuento de lunes a jueves.</h2><br>



		<div > <h3>Muestra esta promoción a tu mesero  </h3><br><br></div>



      </div>   



     <div align="center"><img src="rest/Adonis1.png" width="60%"></div>







	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



</div>-->







<!--Restaurant Agua y Sal-->



<div data-role="page" id="page6">



	<div data-role="header" align="center" data-position="fixed"> 



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa2" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/AguaySal.jpg" width="90%">



		</div>



		<div align ="center" ><h4>Agua y Sal</h4></div> <!--<a href="#page6e"><img src="icon2.png" width="35%" img style="float:right"></a>-->



    	<div>



	<b>Pescados y mariscos</b> <br><br>



    <a href="tel:52822746">Llamar</a><br/><br>



    



   	    <div>



    <a href="#page6c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



	<a href="#page6a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page6b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page6d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div><br><br><br>



	<b> Comida: </b> <font color="green"><strong>7.7</strong><br></font> 



	<b> Ambiente: </b> <font color="green"><strong>7.8</strong><br></font>



	<b> Servicio: </b>  <font color="green"> <strong>7.7</strong></font><br>



	<b>Costo promedio por persona:</b> $450<br><br>



	Campos Elíseos 199 A. Polanco. 5282 2746/5280 9520. Valet parking <br/>



	



    </div>                  



		<div data-role="footer" align="center" data-position="fixed">



		   <div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



		</div>



</div>



<div data-role="page" id="page6d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Agua y Sal">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>







<div data-role="page" id="page6a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa2" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page6a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Ubicado en el corredor hotelero de Polanco. Feudo amplio y fresco, cuya decoración es mezcla de estilo vintage y contemporáneo, logrando un aire hospitalario y original. Especializado en Cocina Latina del Mar, como ellos la llaman. Calidad en materias primas y platillos bien logrados de diferentes regiones latinoamericanas. El must: los cebiches. Buen costo tomando en cuenta la zona.<br>







        <div align="center"><img src="rest/AguaySal.jpg" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		</div>



</div>







<div data-role="page" id="page6b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa2" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page6b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Comidas de ejecutivos de la zona que buscan algo sencillo y sin pretensiones.<br>



Grupos de amigos para botanear y tomar unos drinks ya sea en la barra o en el comedor.<br><br>



	<div align="center"><img src="rest/AguaySal.jpg" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		</div>



</div>







<div data-role="page" id="page6c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa2" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page6c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                     <br>



• Variedad de cebiches (Acapulco, Agua y Sal, mixto, veracruzano, atún).<br>



• Pulpo al olivo.<br>



• Tacos de camarón.<br>



• Dorado a la diabla con mariscos.<br>



• Camarones almendrados.<br><br>



     </div>   



     <div align="center"><img src="rest/AguaySal.jpg" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>



<!--<div data-role="page" id="page6e">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



    </div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa2" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



		<h1>Agua y Sal</h1><br>



        <h2>Botella de vino Terraza minimo 4 comensales.</h2><br>



		<div > <h3>Muestra esta promoción a tu mesero  </h3><br><br></div>



      </div>   



     <div align="center"><img src="rest/AguaySal.jpg" width="100%"></div>



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



</div>-->



<!--Restaurant AL Andalus-->



<div data-role="page" id="page7">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa3" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<div align="center"><img src="rest/Al-Andalus.png" width="90%"></div>



		</div>



		<div align ="center" ><h4>Al Andalus</h4></div>



    	<div>



	<b>Cocina: Árabe</b><br>



    <a href="tel:55222562">Llamar</a> <br><br>



    <div>



    <a href="#page7c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



	<a href="#page7a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page7b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page7d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div><br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.7</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.0</strong><br></font>



	<b> Servicio: </b>   <font color="green"><strong>8.5</strong></font><br>



	<b>Costo promedio por persona:</b> $550<br><br>



	Mesones 171. Centro. 5522 2562/2528.  



	



    </div>                  



		<div data-role="footer" align="center" data-position="fixed">



		   <div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



		</div>



</div>



<div data-role="page" id="page7d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Al Andalus">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>







<div data-role="page" id="page7a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa3" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page7a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Tradicional, tranquilo y acogedor lugar que sigue manteniéndose en la preferencia de la mayoría de mis encuestados. El talento y la sazón de su propietario Mohamed Mazeh y de Jouseft, en los dulces, son la constante. Ambos están al frente del comedor del Club Libanés (buffet de platillos típicos e internacionales, primer miércoles y segundo domingo de cada mes). Vino libaneses Cave Kouroum y Arak.<br><br>







        <div align="center"><img src="rest/Al-Andalus.png" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		</div>



</div>







<div data-role="page" id="page7b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa3" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page7b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Desayunar (diariamente).<br>



Comer en terraza (ambas sucursales).<br>



Parrilladas y banquetes a domicilio (desde 50 hasta 1500 personas).<br>



	<div align="center"><img src="rest/Al-Andalus.png" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		</div>



</div>







<div data-role="page" id="page7c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa3" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page7c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                     <br>



• Kepe (tres variedades).<br>



• Pescado con tahine.<br>



• Parrillada (pescado, pollo shishtaouk, filete, cordero).<br>



• Shahuarmas (taco típico).<br>



• Pastel de dátil; empanadas de nata; café y dulces árabes.<br><br>



     </div>   



     <div align="center"><img src="rest/Al-Andalus.png" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>










<!--Restaurant Atalaya-->



<div data-role="page" id="page13">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa9" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img src="rest/Atalaya.jpg" width="90%">



		</div>



		<div align ="center" ><h4>Atalaya </h4></div>



    	<div>



	<b>Cocina: Internacional con acento Mexicano y Español</b><br>



    <a href="tel:52593636">Llamar</a> <br/><br>



    <div>



    <a href="#page13c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



	<a href="#page13a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page13b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page13d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div><br><br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.8</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.7</strong><br></font>



	<b> Servicio: </b> <font color="green"><strong>8.8</strong></font><br>



	<b>Costo promedio por persona:</b> $590<br><br>



	Prolongación de los Bosques de Reforma 181 (Centro Comercial Pabellón Bosques). Bosques de las lomas<br>



	5259 3636/2428/2423<br/>



	



    </div>                  



		   <div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



		</div>



</div>







<div data-role="page" id="page13a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa9" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page13a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		De lo mejor dentro de una zona carente de buenos restaurantes. Si bien el lugar es un poco frío, el ambiente es agradable. Servicio y cocina constante, de la escuela Prendes, caracterizada por ser honesta y fresca. No pierda de vista las sugerencias diarias. Aunque sus platillos son de corte casero, a veces el chef sorprende con viandas más complejas. Amplia cava a precios muy accesibles.<br><br>



        <div align="center"><img src="rest/Atalaya.jpg" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		</div>



</div>







<div data-role="page" id="page13b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa9" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page13b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Comidas de negocios entre semana; familiares fin de semana (NO menores de 10 años).<br> 



Cenas en pareja o grupos de amigos ,jueves a sábado, después de las 8 p.m., puede llevar su vino predilecto; (descorche gratis).<br><br>



	<div align="center"><img src="rest/Atalaya.jpg" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



  	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		</div>



</div>







<div data-role="page" id="page13c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa9" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page13c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                     <br>



• Sopecitos de camarones con chimole.<br>



• Filete Chemita.<br>



• Huachinanguito al carbón.<br>



• Pámpano a la sal.<br>



• Pastel de tres leches.<br><br>



     </div>   



     <div align="center"><img src="rest/Atalaya.jpg" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>



<div data-role="page" id="page13d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Atalaya">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>







<!--Restaurant Aud Pied de Cochon-->



<div data-role="page" id="page14">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa10" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/AuPieddeCochon.jpg" width="90%">



		</div>



		<div align ="center" ><h4>Au Pied de Cochon </h4></div>



    	<div>



	<b>Cocina: Francesa Auténtica</b><br>



    <a href="tel:53277756">Llamar</a> <br/><br>



    <div>



    <a href="#page14c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



	<a href="#page14a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page14b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page14d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div><br><br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.7</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.6</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.6</strong></font> <br>



	<b>Costo promedio por persona:</b> $690<br><br>



	Campos Elíseos 218 (Hotel Presidente InterContinental), Polanco. 5327 7756.<br><br>



	Juan Salvador Agraz 97 (Hotel Presidente InterContinental). Santa Fe. 1105 0180.<br>	



    </div>                  







		   <div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



		</div>



</div>







<div data-role="page" id="page14a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa10" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page14a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Por su ambiente sofisticado, confort, higiene, seguridad y servicio las 24 horas del día, mis encuestados lo consideran un must. De mis consentidos. Buenos festivales gastronómicos. Nueva sucursal en Santa Fe con un twist contemporáneo, mismo menú de especialidades y muy extensa carta de vinos. Veremos si tiene el mismo éxito que su predecesor, porque todavía no le llega.<br>







        <div align="center"><img src="rest/AuPieddeCochon.jpg" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		</div>



</div>







<div data-role="page" id="page14b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa10" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page14b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



	Cenar después de un concierto en el Auditorio Nacional en Polanco, o de una obra en el Teatro Banamex en Santa Fe.<br>



	Familias en fin de semana (área y menú infantil).<br>



	Noches de DJ (jueves a sábado a partir de las 9:00 p.m. Santa Fe).<br>



	Eventos, áreas privadas.<br><br>



	<div align="center"><img src="rest/AuPieddeCochon.jpg" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



  	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		</div>



</div>







<div data-role="page" id="page14c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa10" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page14c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                     <br>



• Sopa de cebolla; Foie gras de pato.<br>



• Cazuela de mejillones; Caracoles de Borgoña.<br>



• Costillas de cordero; Confit de pato.<br>



• Bizcocho de chocolate; Tarta de manzana; Mil hojas.<br><br>



     </div>   



     <div align="center"><img src="rest/AuPieddeCochon.jpg" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>



<div data-role="page" id="page15d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Au Pied de Cochon">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>







<!--Restaurant Azul hist-->



<div data-role="page" id="page15d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Azul Histórico">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page15">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa11" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/AZULhist.tif" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Azul Hístorico </h4></div>



	<b>Cocina: Mexicana</b>  <br>



    <a href="tel:55101316">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page15c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page15a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page15b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page15d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>9.0</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.7</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.7</strong><br></font>



	<b>C.P.P</b> $380<br><br>



	Azul Histórico: Isabel la Católica 30. Centro. 5510 1316/5521 3295. Valet parking.<br><br>



	Azul Condesa: Nuevo León 68. Condesa. 5286 6380/6228.<br><br>



	Azul y Oro: Centro Cultural Universitario y Torre de Ingeniería. Ciudad Universitaria. 5622 7135/5623 3500. Ext. 1065.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page15a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa11" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page15a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		La más reciente apertura de Ricardo Muñoz Zurita, "su majestad". Ambientación contemporánea en pintoresco y acogedor patio al interior de un antiguo palacio colonial. Digna opción en el Centro Histórico para degustar la característica sazón de este célebre chef, así como las especialidades clásicas de sus feudos antecesores (Azul y Oro, Azul Condesa) y sus memorables festivales gastronómicos. Excelente costo-beneficio. Moles must.<br><br>



        



        <div align="center"><img src="rest/AZULhist.tif" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Azul Histórico</h4>-->



		</div>



</div>







<div data-role="page" id="page15b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa11" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page15b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



	Familias y amigos.<br>



	Desayunar y pasear después por el Centro.<br>



	Tarde de drinks probando mezcales y vinos mexicanos en agradable patio.<br><br>



	<div align="center"><img src="rest/AZULhist.tif" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



  	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page15c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa11" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page15c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                     <br>



• Tamal de frijol.<br>



• Auténtico salpicón de venado.<br>



• Buñuelos de pato en mole negro ¡must!<br>



• Cochinita pibil.<br>



• Pastel de mamey; Chocolate de agua.<br><br>



						



     </div>   



     <div align="center"><img src="rest/AZULhist.tif" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>





<!--Restaurant Bros Oyster-->



<div data-role="page" id="page28d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Cambalache">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page28">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="markers.html" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>




      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/cambalache.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Cambalache</h4></div>



	 <br>



    <a href="tel:6268 6094">Llamar tel:6268 6094</a><br/><br>



    <br>



    <div>



    



    <br><br><br>



   



    </div>



    </div> <br><br><br>



	



	<b>costo platillo</b> $650<br><br>



	Alejandro Dumas 122. Polanco. 6268 6094.<br><br>



    Av. San Jerónimo 263 (Plaza Escenaria). Tizapán San Ángel. 5550 8737.<br><br>



    Insurgentes Sur 1384. Del Valle. 5534 5858.<br><br>



    Norte 45 N° 902. Industrial Vallejo. 5567 2209. Valet parking.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page28a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa24" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page28a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Feudos operados seriamente. Más de 25 años ofreciendo a sus leales comensales calidad y consistencia en sus materias primas. Porciones generosas con la sazón tradicional argentina. Acogedores. Para muchos de mis encuestados el precio es alto pero vale la pena. Carta de vinos a la altura. Servicio profesional. Nueva exitosa ubicación en Polanco.<br><br>



        



        <div align="center"><img src="rest/BrosOyster.jpg" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Cambalache</h4>-->



		</div>



</div>







<div data-role="page" id="page28b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa24" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page28b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Comidas de negocios, parejas y amigos, entre semana; familias en fin de semana.<br>



Ocasiones especiales; cenas románticas.<br>



Fumadores.<br><br>



	<div align="center"><img src="rest/cambalache.jpg" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page28c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa24" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page28c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                       <br>



• Arrollado de espinacas; Empanadas; Jugo de carne.<br>



• Parrillada; Bife de chorizo.<br>



• Bife de atún; Cordero a la leña.<br>



• Strudel de manzana; Alfajor.<br><br>



						



     </div>   



     <div align="center"><img src="rest/cambalache.jpg" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>





<!--Restaurant Carolo-->



<div data-role="page" id="page30d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Carolo">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page30">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa26" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/carolo.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Carolo </h4></div>



	<b>Cocina: Mediterránea Contemporánea</b>  <br>



    <a href="tel:2591 8114">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page30c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page30a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page30b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page30d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.2</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.3</strong><br></font>



	<b>C.P.P</b> $540<br><br>



	Secretaría de Marina 445. Lomas de Chamizal. 2591 8114/8115.<br><br>



Cervantes Saavedra 303 (Plaza Carso). Polanco. 4976 0134/0135.<br><br>



Vialidad de la Barranca 6. Huixquilucan. 5290 8198/2090 7215.<br><br>



Juan Salvador Agraz 44. Santa Fe. 1664 6068/69.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page30a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa26" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page30a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Restaurantes contemporáneos que han sabido expandirse sumando dos nuevos espacios en Centro Comercial Paseo Interlomas y Santa Fe. Cocina fresca, sabrosa, con gran personalidad. Relajado y moderno ambiente. Amigable servicio. Variada carta de vinos y coctelería. Tienda gourmet de altura y rica panadería (panques must). Terraza.<br><br>



        



        <div align="center"><img src="rest/carolo.jpg" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Carolo</h4>-->



		</div>



</div>







<div data-role="page" id="page30b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa26" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page30b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Desayunos <br>



Ejecutivos, grupos de amigas, familias (desayunos hasta cena, Bosques).<br>



Comida, tarde de drinks o cena en parejas y grupos de amigos (Interlomas y Santa Fe, agradables terrazas).<br><br>



	<div align="center"><img src="rest/carolo.jpg" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page30c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa26" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page30c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                       <br>



• Tostadas orientales con tártara de atún.<br>



• Sopa de alcachofa con aceite de trufa.<br>



• Lasaña verde.<br>



• French dip de Roast Beef y Gruyère.<br>



• Salmón sobre cedro al horno.<br>



• Tarta de higos; Sticky Toffee.<br><br>



						



     </div>   



     <div align="center"><img src="rest/carolo.jpg" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>





<!--Restaurant Casino Español-->



<div data-role="page" id="page34d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Casino español">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page34">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa30" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/Casino.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Casino Español</h4></div>



	<b>Cocina: Española</b>  <br>



    <a href="tel:5521 8894">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page34c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page34a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page34b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page34d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.4</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.0</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font>



	<b>C.P.P</b> $720<br><br>



	Isabel La Católica 29. Centro Histórico. 5521 8894. Valet parking.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page34a">



	<div data-role="header" align="center" data-position="fixed"> 



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa30" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page34a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Por este lugar no pasan los años. Tradicional cocina ibérica bien lograda, al interior de un inmueble impecablemente conservado de principios del siglo XX (destacan sus vitrales), edificado como centro de reunión de la alta sociedad hispana en México. Conocedor y respetuoso servicio. El único pero: la carta de vinos, bastante convencional. Muy buen sitio en Centro Historico.<br><br>



        



        <div align="center"><img src="rest/Casino.jpg" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Casino Español</h4>-->



		</div>



</div>







<div data-role="page" id="page34b">



	<div data-role="header" align="center" data-position="fixed"> 



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa30" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page34b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Desayunos de empresarios (diariamente).<br>



Comidas de familias que gustan del abolengo de la zona (estancia infantil fines de semana).<br>



Eventos o celebraciones especiales (amplios salones).<br><br>



	<div align="center"><img src="rest/Casino.jpg" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page34c">



	<div data-role="header" align="center" data-position="fixed"> 



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa30" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page34c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                       <br>



• Fabada.<br>



• Sopa de cocido; Caldo gallego.<br>



• Lechón; Paella.<br>



• Pescado marea negra.<br>



• Helado de turrón; Leche frita.<br><br>



						



     </div>   



     <div align="center"><img src="rest/Casino.jpg" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>





<!--Restaurant Centro Castellano-->



<div data-role="page" id="page36d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Centro Castellano">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page36">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa32" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/centrocastellano.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Centro Castellano</h4></div>



	<b>Cocina: Española con énfasis en mariscos</b>  <br>



    <a href="tel:5518 2937">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page36c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page36a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page36b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page36d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.6</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.5</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.7</strong><br></font>



	<b>C.P.P</b> $680<br><br>



	Uruguay 16. Centro Histórico. 5518 2937. Sin valet parking, ni estacionamiento.<br><br>



Mariano Escobedo 700 (Hotel Camino Real). Anzures. 5531 7185. Estacionamiento.<br><br>



Blvd. Ávila Camacho 1960. Satélite. 6273 2029.<br><br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page36a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa32" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page36a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Probada fórmula de expansión que estrena sucursal en Satélite, conservando la ambientación y personalidad característica de los feudos de Grupo Castellano y su concepto original: ofrecer clásica gastronomía ibérica de calidad con profesionalismo. Tenga en mente las sugerencias diarias. Surtida carta de vinos. Servicio capacitado.<br><br>



        



        <div align="center"><img src="rest/centrocastellano.jpg" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Centro Castellano</h4>-->



		</div>



</div>







<div data-role="page" id="page36b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa32" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page36b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Empresarios en plan casual (entre semana).<br>



Familias en fin de semana (los niños no pagan; servicio de guardería).<br>



Puro y digestivo en la terraza.<br><br>



	<div align="center"><img src="rest/centrocastellano.jpg" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page36c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa32" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page36c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



                                       <br>



• Croquetas de jamón.<br>



• Huevos rotos con jamón ibérico.<br>



• Paella valenciana.<br>



• Lechón asado estilo Segovia.<br>



• Arroz con leche caramelizado; Pastel castellano.<br><br>



						



     </div>   



     <div align="center"><img src="rest/centrocastellano.jpg" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>




<!--Restaurant Danubio-->



<div data-role="page" id="page44d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Danubio">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page44">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa40" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div align="center">



		<img src="rest/danubio.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Danubio </h4></div>



	<b>Cocina: Internacional, Especialidad en mariscos</b>  <br>



    <a href="tel:5521 0976">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page44c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page44a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page44b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page44d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.0</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.3</strong><br></font>



	<b>C.P.P</b> $680<br><br>



	Uruguay 3. Centro Histórico. 5521 0976/5512 0912<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page44a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa40" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page44a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	A lo largo de más de 75 años ha superado toda clase de críticas y comentarios, manteniendo prácticamente intacto su estilo conservador y tradicional. Muchos sibaritas y mis mistery fooders continúan diciendo que aquí se sirven los mejores langostinos al mojo de ajo y sopa verde en la ciudad. Servicio rutinario, buena sazón. <br>



        



        <div align="center"><img src="rest/danubio.jpg" width="60%"></div>



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Danubio</h4>-->



		</div>



</div>







<div data-role="page" id="page44b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa40" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page44b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>



Familias o grupos de amigos en ambiente cómodo, tranquilo y clásico.<br>



Comer bien sin gastar mucho (menú de 5 tiempos; lunes a domingo de 1 a 6 de la tarde, costo entre $190 y $200).<br>



	<div align="center"><img src="rest/danubio.jpg" width="60%"></div>



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page44c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa40" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page44c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Cazuela de mariscos a la bilbaína.<br>• Sopa verde de pescados y mariscos, must.<br>• Langostinos al ajillo.<br>• Filete de robalo estilo Besugo Olivo.<br>• Pasteles de La Vasca.<br>



						



     </div>   



     <div align="center"><img src="rest/danubio.jpg" width="60%"></div>



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>





<!--Restaurant El Bajio-->



<div data-role="page" id="page50d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="El bajio">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page50">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa46" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/elbajio.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>El Bajio </h4></div>



	<b>Cocina: Tradicional Mexicana con fuerte matiz Veracruzano</b>  <br>



    <a href="tel:5281 8245">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page50c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page50a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page50b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page50d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br>



	<b> Comida: </b> <font color="green"><strong>8.5</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.2</strong><br></font>



	<b>C.P.P</b> $430<br><br>



	Alejandro Dumas 7. Polanco. 5281 8245.<br><br>Cuitláhuac 2709. Azcapotzalco. 5234 3763.<br><br>Parque Delta. Narvarte. 5519 7073.<br><br>Colector 13 N° 280. Lindavista. 5119 1959.<br><br>Canal de Tezontle 1512. Alfonso Ortiz Tirado. 9129 0059.<br><br>Guillermo González Camarena 200. Santa Fe. 5292 5717.<br><br>Acoxpa 430. Ex Hacienda Coapa. 5679 1801.<br><br>Insurgentes Sur 800. Del Valle. 5543 1037.<br><br>Vialidad de la Barranca No. 6. Huixquilucan. 5290 6613.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page50a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa46" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page50a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Sin sacrificar la esencia de su casa matriz, esta típica fonda continúa su acertada expansión con la apertura de nueva sucursal en Centro Comercial Paseo Interlomas. Carmen "Titita" Ramírez Degollado y su equipo de legendarias mayoras son ejemplo de trabajo, tenacidad, constancia y calidad por ofrecer en todas sus sucursales antojitos mexicanos. <br>



        



        <img class="displayed" src="rest/elbajio.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>El Bajio</h4>-->



		</div>



</div>







<div data-role="page" id="page50b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa46" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page50b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



	<br>Desayunos tradicionales: Molletes; Chilaquiles, Tamales y Antojitos veracruzanos (todas las sucursales).<br>Cualquier tipo de ocasión en ambiente informal y familiar.<br>



	<img class="displayed" src="rest/elbajio.jpg" width="60%">		



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page50c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa46" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page50c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>







• Carnitas<br>• Caldo Xóchitl; Sopa de médula.<br>• Tacos de jaiba estilo Xico; Mole de olla.<br>• Capirotada.<br>



						



     </div>   



     <img class="displayed" src="rest/elbajio.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant El Cardenal-->



<div data-role="page" id="page51d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="El cardenal">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked"  />



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />



         	<label for="radio-choice-2">6</label>







         	<input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="radio-choice-1" id="radio-choice-5" value="choice-5"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="radio-choice-1" id="radio-choice-6" value="choice-6"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="choice-1" checked="checked" />



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="choice-2"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="choice-3"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="choice-4"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="choice-5"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="choice-6"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="choice-1" checked="checked" />



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="choice-2"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="choice-3"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="choice-4"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="choice-5"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="choice-6"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page51">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa47" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/elcardenal.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>El Cardenal</h4></div>



	<b>Cocina: Mexicana Tradicional</b>  <br>



    <a href="tel:5616 6124">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page51c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page51a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page51b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page51d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br>



	<b> Comida: </b> <font color="green"><strong>8.8</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.2</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font>



	<b>C.P.P</b> $610<br><br>



	Av. de la Paz 32. San Ángel. 5616 6124/7067.<br><br>Juárez 70 (Hotel Sheraton). Centro. 5518 6632.<br><br>Palma 23. Centro. 5521 8815 al 17.<br><br>Palmas 215. Lomas de Chapultepec. 2623 0401 al 03.<br><br><br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page51a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa47" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page51a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Impecables, cómodos, amplios y muy concurridos feudos. Los Briz son ejemplo de exitosa restauración, dedicación y amor por las clásicas recetas de nuestra gastronomía. Platillos de auténticos sabores ejecutados con precisión y profesionalismo. Materia primas, servicio y panadería de primera, constantes en todas sus sucursales.<br>



        



        <img class="displayed" src="rest/elcardenal.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>El Cardenal</h4>-->



		</div>



</div>







<div data-role="page" id="page51b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa47" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page51b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



	<br>Desayunar, un must (Huevos tierra caliente; Chilaquiles; Gorditas hidalguenses; Conchas con nata, chocolate.<br>Comer en ambiente político y empresarial entre semana.<br>Familias en fin de semana.<br>



	<img class="displayed" src="rest/elcardenal.jpg" width="60%">		



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page51c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa47" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page51c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Mixiote de flores de maguey con escamoles.<br>• Chile relleno a la oaxaqueña.<br>• Pecho de ternera.<br>• Espaldilla de cordero en barbacoa.<br>• Panqué de elote.<br>



						



     </div>   



     <img class="displayed" src="rest/elcardenal.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>



<!--Restaurant Gruta Ehden-->



<div data-role="page" id="page62d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Gruta Ehden">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page62">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa58" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/GrutaEhden.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Gruta Ehden</h4></div>



	<b>Cocina: Libanesa</b>  <br>



    <a href="tel:5661 1994">Llamar</a><br/>



    <br>



    <div>



    <a href="#page62c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page62a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page62b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page62d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.7</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font>



	<b>C.P.P</b> $610<br><br>



	Pino 69. Florida. 5661 1994.<br>Lope de Vega 334. Polanco. 5545 0755. Valet parking.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page62a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa58" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page62a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Gran clásico en este tipo de cocina. Tradicional sazón casero, con mucha personalidad; mezcla de sabores frescos y ligeros con robustos y fuertes. Sugiero pedir varios platillos para compartir, acompañándolos con Arak. Ricos desayunos. Servicio consentidor. Atinada idea la de incluir terraza en sucursal del sur.<br>



        <img class="displayed" src="rest/GrutaEhden.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Gruta Ehden</h4>-->



		</div>



</div>







<div data-role="page" id="page62b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa58" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page62b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Desayunar o comer en ambiente cómodo y tranquilo.<br>Servicio de banquetes y pedidos a domicilio.<br>Fumadores (Polanco).<br>



	<img class="displayed" src="rest/GrutaEhden.jpg" width="60%">		



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page62c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa58" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page62c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>Huevos en cazuela.<br>



Shish Taouk (pollo con ajo, must).<br>



Kepe crudo o charola.<br>



Tripas y panza de carnero.<br>



Costilla de carnero rellena.<br>



Knefe de nata.<br>



     </div>   



     <img class="displayed" src="rest/GrutaEhden.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant Guadiana-->



<div data-role="page" id="page63d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Guadiana">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page63">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa59" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/guadiana.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Guadiana</h4></div>



	<b>Cocina: Mexicana</b>  <br>



    <a href="tel:5572 8663">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page63c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page63a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page63b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page63d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> No se califica por que el autor es el fundador</b><br>



	<b>C.P.P</b> $620<br><br>



	Circuito Novelistas 6. Satélite. 5572 8663.<br><br>



    Palmas 810. Lomas. 5520 6685/5202 2801. Valet parking y estacionamiento.<br><br>



    Pedro Luis Ogazón 102 Álvaro Obregón, 01020 Distrito Federal, México +52 55 5662 6819<br><br>



    Guillermo González Camarena. Santa Fe. 5292 6495<br>



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page63a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa59" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page63a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Tradicionales sabores mexicanos con acentos contemporáneos y especialidades semanales de temporada bajo la dirección de la Chef Mónica Beteta. Seriedad, constancia, servicio personalizado y precios razonables con el sello característico de grupo Hunan-Guadiana. Terraza con chimenea o área para fumar en todas las sucursales.<br>



        <img class="displayed" src="rest/guadiana.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Guadiana</h4>-->



		</div>



</div>







<div data-role="page" id="page63b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa59" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page63b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comidas y cenas de amigos, parejas o negocios (adulto contemporáneo).<br>Brunch mexicano sábados y domingos (Satélite).<br>Familias en fin de semana.<br>



	<img class="displayed" src="rest/guadiana.jpg" width="60%">		



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page63c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa59" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page63c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Tacos de paillard o chicharrón prensado.<br>• Fideo seco a los tres chiles; Caldo de frijol Guadiana.<br>• Filete Don Pepe.<br>• Albóndigas de pollo en chile morita.<br>• Pastel de elote.<br>



     </div>   



     <img class="displayed" src="rest/guadiana.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>





<!--Restaurant Hosteria Santo Domingo-->



<div data-role="page" id="page66d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Hosteria Santo Domingo">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page66">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa62" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/hosteria.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Hosteria Santo Domingo</h4></div>



	<b>Cocina: Tradicional Mexicana</b>  <br>



    <a href="tel:5526 5276">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page66c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page66a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page66b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page66d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>7.5</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.5</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.2</strong><br></font>



	<b>C.P.P</b> $430<br><br>



	Belisario Domínguez 70. Centro. 5526 5276/5540 1434. Valet parking y estacionamiento.<br>



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page66a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa62" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page66a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Célebre feudo con más de siglo y medio de existencia que se jacta de servir, todo el año, de los mejores chiles en nogada; algo en lo que mis encuestados coinciden. Frecuentado por clientela variopinta que comparte el gusto por nuestra tradicional gastronomía sin mayores pretensiones. Buena relación precio-calidad. Inconstante en ocaciones.<br>



        <img class="displayed" src="rest/hosteria.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Hosteria</h4>-->



		</div>



</div>







<div data-role="page" id="page66b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa62" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page66b"><img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Familias o gente de negocios en ambiente casual típico mexicano.<br>Desayunos todos los días.<br>Buffet dominical (9 a.m. a 12:30 p.m.; $130 adultos, $80 niños).<br>Eventos privados (varios salones).<br>



	<img class="displayed" src="rest/hosteria.jpg" width="60%">		



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page66c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa62" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page66c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Migas de pan o tortilla.<br>• Puchero de res.<br>• Pechuga ranchera en nata.<br>• Filete especial con papas o al pastor.<br>• Postres mexicanos.<br>



     </div>   



     <img class="displayed" src="rest/hosteria.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>



<!--Restaurant L' Osteria del Becco-->



<div data-role="page" id="page72d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="L' Osteria del Becco">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page72">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa68" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/Losteria.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>L'Osteria del Becco</h4></div>



	<b>Cocina: Italiana Tradicional con acento Contemporáneo</b>  <br>



    <a href="tel:5282 1059">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page72c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page72a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page72b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page72d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.6</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.8</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.3</strong><br></font>



	<b>C.P.P</b> $730<br><br>



	Goldsmith 103. Polanco. 5282 1059/5280 6657.<br>



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page72a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa68" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page72a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	La cava, en su mayoría etiquetas italianas, y las pastas que sugiero son los mayores aciertos de este feudo, calificado por mis encuestados como uno de sus consentidos en Polanco. Aunque mis mistery fooders coinciden en que la relación precio-calidad deja mucho que desear. Pregunte por los especiales en temporada de trufa. Un high class con gente bonita.<br>



        <img class="displayed" src="rest/Losteria.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>L' Osteria del Becco</h4>-->



		</div>



</div>







<div data-role="page" id="page72b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa68" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page72b"><img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Adultos jóvenes pudientes que gustan de ver y ser vistos en ambiente trendy.<br>Fumadores (terraza ideal).<br>Servicio de catering a domicilio (Becco in Casa).<br>



	<img class="displayed" src="rest/Losteria.jpg" width="60%">		



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page72c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa68" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page72c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Pulpo in umido.<br>• Bavette con almeja fresca del Pacífico y vino blanco.<br>• Ravioles rellenos de burrata y carpaccio de trufa negra.<br>• Risotto con paté de foie gras.<br>• Baba al rhum con crema pastelera.<br>



     </div>   



     <img class="displayed" src="rest/Losteria.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant La Casserole-->



<div data-role="page" id="page73d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="La Casserole">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page73">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa69" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/La_caserole.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>La Casserole</h4></div>



	<b>Cocina: Francesa</b>  <br>



    <a href="tel:5661 4654">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page73c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page73a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page73b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page73d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.2</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.3</strong><br></font>



	<b>C.P.P</b> $630<br><br>



	Insurgentes Sur 1880. Florida. 5661 4654/5152. Valet parking y estacionamiento.<br>



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page73a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa69" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page73a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	A pesar de que para algunos resulta pasado de moda, es innegable que más de cuatro décadas ofreciendo buena gastronomía lo dicen todo. Clásico y conservador. Ambiente campirano europeo; adultos principalmente. Escargots, fondues y Chateaubriand: especialidades estelares de su menú que no deben pasarse por alto. Servicio conocedor.<br>



        <img class="displayed" src="rest/La_caserole.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>La Casserole</h4>-->



		</div>



</div>







<div data-role="page" id="page73b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa69" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page73b"><img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Desayunos (Lengua: imperdonable).<br>Comidas o cenas tranquilas en parejas, familias, empresarios o políticos.<br>



	<img class="displayed" src="rest/La_caserole.jpg" width="60%">		



                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page73c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa69" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page73c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Lengua molcajeteada.<br>• Coq au vin.<br>• Pámpano a la sal.<br>• Fondue suizo (tradicional de cuatro quesos).<br>• Crepas Suzette; Cerezas jubilée.<br>



     </div>   



     <img class="displayed" src="rest/La_caserole.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>




<!--Restaurant Limosneros-->



<div data-role="page" id="page79d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Limosneros">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked"  />



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="radio-choice-1" id="radio-choice-5" value="choice-5"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="radio-choice-1" id="radio-choice-6" value="choice-6"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="choice-1" checked="checked" />



         	<label for="servicioComida1">5</label>







         	<input type="radio" name="servicioComida1" id="servicioComida2" value="choice-2"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="choice-3"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="choice-4"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="choice-5"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="choice-6"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="choice-1" checked="checked" />



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="choice-2"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="choice-3"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="choice-4"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="choice-5"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="choice-6"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page79">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa75" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/limosneros.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Limosneros</h4></div>



	<b>Cocina: Mexicana Contemporánea</b>  <br>



    <a href="tel:5521 5576">Llamar</a><br/>



    <br>



    <div>



    <a href="#page79c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page79a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page79b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page79d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> No se califica por ser de reciente apertura </b> <br>



	<b>C.P.P</b> $450<br><br>



	Allende 3. Centro Histórico. 5521 5576. Valet parking.<br>



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page79a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa75" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page79a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



	Heredero del tradicional Café Tacuba, al interior de un inmueble colonial excepcionalmente restaurado y decorado con detalles de fina artesanía mexicana y antigüedades. Da gusto ver cómo esta clase de conceptos va expandiéndose para dignificar al Centro Histórico. Platillos con sazón, bien presentados. Promoción de vinos mexicanos, cervezas y mezcales artesanales. Panadería casera. Terraza. Un nuevo Must.<br>



        <img class="displayed" src="rest/limosneros.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Limosneros</h4>-->



		</div>



</div>







<div data-role="page" id="page79b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa75" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page79b"><img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comidas y cenas de empresarios, parejas, grupos de amigos, turistas.<br>Desayunar en fin de semana y dar un paseo por el centro.<br>



	<img class="displayed" src="rest/limosneros.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page79c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa75" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page79c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Sopa de quelites.<br>• Calamares enfrijolados.<br>• Crema divorciada de dos frijoles.<br>• Mixiote de carnero.<br>• Muéganos rellenos.<br>



     </div>   



     <img class="displayed" src="rest/limosneros.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>





<!--Restaurant Loma Linda-->



<div data-role="page" id="page82d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Loma linda">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page82">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa78" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/lomalinda.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Loma Linda</h4></div>



	<b>Carnes</b>  <br>



    <a href="tel:5520 8140">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page82c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page82a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page82b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page82d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.4</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.6</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font>



	<b>C.P.P</b> $730<br><br>



    Paseo de La Reforma 1105 Lomas de Chapultepec, Miguel Hidalgo, 11000 Ciudad de México, Distrito Federal 01 55 5520 0024<br><br>



	Cervantes Saavedra 303 (Plaza Carso). 5520 8140.<br><br>



    Vialidad de la Barranca 6. Huixquilucan 3605 0049/0921<br>



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page82a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa78" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page82a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Cortes de calidad certificada Angus, Kobe y Kosher en un sabroso concepto que sigue creciendo tras la apertura de nueva sucursal en Centro Comercial Paseo Interlomas. Aunque coincido con mis mistery fooders en que la sazón del original es irrepetible, el animado ambiente de las terrazas en Lomas y Plaza Carso es uno de sus grandes atractivos. Espero que el éxito no los maree y sacrifiquen calidad por dinero.<br>



        <img class="displayed" src="rest/lomalinda.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Loma Linda</h4>-->



		</div>



</div>







<div data-role="page" id="page82b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa78" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page82b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Desayunos de negocios o entre amigas (Lomas).<br>Reunirse en grupos grandes de amigos o guerreros y guerreras en las terrazas.<br>Plan familiar con niños en fin de semana (área infantil).<br>



	<img class="displayed" src="rest/lomalinda.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page82c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa78" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page82c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Empanadas de carne; Queso fundido.<br>• Machitos fritos, salsa arriera.<br>• Lomo crudo en medallones.<br>• Ojo de bife.<br>• Crepas con cajeta.<br> <br>Paseo de la Reforma 1105. Lomas de Chapultepec. 5540 1209/5520 0024/6759.<br>



     </div>   



     <img class="displayed" src="rest/lomalinda.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant Los Arcos-->



<div data-role="page" id="page83d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Los arcos">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page83">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa79" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/losarcos.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Los Arcos </h4></div>



	<b>Pescados y mariscos</b>  <br>



    <a href="tel:5254 5624">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page83c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page83a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page83b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page83d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.3</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.7</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.2</strong><br></font>



	<b>C.P.P</b> $540<br><br>



	Torcuato Tasso 330. Polanco. 5254 5624/5531 9696.<br><br>



    Insurgentes Sur 1390. Actipan. 5524 4232.<br><br>



    Periférico Ávila Camacho 2150. Satélite. 5562 1953.<br><br>



    Liverpool 104. Zona Rosa. 5525 4408.<br><br>



    San Jerónimo 215. San Jerónimo. 5616 6313.<br>



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page83a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa79" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page83a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		De las más serias cadenas restauranteras del país. 15 años consintiendo a comensales defeños con sencillez, frescura y sazón características de las costas y fondas sinaloenses. Camarones aguachile y Tacos gobernador: los estelares de la casa. Eficaz servicio. Tragos servidos sin miseria.<br>



        <img class="displayed" src="rest/losarcos.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Los Arcos</h4>-->



		</div>



</div>







<div data-role="page" id="page83b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa79" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page83b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comer con amigos entre semana en ambiente informal (música en vivo jueves y viernes).<br>Reunirse entre cuates, echándose unas copas y viendo eventos deportivos en televisión.<br>Comidas familiares en fin de semana (actividades para niños).<br>



	<img class="displayed" src="rest/losarcos.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page83c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa79" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page83c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Callo de hacha, ostiones, almejas naturales.<br>• Tostadas de ceviche.<br>• Pescado zarandeado.<br>• Pay de plátano; Pastel tres leches; Flameados.<br>



     </div>   



     <img class="displayed" src="rest/losarcos.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>






<!--Restaurant Los Girasoles-->



<div data-role="page" id="page85d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Los girasoles">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page85">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa81" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/losgiras.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Los Girasoles</h4></div>



	<b>Alta cocina Mexicana</b>  <br>



    <a href="tel:5280 0630">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page85c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page85a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page85b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page85d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.0</strong><br></font>



	<b>C.P.P</b> $530<br><br>



	Tacuba 8-A (frente Plaza Tolsá). Centro Histórico. 5510 0630/32 81.<br>Valet parking, valet para bicicletas y estacionamiento.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page85a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa81" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page85a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Agradable y espacioso lugar que merece la pena por su ubicación y vista desde la terraza hacia la Plaza Tolsá y los históricos inmuebles cercanos. Atendido por la carismática Alexis Warman, uno de sus propietarios. Depurado menú; platillos mexicanos tradicionales con twist contemporáneo. Buen costo-beneficio.<br>



        <img class="displayed" src="rest/losgiras.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Los Canarios</h4>-->



		</div>



</div>







<div data-role="page" id="page85b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa81" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page85b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comidas de ejecutivos de la zona.<br>Compromisos románticos.<br>Visitantes del Centro Histórico y turistas.<br>Disfrutar del brunch dominical.<br>



	<img class="displayed" src="rest/losgiras.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page85c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa81" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page85c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Mosaico azteca (chapulines, gusanos de maguey y escamoles).<br>• Tacos rebozados de pescado.<br>• Crema de pistache.<br>• Chile de la moneda (chile ancho, picadillo, frutos secos).<br>• Filete de huachinango empanizado con huauzontle.<br>• Pay de pétalos de rosa; Pastel de elote.<br>



     </div>   



     <img class="displayed" src="rest/losgiras.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>





<!--Restaurant Mazurka-->



<div data-role="page" id="page90d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Mazurca">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page90">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa86" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/mazurka.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Mazurca</h4></div>



	<b>Cocina: Polaca</b>  <br>



    <a href="tel:5523 8811">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page90c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page90a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page90b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page90d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.6</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.7</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font>



	<b>C.P.P</b> $680<br><br>



	Nueva York 150. Nápoles. 5523 8811/5543 4509. Valet parking.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page90a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa86" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page90a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		La insistencia en la sazón de sus platillos y su servicio lo mantienen como predilecto de mis encuestados, considerándolo el representante más notable de ésta gastronomía. Aunque su ubicación no le favorece demasiado, es definitivamente "el lugar" para comer el mejor ganso y sopa de betabel de la ciudad.Vodka Zubrowka helado ¡un must!<br>



        <img class="displayed" src="rest/mazurka.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Maximo Bistrot</h4>-->



		</div>



</div>







<div data-role="page" id="page90b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa86" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page90b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comidas serias de negocios o cenas románticas (música de piano en comida y violines durante la noche).<br>Eventos y fumadores (relajada terraza hasta para 60 comensales).<br>



	<img class="displayed" src="rest/mazurka.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page90c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa86" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page90c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Pato Kaczka relleno de manzana dorada con blueberry.<br>• Carne tártara.<br>• Losos (salmón al hinojo).<br>• Nalesnik (crepa dorada rellena de queso bañada con blueberry).<br>



     </div>   



     <img class="displayed" src="rest/mazurka.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant Mercaderes-->



<div data-role="page" id="page91d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Mercaderes">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page91">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa87" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/mercaderes.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Mercaderes</h4></div>



	<b>Cocina: Mexicana Contemporánea con pincelada Internacional</b>  <br>



    <a href="tel:5510 2213">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page91c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page91a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page91b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page91d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.5</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.8</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font>



	<b>C.P.P</b> $610<br><br>



	5 de Mayo 57. Centro Histórico. 5510 2213/3687. Valet parking y estacionamiento.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page91a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa87" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page91a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Fresco, cómodo y bien restaurado inmueble (en lo que fueran los aposentos del Emperador Moctezuma), concurrido por políticos y empresarios asiduos al C. Histórico. Tenacidad y hospitalidad caracterizan a este feudo dirigido por José Manuel Delgado. Cálido y atento servicio. Cava a precios justos.<br>



        <img class="displayed" src="rest/mercaderes.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Maximo Bistrot</h4>-->



		</div>



</div>







<div data-role="page" id="page91b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa87" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page91b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Desayunos familiares fines de semana (costo promedio $210; must: concha gratinada de nata).<br>Comidas o cenas tempraneras de ejecutivos de la zona e intelectuales.<br>Servicio de banquetes.<br>Eventos (salones privados muy cómodos).<br>



	<img class="displayed" src="rest/mercaderes.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page91c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa87" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page91c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Tacos Rosarito con ensalada de nopales.<br>• Pato Zacatlán.<br>• Atún importado al teriyaki.<br>• Salmón Mercaderes.<br>• Frutos del bosque.<br>



     </div>   



     <img class="displayed" src="rest/mercaderes.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>




<!--Restaurant Monte Cristo-->



<div data-role="page" id="page96d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Monte cristo">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page96">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa92" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/montecris.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Monte Cristo</h4></div>



	<b>Cocina: Mexicana Tradicional con especialidades Contemporáneas</b>  <br>



    <a href="tel:5577 9262">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page96c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page96a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page96b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page96d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.6</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.5</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.6</strong><br></font> 



	<b>C.P.P</b> $540<br><br>



	Insurgentes Norte 1980. Lindavista. 5577 9262/5781 8177. Valet parking y estacionamiento gratuito.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page96a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa92" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page96a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Palmas a Don Fernando Ramírez Acosta por el notable mantenimiento del inmueble y la preservación de la tradición culinaria mexicana. Para mí este Antiguo Mesón Mejicano, dentro de un antiguo casco de hacienda, es un oasis en la zona. Must: botana de charales, salsas molcajeteadas y pan casero de pulque. Servicio respetuoso.<br>



        <img class="displayed" src="rest/montecris.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Monte Cristo</h4>-->



		</div>



</div>







<div data-role="page" id="page96b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa92" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page96b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Adultos que gustan de lo tradicional en atmósfera colonial.<br>Grupos y familias en fin de semana.<br>Turistas.<br>Celebración familiar en la terraza.<br>



	<img class="displayed" src="rest/montecris.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page96c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa92" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page96c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Tacos de lechón; Sopes de pato.<br>• Sopa de cola de res con lentejas.<br>• Cordero al vapor en hoja de plátano.<br>• Xoconoztle sobre espejo de zapote.<br>• Buñuelos de manzana y queso.<br>



     </div>   



     <img class="displayed" src="rest/montecris.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>




<!--Restaurant Nagaoka-->



<div data-role="page" id="page100d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Nagaoka">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page100">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa96" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/nagaoka.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Nagaoka</h4></div>



	<b>Cocina: Tradicional Japoneza</b>  <br>



    <a href="tel:5543 9530">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page100c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page100a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page100b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page100d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.4</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.2</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.2</strong><br></font>



	<b>C.P.P</b> $430<br><br>



	Insurgentes Sur 1761 (frente a MB) 5543 9530.<br><br>



    Arkansas 38. Nápoles 5543 9530.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page100a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa96" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page100a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Estrenando sucursal. Lejos de conceptos ostentos y pretenciosos, estos auténticos feudos nipones están bien posicionados en el gusto de la clientela japonesa local. Viandas tradicionales preparados con amor, honestidad y respeto, tanto a la materia prima como al comensal. Costo-beneficio inteligente.<br> <br>



        <img class="displayed" src="rest/nagaoka.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Nagaoka</h4>-->



		</div>



</div>







<div data-role="page" id="page100b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa96" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page100b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Quienes buscan la experiencia más apegada a un típico comedero nipón.<br>Comidas o cenas de oficinistas, familias o parejas (área infantil y terraza para fumadores en Insurgentes).<br>



	<img class="displayed" src="rest/nagaoka.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page100c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa96" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page100c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Variedad de sushi y sashimi.<br>• Shabu-shabu.<br>• Tallarines Nabeyaki udon o soba.<br>• Tempura.<br>• Camelia; Camelado.<br> <br>Arkansas 38. Nápoles.<br>



     </div>   



     <img class="displayed" src="rest/nagaoka.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>






<!--Restaurant Novecento-->



<div data-role="page" id="page103d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Novecento">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page103">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa99" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/novecento.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Novecento </h4></div>



	<b>Cocina: Argentina</b>  <br>



    <a href="tel:5280 4619">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page103c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page103a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page103b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page103d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> No se califica por ser de reciente apertura </b><br> 



	<b>C.P.P</b> $700<br><br>



	Emilio Castelar 163. Polanco. 5280 4619. Valet parking.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page103a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa99" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page103a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Concepto originario del Soho en Nueva York. Sitio de casual elegancia, ubicado en emblemático inmueble (Casa Domit) que comparte espacio con otros dos feudos (Mar del Zur y Lincoln). Amplio menú y sofisticados platillos de buena presentación, aunque con arranque muy turbulento en su cocina. La terraza más solicitada por el momento. Lista de espera. Solo vale el ambiente x el momento.<br>



        <img class="displayed" src="rest/novecento.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Novecento</h4>-->



		</div>



</div>







<div data-role="page" id="page103b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa99" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page103b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Ver y ser visto.<br>Plan familiar en fin de semana.<br>



	<img class="displayed" src="rest/novecento.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page103c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa99" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page103c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Ensalada Novecento con trocitos de carne marinada.<br>• Atún a la plancha.<br>• Tomate provenzal.<br>• Pollo al curry.<br>• Sinfonía Novecento (degustación de postres).<br>



     </div>   



     <img class="displayed" src="rest/novecento.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>



<!--Restaurant Padrinos-->



<div data-role="page" id="page108d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Padrinos">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page108">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa104" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/Padrinos.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Padrinos</h4></div>



	<b>Cocina: de Barrio con toque mediterraneo</b>  <br>



    <a href="tel:5510 2409">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page108c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page108a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page108b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page108d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.5</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.5</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font>



	<b>C.P.P</b> $590<br><br>



	Padrinos Centro Histórico: Isabel la Católica 30. Centro Histórico. 5510 2409.<br<br>Padrinos: Bosques de Duraznos 39 (Parque Duraznos). Bosques. 5245 0924.<br><br>Primos: Mazatlán 168. Condesa. 5256 0950.<br><br>Sobrinos: Álvaro Obregón 110. Roma. 5264 7466/6059.<br><br>Primos Hermanos: Luis G. Urbina 4. Polanco . 5282 3640/72<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page108a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa104" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page108a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Atinada apertura en pleno Centro Histórico, dentro del moderno y trendy hotel Downtown. Opción refrescante y diferente en la zona, ambientada con un sorprendente jardín vertical dispuesto a modo de una instalación artística. Pescados y mariscos garantía Puntarena, tapas y platos para compartir y el sello de servicio desenfadado del resto de los miembros de la familia (Primos, Primos Hermanos, Sobrinos).<br>



        <img class="displayed" src="rest/Padrinos.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Padrinos</h4>-->



		</div>



</div>







<div data-role="page" id="page108b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa104" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page108b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Tomar una cerveza acompañada de unos tiraditos en su barra central.<br>Sobremesa en terraza al aire libre disfrutando del lugar.<br>Desayunar entre semana o en su brunch dominical y después iniciar un paseo por el centro.<br>



	<img class="displayed" src="rest/Padrinos.jpg" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page108c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa104" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page108c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Montaditos; Tiradito de huachinango.<br>• Pulpo a las brasas; Torta ahogada de pato.<br>• Chuletón con gajos de papa y paprika.<br>• Tostadas de marlín toreadas.<br>• Key lime pie.<br>



     </div>   



     <img class="displayed" src="rest/Padrinos.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>






<!--Restaurant Piantaos-->



<div data-role="page" id="page110d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Piantao">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page110">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa106" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/piantao.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Piantao</h4></div>



	<b>Cocina: Argentina</b>  <br>



    <a href="tel:5424 0012">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page110c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page110a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page110b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page110d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.2</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.3</strong><br></font>



	<b>C.P.P</b> $620<br><br>



	Av. San Fernando 649 L-1 (Plaza Cuicuilco). Tlalpan. 5424 0012/5665 1492. Estacionamiento y valet parking.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page110a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa106" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page110a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Rústico, campirano y amplio lugar donde Mario Marcelo Favaretto ofrece a sus comensales cortes de carne estilo argentino con acentuado toque italiano. Porciones generosas, ideales para compartir o saciar un buen estómago. Como lo he dicho siempre: lo único que vale la pena en Plaza Cuicuilco. Servicio amable. Carta de vinos a precios justos.<br>



        <img class="displayed" src="rest/piantao.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Piantao</h4>-->



		</div>



</div>







<div data-role="page" id="page110b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa106" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page110b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comidas de negocios entre semana; familias grandes con niños en fin de semana (área verde para jugar).<br>Noches de  tango (jueves) y jazz en vivo (viernes).<br>Terraza-jardín muy agradable, dividida para fumar y no fumar.<br>Desayunos privados (bautizo, primera comunión, despedida de soltera).<br>



	<img class="displayed" src="rest/piantao.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page110c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa106" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page110c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Chorizo y chistorra.<br>• Lengua a la vinagreta; Milanesa.<br>• Bife de lomo.<br>• Vacio; Asado de tira sin hueso.<br>• Alfajor.<br>



     </div>   



     <img class="displayed" src="rest/piantao.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant Porfirios-->



<div data-role="page" id="page111d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Porfirios">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page111">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa107" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/porfirios.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Porfirios</h4></div>



	<b>Cocina: Mexicana</b>  <br>



    <a href="tel:5280 1494">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page111c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page111a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page111b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page111d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> No se califica por ser de reciente apertura </b><br> 



	<b>C.P.P</b> $750<br><br>



	Masaryk 214. Polanco. 5280 1494/8532.<br>Av. Desierto de los Leones 67. San Ángel. 5616 8535. Valet parking.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page111a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa107" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page111a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Feudo de Grupo Anderson´s. Ambientación moderna y sofisticada, pero a la vez casual y con cierto toque de buen humor, que pretende colocarse como uno de los place to be en el corazón de Polanco. Reinterpretación de tradicionales platillos mexicanos con originales y pensadas presentaciones. Para mis mistery fooders, la parafernalia es mejor que el resultado de los guisos. Servicio conocedor. Bar guerrero en sobremesa, mas hombre que mujeres.<br>



        <img class="displayed" src="rest/porfirios.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Porfirios</h4>-->



		</div>



</div>







<div data-role="page" id="page111b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa107" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page111b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comidas de negocios y gente que trabaja por la zona.<br>Cenas de grupos de amigos y amigas en ambiente trendy.<br>Tarde entre amigos degustando tequilas y mezcales (selecta carta).<br>Fines de semana familias (área infantil).<br>



	<img class="displayed" src="rest/porfirios.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page111c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa107" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page111c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Taquitos dorados de jaiba.<br>• Mole de olla.<br>• Queso cilantro; ensalada de espinacas.<br>• Albóndigas al chipotle.<br>• Pan de elote; Churros; Carrito de helados.<br>



     </div>   



     <img class="displayed" src="rest/porfirios.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant Puerto Getaria-->



<div data-role="page" id="page114d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Puerto getaria">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page114">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa110" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/PuertoGe.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Puerto Getaria </h4></div>



	<b>Cocina: Vasca Contemporánea con pinceladas Internacionales</b>  <br>



    <a href="tel:5536 4401">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page114c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page114a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page114b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page114d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.8</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>7.5</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font> 



	<b>C.P.P</b> $760<br><br>



	Insurgentes Sur 724 (frente al WTC). Nápoles. 5536 4401. Valet parking y estacionamiento.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page114a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa110" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page114a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Amplio espacio, demasiado sobrio y poco agraciado, que sin embargo se compensa con el sabor y la sazón de los platillos confeccionados por los Chefs Iñigo Aramburu y Benjamín Eljure. Recetas tradicionales ibéricas con materias primas de calidad y claros matices vascos. Pregunte por las sugerencias del día. Selectos vinos españoles a precios justos. Servicio capacitado.<br>



        <img class="displayed" src="rest/PuertoGe.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Puerto Getaria</h4>-->



		</div>



</div>







<div data-role="page" id="page114b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa110" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page114b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comer antes de una corrida de toros.<br>Comidas de negocios y empresarios entre semana.<br>Sibaritas que gustan del buen comer y beber con porciones generosas, en ambiente tranquilo y casual.<br>Plan familiar en fin de semana.<br>



	<img class="displayed" src="rest/PuertoGe.jpg" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page114c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa110" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page114c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Pulpo a la gallega.<br>• Tacos de pecho de ternera, arrachera, rabo.<br>• Huevos rotos.<br>• Alubias; Callos.<br>• Huachinango al carbón o a la vasca.<br>• Helado de turrón.<br>



     </div>   



     <img class="displayed" src="rest/PuertoGe.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant Puerto Madero -->



<div data-role="page" id="page115d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Puerto madero">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page115">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa111" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/puertoma.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Puerto Madero </h4></div>



	<b>Steak House Argentino</b>  <br>



    <a href="tel:5203 7369">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page115c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page115a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page115b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page115d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.8</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.5</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.6</strong><br></font> 



	<b>C.P.P</b> $860<br><br>



	Masaryk 110. Polanco. 5203 7369/5545 6098.<br>Paseo de Tamarindos 90. Torre Arcos II P.B. Bosques de las Lomas. 5259 3917/3934.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page115a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa111" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page115a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Feudos de origen gaucho que llegaron para quedarse en la predilección tanto de los comensales de esta ciudad, como de Cancún y Miami. Exitosa fórmula que combina ingredientes de primera, cortes de calidad y frescos pescados y mariscos ejecutados con buena sazón; profesional servicio, decoración contemporánea, cálida y atmósfera high class. Selecta cava. Recomendable reservar con anticipación.<br>



        <img class="displayed" src="rest/puertoma.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Puerto Getaria</h4>-->



		</div>



</div>







<div data-role="page" id="page115b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa111" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page115b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comidas y cenas de adultos jóvenes contemporáneos con presupuesto.<br>Empresarios o grupos de amigos y amigas.<br>Familias en fin de semana.<br>



	<img class="displayed" src="rest/puertoma.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page115c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa111" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page115c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Sashimi de atún, salmón y hamachi.<br>• Patas cangrejo gigante de Alaska.<br>• Parrillada Puerto.<br>• Pulpo a la parrilla.<br>• Prime tuna en costra de finas hierbas.<br>• Bife de chorizo.<br>• Chocolatísimo.<br>



     </div>   



     <img class="displayed" src="rest/puertoma.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>






<!--Restaurant Raiz-->



<div data-role="page" id="page120d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Raíz">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page120">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa116" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/Raiz.jpg" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Raíz</h4></div>



	<b>Cocina: Internacional con influencia Contemporánea</b>  <br>



    <a href="tel:5370 8191">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page120c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page120a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page120b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page120d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> No se califica por ser de reciente apertura </b> <br> 



	<b>C.P.P</b> $550<br><br>



	Av. de los Jinetes 102. Arboledas. Atizapán de Zaragoza. 5370 8191.<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page120a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa116" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page120a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Vale la pena desplazarse para conocer este original concepto de restaurante-escuela, cuyo estilo culinario autodenominan como Cocina de estaciones. Dirigido por el Chef Arturo Fernández (practicante de El Bulli). Distintas ambientaciones, acogedoras y bien pensadas. Platillos con influencia molecular que cambian cada estación, algunos de ellos preparados con ingredientes orgánicos cultivados en su roof garden. Interesante carta de vinos y mezcales.<br>



        <img class="displayed" src="rest/Raiz.jpg" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Quattro</h4>-->



		</div>



</div>







<div data-role="page" id="page120b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa116" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page120b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Paladares sibaritas y aventureros (comida, martes a domingo; cena, jueves a sábado).<br>Eventos privados para grupos.<br>Servicio de banquetes.<br>



	<img class="displayed" src="rest/Raiz.jpg" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page120c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa116" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page120c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Menú degustación de temporada (siempre encontrará algo diferente).<br>



     </div>   



     <img class="displayed" src="rest/Raiz.jpg" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>







<!--Restaurant Rincon Argentino-->



<div data-role="page" id="page121d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Rincon argentino">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page121">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa117" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/rincona.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Rincon Argentino</h4></div>



	<b>Cocina: Argentina</b>  <br>



    <a href="tel:5254 8775">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page121c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page121a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page121b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page121d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.8</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.0</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font> 



	<b>C.P.P</b> $740<br><br>



	Masaryk 177. Polanco. 5254 8775/8744.<br>Vasco de Quiroga 1700 PB. Santa Fe. 2591 0874/0632<br>



	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page121a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa117" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page121a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Espacioso y campirano feudo con ambientación gaucha bien lograda. Paraíso para amantes serios de los cortes de carne y sus derivados; aunque también hay sugerencias no carnívoras en su carta. Malazzo es garantía de calidad, servicio y sabrosa comida. Buenas opciones de vinos argentinos. A Santa Fe le sigue faltándole gracia, mal diseñado y proyectado.<br>



        <img class="displayed" src="rest/rincona.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Rincon Argentino</h4>-->



		</div>



</div>







<div data-role="page" id="page121b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa117" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page121b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comida formal o casual para ejecutivos o grupo de amigos.<br>Cenas tranquilas y casuales en familia o parejas.<br>Familias en fin de semana.<br>



	<img class="displayed" src="rest/rincona.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page121c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa117" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page121c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Puchero (lunes).<br>• Tapa de bife de chorizo (para tres personas; lunes y jueves).<br>• Bife mechado (para dos personas; martes y viernes).<br>• Bife ancho con hueso (para tres personas; miércoles).<br>• Cassata mascarpone; Alfajor; Martín Fierro.<br>



     </div>   



     <img class="displayed" src="rest/rincona.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>






<!--Restaurant Spuntino-->



<div data-role="page" id="page127d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Spuntino">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page127">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa123" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/spuntino.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Spuntino</h4></div>



	<b>Cocina: Ítalo Argentina</b>  <br>



    <a href="tel:5281 1211">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page127c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page127a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page127b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page127d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>8.4</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.5</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font> 



	<b>C.P.P</b> $640<br><br>



	Virgilio 40. Polanco. 5281 1211.<br>	



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page127a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa123" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page127a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Espontáneo y relajado comedero, muy solicitado por los habituales de la zona de Polanco que gustan de los buenos cortes y la comida gaucha al más puro estilo de Malazzo. Su cocina expuesta y horno de piedra, el colorido movimiento de la calle y la vista al Parque Lincoln son perfectos para disfrutar sin prisas y compartir a gusto.<br>



        <img class="displayed" src="rest/spuntino.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Spuntino</h4>-->



		</div>



</div>







<div data-role="page" id="page127b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa123" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page127b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Desayunos (diariamente).<br>Comidas entre cuates en ambiente casual y sin pretensiones.<br>Fin de semana para papás que dejan a sus hijos jugar en el parque.<br>Disfrutar de la terraza.<br>



	<img class="displayed" src="rest/spuntino.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page127c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa123" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page127c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Malfati.<br>• Pizza Fugazza rellena.<br>• Bife de lomo importado.<br>• Bife de chorizo.<br>• Pollo entero parrillero o Malazzo.<br>• Martín Fierro; Fresas flameadas con crema; Pastel helado de turrón.<br>



     </div>   



     <img class="displayed" src="rest/spuntino.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>




<!--Restaurant Suntory-->



<div data-role="page" id="page129d">



<div data-role="header" align="center" data-position="fixed">



 <img src="headerinicio.png" width="100%" height="68"></div>



<div data-role="content">



	<p>



    <a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a>



	</p>



<form method="POST" action="comentarios.php">



<legend><b>Cuéntanos tu experiencia:</b></legend>



Restaurante<input type="text" name="Restaurante" rows="1" cols="40" value="Suntory">



Email(opcional)<input type="text" name="Email" rows="1" cols="40" value=" "></textarea>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">



	<legend>Comida calificación:</legend>



         	<input type="radio" name="comidaCalif1" id="radio-choice-1" value="5" checked="checked"  >



         	<label for="radio-choice-1">5</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-2" value="6"  />



         	<label for="radio-choice-2">6</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-3" value="7"  />



         	<label for="radio-choice-3">7</label>



         	<input type="radio" name="comidaCalif1" id="radio-choice-4" value="8"  />



         	<label for="radio-choice-4">8</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-5" value="9"  />



         	<label for="radio-choice-5">9</label>



           	<input type="radio" name="comidaCalif1" id="radio-choice-6" value="10"  />



         	<label for="radio-choice-6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



    <legend>Servicio calificación:</legend>



         	<input type="radio" name="servicioComida1" id="servicioComida1" value="5" checked="checked" >



         	<label for="servicioComida1">5</label>



         	<input type="radio" name="servicioComida1" id="servicioComida2" value="6"  />



         	<label for="servicioComida2">6</label>



         	<input type="radio" name="servicioComida1" id="servicioComida3" value="7"  />



         	<label for="servicioComida3">7</label>



         	<input type="radio" name="servicioComida1" id="servicioComida4" value="8"  />



         	<label for="servicioComida4">8</label>



           	<input type="radio" name="servicioComida1" id="servicioComida5" value="9"  />



         	<label for="servicioComida5">9</label>



            <input type="radio" name="servicioComida1" id="servicioComida6" value="10"  />



         	<label for="servicioComida6">10</label>



    </fieldset>



<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">    



     <legend>Ambiente calificación:</legend>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi1" value="5" checked="checked" >



         	<label for="AmbienteCalifi1">5</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi2" value="6"  />



         	<label for="AmbienteCalifi2">6</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi3" value="7"  />



         	<label for="AmbienteCalifi3">7</label>



         	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi4" value="8"  />



         	<label for="AmbienteCalifi4">8</label>



           	<input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi5" value="9"  />



         	<label for="AmbienteCalifi5">9</label>



            <input type="radio" name="AmbienteCalifi1" id="AmbienteCalifi6" value="10"  />



         	<label for="AmbienteCalifi6">10</label>



    </fieldset>



Comentario:<textarea name="comentario" rows="10" cols="50"></textarea> 







<input type="checkbox" name="recibirmsn" id="checkbox-t-2a" data-theme="e">



        <label for="checkbox-t-2a" value="Si" >Deseo recibir información de Marco</label>







<input type="submit"  value="Enviar" onmouseUp="alert('Marco te agradece por enviar su comentario')" >



</FORM>	</div> <div data-role="footer" data-position="fixed"><img id="bg2" src="footerlogo.png" height="78"></div></div>



<div data-role="page" id="page129">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa125" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



		<div data-role="content">	



		 <div>



		<img class="displayed" src="rest/suntory.png" width="90%">



		</div>



    	<div>



		<div align ="center" ><h4>Suntory</h4></div>



	<b>Cocina: Japonesa</b>  <br>



    <a href="tel:5536 9432">Llamar</a><br/><br>



    <br>



    <div>



    <a href="#page129c">  <img src="Detalle3.png" width="38%"  img style="float:left"> </a>



    <a href="#page129a">  <img src="Detalle1.png" width="38%"  img style="float:right"> </a>



    <br><br><br>



    <a href="#page129b">  <img src="Detalle2.png" width="38%"  img style="float:left">  </a>



    <a href="#page129d">  <img src="Detalle4.png" width="38%"  img style="float:right"> </a> 



    </div>



    </div> <br><br><br>



	<b> Comida: </b> <font color="green"><strong>9.0</strong><br></font>



	<b> Ambiente: </b> <font color="green"><strong>8.3</strong><br></font>



	<b> Servicio: </b>  <font color="green"><strong>8.5</strong><br></font> 



	<b>C.P.P</b> $1,040<br><br>



	Torres Adalid 14. Del Valle. 5536 9432 al 37.<br><br>Reforma 535. Lomas de Chapultepec. 5202 6717.<br><br>Vialidad de la Barranca 6 (Centro Comercial Paseo Interlomas). Huixquilucan. 5290 4420/4424. Valet parking y seguridad.<br>



    </div>           



    <!--<div>      <img id="bg" src="fondoG.jpg" alt="Fondo"/> </div> -->       



		<div data-role="footer" data-position="fixed">



		     	 <img id="bg2" src="footerlogo.png" height="68" />



           </div>



</div>







<div data-role="page" id="page129a">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa125" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 	<div data-role="content">	



		<a href="#page129a">  <img src="Detalle1.png" width="40%"  class="displayed"> </a>



		<div>



		Clásico japonés con el mejor teppanyaki, ratificado en las encuestas MB entre los mejores de su categoría, sigue creciendo con la polémica apertura de sucursal en Interlomas (bar ambientado con). Sazón tradicional nipón acoplado al paladar mexicano, calidad y servicio capacitado son sus cartas fuertes. Sucursal Del Valle: predilecta de la mayoría. Acapulco siempre inconstante.<br>



        <img class="displayed" src="rest/suntory.png" width="60%">



		</div>				



         </div>                



	<div data-role="footer" align="center" data-position="fixed">



      



		<div data-role="footer" data-position="fixed">



		<img id="bg2" src="footerlogo.png" height="78">



        </div>



		<!--<h4>Spuntino</h4>-->



		</div>



</div>







<div data-role="page" id="page129b">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa125" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page129b">  <img src="Detalle2.png" width="40%" class="displayed"> </a>



		<br>Comidas o cenas de adultos contemporáneos en plan negocios o placer. (música de piano o jazz en ambiente tranquilo y relajado).<br>Banquetes (mínimo 20 personas).<br>Fumadores Del Valle: jardín interior; Lomas,  terraza.<br>



	<img class="displayed" src="rest/suntory.png" width="60%">		                     



    </div>                       



		<div data-role="footer" align="center" data-position="fixed">



        



	     <div data-role="footer" data-position="fixed">



	      	 <img id="bg2" src="footerlogo.png" height="78">



         </div>



		



		</div>



</div>







<div data-role="page" id="page129c">



	<div data-role="header" align="center" data-position="fixed">



	 <img src="headerinicio.png" width="100%" height="68">



	</div>



    <table width="100%" border="0">



      <tr>



        <td><div align="center"><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</a></font></div></td>



        <td><div align="center"><a href="#menu" data-role="button" data-mini="true" data-inline="true" data-theme="b">Inicio</a></div></td>



        <td><div align="center"><a href="mapas.html#mapa125" rel="external" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Como llegar</a></font></div></td>



      </tr>



    </table>



	 <div data-role="content">	



     <a href="#page129c">  <img src="Detalle3.png" width="40%"  class="displayed"> </a>



	<br>• Almejas a la mantequilla.<br>• Teppanyaki King crab o foie gras.<br>• Espárragos con carne.<br>• Tempura helado; Gelatina de Midori.<br>



     </div>   



     <img class="displayed" src="rest/suntory.png" width="60%">



	<div data-role="footer" align="center" data-position="fixed">



    



	  <div data-role="footer" data-position="fixed">



	  <img id="bg2" src="footerlogo.png" height="78">



     </div>



	</div>



</div>



</body>

</html>