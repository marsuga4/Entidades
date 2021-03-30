<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>Dados do Dirigente 1</b></label>                        
</div>
<div class="answers">
    <div class="form-group">
        <label for="dir1">Nome do dirigente
                <input type="text" class="form-control" id="dir1" size="50"/> 
        </label>
        <label for="cpf">CPF
                <input type="text" class="form-control" id="cpf" maxlength="11"/>
        </label>
        <label for="mci">MCI
                <input type="text" class="form-control" id="mci" maxlength="9" Placeholder="MCI sem dígito"/>
        </label>
    </div>            
    <div class="form-group">
        <label for="cargo1">Cargo
                <input type="text" class="form-control" id="cargo1" size="50"/> 
        </label>
        <label for="mandato1">Vencimento do mandato
                <input type="date" class="form-control" id="mandato1" name="mandato1"  Placeholder="dd/mm/aaaa"/>
        </label>
        <label for="pesq1">Pesquisa cadastral
                <input type="date" class="form-control"id="pesq1" name="pesq1"  Placeholder="dd/mm/aaaa"/>
        </label>
    </div>                                          
</div>               

<!-- 1. Anotações cadastrais em ser -->        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>01. Anotações cadastrais em ser</b></label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotEmSerDir1-1" name="anotEmSerDir1" value="65" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir1-1">Não possui anotações em ser</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotEmSerDir1-2" name="anotEmSerDir1" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir1-2">Possui anotações 
        restritivas impeditivas relativas flexibilizadas
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotEmSerDir1-3" name="anotEmSerDir1" value="20" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir1-3">Possui anotações restritivas fracas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotEmSerDir1-4" name="anotEmSerDir1" value="-900" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir1-4">Possui anotações restritivas 
                impeditivas absolutas ou relativas não flexibilizadas 
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotEmSerDir1-5" name="anotEmSerDir1" value="10" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir1-5">Possui anotações restritivas fortes</label>                                                
    </div> 
</div>
        
<!-- 2. Anotações cadastrais replicadas em ser -->
        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>02. Anotações cadastrais replicadas em ser</b></label>                        
</div>
<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotRepDir1-1" name="anotRepDir1" value="65" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir1-1">Não possui anotações replicadas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotRepDir1-2" name="anotRepDir1" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir1-2">Possui anotações 
        replicadas impeditivas relativas flexibilizadas
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotRepDir1-3" name="anotRepDir1" value="20" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir1-3">Possui anotações replicadas fracas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotRepDir1-4" name="anotRepDir1" value="-900" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir1-4">Possui anotações replicadas 
        impeditivas absolutas ou relativas não flexibilizadas </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotRepDir1-5" name="anotRepDir1" value="10" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir1-5">Possui anotações replicadas fortes</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotRepDir1-6" name="anotRepDir1" value="99" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir1-6">Desconsiderar as anotações replicadas
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
        <input type="radio" id="histRestDir1" name="histRestDir1" value="-10" class="custom-control-input">
        <label class="custom-control-label" for="histRestDir1">Impeditiva</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestDir1-2" name="histRestDir1" value="-5" class="custom-control-input">
        <label class="custom-control-label" for="histRestDir1-2">Forte</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestDir1-3" name="histRestDir1" value="0" class="custom-control-input">
        <label class="custom-control-label" for="histRestDir1-3">Fraca</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestDir1-4" name="histRestDir1" value="0,0000001" class="custom-control-input">
        <label class="custom-control-label" for="histRestDir1-4">Sem histórico de restrições</label>
    </div>                                                                                
</div>

<!-- 4. Cliente desde -->                
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
        04. Cliente desde</b>
    </label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDesdeDir1-1" name="cliDesdeDir1" value="0,000000001" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir1-1">Menos de 6 meses</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDesdeDir1-2" name="cliDesdeDir1" value="0,000000003" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir1-2">De 2 a menos de 5 anos</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="cliDesdeDir1-3" name="cliDesdeDir1" value="0,000000005" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir1-3">Não correntista</label>
    </div>
    
    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDesdeDir1-4" name="cliDesdeDir1" value="0,000000002" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir1-4">De 6 meses a menos de 2 anos</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDesdeDir1-5" name="cliDesdeDir1" value="0,000000004" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir1-5">Mais de 5 anos</label>                        
    </div>                
</div>

<!-- 05. Com relação aos seus empréstimos o dirigente/administrador -->
        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>
        05. Com relação aos seus empréstimos o dirigente/administrador</b>
    </label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="emprDir1-1" name="emprDir1" value="0,000000001" class="custom-control-input">      
        <label class="custom-control-label" for="emprDir1-1">Ainda não tomou empréstimos</label>  
    </div>
    
    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="emprDir1-2" name="emprDir1" value="0,000000003" class="custom-control-input">      
        <label class="custom-control-label" for="emprDir1-2">Negocia taxas, cotando inclusive em outras instituições</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="emprDir1-3" name="emprDir1" value="0,000000002" class="custom-control-input">      
        <label class="custom-control-label" for="emprDir1-3">Costuma aceitar as taxas oferecidas pelo Banco</label>  
    </div>
    
    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="emprDir1-4" name="emprDir1" value="0,000000004" class="custom-control-input">      
        <label class="custom-control-label" for="emprDir1-4">Não correntista</label>  
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
        <input type="radio" id="conceitoDir1-1" name="conceitoDir1" value="15" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir1-1">Bem referido/bem conceituado</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="conceitoDir1-2" name="conceitoDir1" value="-900" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir1-2">Mal referido/conceituado</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="conceitoDir1-3" name="conceitoDir1" value="10" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir1-3">Sem conceito firmado</label>
    </div>
    
    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="conceitoDir1-4" name="conceitoDir1" value="0,000000001" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir1-4">Informações contraditórias das fontes</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="conceitoDir1-5" name="conceitoDir1" value="5" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir1-5">Desconhecido das fontes</label>                        
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
        <input type="radio" id="dir1Devol1" name="dir1Devol" value="60" class="custom-control-input">      
        <label class="custom-control-label" for="dir1Devol1">Sem ocorrência de devoluções</label>  
    </div>
    
    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="dir1Exces1" name="dir1Exces" value="60,000000001" class="custom-control-input">      
        <label class="custom-control-label" for="dir1Exces1">Sem ocorrência de excessos</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="dir1Devol2" name="dir1Devol" value="15" class="custom-control-input">      
        <label class="custom-control-label" for="dir1Devol2">Cheques devolvidos raramente (até 2 cheques)</label>  
    </div>
    
    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="dir1Exces2" name="dir1Exces" value="25" class="custom-control-input">      
        <label class="custom-control-label" for="dir1Exces2">Excessos, raramente (até 6 excessos)</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="dir1Devol3" name="dir1Devol" value="0,000000001" class="custom-control-input">      
        <label class="custom-control-label" for="dir1Devol3">Cheques devolvidos frequentemente (acima de 2 cheques)</label>  
    </div>
    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="dir1Exces3" name="dir1Exces" value="10" class="custom-control-input">      
        <label class="custom-control-label" for="dir1Exces3">Excessos, frequentemente (acima de 6 cheques)</label>  
    </div>
</div>     
<!-- Talonário Dirigente 1 -->
<div class="answers">                        
    <div class="custom-control custom-checkbox custom-control-inline" style="width: 45%; float:left">
        <input type="checkbox" id="talBloqDir1" name="talBloqDir1" value="0" class="custom-control-input">      
        <label class="custom-control-label" for="talBloqDir1">Talonário bloqueado</label>  
    </div>
    
    <div class="custom-control custom-checkbox custom-control-inline" style="width: 45%; float:right">
        <input type="checkbox" id="excDir1Check1" name="excDir1Check" value="25,000000001" class="custom-control-input" onclick="verificaCheckbox()">      
        <label class="custom-control-label" for="excDir1Check1">Cliente novo (considerar ocorrências de devolução ou excessos)</label>  
    </div>

    <div class="custom-control custom-checkbox custom-control-inline" style="width: 45%; float:right">
        <input type="checkbox" id="excDir1Check2" name="excDir1Check" value="15" class="custom-control-input" onclick="verificaCheckbox()">      
        <label class="custom-control-label" for="excDir1Check2">Não correntista</label>  
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
        <input type="radio" id="chequeDir1-1" name="chequeDir1" value="0,000000001" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir1-1">Não possui cheque especial - opção da agência</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="chequeDir1-2" name="chequeDir1" value="0,000000005" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir1-2">Utiliza frequentemente o limite de seu cheque especial</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="chequeDir1-3" name="chequeDir1" value="0,000000002" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir1-3">Não possui cheque especial - opção do cliente</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="chequeDir1-4" name="chequeDir1" value="0,000000006" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir1-4">Excede frequentemente o limite de seu cheque especial</label>  
    </div>  

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="chequeDir1-5" name="chequeDir1" value="0,000000003" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir1-5">Nunca utiliza o limite de seu cheque especial</label>  
    </div>  

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="chequeDir1-6" name="chequeDir1" value="0,000000007" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir1-6">Não correntista</label>  
    </div>
    
    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="chequeDir1-7" name="chequeDir1" value="0,000000004" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir1-7">Utiliza eventualmente o limite de seu cheque especial</label>  
    </div>
</div>

<!-- 09. Situação atual das operações -->        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>09. Situação atual das operações</b></label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="operDir1-1" name="operDir1" value="40" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir1-1">Normal</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="operDir1-2" name="operDir1" value="15" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir1-2">Ainda não tomou empréstimos
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="operDir1-3" name="operDir1" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir1-3">Responsável por composição de dívidas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="operDir1-4" name="operDir1" value="10" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir1-4">Não correntista 
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="operDir1-5" name="operDir1" value="-900" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir1-5">Responsável por operações em curso anormal</label>                                                
    </div>                
</div>

                
<!-- 10. Pontualidade no pagamento de empréstimos no Banco nos últimos 3 anos -->        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>10. Pontualidade no pagamento de empréstimos no Banco nos últimos 3 anos</b></label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualBB_Dir1-1" name="pontualBB_Dir1" value="20" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir1-1">Não tomou empréstimos</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 50%; float:right">
        <input type="radio" id="pontualBB_Dir1-2" name="pontualBB_Dir1" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir1-2">Deixou de pagar vários empréstimos no vencimento
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualBB_Dir1-3" name="pontualBB_Dir1" value="60" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir1-3">Pagou todos os empréstimos no vencimento</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 50%; float:right">
        <input type="radio" id="pontualBB_Dir1-4" name="pontualBB_Dir1" value="7,000000001" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir1-4">Não correntista 
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualBB_Dir1-5" name="pontualBB_Dir1" value="7" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir1-5">Deixou de pagar algum empréstimo no vencimento</label>                                                
    </div>
</div>

<!-- 11. Fontes externas -->        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>11. Pontualidade - Fontes externas</b></label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualExtDir1-1" name="pontualExtDir1" value="10" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir1-1">Pontualidade não apurada</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 50%; float:right">
        <input type="radio" id="pontualExtDir1-2" name="pontualExtDir1" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir1-2">Paga com atrasos (de 16 a 60 dias)
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualExtDir1-3" name="pontualExtDir1" value="30" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir1-3">Pontual</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 50%; float:right">
        <input type="radio" id="pontualExtDir1-4" name="pontualExtDir1" value="-900" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir1-4">Habitualmente impontual (mais de 60 dias)
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualExtDir1-5" name="pontualExtDir1" value="15" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir1-5">Paga com pequenos atrasos (até 15 dias)</label>                                                
    </div>
</div>  