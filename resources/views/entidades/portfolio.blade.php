<div class="questions">
        <h4><b>Estabelecimento de Limite</b></h4>   
        <h2>Portfólio de Operações</h2>         
        <br>                                 
</div>

<div class="answers">
        <table style="float: left">        
                <tr>
                        <td>Limite estabelecido/proposto</td>
                        <td class="valor-tab"><input id="limPropPortf" readonly="“true”" name="limPropPortf" style= "text-align: right;" id="valor" class="format"/></td>
                </tr>    
                <tr class="separar"></tr>
                <tr>
                        <td>Alçada para estabelecimento</td>       
                        <td class="valor-tab"><input id = "alcada" name = "alcada" style= "text-align: center;"/></td>
                </tr>                                 
        </table>
        <div id="space"></div>   
       
        <table style="float: left">                                
                <tr>
                        <td>Limite anterior</td>
                        <td class="valor-tab"><input id="portfLimAnt" readonly="“true”" name="portfLimAnt" style= "text-align: right;"/></td>
                </tr>    
                <tr class="separar"></tr>
                <tr>
                        <td>Risco anterior</td>       
                        <td class="valor-tab"><input id="portfRiscAnt" name="portfRiscAnt" style= "text-align: center;"/></td>
                </tr>  
                <tr class="separar"></tr>
                <tr>                                                
                        <td>Limite calculado</td>
                        <td class="valor-tab" style= "text-align: right;">
                                <span id="inputLimCalculadoSpan" name="inputLimCalculadoSpan"></span>
                                <input type='hidden' id="inputLimCalculado" name="inputLimCalculado">
                        </td>                                                                
                </tr>    
                <tr class="separar"></tr>
                <tr>
                        <td>Risco calculado/atribuído</td>   
                        <td class="valor-tab">
                                <span style="margin:auto; display:table;" id="inputRisco1Span" name="inputRisco1Span"></span>
                                <input type='hidden' id="inputRisco1" name="inputRisco1">
                        </td>    
                        <!-- <label class="valor-tab" id="inputRisco1"></label> -->

                </tr>      
                <tr class="separar"></tr>
                <tr>
                        <td>Risco calculado/atribuído FEI</td>     
                        <td class="valor-tab">
                                <span style="margin:auto; display:table;" id="inputRisco2Span" name="inputRisco2Span"></span>
                                <input type='hidden' id="inputRisco2" name="inputRisco2">
                        </td>                                                   
                </tr>                                                                  
        </table>
</div>
<!-- Situação econômico-financeira -->

<div style="float: left margin-top:30px;">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                A situação econômico-financeira da entidade comporta o limite calculado?</b>
        </label>                        
</div>

<div class="answer"> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="sitEcon1" name="sitEcon" value="1" class="custom-control-input">
                <label class="custom-control-label" for="sitEcon1">Sim</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="sitEcon2" name="sitEcon" value="2" class="custom-control-input">
                <label class="custom-control-label" for="sitEcon2">Não</label>
        </div>                                                                              
</div>

<!-- Cheque / Cartão -->

<div style="margin-top:50px;">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                Confirma o limite de Cheque Ouro e Cartão de Crédito estabelecido/proposto com
                base nas condições anteriormente estabelecidas na Divisão de Análise?</b>
        </label>                        
</div>

<div class="answer"> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="cheqCart1" name="cheqCart" value="1" class="custom-control-input">
                <label class="custom-control-label" for="cheqCart1">Sim</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="cheqCart2" name="cheqCart" value="2" class="custom-control-input">
                <label class="custom-control-label" for="cheqCart2">Não</label>
        </div>    
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
                <input type="radio" id="cheqCart3" name="cheqCart" value="3" class="custom-control-input">
                <label class="custom-control-label" for="cheqCart3">Não foi estabelecido na Divisão de Análise</label>
        </div>    
</div>

<!-- Portfólio -->

<div style="margin-top:50px;"> </div>  
<div class="answers">            
        <table  style="float: left" class="tab-portfolio">
                <tr> <td >&nbsp</td> <td style="text-align: center;"> <b> Calculado</b> </td> </tr>   
                <tr> <td><b>COMERCIALIZAÇÃO</b></td> <td class="valor-tab"><input id="portfCalcComer" name="portfCalcComer" style= "text-align: right;"/></td>                                                             
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp<b> Antecipação de Recebíveis</b></td> <td class="valor-tab"> <input id="portfCalcAntRec" name="portfCalcAntRec" style= "text-align: right;"/></td>                                                                         
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. ACL – Antecipação VISA</td> <td class="valor-tab"> <input id="portfCalcAntACL" name="portfCalcAntACL" style= "text-align: right;"/></td>                                   
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2. Desconto de Cheques</td> <td class="valor-tab"> <input id="portfCalcDescChq" name="portfCalcDescChq" style= "text-align: right;"/></td>                                    
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. Desconto de Duplicatas</td> <td class="valor-tab"> <input id="portfCalcDescDupl" name="portfCalcDescDupl" style= "text-align: right;"/></td> 
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4. Vendor</td> <td class="valor-tab"> <input id="portfCalcVend" name="portfCalcVend" style= "text-align: right;"/></td> 
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp<b> Lastreadas por Recebíveis</b></td> <td class="valor-tab"> <input id="portfCalcLastRec" name="portfCalcLastRec" style= "text-align: right;"/></td> 
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. Lastreadas por fatura VISA</td> <td class="valor-tab"> <input id="portfCalcLastVisa" name="portfCalcLastVisa" style= "text-align: right;"/></td> 
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2. Lastreadas por Cheques</td> <td class="valor-tab"> <input id="portfCalcLastChq" name="portfCalcLastChq" style= "text-align: right;"/></td> 
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. Lastreadas por Títulos</td> <td class="valor-tab"> <input id="portfCalcLastTit" name="portfCalcLastTit" style= "text-align: right;"/></td> 
                <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4. Antecipação Fatura SUS</td> <td class="valor-tab"> <input id="portfCalcAntSUS" name="portfCalcAntSUS" style= "text-align: right;"/></td>                                 
        </table>  


        <div id="space"></div>

        <table  style="float: left" class="tab-portfolio">
                <tr> <td style="text-align: center;"><b> Estabelecido </b> </td></tr>  
                <tr> <td class="valor-tab"><input type="text" readonly=“true” style= "text-align: right;" id="estabComercial" name="estabComercial" class="format"/></td></tr>        
                <tr> <td class="valor-tab"><input type="text" readonly=“true” style= "text-align: right;" name="estabAntecRec" id="estabAntecRec" class="format estabPropRec"/></td></tr>                                       
                <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabACL" name="estabACL" class="format antecRec"/></td></tr>                                        
                <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabDesCheq" name="estabDesCheq" class="format antecRec"/></td></tr>                                       
                <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabDescDupl" name="estabDescDupl" class="format antecRec"/></td></tr>                                       
                <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabVendor" name="estabVendor" class="format antecRec"/></td></tr>                                                                                         
                <tr> <td class="valor-tab"><input type="text" readonly=“true” style= "text-align: right;" name="estabLastRec" id="estabLastRec" class="format"/></td></tr>
                <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabVisa" name="estabVisa" class="format lastRec"/></td></tr>
                <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabCheq" name="estabCheq" class="format lastRec"/></td></tr>
                <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabTit" name="estabTit" class="format lastRec"/></td></tr>
                <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabSus" name="estabSus"  class="format lastRec"/></td></tr>                                 
        </table>    

        <div id="space"></div>  
        <!-- <table style="float: left" class="tab-portfolio"> -->
                <!-- <tr> <td style="text-align: center;"> <b> Garantias mínimas </b> </td> </tr>                                                                                           
                <tr> <td id="no-border">&nbsp</td></tr>                                       
                <tr> <td id="no-border">&nbsp</td></tr>                                         -->
                <!-- <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>                                       
                <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>                                       
                <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>                                       
                <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>                                         
                <tr> <td id="no-border">&nbsp</td></tr>     
                <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>
                <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>
                <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>
                <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>                                                                              -->
        <!-- </table>  -->
</div> 

<!-- Capital de giro -->
<table  style="float: left" class="tab-portfolio">             
        <tr> <td><b>CAPITAL DE GIRO</b></td> <td class="valor-tab"><input id="calcCapitGiro" name="calcCapitGiro" class="format" style= "text-align: right;"/></td>        
        <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp<b>Crédito Rotativo</b></td> <td class="valor-tab"><input id="calcCredRot" name="calcCredRot" class="format" style= "text-align: right;"/></td>              
        <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. Cheque Ouro Empresarial&nbsp;</td> <td class="valor-tab"><input id="calcChequeOur" name="calcChequeOur" class="format" style= "text-align: right;"/></td>
        <!-- Compara o calculado para o cheque ouro e o vigente digitado pelo usuário -->
        <input type="hidden" id="inputAuxCheqOuro">
</table>   
<div id="space"></div>

<table  style="float: left" class="tab-portfolio" >                                          
        <tr> <td class="valor-tab"><input type="text" readonly=“true” style= "text-align: right;" id="estabCapitalGiro" name="estabCapitalGiro" class="format"/></td></tr>                                       
        <tr> <td class="valor-tab"><input type="text" readonly=“true” style= "text-align: right;" id="estabCredRot" name="estabCredRot" class="format"/></td></tr>                                                                                               
        <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabChqOuro" name="estabChqOuro" class="format rotativo estabProp"/></td></tr>     
</table>    
<div id="space"></div>  
<table style="float: left" class="tab-portfolio">                                                                                                                                  
        <tr> <td id="no-border">&nbsp</td></tr>       
        <tr> <td id="no-border">&nbsp</td></tr>                                                                                                                                                                                            
        <!-- <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>                                                                                                              -->
</table>  

<table  style="float: left" class="tab-portfolio">                                                                                      
        <tr> <td width=247>&nbsp&nbsp&nbsp&nbsp&nbsp<b>Demais Operações</b></td> </tr>                                                                            
        <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. Sem Garantias – Cartão</td> <td class="valor-tab"><input id="calcSemGar" name="calcSemGar" class="format" style= "text-align: right;"/></td>
        <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp de Crédito Empresarial</td> </tr>  
         <!-- Compara o calculado para o cartão e o vigente digitado pelo usuário -->
         <input type="hidden" id="inputAuxCartaoEmp">                                                                             
</table>   
<div id="space"></div>

<table  style="float: left" class="tab-portfolio" >                                          
        <tr> <td id="no-border">&nbsp</td></tr>                         
        <tr> <td class="valor-tab"><input onblur="maiorValor()" type="text" style= "text-align: right;" id="estabCartEmp" name="estabCartEmp" class="format rotativo estabProp"/></td></tr>                                                                                                                                           
        <tr> <td id="no-border">&nbsp</td></tr>
</table>    
<div id="space"></div>  
<table style="float: left" class="tab-portfolio">                                                                                                                                                                           
        <tr> <td width=400 id="no-border">&nbsp</td></tr>         
        <tr> <td width=400 id="no-border">&nbsp</td></tr>                                                                                                                                                                                                                           
</table>  
<div id="space"></div>


<!-- Longo Prazo -->   
<table  style="float: left" class="tab-portfolio">                                                                                      
        <tr> <td width=253><b>LONGO PRAZO</b></td> </tr>                                                                             
        <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. Investimento/Leasing</td> <td class="valor-tab"><input id="calcInvest" name="calcInvest" class="format" style= "text-align: right;"/></td>                                                                     
        <tr> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp doméstico</td> </tr>                                                                               
</table>   
<div id="space"></div>

<table  style="float: left" class="tab-portfolio" >                                          
        <tr> <td id="no-border">&nbsp</td></tr>                         
        <tr> <td class="valor-tab"><input type="text" style= "text-align: right;" id="estabInv" name="estabInv" class="format"/></td></tr>                                                                                                                                           
        <tr> <td id="no-border">&nbsp</td></tr>
</table>    
<div id="space"></div>  
<table style="float: left" class="tab-portfolio">                                                                                                                                                                           
        <tr> <td>&nbsp</td></tr>    
        <!-- <tr> <td class="valor-tab"><input type="text" style= "text-align: right;"/></td></tr>                                                                                                                                                                                                                                                                                                                  -->
</table>  
<div id="space"></div>
