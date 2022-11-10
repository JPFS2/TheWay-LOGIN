$(function(){
			
			var topo=0;
			var empresa=$("#empresa").offset().top-80;
			var servicos=$("#servicos").offset().top-80;
			if($("#catalogo").empty(false)){
			var catalogo=$("#catalogo").offset().top-80;
			}
			if($("#testemunhais").empty(false)){
			var testemunhais=$("#testemunhais").offset().top-80;
			}
			var contato=$("#contato").offset().top-60;
			
			
			
			
			$("#btnHome").click(function(e){
				
				   $('html, body').animate({scrollTop: topo}, 1000, "easeInOutExpo");	
				
			});	
				
			$("#btnEmpresa").click(function(e){
				
				   $('html, body').animate({scrollTop: empresa}, 1000, "easeInOutExpo");	
				
			});	
			
				
			$("#btnServicos").click(function(e){
				
				   $('html, body').animate({scrollTop: servicos}, 1000, "easeInOutExpo");	
				
			});	
			
			
			
			if($("#catalogo").empty(false)){
						
				$("#btnCatalogo").click(function(e){
					
					   $('html, body').animate({scrollTop: catalogo}, 1000, "easeInOutExpo");	
					
				});	
				
				
				
			}
			
		
				
				$("#btnStart").click(function(e){
					
					   $('html, body').animate({scrollTop: catalogo}, 1000, "easeInOutExpo");	
					
				});	
				
		
			
			
			if($("#testemunhais").empty(false)){
					
				$("#btnTestemunhais").click(function(e){
					
					   $('html, body').animate({scrollTop:testemunhais}, 1000, "easeInOutExpo");	
					
				});
				
			}
			
			
				
			$("#btnContato").click(function(e){
				
				   $('html, body').animate({scrollTop: contato}, 1000, "easeInOutExpo");	
				
			});	
			
			
			$("#btnClientes").click(function(e){
				
				   $(location).attr("href","clientes/");	
				
			});	
			
			
			
			
});
    