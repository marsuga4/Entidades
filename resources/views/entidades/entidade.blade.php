<!-- 1. Anotações cadastrais em ser -->
                        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>01. Anotações cadastrais em ser</b></label>                        
</div>
                        
<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio"  id="opc1Ser" name="anotSer" value="65"  class="custom-control-input"/>
        <label class="custom-control-label" for="opc1Ser">Não possui anotações restritivas</label>
    </div>
                                    

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="opc2Ser" name="anotSer" value="0" class="custom-control-input" />
        <label class="custom-control-label" for="opc2Ser">Possui anotações 
        restritivas impeditivas relativas flexibilizadas
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="opc3Ser" name="anotSer" value="20" class="custom-control-input" />
        <label class="custom-control-label" for="opc3Ser">Possui anotações restritivas fracas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="opc4Ser" name="anotSer" value="-900" class="custom-control-input" />
        <label class="custom-control-label" for="opc4Ser">Possui anotações restritivas 
                impeditivas absolutas ou relativas não flexibilizadas 
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">                        
        <input type="radio" id="opc5Ser" name="anotSer"  value="10" class="custom-control-input" />
        <label class="custom-control-label" for="opc5Ser">
                Possui anotações restritivas fortes
        </label>            
    </div>

    <div class="custom-control-inline" style="width: 60%; float:right">                        
        <b> Data da Pesquisa:&nbsp  </b> <input type="date" id="data-ref" name="data-ref"/>            
    </div>
                        
</div>
        
<!-- 2. Anotações cadastrais replicadas em ser -->
        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>02. Anotações cadastrais replicadas em ser</b></label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="opc1" name="anotRep" value="65" class="custom-control-input required"/>
        <label class="custom-control-label" for="opc1">Não possui anotações replicadas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="opc2" name="anotRep" value="0" class="custom-control-input" />
        <label class="custom-control-label" for="opc2">Possui anotações 
        replicadas impeditivas relativas flexibilizadas
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="opc3" name="anotRep" value="20" class="custom-control-input" />
        <label class="custom-control-label" for="opc3">Possui anotações replicadas fracas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="opc4" name="anotRep" value="-900" class="custom-control-input" />
        <label class="custom-control-label" for="opc4">Possui anotações replicadas 
        impeditivas absolutas ou relativas não flexibilizadas </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="opc5" name="anotRep" value="10" class="custom-control-input" />
        <label class="custom-control-label" for="opc5">Possui anotações replicadas fortes</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="opc6" name="anotRep" value="99" class="custom-control-input" />
        <label class="custom-control-label" for="opc6">Desconsiderar as anotações replicadas
        por não impactar no conceito do cliente</label>
    </div>                                                                
</div>

<!-- 3. Histórico de restrições -->

<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
        03. Histórico de restrições nos últimos cinco anos</b>
    </label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestOpc1" name="histRest" value="-10" class="custom-control-input">
        <label class="custom-control-label" for="histRestOpc1">Impeditiva</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestOpc2" name="histRest" value="-5" class="custom-control-input">
        <label class="custom-control-label" for="histRestOpc2">Forte</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestOpc3" name="histRest" value="0" class="custom-control-input">
        <label class="custom-control-label" for="histRestOpc3">Fraca</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestOpc4" name="histRest" value="0.0000001" class="custom-control-input">
        <label class="custom-control-label" for="histRestOpc4">Sem histórico de restrições</label>
    </div>                                                                                
</div>

<!-- 4. Tempo de atividade -->

<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
        04. Tempo de atividade</b>
    </label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="tempAtv1" name="tempAtv" value="-950" class="custom-control-input">
        <label class="custom-control-label" for="tempAtv1">Menos de 6 meses</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="tempAtv2" name="tempAtv" value="10" class="custom-control-input">
        <label class="custom-control-label" for="tempAtv2">De 3 a menos de 6 anos</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="tempAtv3" name="tempAtv" value="25" class="custom-control-input">
        <label class="custom-control-label" for="tempAtv3">De 11 a menos de 16 anos</label>
    </div>
                                
    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="tempAtv4" name="tempAtv" value="50" class="custom-control-input">
        <label class="custom-control-label" for="tempAtv4">A partir de 31 anos</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="tempAtv5" name="tempAtv" value="0" class="custom-control-input">
        <label class="custom-control-label" for="tempAtv5">De 6 meses a menos de 3 anos</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="tempAtv6" name="tempAtv" value="15" class="custom-control-input">
        <label class="custom-control-label" for="tempAtv6">De 6 anos a menos de 11 anos</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="tempAtv7" name="tempAtv" value="40" class="custom-control-input">
        <label class="custom-control-label" for="tempAtv7">De 16 a menos de 31 anos</label> 
    </div>
</div>     
                
<!-- 5. Cliente desde -->                
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                05. Cliente desde</b>
        </label>                        
</div>

<div class="answers">

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDes1" name="cliDes" value="0" class="custom-control-input">
        <label class="custom-control-label" for="cliDes1">Menos de 6 meses</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDes2" name="cliDes" value="10" class="custom-control-input">
        <label class="custom-control-label" for="cliDes2">De 2 a menos de 5 anos</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="cliDes3" name="cliDes" value="20" class="custom-control-input">
        <label class="custom-control-label" for="cliDes3">De 10 a menos de 15 anos</label>
    </div>
        
    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDes4" name="cliDes" value="5" class="custom-control-input">
        <label class="custom-control-label" for="cliDes4">De 6 meses a menos de 2 anos</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDes5" name="cliDes" value="15" class="custom-control-input">
        <label class="custom-control-label" for="cliDes5">De 5 a menos de 10 anos</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="cliDes6" name="cliDes" value="25" class="custom-control-input">
        <label class="custom-control-label" for="cliDes6">A partir de 15 anos</label>                        
    </div>      
</div>
<!-- 6. Conceito na praça -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                06. Conceito na praça</b>
        </label>                        
</div>

<div class="answers">

        <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
                <input type="radio" id="conceito1" name="conceito" value="10" class="custom-control-input">
                <label class="custom-control-label" for="conceito1">Bem referido/bem conceituado</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
                <input type="radio" id="conceito2" name="conceito" value="5" class="custom-control-input">
                <label class="custom-control-label" for="conceito2">Sem conceito firmado</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="conceito3" name="conceito" value="5.0000001" class="custom-control-input">
                <label class="custom-control-label" for="conceito3">Desconhecido das fontes</label>
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
                <input type="radio" id="conceito4" name="conceito" value="-900" class="custom-control-input">
                <label class="custom-control-label" for="conceito4">Mal referido/conceituado</label>                        
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="conceito5" name="conceito" value="0" class="custom-control-input">
                <label class="custom-control-label" for="conceito5">Informações contraditórias das fontes</label>                        
        </div>
</div>
<!-- 7. Histórico de conta corrente -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                07. Histórico de conta corrente (últimos 6 meses)</b>
        </label>                        
</div>

<div class="answers">
        <div class="custom-control  custom-control-inline" style="width: 45%; float:left">                             
                <font size="+1" color="blue"><u><b>Devoluções</b></u></font>
        </div>
        
        <div class="custom-control  custom-control-inline" style="width: 45%; float:right">  
                <font size="+1" color="blue"><u><b>Excessos</b></u></font>                                                
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="devol1" name="devol" value="60" class="custom-control-input">      
                <label class="custom-control-label" for="devol1">Sem ocorrência de devoluções</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="excessos1" name="excessos" value="60" class="custom-control-input">      
                <label class="custom-control-label" for="excessos1">Sem ocorrência de excessos</label>  
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="devol2" name="devol" value="15" class="custom-control-input">      
                <label class="custom-control-label" for="devol2">Cheques devolvidos raramente (até 2 cheques)</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="excessos2" name="excessos" value="25" class="custom-control-input">      
                <label class="custom-control-label" for="excessos2">Excessos, raramente (até 6 excessos)</label>  
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="devol3" name="devol" value="0" class="custom-control-input">      
                <label class="custom-control-label" for="devol3">Cheques devolvidos frequentemente (acima de 2 cheques)</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="excessos3" name="excessos" value="10" class="custom-control-input">      
                <label class="custom-control-label" for="excessos3">Excessos, frequentemente (acima de 6 cheques)</label>  
        </div>
</div>        
<!-- Talonário Entidade -->
<div class="answers">                        
        <div class="custom-control custom-checkbox custom-control-inline" style="width: 45%; float:left">
                <input type="checkbox" id="talonario" name="talonario" value="0" class="custom-control-input">      
                <label class="custom-control-label" for="talonario">Talonário bloqueado</label>  
        </div>
        
        <div class="custom-control custom-checkbox custom-control-inline" style="width: 45%; float:right">
                <input type="checkbox" id="cliNovo" name="cliNovo" value="25.000000001" class="custom-control-input">      
                <label class="custom-control-label" for="cliNovo">Cliente novo (considerar ocorrências de devolução ou excessos)</label>  
        </div>
</div>

<!-- 8. Utilização de cheque especial -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                08. Utilização de cheque especial (últimos 6 meses)</b>
        </label>                        
</div>

<div class="answers">
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="cheque1" name="cheque" value="0" class="custom-control-input">      
                <label class="custom-control-label" for="cheque1">Não possui cheque especial - opção da agência</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="cheque2" name="cheque" value="35" class="custom-control-input">      
                <label class="custom-control-label" for="cheque2">Utiliza eventualmente o limite de seu cheque especial</label>  
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="cheque3" name="cheque" value="30" class="custom-control-input">      
                <label class="custom-control-label" for="cheque3">Não possui cheque especial - opção da entidade</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="cheque4" name="cheque" value="15" class="custom-control-input">      
                <label class="custom-control-label" for="cheque4">Utiliza frequentemente o limite de seu cheque especial</label>  
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="cheque5" name="cheque" value="50" class="custom-control-input">      
                <label class="custom-control-label" for="cheque5">Nunca utiliza o limite de seu cheque especial</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="cheque6" name="cheque" value="5" class="custom-control-input">      
                <label class="custom-control-label" for="cheque6">Excede frequentemente o limite de seu cheque especial</label>  
        </div>                
</div>

<!-- 9. Situação atual das operações -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                09. Situação atual das operações</b>
        </label>                        
</div>

<div class="answers">
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="opr1" name="opr" value="40" class="custom-control-input">      
                <label class="custom-control-label" for="opr1">Normal</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="opr2" name="opr" value="-900" class="custom-control-input">      
                <label class="custom-control-label" for="opr2">Responsável por operações em curso anormal</label>  
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="opr3" name="opr" value="0" class="custom-control-input">      
                <label class="custom-control-label" for="opr3">Responsável por composição de dívidas</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="opr4" name="opr" value="15" class="custom-control-input">      
                <label class="custom-control-label" for="opr4">Ainda não tomou empréstimos</label>  
        </div>
                
</div>

<!-- 10. Pontualidade BB -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
        10. Pontualidade no pagamento de empréstimos no Banco nos últimos 3 anos</b>
        </label>                        
</div>

<div class="answers">
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="pontBB1" name="pontBB" value="10.000000001" class="custom-control-input">      
                <label class="custom-control-label" for="pontBB1">Não tomou empréstimos</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="pontBB2" name="pontBB" value="10" class="custom-control-input">      
                <label class="custom-control-label" for="pontBB2">Deixou de pagar algum empréstimo no vencimento</label>  
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
                <input type="radio" id="pontBB3" name="pontBB" value="60" class="custom-control-input">      
                <label class="custom-control-label" for="pontBB3">Pagou todos os empréstimos no vencimento</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
                <input type="radio" id="pontBB4" name="pontBB" value="0" class="custom-control-input">      
                <label class="custom-control-label" for="pontBB4">Deixou de pagar vários empréstimos no vencimento</label>  
        </div>                           
</div>

<!-- 11. Pontualidade Fontes Externas -->
    
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
            11. Pontualidade Fontes Externas</b>
    </label>                        
</div>

<div class="answers">

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
            <input type="radio" id="pontExt1" name="pontExt" value="10.000000001" class="custom-control-input">
            <label class="custom-control-label" for="pontExt1">Pontualidade não apurada</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
            <input type="radio" id="pontExt2" name="pontExt" value="30" class="custom-control-input">
            <label class="custom-control-label" for="pontExt2">Pontual</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
            <input type="radio" id="pontExt3" name="pontExt" value="10" class="custom-control-input">
            <label class="custom-control-label" for="pontExt3">Paga com pequenos atrasos (até 15 dias)</label>
    </div>
    
    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
            <input type="radio" id="pontExt4" name="pontExt" value="0" class="custom-control-input">
            <label class="custom-control-label" for="pontExt4">Paga com atrasos (de 16 a 60 dias)</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
            <input type="radio" id="pontExt5" name="pontExt" value="-900" class="custom-control-input">
            <label class="custom-control-label" for="pontExt5">Habitualmente impontual (mais de 60 dias)</label>                        
    </div>
</div>

<!-- 12. Reponsabilidades fiscais e previdenciárias -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                12. Reponsabilidades fiscais e previdenciárias</b>
        </label>                        
</div>

<div class="answers">            
        <table  style="float: left">
                <tr> <td id="espaco-td">&nbsp</td> <td style="text-align: center;"> <b> Último Exercício - R$ </b> </td> </tr>   
                <tr> <td>A vencer</td> <td class="valor-tab"><input type="text" style= "text-align: right;" value="0,00" name="respFiscPrev1_ant" class="format"/></td></tr>
                <tr> <td>Vencidas - até 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;" value="0,00" name="respFiscPrev2_ant" class="format"/></td></tr>
                <tr> <td>Vencidas - há mais de 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;" value="0,00" name="respFiscPrev3_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - a vencer</td> <td class="valor-tab"><input type="text" style= "text-align: right;" value="0,00" name="respFiscPrev4_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - vencidas até 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;" value="0,00"name="respFiscPrev5_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - vencidas há mais de 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;" value="0,00" name="respFiscPrev6_ant" class="format"/></td></tr>
        </table>   
        <div id="space"></div>

        <table  style="float: left">
                <tr> <td style="text-align: center;"><b> Atual - R$ </b> </td></tr>   
                <tr> <td class="valor-tab"><input onkeyup="calcular12()" type="text" style= "text-align: right;" value="0,00" name="respFiscPrev1" class="format respFiscPrev"/></td></tr>                        
                <tr> <td class="valor-tab"><input onkeyup="calcular12()" type="text" style= "text-align: right;" value="0,00" name="respFiscPrev2" class="format respFiscPrev"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular12()" type="text" style= "text-align: right;" value="0,00" name="respFiscPrev3" class="format respFiscPrev"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular12()" type="text" style= "text-align: right;" value="0,00" name="respFiscPrev4" class="format respFiscPrev"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular12()" type="text" style= "text-align: right;" value="0,00" name="respFiscPrev5" class="format respFiscPrev"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular12()" type="text" style= "text-align: right;" value="0,00" name="respFiscPrev6" class="format respFiscPrev"/></td></tr>                                                        
        </table>    
                                
                        
                                
        <div id="space"></div>                 

        <table  style="float: left">
                <tr> <td style="text-align: center;"><b> Data: &nbsp</b> <input type="date" id="data-ref" name="data-ref"/> </td></tr>                                                          
        </table>  
        <div  style="float: left border=1px solid;">
                <b>Situação:&nbsp</b>  
                <p id="situacao12"></p>  
                <input type="hidden" name="situacaoDoze" id="situacaoDoze"/>              
        </div>          
</div>

<!-- 13. Reponsabilidades Junto aos Fornecedores -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                13. Reponsabilidades junto aos fornecedores</b>
        </label>                        
</div>

<div class="answers">            
        <table  style="float: left">
                <tr> <td id="espaco-td">&nbsp</td> <td style="text-align: center;"> <b> Último Exercício - R$ </b> </td> </tr>   
                <tr> <td>A vencer</td> <td class="valor-tab"><input type="text" style= "text-align: right;"  name="RespForn1_ant" class="format"/></td></tr>
                <tr> <td>Vencidas - até 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;"  name="RespForn2_ant" class="format"/></td></tr>
                <tr> <td>Vencidas - há mais de 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;"  name="RespForn3_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - a vencer</td> <td class="valor-tab"><input type="text" style= "text-align: right;"  name="RespForn4_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - vencidas até 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;"  name="RespForn5_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - vencidas há mais de 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;"  name="RespForn6_ant" class="format"/></td></tr>
                        
        </table>   
        <div id="space"></div>

        <table  style="float: left">
                <tr> <td style="text-align: center;"><b> Atual - R$ </b> </td></tr>   
                <tr> <td class="valor-tab"><input onkeyup="calcular13()" type="text" style= "text-align: right;" name="RespForn1" id="valor" class="format RespForn"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular13()" type="text" style= "text-align: right;" name="RespForn2" id="valor" class="format RespForn"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular13()" type="text" style= "text-align: right;" name="RespForn3" id="valor" class="format RespForn"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular13()" type="text" style= "text-align: right;" name="RespForn4" id="valor" class="format RespForn"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular13()" type="text" style= "text-align: right;" name="RespForn5" id="valor" class="format RespForn"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular13()" type="text" style= "text-align: right;" name="RespForn6" id="valor" class="format RespForn"/></td></tr>                                
        </table>    
                                
                        
                                
    <div id="space"></div>                 

    <table  style="float: left">
        <tr> <td style="text-align: center;"><b> Data: &nbsp</b> <input type="date" id="data-ref" name="data-ref"/> </td></tr>                                                          
    </table>  
    <div  style="float: left border=1px solid;">
        <b>Situação:&nbsp</b>   
        <p id="situacao13"></p>                   
    </div>          
</div>

<!-- 14. Reponsabilidades trabalhistas -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                14. Reponsabilidades trabalhistas</b>
        </label>                        
</div>

<div class="answers">            
        <table  style="float: left">
                <tr> <td id="espaco-td">&nbsp</td> <td style="text-align: center;"> <b> Último Exercício - R$ </b> </td> </tr>   
                <tr> <td>A vencer</td> <td class="valor-tab"><input type="text" style= "text-align: right;" name="RespTrab1_ant" class="format"/></td></tr>
                <tr> <td>Vencidas - até 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;" name="RespTrab2_ant" class="format"/></td></tr>
                <tr> <td>Vencidas - há mais de 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;" name="RespTrab3_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - a vencer</td> <td class="valor-tab"><input type="text" style= "text-align: right;" name="RespTrab4_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - vencidas até 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;" name="RespTrab5_ant" class="format"/></td></tr>
                <tr> <td>Renegociadas - vencidas há mais de 60 dias</td> <td class="valor-tab"><input type="text" style= "text-align: right;" name="RespTrab6_ant" class="format"/></td></tr>
                        
        </table>   
        <div id="space"></div>

        <table  style="float: left">
                <tr> <td style="text-align: center;"><b> Atual - R$ </b> </td></tr>   
                <tr> <td class="valor-tab"><input onkeyup="calcular14()" type="text" style= "text-align: right;" name="RespTrab1" id="valor" class="format RespTrab"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular14()" type="text" style= "text-align: right;" name="RespTrab2" id="valor" class="format RespTrab"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular14()" type="text" style= "text-align: right;" name="RespTrab3" id="valor" class="format RespTrab"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular14()" type="text" style= "text-align: right;" name="RespTrab4" id="valor" class="format RespTrab"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular14()" type="text" style= "text-align: right;" name="RespTrab5" id="valor" class="format RespTrab"/></td></tr>
                <tr> <td class="valor-tab"><input onkeyup="calcular14()" type="text" style= "text-align: right;" name="RespTrab6" id="valor" class="format RespTrab"/></td></tr>                                
        </table>    
                                
                        
                                
        <div id="space"></div>                 

        <table  style="float: left">
                <tr> <td style="text-align: center;"><b> Data: &nbsp</b> <input type="date" id="data-ref" name="data-ref"/> </td></tr>                                                          
        </table>  
        <div  style="float: left border=1px solid;">
                <b>Situação:&nbsp</b> 
                <p id="situacao14"></p>                    
        </div>          
</div>

<!-- 15. Autorização SCR -->

<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                15. Autorização para consulta ao sistema de informações de crédito do Bacen (SCR)</b>
        </label>                        
</div>

<div class="answers">
        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="scr1" name="scr" value="0" class="custom-control-input">
                <label class="custom-control-label" for="scr1">Sim</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="scr2" name="scr" value="-950" class="custom-control-input">
                <label class="custom-control-label" for="scr2">Não</label>
        </div>                                                                              
</div>
                
<!-- 16. Endivadamento SCR -->

<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                16. Endividamento no SCR (Fonte: aplicativo Clientes-04)</b>
        </label>                        
</div>

<span class='data-ref'>
                <b> Data: &nbsp</b> <input type="date"/>                                                           
</span>  

<table style="float: left">
        <tr>
                <th class="valor-tab" style="text-align: center;">A vencer</th>
                <th class="valor-tab" style="text-align: center;">Valor em R$</th>                        
        </tr>
        <tr>
                <td class="valor-tab">Em até 180 dias</td>
                <td class="valor-tab"><input onkeyup="EntSomaSCR()" type="text" style= "text-align: right;" name="entVencerSCR1" id="valor" class="format entVencerSCR"/></td>
        </tr>                        
        <tr>
                <td class="valor-tab">De 180 a 360 dias</td>       
                <td class="valor-tab"><input onkeyup="EntSomaSCR()" type="text" style= "text-align: right;" name="entVencerSCR2" id="valor" class="format entVencerSCR"/></td>
        </tr> 
        <tr>
                <td class="valor-tab">Acima de 360 dias</td>       
                <td class="valor-tab"><input onkeyup="EntSomaSCR()" type="text" style= "text-align: right;" name="entVencerSCR3" id="valor" class="format entVencerSCR"/></td>
        </tr>
        <tr>
                <td class="valor-tab"><b>Total</b></td>      
                <td class="valor-tab"><input type="text" readonly=“true” style= "text-align: right;" name="entTotVencerSCR" id="valor" class="format"/></td>
        </tr>
</table>
<div id="space"></div>  
<table class="tab-dir">
        <tr>
                <th class="valor-tab" style="text-align: center;">Vencidos</th>
                <th class="valor-tab" style="text-align: center;">Valor em R$</th>                        
        </tr>
        <tr>
                <td class="valor-tab">Até 60 dias</td>
                <td class="valor-tab"><input onkeyup="EntSomaVencSCR()" type="text" style= "text-align: right;" name="entVencidoSCR1" id="valor" class="format entVencidoSCR"/></td>
        </tr>                        
        <tr>
                <td class="valor-tab">De 61 a 180 dias</td>       
                <td class="valor-tab"><input onkeyup="EntSomaVencSCR()" type="text" style= "text-align: right;" name="entVencidoSCR2" id="valor" class="format entVencidoSCR"/></td>
        </tr> 
        <tr>
                <td class="valor-tab">De 181 a 360 dias</td>       
                <td class="valor-tab"><input onkeyup="EntSomaVencSCR()" type="text" style= "text-align: right;" name="entVencidoSCR3" id="valor" class="format entVencidoSCR"/></td>
        </tr>
        <tr>
                <td class="valor-tab">Acima de 360 dias</td>       
                <td class="valor-tab"><input onkeyup="EntSomaVencSCR()" type="text" style= "text-align: right;" name="entVencidoSCR4" id="valor" class="format entVencidoSCR"/></td>
        </tr>
        <tr>
                <td class="valor-tab"><b>Total vencido</b></td>      
                <td class="valor-tab"><input type="text" readonly=“true” style= "text-align: right;" id="valor" name="entVencidoSCR" class="format"/></td>
        </tr>
</table>
<br>
<table class="tab-dir">

        <tr>
                <td class="valor-tab">Créditos baixados no(s) exercício(s) anterior(es)</td>
                <td class="valor-tab"><input type="text" style= "text-align: right;" name = "entBaixSCR" id="valor" class="format"/></td>
        </tr>                        
        <tr>
                <td class="valor-tab">Coobrigações</td>       
                <td class="valor-tab"><input type="text" style= "text-align: right;" id="valor" name="coobrig" class="format"/></td>
        </tr> 

</table>
   
<table class="tab-dir">
        <p>Houve atraso nos últimos 12 meses já regularizados?</p>
                <div class="answers">
                        
                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="atraso1" name="atraso" value="-5" class="custom-control-input">
                                <label class="custom-control-label" for="atraso1">Sim</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="atraso2" name="atraso" value="0" class="custom-control-input">
                                <label class="custom-control-label" for="atraso2">Não</label>
                        </div>                                                                                                                      
                </div>                
</table>
                        
                
<!-- 17. Análise anterior -->

<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                17. Análise anterior do limite de crédito efetuada na Dicre conforme IN 23, com envio de documentação</b>
        </label>                        
</div>

<div class="answers">        
        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="analise1" name="analise" value="0.000000001" class="custom-control-input">      
                <label class="custom-control-label" for="analise1">Sim</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 70%; float:right">
                <input type="radio" id="analise2" name="analise" value="0.000000002" class="custom-control-input">      
                <label class="custom-control-label" for="analise2">Não, efetuada por meio de planilha</label>  
        </div>                                            
</div>
                
<!-- 18. Risco anterior -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                18. Risco anterior</b>
        </label>                        
</div>

<div class="answers">                                
        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="riscAnt1" name="riscAnt" value="0.000000001" onclick="capturaRisco();" onkeyup="capturaRisco1();" class="custom-control-input">      
                <label class="custom-control-label" for="riscAnt1">A</label>  
        </div> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="riscAnt2" name="riscAnt" value="0.000000002" onclick="capturaRisco();" class="custom-control-input">      
                <label class="custom-control-label" for="riscAnt2">B</label>  
        </div> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="riscAnt3" name="riscAnt" value="0.000000003" onclick="capturaRisco();"class="custom-control-input">      
                <label class="custom-control-label" for="riscAnt3">C</label>  
        </div> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="riscAnt4" name="riscAnt" value="0.000000004" onclick="capturaRisco();" class="custom-control-input">      
                <label class="custom-control-label" for="riscAnt4">D</label>  
        </div> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="riscAnt5" name="riscAnt" value="0.000000005" onclick="capturaRisco();" class="custom-control-input">      
                <label class="custom-control-label" for="riscAnt5">E</label>  
        </div> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="riscAnt6" name="riscAnt" value="0.000000006" onclick="capturaRisco();" class="custom-control-input">      
                <label class="custom-control-label" for="riscAnt6">Sem risco anterior</label>  
        </div>                                            
</div>
                
<!-- 19. Concentração  -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                19. Concentração de receitas nos cinco principais clientes/associados/colaboradores/doadores</b>
        </label>                        
</div>

<div class="answers">                                
        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="concent1" name="concent" value="0.000000001" class="custom-control-input">      
                <label class="custom-control-label" for="concent1">Menos de 20%</label>  
        </div> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="concent2" name="concent" value="0.000000002" class="custom-control-input">      
                <label class="custom-control-label" for="concent2">De 20 a 49%</label>  
        </div> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="concent3" name="concent" value="0.000000003" class="custom-control-input">      
                <label class="custom-control-label" for="concent3">De 50 a 79%</label>  
        </div> 

        <div class="custom-control custom-radio custom-control-inline" style="width: 15%; float:left">
                <input type="radio" id="concent4" name="concent" value="0.000000004" class="custom-control-input">      
                <label class="custom-control-label" for="concent4">De 80 a 100%</label>  
        </div>                        
</div>

<!-- 20. Limites vigentes -->

<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                20. Limites vigentes</b>
        </label>                        
</div>

<div class="elem-esq">Limite vigente:
        <div class="answers">                
                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="limVig1" name="limVig" value="0.000000001" class="custom-control-input">
                        <label class="custom-control-label" for="limVig1">Sim</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="limVig2" name="limVig" value="0.000000002" class="custom-control-input">
                        <label class="custom-control-label" for="limVig2">Não</label>
                </div>                                                                                              
        </div>
</div>
<table class="elem-esq1" style="float: left">
        <tr> <td>&nbsp</td> <td style="text-align: center;"> <b> Valor - R$ </b> </td> </tr>             
        <tr> <td>Limite de Crédito</td> <td class="valor-tab"><input type="text" style= "text-align: right;" id="entLim" name="entLim" class="format"/></td></tr>
        <tr> <td>Cheque Ouro Empresarial</td> <td class="valor-tab"><input type="text" style= "text-align: right;" id="entCheque" name="entCheque" class="format"/></td></tr>
        <tr> <td>Cartão Empresarial</td> <td class="valor-tab"><input type="text" style= "text-align: right;" id="entCartaoEmp" name="entCartaoEmp" class="format"/></td></tr>                
</table>

<div id="space1"></div>

<table  style="float: left">
        <tr> <td style="text-align: center;"><b> Vencimento</b> </td></tr>   
        
        <tr> 
                <td class="valor-tab"><input type="text" name="vencAtual" id="vencAtual" style= "text-align: right;" Placeholder="dd/mm/aaaa" 
                        class="format-data" />
                </td>
        </tr>

        <tr> 
                <td class="valor-tab"><input type="text" name="venCheque" id="venCheque" style= "text-align: right;" Placeholder="dd/mm/aaaa"
                        class="format-data" />
                </td>
        </tr>  

        <tr> 
                <td class="valor-tab"><input type="text" name="venCartao" id="venCartao"  style= "text-align: right;" Placeholder="dd/mm/aaaa" 
                        class="format-data" />
                </td>
        </tr>                                           
</table>    
                

<!-- 21. Receita bruta anual nos últimos 3 exercícios -->

<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                21. Receita bruta anual nos últimos 3 exercícios</b>
        </label>                        
</div>
<table>
        <tr>
                <th class="largura-td" class="valor-tab" style="text-align: center;">Exercício</th>
                <th class="valor-tab" style="text-align: center;">Valor - R$</th>                        
        </tr>
        <tr>                        
                <td class="largura-td" class="valor-tab"><input type="text" style= "text-align: center;" Placeholder="2017"/></td>
                <td class="valor-tab"><input  type="text" style= "text-align: right;" name = "entROB1" id="valor" class="format"/></td>                                                                                
        <tr>                        
                <td class="largura-td" class="valor-tab"><input type="text" style= "text-align: center;" Placeholder="2018"/></td>
                <td class="valor-tab"><input  type="text" style= "text-align: right;" name = "entROB2" id="valor" class="format"/></td>
        </tr>  
        <tr>                        
                <td class="largura-td" class="valor-tab"><input type="text" style= "text-align: center;" Placeholder="2019" /></td>
                <td class="valor-tab"><input  type="text" style= "text-align: right;" name = "entROB3" id="valor" class="format"/></td>
        </tr>                                  
</table>
<br>
<table>
        <tr>
                <td class="largura-td espaco_esq" class="valor-tab">Últimos 12 meses</td> 
                <td class="valor-tab  espaco_dir"><input type="text" style= "text-align: right;" name="entTotROB" id="entTotROB" class="format"/></td>
        </tr>                                        
</table>

<!-- 22. Dirigentes -->
        
<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
                22. Informe a quantidade de dirigentes:</b>
        </label>                        
</div>

<div class="answers">        
        <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
                <input type="radio" id="dirigente1" name="dirigente" onclick="habilitaDir1(); desabilitaDir2()" value="1" class="custom-control-input">      
                <label class="custom-control-label" for="dirigente1">Um dirigente</label>  
        </div>
        
        <div class="custom-control custom-radio custom-control-inline" style="width: 70%; float:right">
                <input type="radio" id="dirigente2" name="dirigente" onclick="habilitaDir2(); habilitaDir1()" value="2" class="custom-control-input">      
                <label class="custom-control-label" for="dirigente2">Dois dirigentes</label>  
        </div>                                            
</div>                                                                       
