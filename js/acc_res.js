// _____________________________________________________________________ On ready
$(document).ready(function(){
// __________________________________________ Owl-Carousel1
	$('#owl-carousel1').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:3
			}
		}
	});
// __________________________________________ Owl-Carousel1

// __________________________________________ Owl-Carousel
	$('#owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:4
			},
			1000:{
				items:4
			}
		}
	});
// __________________________________________ Owl-Carousel

// __________________________________________ Owl-Carousel1
	$('#owl-carousel2').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:3
			}
		}
	});
// __________________________________________ Owl-Carousel1

// __________________________________________ Contador
	$('.counter').counterUp({
		delay: 10,
	    time: 5000,
	    offset: 70
	});
// __________________________________________ Contador

// __________________________________________ btn DONAR
	$(".areaAc").mouseover(function(){
		fncBtnDon();
	});
	$(".areaInac").mouseover(function(){
		fncBtnDonQu();
	});
// __________________________________________ btn DONAR


	$('.carousel-control-prev').hide();
	$('.carousel-control-next').hide();



// _____________________________________________________________________ SECCIÓN PROGRAMAS
// _____________________________________________________________________ SECCIÓN PROGRAMAS


// __________________________________________ HISTORIAS
	$('#car_hist').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});

	$('#car_hist1').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});

// __________________________________________ HISTORIAS



// _____________________________________________________________________ POS MODAL CONTACTO
var coordenadasMod = $(window).scrollTop();
$('#contactoModal').on('shown.bs.modal', function (e) {
	$(window).scrollTop(coordenadasMod);
});
$('#contactoModal').on('hidden.bs.modal', function (e) {
	$(window).scrollTop(coordenadasMod);
});
// _____________________________________________________________________ POS MODAL CONTACTO



});

// _____________________________________________________________________ On ready

// _____________________________________________________________________ DONAR
function fncBtnDon(){
	// alert('función conectada');
	$('.vid').show('1000');
	$('.contbtnd').animate({'width':'560px', 'right':'0', 'cursor':'auto'});
	$('.areaInac').show();
	$('.btnDonar').html('Click aquí para donar');
}
function fncBtnDonQu(){
	// alert('función conectada');
	$('.vid').hide('3000');
	$('.contbtnd').animate({'width':'10em', 'right':'0', 'cursor':'auto'});
	$('.areaInac').hide();
	$('.btnDonar').html('DONAR');
}
// _____________________________________________________________________ DONAR


// _____________________________________________________________________ ModProg
function modProg(num){
	if (num == 1) { $('#progMod1').show(); $('#progMod2').hide(); $('#progMod3').hide(); $('#progMod4').hide(); $('#progMod5').hide(); $('#progMod6').hide(); $('#progMod7').hide(); }
	if (num == 2) { $('#progMod1').hide(); $('#progMod2').show(); $('#progMod3').hide(); $('#progMod4').hide(); $('#progMod5').hide(); $('#progMod6').hide(); $('#progMod7').hide(); }
	if (num == 3) { $('#progMod1').hide(); $('#progMod2').hide(); $('#progMod3').show(); $('#progMod4').hide(); $('#progMod5').hide(); $('#progMod6').hide(); $('#progMod7').hide(); }
	if (num == 4) { $('#progMod1').hide(); $('#progMod2').hide(); $('#progMod3').hide(); $('#progMod4').show(); $('#progMod5').hide(); $('#progMod6').hide(); $('#progMod7').hide(); }
	if (num == 5) { $('#progMod1').hide(); $('#progMod2').hide(); $('#progMod3').hide(); $('#progMod4').hide(); $('#progMod5').show(); $('#progMod6').hide(); $('#progMod7').hide(); }
	if (num == 6) { $('#progMod1').hide(); $('#progMod2').hide(); $('#progMod3').hide(); $('#progMod4').hide(); $('#progMod5').hide(); $('#progMod6').show(); $('#progMod7').hide(); }
	if (num == 7) { $('#progMod1').hide(); $('#progMod2').hide(); $('#progMod3').hide(); $('#progMod4').hide(); $('#progMod5').hide(); $('#progMod6').hide(); $('#progMod7').show(); }
	$('#modProg').modal('show');
	$(location).attr('href',"#progId");
}
$('#modProg').on('hidden.bs.modal', function (e) {
	$(location).attr('href',"#progId");
});
$('#modProg').on('show.bs.modal', function (e) {
	$(location).attr('href',"#progId");
});
// _____________________________________________________________________ ModProg


// _____________________________________________________________________ Conteo
function fncFormNum(){
	$('.statistic-counter').html();

}
// _____________________________________________________________________ Conteo

// _____________________________________________________________________ CONVENIOS
function fncConv(){
	var nivel_1 = ['Academia Mexicana de Ciencias - Campeche', 'Academia Mexicana de Ciencias -  Ciudad de México', 'Formando Formadores / Convenios Estatales', 'Formando Formadores / International Youth Foundation', 'UNETE', 'International Youth Foundation / FCA, CISCO y JALISCO', 'Diplomado UTs DIAGEO'];
	var nivel_2 = ['Bécalos por su Valor PFP', 'Bécalos por su Valor SEDENA', 'Bécalos por su Valor SEMAR', 'Fundación Quiera', '¿Y TÚ POR QUÉ TE BECARÍAS? ', 'Vizcainas'];
	var nivel_3 = ['¿Y TÚ POR QUÉ TE BECARÍAS?', '¿Y TÚ POR QUÉ TE BECARÍAS? B',  'Instituto Politécnico Nacional',  'Fundación Pro Mazahua',  'Fundación Tarahumara',  'Bachillerato Estado de México',  'Bachillerato Sonora',  'Bachillerato Campeche',  'CONALEP BOTEO',  'IYF - FCA Versión 3 Automatización y Matricería',  'IYF - CISCO - TELEFONICA',  'IYF - LOGÍSTICA - ALSEA',  'IFY - Hospitalidad',  'DGETI / UEMSTIS',  'Boteo IPN',  'Fundación Comunitaria Oaxaca',  'Youthbuild International México AC - Cd Juárez',  'Youthbuild International México AC - León',  'Compartamos-Gentera ',  'Fundación Quiera',  'Escalera'];
	var nivel_4 = ['¿Y TÚ POR QUÉ TE BECARÍAS?', '¿Y TÚ POR QUÉ TE BECARÍAS? - CISCO', '¿Y TÚ POR QUÉ TE BECARÍAS? - Entra en acción', '¿Y TÚ POR QUÉ TE BECARÍAS? B', 'Fundación Pro Mazahua', 'Fundación Tarahumara', 'Fundación Pablo García - Estado de Campeche', 'Instituto Politécnico Nacional', 'Universidad Nacional Autónoma de México', 'Universidad Nacional Autónoma de México 2a Convocatoria 2020', 'Universidad Nacional Autónoma de Nuevo León HEB TIGRES', 'Universidad Nacional Autónoma de Nuevo León BANREGIO', 'GNP', 'Universidades Tecnológicas - DIAGEO', 'Universidades Tecnológicas  DIAGEO_Becarios externos', 'Universidad Tecnológica de Saltillo', 'Instituto Tecnológico de Lázaro Cárdenas', 'Universidad Politécnica de Lázaro Cárdenas', 'Universidad Tecnológica de Manzanillo', 'Instituto Tecnológico de Colima', 'Beca Trascender 2019', 'Entra en Acción - Convocatoria 2019', 'Universidad Autónoma Benito Juárez de Oaxaca', 'Movilidad Internacional / Aguascalientes', 'Fundación Mexicana para la Educación la Tecnología y la Ciencia, AC / FUNED', 'MOVILIDAD UNAM', 'Fomento Social Banamex ', 'Boteo IPN', 'Fundación CIDE AC', 'Fundación de la Universidad Veracruzana', 'Fundación Quiera', 'Becas Chevron', 'Generation', 'Universidad Tecnológica de la Costa'];
	var nivel_5 = ['TOTAL INGLÉS', 'Fundación Proempleo', 'Desafío B21', 'Reto Actinver'];


	if ($('#sel_niv').val() == 1) {
		var num_niv = nivel_1.length; num_niv = num_niv - 1;
		var resp_niv_1 = '';
		for (var i = 0; i <= num_niv; i++) {
			resp_niv_1 += '<p> - '+nivel_1[i]+'</p>';
		}
		$('#resul_conv').html(resp_niv_1);
	}

	if ($('#sel_niv').val() == 2) {
		var num_niv = nivel_2.length; num_niv = num_niv - 1;
		var resp_niv_2 = '';
		for (var i = 0; i <= num_niv; i++) {
			resp_niv_2 += '<p> - '+nivel_2[i]+'</p>';
		}
		$('#resul_conv').html(resp_niv_2);
	}

	if ($('#sel_niv').val() == 3) {
		var num_niv = nivel_3.length; num_niv = num_niv - 1;
		var resp_niv_3 = '';
		for (var i = 0; i <= num_niv; i++) {
			resp_niv_3 += '<p> - '+nivel_3[i]+'</p>';
		}
		$('#resul_conv').html(resp_niv_3);
	}

	if ($('#sel_niv').val() == 4) {
		var num_niv = nivel_4.length; num_niv = num_niv - 1;
		var resp_niv_4 = '';
		for (var i = 0; i <= num_niv; i++) {
			resp_niv_4 += '<p> - '+nivel_4[i]+'</p>';
		}
		$('#resul_conv').html(resp_niv_4);
	}

	if ($('#sel_niv').val() == 5) {
		var num_niv = nivel_5.length; num_niv = num_niv - 1;
		var resp_niv_5 = '';
		resp_niv_5 = '<ul>';
		for (var i = 0; i <= num_niv; i++) {
			resp_niv_5 += '<li>'+nivel_5[i]+'</li>';
		}
		$('#resul_conv').html(resp_niv_5);
		resp_niv_5 = '</ul>';
	}

  
}
// _____________________________________________________________________ CONVENIOS




// __________________________________________ INFORME
	//$('#aviso').hide(0);


		$(window).scroll(function(){
		var windowHeight = $(window).scrollTop();
		var contenido2 = $("#contenido2").offset();
		contenido2 = (contenido2-100);
		if(windowHeight >= contenido2){
			//$('#aviso').fadeIn(500);
			var text1 = $('#attrText1').attr("data-textval1");
			var text2 = $('#attrText2').attr("data-textval2");
			var text3 = $('#attrText3').attr("data-textval3");
			var text4 = $('#attrText4').attr("data-textval4");
			var text5 = $('#attrText5').attr("data-textval5");
			$(".barra_1").animate({width:text1},2000);
			$(".barra_2").animate({width:text2},2000);
			$(".barra_3").animate({width:text3},2000);
			$(".barra_4").animate({width:text4},2000);
			$(".barra_5").animate({width:text5},2000);

		}else{
			//$('#aviso').fadeOut(500);
		}
	});

	// __________________________________________ INFORME













