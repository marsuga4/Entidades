<!-- Preencher os dados de Risco, Limite de Crédito  

Autor: Marcelo Suguiura
Data da criação: 26/04/2021
Data da alteração:  -->

<!-- Risco anterior, limite atual e vencimento -->

 <table> 
    <tr> 
        <td class="questions w20">         
            Risco anterior                 
        </td>       
        <td class="questions w20">         
            Limite de crédito atual - R$           
        </td>     
        <td class="questions w20">         
            Vencimento            
        </td>  
        <td class="questions w20">         
                       
        </td>                                                    
    </tr>            

    <tr> 
        <td class="w20" style="padding-left: 46px;"> {{$portfRiscAnt}}</td>  
        <td class="w20" style="padding-left: 76px;">{{$portfLimAnt}}</td>  
        <td class="w20">{{$vencAtual}}</td>   
        <td class="w20"></td>                 
    </tr>              
</table>

<table> 
    <tr> 
        <td class="questions w20">         
            Risco atribuído                   
        </td>       
        <td class="questions w20">         
            Risco FEI atribuído            
        </td>     
        <td class="questions w20">         
            Limite calculado - R$            
        </td> 
        <td class="questions w20">         
            Limite estabelecido/proposto - R$            
        </td>                                                    
    </tr>            

    <tr> 
        <td class="w20" style="padding-left: 46px;"> {{$inputRisco1}}</td>  
        <td class="w20" style="padding-left: 66px;">{{$inputRisco2}}</td>  
        <td class="w20" style="padding-left: 66px;">{{$inputLimCalculado}}</td>    
        <td class="w20" style="padding-left: 176px;">{{$limPropPortf}}</td>                
    </tr>              
</table>


<!-- Alçada e Situação Econômica -->

<table> 
    <tr> 
        <td class="questions">         
            Alçada                   
        </td>   
    </tr>       
    <tr> 
        <td> {{$alcada}}</td>                         
    </tr>  
    <tr> 
        <td class="questions">         
            A situação econômico-financeira da entidade comporta o limite de crédito estabelecido/proposto                   
        </td> 
    </tr>
                           
    <tr>    
        <td> 
            @if(isset($sitEcon) && ($sitEcon == 1))
                Sim
            @elseif(isset($sitEcon) && ($sitEcon == 2))
                Não 
            @else    
                Erro - Verifique a questão na aba Portfólio
            @endif
        </td>                         
    </tr>                 
</table>

<!-- Valores estabelecidos propostos -->

<table> 
    <tr> 
        <td class="questions" style="width: 100%;">         
            Valores estabelecidos/propostos com base nas condições anteriormente estabelecidas pela Divisão de Análise                               
        </td>   
    </tr>  
</table>
<table>         
    <tr>
        <td class="w33">Limite de Crédito: 
            {{($analise === "0.000000001" ? "Sim" : "Não")}}
        </td>
        <td class="w20">&nbsp;</td>
        <td class="w20">&nbsp;</td>
    </tr>
    <tr>
        <td>Cheque Ouro Empresarial:
            {{(($analise === "0.000000001") && ($estabChqOuro == $entCheque) ? "Sim" : "Não")}}
        </td>
        <td>Limite atual – R$
            {{$entCheque}}
        </td>
        <td>Vencimento:
            {{$venCheque}}
        </td>
    </tr>
    <tr>
        <td>Cartão Ouro Empresarial:
            {{(($analise === "0.000000001") && ($entCartaoEmp == $calcSemGar) ? "Sim" : "Não")}}
        </td>
        <td>Limite atual – R$
            {{$entCartaoEmp}}
        </td>

        <td>Vencimento:
            {{$venCartao}}
        </td>
    </tr>                
</table>


