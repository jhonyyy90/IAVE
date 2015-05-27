<!DOCTYPE html> 

<html>

<head>

 <link href="favicon.ico" rel="icon" type="image/x-icon" />

 



 

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>capufe-iave</title>



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>

<script type="text/javascript" src="scripts/custom-form-elements.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

  <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>







<script src="js/phonegap-1.1.0.js"></script>



<!-- -->

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

	

	* { margin: 0; padding: 0; }

	.panel-content { 

    padding:15px; 

  }

	#mapa { position: absolute; background: transparent; height: 100%; width: 100%; top: 0; left: 0; right: 0; bottom: 0; }

	#Ubicacion { position: absolute; background: transparent; height: 100%; width: 100%; top: 0; left: 0; right: 0; bottom: 0; }

.nav-search .ui-btn-up-a {

    background-image:none;

    background-color:#333333;

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



<body  onload="initialize()"> 



<div data-role="page" id="page">



	<div data-role="header" align="center" data-position="fixed"> 
    <h2>CAPUFE-IAVE</h2>
<div data-role="navbar" >
<ul>
			<li><a href="cuenta.php#editarcta" rel="external"><h3>editar cuenta</h3></a></li>
			<li><a href="index.html" rel="external"><h3>cerrar sesion</h3></a></li>
		</ul>
        </div>
	</div>

    <!--<p><a data-rel="back" data-role="button" data-mini="true" data-inline="true" data-theme="d"><font color="red">Regresar</font></a></p>-->

<div data-role="content">

	<section >

   	<!--<iframe width="100%"height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="markers.html"></iframe>-->
 <ul data-role="listview">
  <li role="columnheader">COMPROBANTES RECIENTES</li>
<li><a href="cuenta.php#comprobante" rel="external">FOLIO: 4140075 - 12/05/2015 - CACD720320 - $10.00</a></li>
</ul>
	</section>

	

</div>

	<div data-role="footer" data-position="fixed">

      <div data-role="footer" data-position="fixed" data-theme="c">


		
    <p><div data-role="collapsible">
    <ul data-role="listview" data-icon="false">

        <li><a href="cuenta.php#iave" rel="external">
    
            <p><strong>MI IAVE</strong></p><p>IMDM-22005057-6</p></a>
    
    
        </li>

	</ul><br>
    <a href="cuenta.php#nvaiave" rel="external" data-role="button"><h3>nueva iave</h3></a>

    <p><h3>MIS IAVES</h3></p>
    
</div></p>
<div data-role="navbar" >
<ul>
			<li><a href="cuenta.php#nvarecarga" rel="external"><h3>RECARGA</h3></a></li>
			<li><a href="cuenta.php#contacto" rel="external"><h3>CONTACTO</h3></a></li>
		</ul>
</div>
         	



	</div>

        

	</div>





<section id="mapa"></section>

	</div>

    </body>



</html>