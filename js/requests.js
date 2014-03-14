//Funciones para registro de usuarios

function userReg(){
	$('#previewV').hide();
	$.get('http://localhost/Manfric/includes/regustrarUsuario.php', function(data) {
 		$('#content').html(data)
	})
}

function userRegPrev(){
	$('#previewV').show();
	$('#registerDiv').hide();
	$.post("http://localhost/Manfric/includes/regPreview.php",{
																regName:($('#regName').get(0).value),
																regLastN:($('#regLastN').get(0).value),
																regId:($('#regId').get(0).value),
																regGen:($('#regGen').get(0).value),
																regBYear:($('#regBYear').get(0).value),
																regBMonth:($('#regBMonth').get(0).value),
																regBDay:($('#regBDay').get(0).value),
																regPho:($('#regPho').get(0).value),
																regAr:($('#regAr').get(0).value),
																regPos:($('#regPos').get(0).value),
																regTest:($('#regTest').get(0).value),
																regOp:($('#regOp').get(0).value),
																regCom:($('#regCom').get(0).value)},
    function(r){
      $('#previewV').html(r);
    }
  );
}

function userRegSave(){
		$('#previewV').hide();
		var user = 1;
		$.post("http://localhost/Manfric/aCall/assincroned.php",{
																regName:($('#regName').get(0).value),
																regLastN:($('#regLastN').get(0).value),
																regId:($('#regId').get(0).value),
																regGen:($('#regGen').get(0).value),
																regBYear:($('#regBYear').get(0).value),
																regBMonth:($('#regBMonth').get(0).value),
																regBDay:($('#regBDay').get(0).value),
																regPho:($('#regPho').get(0).value),
																regAr:($('#regAr').get(0).value),
																regPos:($('#regPos').get(0).value),
																regTest:($('#regTest').get(0).value),
																regOp:($('#regOp').get(0).value),
																regCom:($('#regCom').get(0).value),
																regUser:(user)},
    function(r){
      $('#debugg').html(r);
    }
  );
}

//Funciones para registro de productos terminados

function prodReg(){
	$('#previewV').hide();
	$.get('http://localhost/Manfric/includes/regProducto.php', function(data) {
 		$('#content').html(data)
	})
}

function ProductRegPrev(){
	$('#previewV').show();
	$('#registerDiv').hide();
  var ingredientesPOST = new Array();
	var cantidadesPOST = new Array();
  $("[id^='insumSel']").each(function(){
    ingredientesPOST[ingredientesPOST.length] = $(this).val();
  })
	var ingPOST = $.toJSON(ingredientesPOST);
	$("[id^='txt']").each(function(){
    cantidadesPOST[cantidadesPOST.length] = $(this).val();
  })
	var cantPOST = $.toJSON(cantidadesPOST);
	$.post("http://localhost/Manfric/includes/prodPreview.php",{
																nameP:($('#nameP').get(0).value),
																eneP:($('#eneP').get(0).value),
																febP:($('#febP').get(0).value),
																marP:($('#marP').get(0).value),
																abrP:($('#abrP').get(0).value),
																mayP:($('#mayP').get(0).value),
																junP:($('#junP').get(0).value),
																julP:($('#julP').get(0).value),
																agoP:($('#agoP').get(0).value),
																sepP:($('#sepP').get(0).value),
																octP:($('#octP').get(0).value),
																novP:($('#novP').get(0).value),
																dicP:($('#dicP').get(0).value),
																ingr:(ingPOST),
																cant:(cantPOST)},
    function(r){
      $('#previewV').html(r);
    }
  );
}

function ProductRegSave(){
		$('#previewV').hide();
		var product = 1;
	$('#registerDiv').hide();
  var ingredientesPOST = new Array();
	var cantidadesPOST = new Array();
  $("[id^='insumSel']").each(function(){
    ingredientesPOST[ingredientesPOST.length] = $(this).val();
  })
	var ingPOST = $.toJSON(ingredientesPOST);
	$("[id^='txt']").each(function(){
    cantidadesPOST[cantidadesPOST.length] = $(this).val();
  })
	var cantPOST = $.toJSON(cantidadesPOST);
		$.post("http://localhost/Manfric/aCall/assincroned.php",{
																nameP:($('#nameP').get(0).value),
																eneP:($('#eneP').get(0).value),
																febP:($('#febP').get(0).value),
																marP:($('#marP').get(0).value),
																abrP:($('#abrP').get(0).value),
																mayP:($('#mayP').get(0).value),
																junP:($('#junP').get(0).value),
																julP:($('#julP').get(0).value),
																agoP:($('#agoP').get(0).value),
																sepP:($('#sepP').get(0).value),
																octP:($('#octP').get(0).value),
																novP:($('#novP').get(0).value),
																dicP:($('#dicP').get(0).value),
																producto:(product),
																ingr:(ingPOST),
																cant:(cantPOST)},
    function(r){
      $('#debugg').html(r);
    }
  );
}

//Función para agregar insumos

function insReg(){
	$('#previewV').hide();
	$.get('http://localhost/Manfric/includes/regInsumo.php', function(data) {
 		$('#content').html(data)
	})
}

function InsumRegPrev(){
	$('#previewV').show();
	$('#registerDiv').hide();
	$.post("http://localhost/Manfric/includes/insPreview.php",{
																nameI:($('#nameI').get(0).value),
																exisI:($('#exisI').get(0).value),
																costI:($('#costI').get(0).value),
																eneI:($('#eneI').get(0).value),
																febI:($('#febI').get(0).value),
																marI:($('#marI').get(0).value),
																abrI:($('#abrI').get(0).value),
																mayI:($('#mayI').get(0).value),
																junI:($('#junI').get(0).value),
																julI:($('#julI').get(0).value),
																agoI:($('#agoI').get(0).value),
																sepI:($('#sepI').get(0).value),
																octI:($('#octI').get(0).value),
																novI:($('#novI').get(0).value),
																dicI:($('#dicI').get(0).value)},
    function(r){
      $('#previewV').html(r);
    }
  );
}

function InsumRegSave(){
$('#previewV').hide();
		var insum = 1;
		$.post("http://localhost/Manfric/aCall/assincroned.php",{
																nameI:($('#nameI').get(0).value),
																exisI:($('#exisI').get(0).value),
																costI:($('#costI').get(0).value),
																eneI:($('#eneI').get(0).value),
																febI:($('#febI').get(0).value),
																marI:($('#marI').get(0).value),
																abrI:($('#abrI').get(0).value),
																mayI:($('#mayI').get(0).value),
																junI:($('#junI').get(0).value),
																julI:($('#julI').get(0).value),
																agoI:($('#agoI').get(0).value),
																sepI:($('#sepI').get(0).value),
																octI:($('#octI').get(0).value),
																novI:($('#novI').get(0).value),
																dicI:($('#dicI').get(0).value),
																insumo:(insum)},
    function(r){
      $('#debugg').html(r);
    }
  );
}

//Función para cancelar registros

function cancelReg(w){
	var w;
	if (w==2) { 
		$('#registerDiv').show();
		$('#previewV').hide();
	} else {
		$('#registerDiv').hide();
	}
}

//Función para agregar fómula a producto terminado

function addForm(){
var numero = parseInt(1);
var type = "A";
	$('.existForm').hide();
	$.post("http://localhost/Manfric/includes/regForm.php",{
																number:(numero),
																tipoFormula:(type)},
    function(r){
      $('#apparedForm').html(r);
    }
  );
$('.plusForm').hide();
}

function agregarAFormula(numberForm){
numberForm = parseInt(numberForm) + parseInt(1);
	$.post("http://localhost/Manfric/includes/regForm.php",{
																number:(numberForm)},
    function(r){
      $('#mas'+ numberForm).html(r);
    }
  );
}

function quitarDeFormula(numberForm){
	if(numberForm==1){
		$('#apparedForm').empty();
		$('.plusForm').show();
		$('.existForm').show();
	}else{
		$('#mas'+ numberForm).empty();
	}
	numberForm=null;
}

//Función para agregar fómula a producto terminado (de fórmulas existentes)

function addFormE(){
	$('.plusForm').hide();
	$('.existForm').hide();
	$('.sForm').show();
}

function codeForm(){
		$.post("http://localhost/Manfric/includes/existForm.php",{
																selectCode:($('#sCode').get(0).value)},
    function(r){
      $('#formula_existente').html(r);
    }
  );
}

function cancelSelectForm(){
	$('#formula_existente').empty();
	$('.plusForm').show();
	$('.sForm').hide();
	$('.existForm').show();
}

function agregarAFormulaE(numberForm){
numberForm = parseInt(numberForm) + parseInt(1);
	$.post("http://localhost/Manfric/includes/existForm.php",{
																number:(numberForm)},
    function(r){
      $('#mas'+ numberForm).html(r);
    }
  );
}

function quitarDeFormulaE(numberForm){
	if(numberForm==0){
		$('#mas0').empty();
		$('.plusForm').show();
		$('.existForm').show();
		$('.sForm').hide();
	}else{
		$('#mas'+ numberForm).empty();
	}
	numberForm=null;
}

//Funciones para generación de fómulas modificadas para productos existentes

function	formulaReg(){
	$('#previewV').hide();
	$.get('http://localhost/Manfric/includes/formulaExistente.php', function(data) {
 		$('#content').html(data)
	})
}

function ProductRegFormPrev(){
	$('#previewV').show();
	$('#registerDiv').hide();
	//$('.cForm').hide();
 var ingredientesPOST = new Array();
	var cantidadesPOST = new Array();
  $("[id^='insumSel']").each(function(){
    ingredientesPOST[ingredientesPOST.length] = $(this).val();
  })
	var ingPOST = $.toJSON(ingredientesPOST);
	$("[id^='txt']").each(function(){
    cantidadesPOST[cantidadesPOST.length] = $(this).val();
  })
	var cantPOST = $.toJSON(cantidadesPOST);
	$.post("http://localhost/Manfric/includes/formulaExistentePrev.php",{
																nameProduct:($('#productoSel').get(0).value),
																ingr:(ingPOST),
																cant:(cantPOST)},
    function(r){
      $('#previewV').html(r);
    }
  );
}

function FormulaExistenteRegSave(){
$('#previewV').hide();
		var fr = 1;
		$('#registerDiv').hide();
	//$('#registerDiv').hide();
//$('.cForm').hide();
  var ingredientesPOST = new Array();
	var cantidadesPOST = new Array();
  $("[id^='insumSel']").each(function(){
    ingredientesPOST[ingredientesPOST.length] = $(this).val();
  })
	var ingPOST = $.toJSON(ingredientesPOST);
	$("[id^='txt']").each(function(){
    cantidadesPOST[cantidadesPOST.length] = $(this).val();
  })
	var cantPOST = $.toJSON(cantidadesPOST);
		$.post("http://localhost/Manfric/aCall/assincroned.php",{
																nameProduct:($('#productoSel').get(0).value),
																formulas:(fr),
																ingr:(ingPOST),
																cant:(cantPOST)},
    function(r){
      $('#debugg').html(r);
    }
  );
}

function mostrarDiv(){
		$.post("http://localhost/Manfric/includes/select_de_formula_existente.php",{
																prodId:($('#productoSel').get(0).value)},
    function(r){
      $('#select_code_id').html(r);
    }
  );
	$('#selectedProduct').show();
}

//Funciones para generación y manipulación de ordenes de producción

function orderReg(){
p = 1;
	$('#previewV').hide();
	$.post('http://localhost/Manfric/includes/ordenes.php',{
																pst:(p)},

	function(data) {
 		$('#content').html(data)
	})
}

function mostrar_formulas(){
	$.post("http://localhost/Manfric/includes/parteRegistroOrden.php",{
																nombre_producto:($('#productoSel').get(0).value)},
    function(r){
      $('#complete_form').html(r);
    }
  );
}

function mostrar_resto(){
	$('.hidde_order').show();
}

function orderPrev(){
	$('#previewV').show();
	$('#registerDiv').hide();
	$.post("http://localhost/Manfric/includes/orderPreview.php",{
																prod:($('#productoSel').get(0).value),
																cant:($('#cantidad').get(0).value),
																form:($('#formulaSel').get(0).value),
																comm:($('#comments').get(0).value)},
    function(r){
      $('#previewV').html(r);
    }
  );
}

function orderSave(){
		$('#previewV').hide();
		var orderSaver = 1;
		$.post("http://localhost/Manfric/aCall/assincroned.php",{
																oNameP:($('#productoSel').get(0).value),
																oCantP:($('#cantidad').get(0).value),
																oForm:($('#formulaSel').get(0).value),
																oComm:($('#comments').get(0).value),
																oSave:(orderSaver)},
    function(r){
      $('#debugg').html(r);
    }
  );
}

	//Funciones para ver ordenes

function oederSee(){
p = 1;
	$('#previewV').hide();
	$.post('http://localhost/Manfric/includes/orderView.php',{
																pstO:(p)},

	function(data) {
 		$('#content').html(data)
	})
}

function viewOrders(){
 if(($('#clas').get(0).value)=="Mes/Ano"){
		$('#orderA').show();
	}
}

function viewOrdersYear(){
	if(($('#year').get(0).value)!="null"){
		$('#orderAA').show();
	}
}

function viewOrdersMonth(){
	if(($('#month').get(0).value)!="null"){
		$('.viewOrder').show();		
		var orderView = 1;
		$.post("http://localhost/Manfric/includes/ordenConsult.php",{
																oYearP:($('#year').get(0).value),
																oMonthP:($('#month').get(0).value),
																oView:(orderView)},
    function(r){
      $('#resultQuery').html(r);
    }
  );
	}
}

//Funciones para inventarios

function addMat(){
	p = 1;
	$('#previewV').hide();
	$.post('http://localhost/Manfric/includes/inventarioInsumo.php',{
																pstI:(p)},
	function(data) {
 		$('#content').html(data)
	})
}

function mC(){
	$('.cantAppared').show();
}

function iIPrev(){
	$('#previewV').show();
	$('#registerDiv').hide();
	$.post("http://localhost/Manfric/includes/iIPreview.php",{
																insu:($('#insumSel').get(0).value),
																cant:($('#cantInvent').get(0).value)},
    function(r){
      $('#previewV').html(r);
    }
  );
}

function addMatInv(){
		$('#previewV').hide();
		var addInsumo = 1;
		$.post("http://localhost/Manfric/aCall/assincroned.php",{
																insuA:($('#insumSel').get(0).value),
																cantA:($('#cantInvent').get(0).value),
																addInsum:(addInsumo)},
    function(r){
      $('#debugg').html(r);
    }
  );
}

//Funciones para liquidación de ordenes de producción

function orderLiquid(){
	$('#previewV').hide();
	$.get('http://localhost/Manfric/includes/orderLiquid.php', function(data) {
 		$('#content').html(data)
	})
}

function liquid(id_orden){
	$('#previewV').hide();
	$('#content').hide();
	$('#order_Liquid').show();
	$.post("http://localhost/Manfric/includes/orderLiquidFill.php",{
																id_a_liquidar:(id_orden)},
    function(r){
      $('#order_Liquid').html(r);
    }
  );
}

function aceptar_liquidacion(){
	$('#order_Liquid').hide();
	$('#order_liquid_message').show();
	$.post("http://localhost/Manfric/includes/liquidMessage.php",{
																ocant:($('#cant_o').get(0).value),
																ocoml:($('#comentarios_liquidacion').get(0).value),
																oreal:($('#produccion_real').get(0).value),
																oid:($('#id_o').get(0).value)},
    function(r){
      $('#order_liquid_message').html(r);
    }
  );
}

function cancelar_liquidacion(){

	$('#content').show();
	$('#order_Liquid').hide();
}

function sil(){
	$('#content').show();
//	$('#order_Liquid').hide();
	var liq_or = 1;
	$.post("http://localhost/Manfric/aCall/assincroned.php",{
																ocant:($('#cant_o').get(0).value),
																ocoml:($('#comentarios_liquidacion').get(0).value),
																oreal:($('#produccion_real').get(0).value),
																oid:($('#id_o').get(0).value),
																codpr:($('#codp_o').get(0).value),
																liquidar_orden:(liq_or)},
    function(r){
      $('#debugg').html(r);
    }
  );
}
