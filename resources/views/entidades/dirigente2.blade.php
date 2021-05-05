<div class="questions">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>Dados do Dirigente 2</b></label>                        
</div>
<div class="answers">
    <div class="form-group">
        <label for="dir2">Nome do dirigente
                <input type="text" class="form-control" id="dir2" name="dir2" size="50"/> 
        </label>
        <label for="cpf">CPF
                <input type="text" class="form-control" id="cpf2" name="cpf2" maxlength="11"/>
        </label>
        <label for="mciDir2">MCI
                <input type="text" class="form-control" id="mciDir2" name="mcidir2" maxlength="9" Placeholder="MCI sem dígito"/>
        </label>
    </div>            
    <div class="form-group">
        <label for="cargo2">Cargo
                <input type="text" class="form-control" id="cargo2" name="cargo2" size="50"/> 
        </label>
        <label for="mandato2">Vencimento do mandato
                <input type="date" class="form-control" id="mandato2" name="mandato2"  Placeholder="dd/mm/aaaa"/>
        </label>
        <label for="pesq2">Pesquisa cadastral
                <input type="date" class="form-control"id="pesq2" name="pesq2"  Placeholder="dd/mm/aaaa"/>
        </label>
    </div>                                          
</div>               

<!-- 1. Anotações cadastrais em ser -->        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>01. Anotações cadastrais em ser</b></label>                        
</div>
<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotEmSerDir2-1" name="anotEmSerDir2" value="65" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir2-1">Não possui anotações em ser</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotEmSerDir2-2" name="anotEmSerDir2" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir2-2">Possui anotações 
            restritivas impeditivas relativas flexibilizadas
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotEmSerDir2-3" name="anotEmSerDir2" value="20" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir2-3">Possui anotações restritivas fracas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotEmSerDir2-4" name="anotEmSerDir2" value="-900" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir2-4">Possui anotações restritivas 
                impeditivas absolutas ou relativas não flexibilizadas 
        </label>
    </div>
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotEmSerDir2-5" name="anotEmSerDir2" value="10" class="custom-control-input"/>
        <label class="custom-control-label" for="anotEmSerDir2-5">Possui anotações restritivas fortes</label>                                                
    </div>
</div>

<!-- 2. Anotações cadastrais replicadas em ser -->

<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>02. Anotações cadastrais replicadas em ser</b></label>                        
</div>
<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotRepDir2-1" name="anotRepDir2" value="65" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir2-1">
            Não possui anotações replicadas
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotRepDir2-2" name="anotRepDir2" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir2-2">Possui anotações 
            replicadas impeditivas relativas flexibilizadas
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotRepDir2-3" name="anotRepDir2" value="20" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir2-3">Possui anotações replicadas fracas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotRepDir2-4" name="anotRepDir2" value="-900" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir2-4">Possui anotações replicadas 
            impeditivas absolutas ou relativas não flexibilizadas
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="anotRepDir2-5" name="anotRepDir2" value="10" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir2-5">Possui anotações replicadas fortes</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="anotRepDir2-6" name="anotRepDir2" value="99" class="custom-control-input"/>
        <label class="custom-control-label" for="anotRepDir2-6">
            Desconsiderar as anotações replicadas por não impactar no conceito do cliente
        </label>
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
        <input type="radio" id="histRestDir2" name="histRestDir2" value="-10" class="custom-control-input">
        <label class="custom-control-label" for="histRestDir2">Impeditiva</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestDir2-2" name="histRestDir2" value="-5" class="custom-control-input">
        <label class="custom-control-label" for="histRestDir2-2">Forte</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestDir2-3" name="histRestDir2" value="0" class="custom-control-input">
        <label class="custom-control-label" for="histRestDir2-3">Fraca</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="histRestDir2-4" name="histRestDir2" value="0.0000001" class="custom-control-input">
        <label class="custom-control-label" for="histRestDir2-4">Sem histórico de restrições</label>
    </div>                                                                                
</div>

<!-- 4. Cliente desde -->                
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect">
        <b> 04. Cliente desde</b>
    </label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDesdeDir2-1" name="cliDesdeDir2" value="0.000000001" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir2-1">Menos de 6 meses</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDesdeDir2-2" name="cliDesdeDir2" value="0.000000003" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir2-2">De 2 a menos de 5 anos</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="cliDesdeDir2-3" name="cliDesdeDir2" value="0.000000005" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir2-3">Não correntista</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDesdeDir2-4" name="cliDesdeDir2" value="0.000000002" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir2-4">De 6 meses a menos de 2 anos</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="cliDesdeDir2-5" name="cliDesdeDir2" value="0.000000004" class="custom-control-input">
        <label class="custom-control-label" for="cliDesdeDir2-5">Mais de 5 anos</label>                        
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
        <input type="radio" id="emprDir2-1" name="emprDir2" value="0.000000001" class="custom-control-input">      
        <label class="custom-control-label" for="emprDir2-1">Ainda não tomou empréstimos</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="emprDir2-2" name="emprDir2" value="0.000000003" class="custom-control-input">      
        <label class="custom-control-label" for="emprDir2-2">Negocia taxas, cotando inclusive em outras instituições</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="emprDir2-3" name="emprDir2" value="0.000000002" class="custom-control-input">      
        <label class="custom-control-label" for="emprDir2-3">Costuma aceitar as taxas oferecidas pelo Banco</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="emprDir2-4" name="emprDir2" value="0.000000004" class="custom-control-input">      
        <label class="custom-control-label" for="emprDir2-4">Não correntista</label>  
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
        <input type="radio" id="conceitoDir2-1" name="conceitoDir2" value="15" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir2-1">Bem referido/bem conceituado</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="conceitoDir2-2" name="conceitoDir2" value="-900" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir2-2">Mal referido/conceituado</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 20%; float:left">
        <input type="radio" id="conceitoDir2-3" name="conceitoDir2" value="10" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir2-3">Sem conceito firmado</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 25%; float:left">
        <input type="radio" id="conceitoDir2-4" name="conceitoDir2" value="0.000000001" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir2-4">Informações contraditórias das fontes</label>                        
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="conceitoDir2-5" name="conceitoDir2" value="5" class="custom-control-input">
        <label class="custom-control-label" for="conceitoDir2-5">Desconhecido das fontes</label>                        
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
        <input type="radio" id="dir2Devol1" name="dir2Devol" value="60" class="custom-control-input">      
        <label class="custom-control-label" for="dir2Devol1">Sem ocorrência de devoluções</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="dir2Exces1" name="dir2Exces" value="60.000000001" class="custom-control-input">      
        <label class="custom-control-label" for="dir2Exces1">Sem ocorrência de excessos</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="dir2Devol2" name="dir2Devol" value="15" class="custom-control-input">      
        <label class="custom-control-label" for="dir2Devol2">Cheques devolvidos raramente (até 2 cheques)</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="dir2Exces2" name="dir2Exces" value="25" class="custom-control-input">      
        <label class="custom-control-label" for="dir2Exces2">Excessos, raramente (até 6 excessos)</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="dir2Devol3" name="dir2Devol" value="0.000000001" class="custom-control-input">      
        <label class="custom-control-label" for="dir2Devol3">Cheques devolvidos frequentemente (acima de 2 cheques)</label>  
    </div>
    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="dir2Exces3" name="dir2Exces" value="10" class="custom-control-input">      
        <label class="custom-control-label" for="dir2Exces3">Excessos, frequentemente (acima de 6 cheques)</label>  
    </div>
</div>     

<!-- Talonário Dirigente 2 -->
<div class="answers">                        
    <div class="custom-control custom-checkbox custom-control-inline" style="width: 45%; float:left">
        <input type="checkbox" id="talBloqDir2" name="talBloqDir2" value="0" class="custom-control-input">      
        <label class="custom-control-label" for="talBloqDir2">Talonário bloqueado</label>  
    </div>

    <div class="custom-control custom-checkbox custom-control-inline" style="width: 45%; float:right">
        <input type="checkbox" id="excDir2Check1" name="excDir2Check" value="25.000000001" class="custom-control-input" onclick="verificaCheckbox()">      
        <label class="custom-control-label" for="excDir2Check1">Cliente novo (considerar ocorrências de devolução ou excessos)</label>  
    </div>

    <div class="custom-control custom-checkbox custom-control-inline" style="width: 45%; float:right">
        <input type="checkbox" id="excDir2Check2" name="excDir2Check" value="15" class="custom-control-input" onclick="verificaCheckbox()">      
        <label class="custom-control-label" for="excDir2Check2">Não correntista</label>  
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
        <input type="radio" id="chequeDir2-1" name="chequeDir2" value="0.000000001" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir2-1">Não possui cheque especial - opção da agência</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="chequeDir2-2" name="chequeDir2" value="0.000000005" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir2-2">Utiliza frequentemente o limite de seu cheque especial</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="chequeDir2-3" name="chequeDir2" value="0.000000002" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir2-3">Não possui cheque especial - opção do cliente</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="chequeDir2-4" name="chequeDir2" value="0.000000006" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir2-4">Excede frequentemente o limite de seu cheque especial</label>  
    </div>  

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="chequeDir2-5" name="chequeDir2" value="0.000000003" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir2-5">Nunca utiliza o limite de seu cheque especial</label>  
    </div>  

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:right">
        <input type="radio" id="chequeDir2-6" name="chequeDir2" value="0.000000007" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir2-6">Não correntista</label>  
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 45%; float:left">
        <input type="radio" id="chequeDir2-7" name="chequeDir2" value="0.000000004" class="custom-control-input">      
        <label class="custom-control-label" for="chequeDir2-7">Utiliza eventualmente o limite de seu cheque especial</label>  
    </div>
</div>

<!-- 09. Situação atual das operações -->        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect"><b>09. Situação atual das operações</b></label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="operDir2-1" name="operDir2" value="40" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir2-1">Normal</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="operDir2-2" name="operDir2" value="15" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir2-2">Ainda não tomou empréstimos
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 30%; float:left">
        <input type="radio" id="operDir2-3" name="operDir2" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir2-3">Responsável por composição de dívidas</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 60%; float:right">
        <input type="radio" id="operDir2-4" name="operDir2" value="10" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir2-4">Não correntista 
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="operDir2-5" name="operDir2" value="-900" class="custom-control-input"/>
        <label class="custom-control-label" for="operDir2-5">Responsável por operações em curso anormal</label>                                                
    </div>                
</div>


<!-- 10. Pontualidade no pagamento de empréstimos no Banco nos últimos 3 anos -->        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect">
        <b>10. Pontualidade no pagamento de empréstimos no Banco nos últimos 3 anos</b>
    </label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualBB_Dir2-1" name="pontualBB_Dir2" value="20" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir2-1">
            Não tomou empréstimos
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 50%; float:right">
        <input type="radio" id="pontualBB_Dir2-2" name="pontualBB_Dir2" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir2-2">
            Deixou de pagar vários empréstimos no vencimento
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualBB_Dir2-3" name="pontualBB_Dir2" value="60" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir2-3">
            Pagou todos os empréstimos no vencimento
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 50%; float:right">
        <input type="radio" id="pontualBB_Dir2-4" name="pontualBB_Dir2" value="7.000000001" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir2-4">
            Não correntista 
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualBB_Dir2-5" name="pontualBB_Dir2" value="7" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualBB_Dir2-5">
            Deixou de pagar algum empréstimo no vencimento
        </label>                                                
    </div>
</div>

<!-- 11. Fontes externas -->        
<div class="questions">
    <label class="mr-sm-2" for="inlineFormCustomSelect">
        <b>11. Pontualidade - Fontes externas</b>
    </label>                        
</div>

<div class="answers">
    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualExtDir2-1" name="pontualExtDir2" value="10" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir2-1">
            Pontualidade não apurada
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 50%; float:right">
        <input type="radio" id="pontualExtDir2-2" name="pontualExtDir2" value="0" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir2-2">
            Paga com atrasos (de 16 a 60 dias)
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualExtDir2-3" name="pontualExtDir2" value="30" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir2-3">
            Pontual
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 50%; float:right">
        <input type="radio" id="pontualExtDir2-4" name="pontualExtDir2" value="-900" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir2-4">
            Habitualmente impontual (mais de 60 dias)
        </label>
    </div>

    <div class="custom-control custom-radio custom-control-inline" style="width: 40%; float:left">
        <input type="radio" id="pontualExtDir2-5" name="pontualExtDir2" value="15" class="custom-control-input"/>
        <label class="custom-control-label" for="pontualExtDir2-5">
            Paga com pequenos atrasos (até 15 dias)
        </label>                                                
    </div>
</div>

                
              