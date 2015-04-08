<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Loader</title>
		<!--importacion de librerias css-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<style type="text/css">
			body{
				margin:  o;
				padding: o;
				font-family: sans-serif;
				font-size: 40px;
				color: #fff;
				text-align: center;
			}
			.seccion{
				background-color: #16a085;
				height: 500px;
				line-height: 500px;
			}
			.seccion-2{
				background-color: #2980b9;
			}
			.seccion-3{
				background-color: #3320b9;
			}
			/*----------------------------*\
						loader
			\*----------------------------*/
			.loader{
				width: 50px;
				height: 50px;
				display: inline-block;
				vertical-align: middle;
				position: relative;
			}
			/*----------------------------*\
					loader-double
			\*----------------------------*/
			.loader-double{
				border-radius: 50px;
				border: 6px solid transparent;
				border-top-color: #fff;
				border-bottom-color: #fff;
				animation:load 1s linear infinite;
				-webkit-animation:load 1s linear infinite;
			}
			.loader-double:after{
				content: '';
				position: absolute;
				top: 5px;
				left: 5px;
				bottom: 5px;
				right: 5px;
				border-radius: 50px;
				border: 6px solid transparent;
				border-top-color: #fff;
				border-bottom-color: #fff;
				opacity: 0.6;
				animation:load-reverso 2s linear infinite;
				-webkit-animation:load-reverso 2s linear infinite;
			}

			/*----------------------------*\
					loader-quart
			\*----------------------------*/
			.loader-quart{
				position: relative;
				border-radius: 50px;
				border: 6px solid rgba(255,255,255,0.4);
			}

			.loader-quart:after{
				content: '';
				position: absolute;
				top: -6px;
				left: -6px;
				bottom: -6px;
				right: -6px;
				border-radius: 50px;
				border: 6px solid transparent;
				border-top-color: #fff; 
				animation:load 1s linear infinite;
				-webkit-animation:load 1s linear infinite;
			}
			/*----------------------------*\
					loader-cirlce
			\*----------------------------*/
			.loader-circle{
				border-radius: 50px;
				border: 3px solid transparent;
				border-top-color:#fff; 
				animation:load 1s linear infinite;
				-webkit-animation:load 1s linear infinite; 
			}

			.loader-circle:after{
				content: '';
				position: absolute;
				top: 5px;
				left: 5px;
				bottom: 5px;
				right: 5px;
				border-radius: 50px;
				border: 3px solid transparent;
				border-top-color:#fff;
				opacity: 0.8;
				animation:load 5s linear infinite;
				-webkit-animation:load 5s linear infinite;
			}

			.loader-circle:before{
				content: '';
				position: absolute;
				top: 12px;
				left: 12px;
				bottom: 12px;
				right: 12px;
				border-radius: 50px;
				border: 3px solid transparent;
				border-top-color:#fff;
				opacity: 0.5;
				animation:load 10s linear infinite;
				-webkit-animation:load 10s linear infinite;
			}

			@keyframes load{
				0%{transform:rotate(0deg); }
				100%{transform:rotate(360deg); }
			}

			@-webkit-keyframes load{
				0%{-webkit-transform:rotate(0deg); transform:rotate(0deg); }
				100%{-webkit-transform:rotate(360deg); transform:rotate(360deg); }
			}

			@keyframes load-reverso{
				0%{transform:rotate(0deg); }
				100%{transform:rotate(-360deg); }
			}

			@-webkit-keyframes load-reverso{
				0%{-webkit-transform:rotate(0deg); transform:rotate(0deg); }
				100%{-webkit-transform:rotate(-360deg); transform:rotate(-360deg); }
			}

			/*----------------------------*\
					seccion2
			\*----------------------------*/
			.seccion2{
				background-color: #000;
				height: 500px;
				line-height: 500px;
			}

			/*----------------------------*\
					loader-cirlce
			\*----------------------------*/
			.loader-line:before,
			.loader-line:after,
			.loader-line span{
				content: '';
				display: block;
				position: absolute;
				top: 0px;
				left: 0px;
				width: 10px;
				height: 30px;
				background: #fff;
				animation:load-grow 1s linear infinite;
				-webkit-animation:load-grow 1s linear infinite;
			}

			.loader-line:after{
				left: 15px;
				animation-delay:-0.66s;
				-webkit-animation-delay:-0.66s;
			}

			.loader-line span{
				left: 30px;
				animation-delay:-0.33s;
				-webkit-animation-delay:-0.33s;
			}

			@keyframes load-grow{
				0%{-webkit-transform:scaleY(0);  transform:scaleY(0); opacity: 0; }
				50%{-webkit-transform:scaleY(1); transform:scaleY(1); opacity: 1; }
				100%{-webkit-transform:scaleY(0); transform:scaleY(0); opacity: 0; }
			}

			@-webkit-keyframes load-grow{
				0%{-webkit-transform:scaleY(0);  transform:scaleY(0); opacity: 0; }
				50%{-webkit-transform:scaleY(1); transform:scaleY(1); opacity: 1; }
				100%{-webkit-transform:scaleY(0); transform:scaleY(0); opacity: 0; }
			}

		</style>
	</head>

	<body>
		<section class="seccion">
			<span class="loader loader-quart"></span>
			Cargando..
		</section>
		<section class="seccion seccion-2">
			<span class="loader loader-double"></span>
			Cargando..
		</section>
		<section class="seccion seccion-3">
			<span class="loader loader-circle"></span>
			Cargando..
		</section>
		<section class="seccion2 seccion-4">
			<span class="loader loader-line"><span></span></span>
			Cargando..
		</section>
	</body>
</html>