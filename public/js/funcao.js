// Máscara de valores númericos para elementos input com a classe format                     
$(document).ready(function(){
    $("input.format").maskMoney({symbol:'', showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
}); 

// Máscara para data
$(document).ready(function(){
    $("input.format-data").mask("99/99/9999");
}); 

//Máscara para o CPF
$(document).ready(function(){
    $("#cpf1").mask("999.999.999-99");
    $("#cpf2").mask("999.999.999-99");
});

//habilitar as abas de dirigentes sempre que forem clicadas

$(document).ready(function(){
    $("#dirigente1").click(function(){
        habilitaDir1();        
    });    
 });

 $(document).ready(function(){
    $("#dirigente2").click(function(){
        habilitaDir2();        
    });    
 });

// funções para mostrar/esconder os formulários

$(document).ready(function(){
    $("#entidadeBtn").click(function(){
        $("#entidadesToggle").toggle();
        $("#dirigente1Toggle").hide();
        $("#dirigente2Toggle").hide();
        $("#portfolioToggle").hide();
        $("#parecerToggle").hide();      
    });    
});


$(document).ready(function(){
   $("#dirigente2Btn").click(function(){
       $("#dirigente2Toggle").toggle();
       $("#entidadesToggle").hide();
       $("#dirigente1Toggle").hide();
       $("#portfolioToggle").hide();
       $("#parecerToggle").hide();

   });    
});



$(document).ready(function(){
   $("#parecerBtn").click(function(){
       $("#parecerToggle").toggle();
       $("#entidadesToggle").hide();
       $("#dirigente1Toggle").hide();
       $("#dirigente2Toggle").hide();
       $("#portfolioToggle").hide();


   });    
});

// função teste para o desenvolvedor - mostra o portfólio com opções marcadas na planilha de entidadades
// e dirigente
$(document).ready(function(){
    $("#desenvBtn").click(function(){
    //     $("#parecerToggle").hide();
    //     $("#entidadesToggle").hide();
    //     $("#dirigente1Toggle").hide();
    //     $("#dirigente2Toggle").hide();
         $("#portfolioToggle").toggle();

        $('#opc1Ser').attr('checked', true);
        $('#opc1').attr('checked', true);
        $('#histRestOpc4').attr('checked', true);
        $('#tempAtv4').attr('checked', true);
        $('#cliDes6').attr('checked', true);
        $('#conceito1').attr('checked', true);
        $('#devol1').attr('checked', true);
        $('#excessos1').attr('checked', true);
        $('#cheque1').attr('checked', true);
        $('#opr1').attr('checked', true);
        $('#pontBB1').attr('checked', true);
        $('#pontExt2').attr('checked', true);
        $('#scr1').attr('checked', true);
        $('#atraso2').attr('checked', true);
        $('#analise1').attr('checked', true);
        $('#riscAnt1').attr('checked', true);
        $('#concent3').attr('checked', true);
        $('#limVig1').attr('checked', true);
        $('#dirigente1').attr('checked', true);
        $("input[name=dir1]").val('Marcelo');
        $("input[name=cpf1]").val('233.333.333-60');
        $("input[name=mci1]").val('999999999');
        $("input[name=cargo1]").val('Diretor');
        //vencimento do mandato (dia atual)
        document.getElementById('mandato1').value = new Date().toISOString().substring(0, 10);               

        $('#anotEmSerDir1-1').attr('checked', true);
        $('#anotRepDir1-1').attr('checked', true);
        $('#histRestDir1-4').attr('checked', true);
        $('#cliDesdeDir1-5').attr('checked', true);
        $('#emprDir1-1').attr('checked', true);
        $('#conceitoDir1-1').attr('checked', true);
        $('#dir1Devol1').attr('checked', true);
        $('#dir1Exces1').attr('checked', true);
        $('#chequeDir1-1').attr('checked', true);
        $('#operDir1-1').attr('checked', true);
        $('#pontualBB_Dir1-1').attr('checked', true);
        $('#pontualExtDir1-3').attr('checked', true);

        
        $("input[name=entTotROB]").val('333.333,00');
        //$("input[name=entLim]").val('100.000,00');
        //$("input[name=limPropPortf]").val('100.000,00');
        //chama a função que mostra o risco A checked default 
        mostrarRiscoChekedAut();       
        entMostraPortfolioDesenv();
        enviaForm();          
        entMostraPortfolio();
      
    });    
 });
 


//Marcar e desmarcar checkbox questão 7 entidades
function marcaDesmarca(caller) {
    var checks = document.querySelectorAll('input[type="checkbox"]');    
    checks.forEach(c => c.checked = (c == caller) );
  }

// Marcar e desmarcar checkbox questão 7 dirigentes
function verificaCheckbox () {
    if(document.getElementById('excDir1Check1').checked){  
        document.getElementById('excDir1Check2').checked = false;    
    }
    else if (document.getElementById('excDir1Check2').checked){  
        document.getElementById('excDir1Check1').checked = false;
    }
}

// função recebe os valores da questão 12 de entidades (atual), retira a máscara e exibe a situação
function calcular12() {
	let elements = $(".respFiscPrev");
	for (let i = 0; i < 6; i++) {
		elements.push(elements[i].value.replace(/\./g, "").replace(",", "."));
    }
    // caso queira sumarizar todos os valores na variável valor
	let valor = 0;
	for (let i = 6; i < 13; i++) {
		if (!Number.isNaN(Number(elements[i]))) {
			valor += Number(elements[i]);
		}
	}
	if (!Number.isNaN(Number(elements[6]))) {
		if (Number(elements[6]) >= 0) {            
            //passa o texto para a tela entidade.entidade               
            document.getElementById("situacao12").innerHTML = "Em dia.";  
             //passa o texto para a tela pdf.entidade  
            document.getElementById("situacaoDoze").value = "Em dia.";        
        } 
    }
    
    if ((!Number.isNaN(Number(elements[7]))) || (!Number.isNaN(Number(elements[8])))) {
		if ((Number(elements[7]) > 0) || (Number(elements[8]) > 0))  {      
            //passa o texto para a tela entidade.entidade         
			document.getElementById("situacao12").innerHTML = "Em atraso.";
             //passa o texto para a tela pdf.entidade  
            document.getElementById("situacaoDoze").value = "Em atraso.";
        } 
    }
  
    if (!Number.isNaN(Number(elements[9]))) {
		if ((Number(elements[9]) > 0) && (Number(elements[7]) <= 0) && (Number(elements[8]) <= 0))  {   
            //passa o texto para a tela entidade.entidade                    
            document.getElementById("situacao12").innerHTML = "Renegociadas.";   
            //passa o texto para a tela pdf.entidade   
            document.getElementById("situacaoDoze").value = "Renegociadas.";        
        } 
    }

    if ((!Number.isNaN(Number(elements[10]))) || (!Number.isNaN(Number(elements[11])))) {
		if ((Number(elements[10]) > 0) || (Number(elements[11]) > 0))  {   
            //passa o texto para a tela entidade.entidade                 
			document.getElementById("situacao12").innerHTML = "Reneg em atraso.";
            //passa o texto para a tela pdf.entidade  
            document.getElementById("situacaoDoze").value = "Reneg em atraso.";
        } 
    } 
}

// função recebe os valores da questão 13 de entidades (atual), retira a máscara e exibe a situação
function calcular13() {
	let elements = $(".RespForn");
	for (let i = 0; i < 6; i++) {
        elements.push(elements[i].value.replace(/\./g, "").replace(",", "."));
		// elements.push(elements[i].value.replace("R$ ", "").replace(/\./g, "").replace(",", "."));
    }
    // caso queira sumarizar todos os valores na variável valor
	let valor = 0;
	for (let i = 6; i < 13; i++) {
		if (!Number.isNaN(Number(elements[i]))) {
            valor += Number(elements[i]);
            // console.log(Number(elements[i]));
		}
	}
	if (!Number.isNaN(Number(elements[6]))) {
		if (Number(elements[6]) >= 0) {        
            //passa o texto para a tela entidade.entidade     
			document.getElementById("situacao13").innerHTML = "Em dia.";
            //passa o texto para a tela pdf.entidade  
            document.getElementById("situacaoTreze").value = "Em dia."; 
        } 
    }

      
    if ((!Number.isNaN(Number(elements[7]))) || (!Number.isNaN(Number(elements[8])))) {
		if ((Number(elements[7]) > 0) || (Number(elements[8]) > 0))  {   
            //passa o texto para a tela entidade.entidade        
			document.getElementById("situacao13").innerHTML = "Em atraso.";
            //passa o texto para a tela pdf.entidade  
            document.getElementById("situacaoTreze").value = "Em atraso."; 
        } 
    }

    if (!Number.isNaN(Number(elements[9]))) {
		if ((Number(elements[9]) > 0) && ((Number(elements[7]) <= 0) && (Number(elements[8]) <= 0)))  {  
            //passa o texto para a tela entidade.entidade                   
            document.getElementById("situacao13").innerHTML = "Renegociadas.";  
             //passa o texto para a tela pdf.entidade  
             document.getElementById("situacaoTreze").value = "Renegociadas.";                    
        } 
    }
   

    if ((!Number.isNaN(Number(elements[10]))) || (!Number.isNaN(Number(elements[11])))) {
		if ((Number(elements[10]) > 0) || (Number(elements[11]) > 0))  {   
            //passa o texto para a tela entidade.entidade               
			document.getElementById("situacao13").innerHTML = "Reneg em atraso.";
            //passa o texto para a tela pdf.entidade  
            document.getElementById("situacaoTreze").value = "Reneg em atraso."; 
        } 
    } 
}

// função recebe os valores da questão 14 de entidades (atual), retira a máscara e exibe a situação
function calcular14() {
	let elements = $(".RespTrab");
	for (let i = 0; i < 6; i++) {
		elements.push(elements[i].value.replace(/\./g, "").replace(",", "."));
    }
    // caso queira sumarizar todos os valores na variável valor
	let valor = 0;
	for (let i = 6; i < 13; i++) {
		if (!Number.isNaN(Number(elements[i]))) {
			valor += Number(elements[i]);
		}
	}
	if (!Number.isNaN(Number(elements[6]))) {
		if (Number(elements[6]) >= 0) {           
			document.getElementById("situacao14").innerHTML = "Em dia.";
            //passa o texto para a tela pdf.entidade  
            document.getElementById("situacaoCatorze").value = "Em dia."; 
        } 
    }
    
    if ((!Number.isNaN(Number(elements[7]))) || (!Number.isNaN(Number(elements[8])))||(!Number.isNaN(Number(elements[9])))) {
		if ((Number(elements[7]) > 0) || (Number(elements[8]) > 0) || (Number(elements[9]) > 0))  {           
			document.getElementById("situacao14").innerHTML = "Em atraso.";
            //passa o texto para a tela pdf.entidade  
            document.getElementById("situacaoCatorze").value = "Em atraso."; 
        } 
    }
  
   
    if (!Number.isNaN(Number(elements[9]))) {
		if ((Number(elements[9]) > 0) && (Number(elements[7]) <= 0) && (Number(elements[8]) <= 0))  {                   
            document.getElementById("situacao14").innerHTML = "Renegociadas.";  
             //passa o texto para a tela pdf.entidade  
             document.getElementById("situacaoCatorze").value = "Renegociadas.";                       
        } 
    }

    if ((!Number.isNaN(Number(elements[10]))) || (!Number.isNaN(Number(elements[11])))) {
		if ((Number(elements[10]) > 0) || (Number(elements[11]) > 0))  {                
			document.getElementById("situacao14").innerHTML = "Reneg em atraso.";
             //passa o texto para a tela pdf.entidade  
             document.getElementById("situacaoCatorze").value = "Reneg em atraso."; 
        } 
    } 
}  
// Função para retirar ponto e vírgula e sumarizar o total do SCR a vencer
function EntSomaSCR() {
    let elements = $(".entVencerSCR");
	for (let i = 0; i < 3; i++) {
		elements.push(elements[i].value.replace(/\./g, "").replace(",", "."));
    }
    // caso queira sumarizar todos os valores na variável valor
	let valor = 0;
	for (let i = 3; i < 6; i++) {
		if (!Number.isNaN(Number(elements[i]))) {
			valor += Number(elements[i]);
		}
	}
    valor = valor.toLocaleString('pt-br',{minimumFractionDigits: 2});
    $("input[name=entTotVencerSCR]").val(valor);
    return false;
}

// Função para retirar ponto e vírgula e sumarizar o total do SCR vencido
function EntSomaVencSCR() {
    let elements = $(".entVencidoSCR");
	for (let i = 0; i < 4; i++) {
		elements.push(elements[i].value.replace(/\./g, "").replace(",", "."));
    }
    // caso queira sumarizar todos os valores na variável valor
	let valor = 0;
	for (let i = 4; i < 8; i++) {
		if (!Number.isNaN(Number(elements[i]))) {
			valor += Number(elements[i]);
		}
	}
    valor = valor.toLocaleString('pt-br',{minimumFractionDigits: 2});
    $("input[name=entVencidoSCR]").val(valor);
    return false;

}

// funções para habilitar/desabilitar os botões de formulários
function habilitaDir1() {
    document.getElementById("dirigente1Btn").disabled = false;
}

function desabilitaDir1() {
    document.getElementById("dirigente1Btn").disabled = true;
}

function habilitaDir2() {    
    document.getElementById("dirigente2Btn").disabled = false;
}

function desabilitaDir2() {
    document.getElementById("dirigente2Btn").disabled = true;
}

function habilitaPortfolio() {
    document.getElementById("portfolioBtn").disabled = false;
}

//esconde o botão gerar súmula se os dados da entidade e dirigentes não forem preenchidos
function habilitaGerarSumula(){
    document.getElementById("gerarBtn").disabled = false;
}

//mostra o botão gerar súmula se os dados da entidade e dirigentes forem preenchidos
function desabilitaGerarSumula(){
    document.getElementById("gerarBtn").disabled = true;
}

////////////////////////////// função para verificar se os radio da entidade foram preenchidos////////////////

function validaFormEnt(){         
    var entControle = 0;
    if ($('input[name=anotSer]:checked').length > 0) {   
        var entRadio1 =  ($('input[name=anotSer]:checked').length > 0);                                                             
    } else {        
        entControle = 1;                             
    }
    
    
    if ($('input[name=anotRep]:checked').length > 0) {   
        var entRadio2 =  ($('input[name=anotRep]:checked').length > 0);                                                     
    } else {       
        entControle = 1;        
    }

    if ($('input[name=histRest]:checked').length > 0) {   
        var entRadio3 =  ($('input[name=histRest]:checked').length > 0);                                                      
    } else {            
        entControle = 1;     
    }

    if ($('input[name=tempAtv]:checked').length > 0) {   
        var entRadio4 =  ($('input[name=tempAtv]:checked').length > 0);                                                    
    } else {       
        entControle = 1;            
    }

    if ($('input[name=cliDes]:checked').length > 0) {   
        var entRadio5 =  ($('input[name=cliDes]:checked').length > 0);                                                       
    } else {        
        entControle = 1;          
    }

    if ($('input[name=conceito]:checked').length > 0) {   
        var entRadio6 =  ($('input[name=conceito]:checked').length > 0);                                                      
    } else {        
        entControle = 1;        
    }

    if ($('input[name=devol]:checked').length > 0) {   
        var entRadio7a =  ($('input[name=devol]:checked').length > 0);                                                      
    } else {             
        entControle = 1;     
    }

    if ($('input[name=excessos]:checked').length > 0) {   
        var entRadio7b =  ($('input[name=excessos]:checked').length > 0);                                                      
    } else {       
        entControle = 1;          
    }

    if ($('input[name=cheque]:checked').length > 0) {   
        var entRadio8 =  ($('input[name=cheque]:checked').length > 0);                                                         
    } else {       
        entControle = 1;          
    }

    if ($('input[name=opr]:checked').length > 0) {   
        var entRadio9 =  ($('input[name=opr]:checked').length > 0);                                                    
    } else {       
        entControle = 1;       
    }

    if ($('input[name=pontBB]:checked').length > 0) {   
        var entRadio10 =  ($('input[name=pontBB]:checked').length > 0);                                                     
    } else {       
        entControle = 1;        
    }

    if ($('input[name=pontExt]:checked').length > 0) {   
        var entRadio11 =  ($('input[name=pontExt]:checked').length > 0);                                                      
    } else {       
        entControle = 1;          
    }

    if ($('input[name=scr]:checked').length > 0) {   
        var entRadio15 =  ($('input[name=scr]:checked').length > 0);                                                     
    } else {    
        entControle = 1;        
    }

    if ($('input[name=atraso]:checked').length > 0) {   
        var entRadio16 =  ($('input[name=atraso]:checked').length > 0);                                                      
    } else {       
        entControle = 1;    
    }

    if ($('input[name=analise]:checked').length > 0) {   
        var entRadio17 =  ($('input[name=analise]:checked').length > 0);                                                      
    } else {        
        entControle = 1;      
    }

    if ($('input[name=riscAnt]:checked').length > 0) {   
        var entRadio18 =  ($('input[name=riscAnt]:checked').length > 0);                                                    
    } else {        
        entControle = 1;       
    }

    if ($('input[name=concent]:checked').length > 0) {   
        var entRadio19 =  ($('input[name=concent]:checked').length > 0);                                                      
    } else {        
        entControle = 1;       
    }

    if ($('input[name=limVig]:checked').length > 0) {   
        var entRadio20 =  ($('input[name=limVig]:checked').length > 0);                                                  
    } else {           
        entControle = 1;  
    }

    if ($('input[name=dirigente]:checked').length > 0) {   
        var entRadio22 =  ($('input[name=dirigente]:checked').length > 0);                                                     
    } else {         
        entControle = 1;     
    }

    if(entControle == 1){
        alert ("Há questões sem resposta em Dados da Entidade");
    } else {
        entMostraDirigente1();   
    }

    // verifica a quantidade de dirigentes
    var qtdDir = document.getElementsByName("dirigente");
    for (var i = 0; i < qtdDir.length; i++) {
        if (qtdDir[i].checked) {
            qtdDir = parseInt(qtdDir[i].value);
        }
    }

   
    // se não for selecionado nenhum dirigente, desabilitar os botões
    if ((qtdDir != 1) || (qtdDir != 2)){
        var semDirigentes = 0;
    }
  
    if (semDirigentes == 0){
        naoMostraNada(); 
        desabilitaDir1();  
        desabilitaDir2();                      
    }

    if  (qtdDir == 1){
        habilitaDir1();
    }
       

    // se houver radio da entidade sem preenchimento não permite prosseguir
    if (entControle == 1){       
        entNaoMostraDirigente1(); 
        desabilitaGerarSumula();
    // se tudo for preenchido na dados entidade e houver 2 dirigentes                    
    } else if ((entControle == 0) && (qtdDir == 2)) {
        habilitaDir2();
        habilitaDir1();
        entMostraDirigente1();         
        habilitaPortfolio();
        habilitaGerarSumula();
    // se tudo for preenchido na dados entidade e houver 1 dirigente     
    } else if ((entControle == 0) && (qtdDir == 1)){
        desabilitaDir2();
        entMostraDirigente1();
        habilitaPortfolio();
        habilitaDir1();
        habilitaGerarSumula();
    }     
    return {
        qtdDir: qtdDir,        
        entControle: entControle
        
    };   
}



/////////////VALIDAR OS RADIOS DOS DIRIGENTES 1 E 2 QUANDO CLICAR EM PORTFOLIO///////////////////////////////

function validarDirigentes(){
    // receber variáveis por array da função anterior    
    var values = validaFormEnt();
    var qtdDir = values.qtdDir;           
    var entControle = values.entControle;
    var dirig1Controle = 0;
    var dirig2Controle = 0;

   /////////////VALIDAR SE OS CABEÇALHOS DOS DIRIGENTES FORAM PREENCHIDOS///////////////////////////////  
   // dirigente1
    var nomeDir1 = document.getElementById("dir1");
    var cpf1 = document.getElementById("cpf1");
    var mci1 = document.getElementById("mci1");
    var cargo1 = document.getElementById("cargo1");
    var mandato1 = document.getElementById("mandato1");

    // dirigente1
    var nomeDir2 = document.getElementById("dir2");
    var cpf2 = document.getElementById("cpf2");
    var mci2 = document.getElementById("mciDir2");
    var cargo2 = document.getElementById("cargo2");
    var mandato2 = document.getElementById("mandato2");
    
     // validar se os dados do cabeçalho do dirigente 1 foram preenchidos
    if (nomeDir1.value == ""){
        alert ("Nome não informado");        
        nomeDir1.focus();
        return;
    } else if (cpf1.value == "") {
        alert ("CPF não informado"); 
        cpf1.focus();
        return;
    } else if (mci1.value == "") {
        alert ("MCI não informado"); 
        mci1.focus();
        return;
    } else if (cargo1.value == "") {
        alert ("Cargo não informado"); 
        cargo1.focus();
        return;
    } else if (mandato1.value == "") {
        alert ("Data do mandato não informado"); 
        mandato1.focus();
        return;
    }

    // validar se os dados do cabeçalho do dirigente 2 foram preenchidos
    if ((nomeDir2.value == "") && (qtdDir == 2)){

        console.log(nomeDir2);        
        alert ("Nome não informado");            
        entMostraDirigente2();    
        nomeDir2.focus();
        return;
    } else if ((cpf2.value == "") && (qtdDir == 2)){
        alert ("CPF não informado"); 
        entMostraDirigente2();
        cpf2.focus();
        return;
    } else if ((mci2.value == "") && (qtdDir == 2)){
        alert ("MCI não informado"); 
        entMostraDirigente2();
        mci2.focus();
        return;
    } else if ((cargo2.value == "") && (qtdDir == 2)){
        alert ("Cargo não informado"); 
        entMostraDirigente2();
        cargo2.focus();
        return;
    } else if ((mandato2.value == "") && (qtdDir == 2)){
        alert ("Data do mandato não informado"); 
        entMostraDirigente2();
        mandato2.focus();
        return;
    }

    // validar dados do dirigente1  
    if ($('input[name=dir1]:checked').length > 0) {   
        var dir1Radio1 =  ($('input[name=anotEmSerDir1]:checked').length > 0);                                                                               
    }  
    

    if ($('input[name=anotEmSerDir1]:checked').length > 0) {   
        var dir1Radio1 =  ($('input[name=anotEmSerDir1]:checked').length > 0);                                                                               
    } 

    if ($('input[name=anotRepDir1]:checked').length > 0) {   
        var dir1Radio2 =  ($('input[name=anotRepDir1]:checked').length > 0);                                                                        
    }

    if ($('input[name=histRestDir1]:checked').length > 0) {   
        var dir1Radio3 =  ($('input[name=histRestDir1]:checked').length > 0);                                                             
    }

    if ($('input[name=cliDesdeDir1]:checked').length > 0) {   
        var dir1Radio4 =  ($('input[name=cliDesdeDir1]:checked').length > 0);                                                             
    } 

    if ($('input[name=emprDir1]:checked').length > 0) {   
        var dir1Radio5 =  ($('input[name=emprDir1]:checked').length > 0);                                                             
    } 

    if ($('input[name=conceitoDir1]:checked').length > 0) {   
        var dir1Radio6 =  ($('input[name=conceitoDir1]:checked').length > 0);                                                             
    } 

    if ($('input[name=dir1Devol]:checked').length > 0) {   
        var dir1Radio7a =  ($('input[name=dir1Devol]:checked').length > 0);                                                             
    } 

    if ($('input[name=dir1Exces]:checked').length > 0) {   
        var dir1Radio7b =  ($('input[name=dir1Exces]:checked').length > 0);                                                             
    } 

    if ($('input[name=chequeDir1]:checked').length > 0) {   
        var dir1Radio8 =  ($('input[name=chequeDir1]:checked').length > 0);                                                             
    } 

    if ($('input[name=operDir1]:checked').length > 0) {   
        var dir1Radio9 =  ($('input[name=operDir1]:checked').length > 0);                                                             
    } 

    if ($('input[name=pontualBB_Dir1]:checked').length > 0) {   
        var dir1Radio10 =  ($('input[name=pontualBB_Dir1]:checked').length > 0);                                                             
    } 

    if ($('input[name=pontualExtDir1]:checked').length > 0) {   
        var dir1Radio11 =  ($('input[name=pontualExtDir1]:checked').length > 0);                                                             
    } 

    if ((dir1Radio1 == true) && (dir1Radio2 == true) && (dir1Radio3 == true) && (dir1Radio4 == true) && (dir1Radio5 == true)
        && (dir1Radio6 == true) && (dir1Radio7a == true) && (dir1Radio7b == true) && (dir1Radio8 == true) && (dir1Radio9 == true)
        && (dir1Radio10 == true) && (dir1Radio11 == true)){
            dirig1Controle = 0;
    } else {
        dirig1Controle = 1;
    } 
        

    // dados do dirigente 2   
        
    if ($('input[name=anotEmSerDir2]:checked').length > 0) {   
        var dir2Radio1 =  ($('input[name=anotEmSerDir2]:checked').length > 0);                                                                     
    } 

    if ($('input[name=anotRepDir2]:checked').length > 0) {   
        var dir2Radio2 =  ($('input[name=anotRepDir2]:checked').length > 0);                                                             
    } 

    if ($('input[name=histRestDir2]:checked').length > 0) {   
        var dir2Radio3 =  ($('input[name=histRestDir2]:checked').length > 0);                                                             
    } 

    if ($('input[name=cliDesdeDir2]:checked').length > 0) {   
        var dir2Radio4 =  ($('input[name=cliDesdeDir2]:checked').length > 0);                                                             
    } 

    if ($('input[name=emprDir2]:checked').length > 0) {   
        var dir2Radio5 =  ($('input[name=emprDir2]:checked').length > 0);                                                             
    } 

    if ($('input[name=conceitoDir2]:checked').length > 0) {   
        var dir2Radio6 =  ($('input[name=conceitoDir2]:checked').length > 0);                                                             
    } 

    if ($('input[name=dir2Devol]:checked').length > 0) {   
        var dir2Radio7a =  ($('input[name=dir2Devol]:checked').length > 0);                                                             
    } 

    if ($('input[name=dir2Exces]:checked').length > 0) {   
        var dir2Radio7b =  ($('input[name=dir2Exces]:checked').length > 0);                                                             
    } 

    if ($('input[name=chequeDir2]:checked').length > 0) {   
        var dir2Radio8 =  ($('input[name=chequeDir2]:checked').length > 0);                                                             
    } 

    if ($('input[name=operDir2]:checked').length > 0) {   
        var dir2Radio9 =  ($('input[name=operDir2]:checked').length > 0);                                                             
    } 

    if ($('input[name=pontualBB_Dir2]:checked').length > 0) {   
        var dir2Radio10 =  ($('input[name=pontualBB_Dir2]:checked').length > 0);                                                             
    } 

    if ($('input[name=pontualExtDir2]:checked').length > 0) {   
        var dir2Radio11 =  ($('input[name=pontualExtDir2]:checked').length > 0);                                                             
    }  
            
    // se todos os dados do dirigente 2 forem preenchidos 
    if ((dir2Radio1 == true) && (dir2Radio2 == true) && (dir2Radio3 == true) && (dir2Radio4 == true) && (dir2Radio5 == true)
        && (dir2Radio6 == true) && (dir2Radio7a == true) && (dir2Radio7b == true) && (dir2Radio8 == true) && (dir2Radio9 == true)
        && (dir2Radio10 == true) && (dir2Radio11 == true)){
        dirig2Controle = 0;
    } else {
        dirig2Controle = 1;
    } 

    // se houver apenas um dirigente vamos assumir que os dados do dirigente 2 estão ok
    if(qtdDir == 1){
        dirig2Controle = 0;        
    }

    // se falta preencher dados da entidade
    if (entControle == 1){
        alert ("Preencha todos os dados da entidade");

    // se não houver a indicação da quantidade de dirigentes    
    } else if  (!(qtdDir == 1 || qtdDir == 2)) {
        alert("Selecione a quantidade de dirigentes");
        entNaoMostraPortfolio();
    // falta preencher dados do dirigente 2    
    } else if ((dirig1Controle == 0) && (dirig2Controle == 1)){
        alert ("Preencha todos os dados do dirigente 2");
        entMostraDirigente2();
    // falta preencher dados do dirigente 1    
    } else if ((dirig1Controle == 1) && (dirig2Controle == 0)){      
        alert ("Preencha todos os dados do dirigente 1");  
        habilitaDir1();
    // falta preencher dados dos dois dirigentes    
    }  else if ((dirig1Controle == 1) && (dirig2Controle == 1) && (qtdDir == 2)){
        alert ("Preencha os dados dos dois dirigentes");  
    // se estiver tudo preenchido, mostra o portfólio    
    } else {            
        enviaForm();          
        entMostraPortfolio();
    }  
    
    // enviar para o show o estado de preenchimento dos formulários
    document.getElementById("entControle").value = entControle;   
    document.getElementById("dirig1Controle").value = dirig1Controle;
    document.getElementById("dirig2Controle").value = dirig2Controle; 
   
   

}  


// função acionada após a validação dos dirigentes
function enviaForm(){            
        var url = window.location.protocol+'//'+window.location.host+'/entidades/store';     
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });        
        $.ajax({
            type: "POST",
            url:  url,
            data: $("#formulario").serialize(),           
            dataType: "json",
            beforeSend: function(){
                $('.ajax-loader').css("visibility", "visible");
            },
            success: function($retorno){               
                $("#inputLimCalculado").val ($retorno.limFinal); 
                $("#inputLimCalculadoSpan").text ($retorno.limFinal);
                $("#inputRisco1").val ($retorno.risco1); 
                $("#inputRisco1Span").text ($retorno.risco1);
                $("#inputRisco2").val ($retorno.risco2);   
                $("#inputRisco2Span").text ($retorno.risco2);
                $("#inputAuxCheqOuro").val ($retorno.auxCheqOuro); 
                $("#inputAuxCartaoEmp").val ($retorno.auxCartaoEmp);                 
                preencherPortfolio();                           
            },
            error: function($retorno){
                console.log($retorno);
            }, 
            complete: function(){
                $('.ajax-loader').css("visibility", "hidden");
            }
        });           
        preencherPortfolio();
}    


// funções colapse nos formulários 
function naoMostraNada(){
    $("#dirigente1Toggle").hide();
    $("#entidadesToggle").hide();
    $("#dirigente2Toggle").hide();
    $("#portfolioToggle").hide();
    $("#parecerToggle").hide();
}
    

function abrirDirigente1(){
    $("#dirigente1Toggle").toggle();
}
  

function entNaoMostraDirigente1(){    
    $("#dirigente1Toggle").hide();   
}

function entMostraDirigente1(){
    $("#entidadesToggle").hide();
    $("#dirigente1Toggle").toggle(); 
    $("#dirigente2Toggle").hide();
    $("#portfolioToggle").hide();
    $("#parecerToggle").hide();

}

function entNaoMostraDirigente2(){
    $("#dirigente1Toggle").toggle();    
    $("#dirigente2Toggle").hide();   
}

function entMostraDirigente2(){
    $("#entidadesToggle").hide();
    $("#dirigente1Toggle").hide(); 
    $("#dirigente2Toggle").toggle();   
}

function entNaoMostraPortfolio(){    
    $("#portfolioToggle").hide();     
}

function entMostraPortfolio(){            
    $("#portfolioToggle").toggle();  
    $("#entidadesToggle").hide();
    $("#dirigente1Toggle").hide(); 
    $("#dirigente2Toggle").hide();
    $("#parecerToggle").hide();     
}   

function entMostraPortfolioDesenv(){            
    $("#portfolioToggle").hide();         
}   
function entMostrar(){    
    $("#entidadesToggle").toggle(); 
}   

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////// funções para o portfólio///////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// captura o limite de crédito digitado em dados da entidade
$(document).ready(function(){
    $('#entLim').keyup(function(){
    $('#portfLimAnt').val($(this).val()); 
    });    
 });

 // captura o risco selecionado em dados da entidade
function capturaRisco(){
   var riscoEnt = $("input:radio[name=riscAnt]:checked").val(); 
   if (riscoEnt == '0.000000001'){
       riscoEntidade = "A";
   } else if (riscoEnt == '0.000000002'){
       riscoEntidade = "B";
   } else if (riscoEnt == '0.000000003'){
       riscoEntidade = "C";
   } else if (riscoEnt == '0.000000004'){
       riscoEntidade = "D";
   } else if (riscoEnt == '0.000000005'){
       riscoEntidade = "E";
   } else if (riscoEnt == '0.000000006'){
       riscoEntidade = "Sem risco anterior";
   }                 
   document.getElementById("portfRiscAnt").value = riscoEntidade;
}

// pegar automaticamente o risco A selecionado pelo botão desenvolvedor 
// essa função será comentada em produção!!!!!!!!!!!!
function mostrarRiscoChekedAut(){   
    var riscoEnt =  $("input:radio[name=riscAnt]:checked").val();     
    if (riscoEnt == '0.000000001'){
        riscoEntidade = "A";
    }     
    document.getElementById("portfRiscAnt").value = riscoEntidade;
}

// preencher o portfólio a partir dos valores digitados pelo usuário e pelo cálculo do modelo
function  preencherPortfolio(){  
    // preenche valores calculados contidos no bloco comercializaçao 
    var risco1 = document.getElementById("inputRisco1Span").innerText;  
    var limCalculado = document.getElementById("inputLimCalculadoSpan").innerText;  
    if (risco1 == "Não calculado"){
        document.getElementById("portfCalcComer").value = 0; 
    } else {
        document.getElementById("portfCalcComer").value = limCalculado;
        document.getElementById("portfCalcAntRec").value = limCalculado;
        document.getElementById("portfCalcAntACL").value = limCalculado;
        document.getElementById("portfCalcDescChq").value = limCalculado;
        document.getElementById("portfCalcDescDupl").value = limCalculado;
        document.getElementById("portfCalcVend").value = limCalculado;
        document.getElementById("portfCalcLastRec").value = limCalculado;
        document.getElementById("portfCalcLastVisa").value = limCalculado;
        document.getElementById("portfCalcLastChq").value = limCalculado;
        document.getElementById("portfCalcLastTit").value = limCalculado;
        document.getElementById("portfCalcAntSUS").value = limCalculado;        
    }
    // calculado para o capital de giro     
    var capitalGiro = parseInt(limCalculado.replace(/\D/gim, ''));    
    if ((capitalGiro <= 1000000)&&(capitalGiro >= 100000)){
        document.getElementById("calcCapitGiro").value = '1.000,00';
    } else {       
        var capitalGiro1 = calculaPercentual(capitalGiro, 0.10);                     
        var capitalGiro2 = capitalGiro1.toLocaleString('pt-br',{minimumFractionDigits: 2,  maximumFractionDigits: 2});       
        document.getElementById("calcCapitGiro").value = capitalGiro2;
        document.getElementById("calcCredRot").value = capitalGiro2;
        document.getElementById("calcChequeOur").value = capitalGiro2;
        document.getElementById("calcSemGar").value = capitalGiro2;
    }
    // calculado para investimento
    var investimento = calculaPercentual (capitalGiro, 0.4);    
    var investimento1 = investimento.toLocaleString('pt-br',{minimumFractionDigits: 2,  maximumFractionDigits: 2});
    document.getElementById("calcInvest").value = investimento1;      
}

// calcular os percentuais do limite calculado para capital de giro e investimento
function calculaPercentual(calculado, percentual){
   var resultado =  (calculado/100) * percentual;
   return resultado;
}






// função para não permitir que o usuário digite um valor maior que o calculado
$(document).ready(function(){
    // receber e tratar os valores digitados no estabelecido
    $('#estabACL').add('#estabDesCheq').add('#estabDescDupl').add('#estabVendor').
    add('#estabVisa').add('#estabCheq').add('#estabTit').add('#estabSus').
    add('#estabChqOuro').add('#estabCartEmp').add('#estabInv').on('keyup', function(event) {   
        
        // tratamento do bloco comercialização
        var estabACL = document.getElementById("estabACL").value;        
        var estabACL1 = estabACL.replace(/([^\d])+/gim, '');
        var estabACL2 = parseFloat(estabACL1);  
        
        var estabDesCheq = document.getElementById("estabDesCheq").value;        
        var estabDesCheq1 = estabDesCheq.replace(/([^\d])+/gim, '');
        var estabDesCheq2 = parseFloat(estabDesCheq1);  

        var estabDescDupl = document.getElementById("estabDescDupl").value;        
        var estabDescDupl1 = estabDescDupl.replace(/([^\d])+/gim, '');
        var estabDescDupl2 = parseFloat(estabDescDupl1);  

        var estabVendor = document.getElementById("estabVendor").value;        
        var estabVendor1 = estabVendor.replace(/([^\d])+/gim, '');
        var estabVendor2 = parseFloat(estabVendor1);  

        var estabVisa = document.getElementById("estabVisa").value;        
        var estabVisa1 = estabVisa.replace(/([^\d])+/gim, '');
        var estabVisa2 = parseFloat(estabVisa1);  

        var estabCheq = document.getElementById("estabCheq").value;        
        var estabCheq1 = estabCheq.replace(/([^\d])+/gim, '');
        var estabCheq2 = parseFloat(estabCheq1);  

        var estabTit = document.getElementById("estabTit").value;        
        var estabTit1 = estabTit.replace(/([^\d])+/gim, '');
        var estabTit2 = parseFloat(estabTit1);  

        var estabSus = document.getElementById("estabSus").value;        
        var estabSus1 = estabSus.replace(/([^\d])+/gim, '');
        var estabSus2 = parseFloat(estabSus1);  

        var estabChqOuro = document.getElementById("estabChqOuro").value;        
        var estabChqOuro1 = estabChqOuro.replace(/([^\d])+/gim, '');
        var estabChqOuro2 = parseFloat(estabChqOuro1);  
     
                  
        var valorMaximo = document.getElementById("portfCalcAntACL").value;
        var valorMaximo1 = valorMaximo.replace(/([^\d])+/gim, '');
        var valorMaximo2 = parseFloat(valorMaximo1);   

        if ((estabACL2 > valorMaximo2) || (estabDesCheq2 > valorMaximo2) || (estabDescDupl2 > valorMaximo2)
            || (estabVendor2 > valorMaximo2) || (estabVisa2 > valorMaximo2)|| (estabCheq2 > valorMaximo2)
            || (estabTit2 > valorMaximo2) || (estabSus2 > valorMaximo2)) {        
            return event.target.value = valorMaximo;
        }   
       
        // tratamento do bloco capital de giro
        var calcCheqOuro = document.getElementById("calcChequeOur").value;
        var calcCheqOuro1 = calcCheqOuro.replace(/([^\d])+/gim, '');
        var calcCheqOuro2 = parseFloat(calcCheqOuro1); 
        
        var estabCartEmp = document.getElementById("estabCartEmp").value;
        var estabCartEmp1 = estabCartEmp.replace(/([^\d])+/gim, '');
        var estabCartEmp2 = parseFloat(estabCartEmp1); 


        if ((estabChqOuro2 > calcCheqOuro2) || (estabCartEmp2 > calcCheqOuro2)) {        
            return event.target.value = calcCheqOuro;
        }   

        // soma o estabelecido no cheque ouro e no cartão para o grupamento rotativo
        
        if(Number.isNaN(estabChqOuro2)){
            estabChqOuro2 = 0;
        }  

        if(Number.isNaN(estabCartEmp2)){
            estabCartEmp2 = 0;
        }

       

        // tratamento do bloco LP
        var calcInvest = document.getElementById("calcInvest").value;
        var calcInvest1 = calcInvest.replace(/([^\d])+/gim, '');
        var calcInvest2 = parseFloat(calcInvest1); 
        
        var estabInv = document.getElementById("estabInv").value;
        var estabInv1 = estabInv.replace(/([^\d])+/gim, '');
        var estabInv2 = parseFloat(estabInv1); 

        if (estabInv2 > calcInvest2) {        
            return event.target.value = calcInvest;
        }  

    });
});    

// Função para retirar ponto e vírgula e capturar o maior valor digitado nos sublimites

function maiorValor() {
    var elements = $(".antecRec");
	for (var i = 0; i < 4; i++) {
        elements.push(elements[i].value.replace(/\./g, "").replace(",", "."));      
    }        
  
	for (var i = 4; i < 8; i++) {
		if (!Number.isNaN(Number(elements[i]))) {
            var num1 = [Number(elements[4])];
            var num2 = [Number(elements[5])];
            var num3 = [Number(elements[6])];
            var num4 = [Number(elements[7])];            
            var maiorAntecRec = Math.max(num1,num2,num3,num4);			
		}
    }
   
    maior = maiorAntecRec.toLocaleString('pt-br',{minimumFractionDigits: 2});
    $("input[name=estabAntecRec]").val(maior);   
      

    var elements = $(".lastRec");
	for (var i = 0; i < 4; i++) {
        elements.push(elements[i].value.replace(/\./g, "").replace(",", "."));       
    }
    
    // caso queira sumarizar todos os valores na variável valor  
	for (var i = 4; i < 8; i++) {
		if (!Number.isNaN(Number(elements[i]))) {            
            var num1 = [Number(elements[4])];           
            var num2 = [Number(elements[5])];
            var num3 = [Number(elements[6])];
            var num4 = [Number(elements[7])];            
            var maior1 = Math.max(num1,num2,num3,num4);	           		
		}
    }
    maior1 = maior1.toLocaleString('pt-br',{minimumFractionDigits: 2});     
    $("input[name=estabLastRec]").val(maior1);

    
    
    // tratar os sublimites do rotativo
    var elements = $(".rotativo");
	for (var i = 0; i < 2; i++) {
        elements.push(elements[i].value.replace(/\./g, "").replace(",", "."));       
    }
    
	for (var i = 2; i < 4; i++) {
		if (!Number.isNaN(Number(elements[i]))) {            
            var num1 = Number(elements[2]);           
            var num2 = Number(elements[3]);                                        		           
        }
        soma = num1+num2;
    }
    var calcCapitGiro = document.getElementById("calcCapitGiro").value;
    var calcCapitGiro1 = calcCapitGiro.replace(/\./g, "").replace(",", "."); 
    var calcCapitGiro2 = parseFloat(calcCapitGiro1); 
    if(soma > calcCapitGiro2){
        alert("A soma dos sublimites Cheque Ouro e Cartão Empresarial não pode exceder o valor calculado para o bloco Capital de Giro");
        document.getElementById('estabChqOuro').value=''; 
        document.getElementById('estabCartEmp').value='';
        document.getElementById('estabCredRot').value='';
    } else {
        somaRotativo = soma.toLocaleString('pt-br',{minimumFractionDigits: 2});  
        $("input[name=estabCredRot]").val(somaRotativo);
        $("input[name=estabCapitalGiro]").val(somaRotativo);
    }  
    // retorna para a função abaixo os valores estabelecidos na antecipação de recebíves e no rotativo
    return {
        maiorAntecRec: maiorAntecRec,
        soma: soma
    }; 

}


//calcular o valor estabelecido/proposto - M23
$(document).ready(function(){
    limiteProposto();
    $(window).scroll(function() {
        if (document.body.scrollTop > 30) {
            limiteProposto();
        }
    });
    // $('.estabProp').add('.estabPropRec').add('.lastRec').add('.antecRec')
    // .on('click mouseover load', limiteProposto); 

    // soma os valores estabelecidos no cheque ouro e no cartão

        function limiteProposto(){    
            // receber variáveis por array da função anterior    
            var values = maiorValor();
            // recebe o total de antecipação de recebíveis estabelecido
            var maiorAntecRec = values.maiorAntecRec;      
             // recebe a soma de cheque e cartão     
            var somaRotativo = values.soma;
           
            // valor estabelecido em investimento 
            var estabInv = document.getElementById("estabInv").value;
            var estabInv1 = estabInv.replace(/\./g, "").replace(",", "."); 
            var estabInv2 = parseFloat(estabInv1); 
            // Tratar o NaN no html
            if (Number.isNaN(estabInv2)){
                estabInv2 = 0;               
            }          
                          
            // maior valor entre a antecipação de recebíveis e o investimento
            var antecRecInvest = Math.max(maiorAntecRec,estabInv2);   
             // maior valor entre a antecipação de recebíveis e o investimento ou o rotativo
            var estabelecidoTotal = Math.max(antecRecInvest,somaRotativo);             
            estabelecidoTotal > 10000 ? $("input[name=alcada]").val("Divisão de Análise") :
            $("input[name=alcada]").val("Agência");
                   
            estabelecidoTotal = estabelecidoTotal.toLocaleString('pt-br',{minimumFractionDigits: 2});  
            $("input[name=limPropPortf]").val(estabelecidoTotal); 
            
           
        };               
        return false;
});     

//função para não permitir que os valores estabelecidos pelo usuário fiquem maiores que o calculado.
//isso ocorre caso o usuário volte ao questionário e altere as questões
//caso o calculado seja menor que o proposto, vamos zerar os campos
$(document).ready(function(){    
    zerarProposto();
    $(window).scroll(function() {
        if (document.body.scrollTop > 30) {
            zerarProposto();
        }
    });    
        // $('.estabProp').add('.estabPropRec').add('.lastRec').add('.antecRec').add('#estabACL')
        // .add('#estabDesCheq').add('#estabDescDupl').add('#estabVendor').add('#estabVisa').add('#estabCheq')
        // .add('#estabTit').add('#estabSus').add('#estabChqOuro').add('#estabCartEmp').add('#estabInv')
        // .on('click blur keyup mouseover load', zerarProposto); 
        function zerarProposto(){
            var proposto = document.getElementById('limPropPortf').value;
            var proposto1 = proposto.replace(/\./g, "").replace(",", "."); 
            var proposto2 = parseFloat(proposto1); 
            var calculado = document.getElementById('inputLimCalculado').innerText;
            var calculado1 = calculado.replace(/\./g, "").replace(",", "."); 
            var calculado2 = parseFloat(calculado1); 
            if (proposto2 > calculado2){
                document.getElementById('estabACL').value = "";
                document.getElementById('estabDesCheq').value = "";
                document.getElementById('estabDescDupl').value = "";
                document.getElementById('estabVendor').value = "";
                document.getElementById('estabVisa').value = "";
                document.getElementById('estabCheq').value = "";
                document.getElementById('estabTit').value = "";
                document.getElementById('estabSus').value = "";
                document.getElementById('estabChqOuro').value = "";
                document.getElementById('estabCartEmp').value = "";
                document.getElementById('estabInv').value = "";    
                document.getElementById('estabAntecRec').value = ""; 
                //document.getElementById('estabLastRec').value = "";    
                document.getElementById('limPropPortf').value = "";       
            }             
        }  
        return false;
}); 

//função para estabelecer o bloco comercialização - V41
$(document).ready(function(){
    estabeleComercial();
    $(window).scroll(function() {
        if (document.body.scrollTop > 30) {
            estabeleComercial();
        }
    }); 
   
    function estabeleComercial(){   
        if (document.getElementById('estabAntecRec')) {               
            var antecRecEstab = document.getElementById('estabAntecRec').value;
            var antecRecEstab1 = antecRecEstab.replace(/\./g, "").replace(",", "."); 
            var antecRecEstab2 = 0;
            antecRecEstab2 = parseFloat(antecRecEstab1);                        
        }    
        if (document.getElementById('estabLastRec')) {   
            var lastrRecEstab = document.getElementById('estabLastRec').value;
            var lastrRecEstab1 = lastrRecEstab.replace(/\./g, "").replace(",", "."); 
            var lastrRecEstab2 = parseFloat(lastrRecEstab1);            
        }    
        if (document.getElementById('limPropPortf')) {       
            var estabProposto = document.getElementById('limPropPortf').value;
            var estabProposto1 = estabProposto.replace(/\./g, "").replace(",", "."); 
            var estabProposto2 = parseFloat(estabProposto1);             
        }       
       
        // if (Math.max(antecRecEstab2,lastrRecEstab2) > estabProposto2){
        //     var estabComercial = "Ajuste ao limite proposto";             
        // } else {    
       
        var estabComercial1 = Math.max(antecRecEstab1,lastrRecEstab1);                                     
        estabComercial1 = estabComercial1.toLocaleString('pt-br',{minimumFractionDigits: 2});              
        $("input[name=estabComercial]").val(estabComercial1);  
        // }                
    }
    return false;
}); 

// Função para gerar súmula com itens checados

function gerarSumula() {
    var form = document.querySelector('#formulario');
    var botao = document.querySelector('#gerarBtn');
    
    botao.addEventListener('click', function (event) {
        event.preventDefault();
        console.log(form.anotSer.value);
    });
}

// Função para bloquear caracteres nos anos de exercício
$(document).ready(function() {
    $("#exerc1").keyup(function() {
        $("#exerc1").val(this.value.match(/[0-9]*/));        
    });
    $("#exerc2").keyup(function() {
        $("#exerc2").val(this.value.match(/[0-9]*/));        
    }); 
    $("#exerc3").keyup(function() {
        $("#exerc3").val(this.value.match(/[0-9]*/));        
    });     
});

