		$(document).ready(function(){
			var largo, alto, tamaño,distancia;
				largo = $(window).width();
				alto = $(window).height();
				$('#galeria').css({height:alto+'px'});
				tamaño=$('.reducida').width();
				distancia = tamaño-largo;

				$('.reducida').mousemove(function(mouse){
					$(this).css({left:-mouse.pageX});
				});
			$('.reducida img#mini').click(function(){
				var img =$(this).attr('src');
				$('.amplia img#picture').attr('src',img);
			});
		});