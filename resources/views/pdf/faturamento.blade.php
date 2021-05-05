<!-- Utilizamos as variáveis de Request que são enviados ao Controller e o retorno da função JS 

Autor: Marcelo Suguiura
Data da criação: 24/04/2021
Data da alteração:  -->

<!-- 21. Receita bruta anual nos últimos 3 exercícios -->

 <!-- Pergunta 21 -->
 <table>
    <tr>
        <td class="questions">         
            Receita bruta anual nos últimos 3 exercícios - em R$                   
        <td>       
        <td class="questions">         
            Faturamento bruto nos últimos 12 meses            
        <td>                                                       
    </tr>            
</table>

<!-- tabela da questão 21 -->
<table  class="anwers tab21">
    <tr class="bold" style="text-align:center">
        <td> Exercício</td>
        <td> Valor - R$</td>                
    </tr>
    <tr style="text-align:center"> 
        <td>{{$exerc1}}</td>
        <td class="number"> {{$entROB1}} </td>   
        <td class="number space1 bold"> R$ {{$entTotROB}}</td>             
    </tr>
    <tr style="text-align:center">
        <td>{{$exerc2}}</td>
        <td class="number"> {{$entROB2}} </td>               
    </tr>
    <tr>
        <td  style="text-align:center">{{$exerc3}}</td>
        <td class="number"> {{$entROB3}} </td>  
    </tr>            
</table>



