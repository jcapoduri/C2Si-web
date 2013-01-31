<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="inc/css.css">
	<script type="text/javascript" src="inc/jquery.js"></script>
	<title>C2Si</title></head>
<body>
	<div class="meny">
			<h2>Menu</h2>
			<ul>
				<li>
					<a href="#">Opcion 1</a>
				</li>
				<li>
					<a href="#">Opcion 2</a>
				</li>
				<li>
					<a href="#">Opcion 3</a>
				</li>
				<li>
					<a href="#">Opcion 4</a>
				</li>
				<li>
					<a href="#">Opcion 5</a>
				</li>
				<li>
					<a href="#">Opcion 6</a>
				</li>
				<li>
					<a href="#">Opcion 7</a>
				</li>
				<li>
					<a href="#">Opcion 8</a>
				</li>
				<li>
					<a href="#">Opcion 9</a>
				</li>
			</ul>
	</div>

	<div class="meny-arrow"></div>

	<div class="contents">
		<div class="header">
			<div class="Logo">[C2Si]</div>
			<span class="description">Soluciones informaticas</span>
		</div>
		<div class="container">
			El programa que necesita no existe?
			<br>
			Nosotros forjamos su idea :)
		</div>
	</div>

	<script src="js/meny.min.js"></script>
	<script>
		// Create an instance of Meny
		var meny = Meny.create({
			// The element that will be animated in from off screen
			menuElement: document.querySelector( '.meny' ),

			// The contents that gets pushed aside while Meny is active
			contentsElement: document.querySelector( '.contents' ),

			// [optional] The alignment of the menu (top/right/bottom/left)
			position: Meny.getQuery().p || 'right',

			// [optional] The height of the menu (when using top/bottom position)
			height: 200,

			// [optional] The width of the menu (when using left/right position)
			width: 260,

			// [optional] Distance from mouse (in pixels) when menu should open
			threshold: 40
		});

		// API Methods:
		// meny.open();
		// meny.close();
		// meny.isOpen();
		
		// Events:
		// meny.addEventListener( 'open', function(){ console.log( 'open' ); } );
		// meny.addEventListener( 'close', function(){ console.log( 'close' ); } );

		// Embed an iframe if a URL is passed in
		if( Meny.getQuery().u && Meny.getQuery().u.match( /^http/gi ) ) {
			var contents = document.querySelector( '.contents' );
			contents.style.padding = '0px';
			contents.innerHTML = '<div class="cover"></div><iframe src="'+ Meny.getQuery().u +'" style="width: 100%; height: 100%; border: 0; position: absolute;"></iframe>';
		}
	</script>

	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<!--div class="header">
		<span class="Logo">[C2Si]</span>
	</div>
	<div class="container">
		<div class="center-block"></div>
		<div class="right-block"></div>
	</div-->
</body>
</html>