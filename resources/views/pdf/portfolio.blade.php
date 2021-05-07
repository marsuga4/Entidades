<!-- Preencher os dados de Risco, Limite de Crédito e Portfólio 

Autor: Marcelo Suguiura
Data da criação: 26/04/2021
Data da alteração:  -->

<!-- Risco anterior, limite atual e vencimento -->

 <table> 
    <tr> 
        <td class="questions w33">         
            Risco anterior                 
        </td>       
        <td class="questions w33">         
            Limite de crédito atual - R$           
        </td>     
        <td class="questions w33">         
            Vencimento            
        </td>                                                    
    </tr>            

    <tr> 
        <td class="w33" style="padding-left: 46px;"> {{$portfRiscAnt}}</td>  
        <td class="w33">{{$portfLimAnt}}</td>  
        <td class="w33">{{$vencAtual}}</td>                    
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
        <td class="w20"> {{$inputRisco1}}</td>  
        <td class="w20">{{$inputRisco2}}</td>  
        <td class="w20">{{$inputLimCalculado}}</td>    
        <td class="w20">{{$limPropPortf}}</td>                
    </tr>              
</table>



