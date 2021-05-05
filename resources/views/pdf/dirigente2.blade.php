<!-- Utilizamos as variáveis de Request que são enviados ao Controller e o retorno da função JS 

Autor: Marcelo Suguiura
Data da criação: 24/04/2021
Data da alteração:  -->


<!-- cabeçalho -->
<table>
    <tr>
        <td> Nome do Dirigente: {{$dir2}} </td>
        <td> CPF: {{$cpf2}} </td>
        <td> MCI: {{$mcidir2}} </td>        
    </tr>
    <tr>
        <td> Cargo: {{$cargo2}} </td>           
        <td> Vencimento do mandato: {{\Carbon\Carbon::parse($mandato2)->format('d/m/Y')}} </td>           
    </tr>
</table>

<div class="container-questions">
    <table>

        <!-- Perguntas 1 e 2 -->
        <tr>
            <td class="questions w50">
                01. Anotações cadastrais em ser
            </td>
            <td class="questions w50">
                02. Anotações cadastrais replicadas em ser
            </td>
        </tr>

        <!-- Respostas das perguntas 1 e 2  -->
        <tr>
            <td class="answers">
                @if($anotEmSerDir2 == 65)
                    Não possui anotações restritivas
                @elseif($anotEmSerDir2 == 0)
                    Possui anotações restritivas impeditivas relativas flexibilizadas
                @elseif($anotEmSerDir2 == 20)
                    Possui anotações restritivas fracas
                @elseif($anotEmSerDir2 == -900)
                    Possui anotações restritivas impeditivas absolutas ou relativas não flexibilizadas
                @elseif($anotEmSerDir2 == 10)
                    Possui anotações restritivas fortes
                @endif
            </td>
            <td class="answers">
                @if($anotRepDir2 == 65)
                    Não possui anotações replicadas
                @elseif($anotRepDir2 == 0)
                    Possui anotações replicadas impeditivas relativas flexibilizadas
                @elseif($anotRepDir2 == 20)
                    Possui anotações replicadas fracas
                @elseif($anotRepDir2 == -900)
                    Possui anotações replicadas impeditivas absolutas ou relativas não flexibilizadas
                @elseif($anotRepDir2 == 10)
                    Possui anotações replicadas fortes
                @elseif($anotRepDir2 == 99)
                    Desconsiderar as anotações replicadas por não impactar no conceito do cliente
                @endif
            </td>
        </tr>

         <!-- Perguntas 3 e 4 -->
         <tr>
            <td class="questions w50">
                03. Histórico de restrições nos últimos cinco anos
            </td>
            <td class="questions w50">
                04. Cliente desde
            </td>
        </tr>

        <!-- Repostas das perguntas 3 e 4 -->
        <tr>
            <td class="answers">
                @if($histRestDir2 == -10)
                    Impeditiva
                @elseif($histRestDir2 == -5)
                    Forte
                @elseif($histRestDir2 == 0)
                    Fraca
                @elseif($histRestDir2 === "0.0000001")
                    Sem histórico de restrições
                @endif
            </td>
            <td class="answers">
                @if($cliDesdeDir2 === "0.000000001")
                    Menos de 6 meses
                @elseif($cliDesdeDir2 === "0.000000003")
                    De 2 a menos de 5 anos
                @elseif($cliDesdeDir2 === "0.000000005")
                    Não correntista
                @elseif($cliDesdeDir2 === "0.000000002")
                    De 6 meses a menos de 2 anos
                @elseif($cliDesdeDir2 === "0.000000004")
                    Mais de 5 anos               
                @endif
            </td>
        </tr>

         <!-- Perguntas 5 e 6 -->
         <tr>
            <td class="questions w50">
                05. Com relação aos seus empréstimos o dirigente/administrador
            </td>
            <td class="questions w50">
                06. Conceito na praça
            </td>
        </tr>

        <!-- Repostas das perguntas 5 e 6 -->
        <tr>
            <td class="answers">
                @if($emprDir2 === "0.000000001")
                    Ainda não tomou empréstimos
                @elseif($emprDir2 === "0.000000003")
                    Negocia taxas, cotando inclusive em outras instituições
                @elseif($emprDir2 === "0.000000002")
                    Costuma aceitar as taxas oferecidas pelo Banco
                @elseif($emprDir2 === "0.000000004")
                    Não correntista
                @endif
            </td>
            <td class="answers">
                @if($conceitoDir2 == 15)
                    Bem referido/bem conceituado
                @elseif($conceitoDir2 == -900)
                    Mal referido/conceituado
                @elseif($conceitoDir2 == 10)
                    Sem conceito firmado
                @elseif($conceitoDir2 === "0.000000001")
                    Informações contraditórias das fontes
                @elseif($conceitoDir2 == 5)
                    Desconhecido das fontes               
                @endif
            </td>
        </tr>

         <!-- Pergunta 7 -->
         <tr>
            <td class="questions">
                 07. Histórico de conta corrente (últimos 6 meses)
            </td>            
        </tr>

         <!-- Repostas da pergunta 7 devoluções-->
        <tr>
            <td class="answers">
                @if($dir2Devol == 60)
                    Sem ocorrência de devoluções
                @elseif($dir2Devol == 15)
                    Cheques devolvidos raramente (até 2 cheques)
                @elseif($dir2Devol === "0.000000001")
                    Cheques devolvidos frequentemente (acima de 2 cheques)
                @endif                        
                <span class="space">                    
                    {{isset($excDir2Check) && ($excDir2Check === 25.000000001 || $excDir2Check === "25.000000001") 
                    ? "Cliente novo............: Sim" : "Cliente novo............: Não"}}                    
                </span>
                <span class="space1"> 
                    {{isset($excDir2Check) && ($excDir2Check == 15) 
                    ? "Não correntista: Sim" : "Não correntista: Não"}} 
                </span>    
            </td>            
        </tr>
            
         <!-- Repostas da pergunta 7 excessos-->                
        <tr>
            <td class="answers">
                @if($dir2Exces === "60.000000001")
                    Sem ocorrência de excessos
                @elseif($dir2Exces == 25)
                    Excessos, raramente (até 6 excessos)
                @elseif($dir2Exces == 10)
                    Excessos, frequentemente (acima de 6 cheques)
                @endif            
                <span class="space">
                    {{isset($talBloqDir2) && ($talBloqDir2 === 0 || $talBloqDir2 === "0") ? "Talonário bloqueado: Sim" : "Talonário bloqueado: Não"}}
                </span>
            </td>
        </tr>
        
        <!-- Perguntas 8 e 9 -->
        <tr>
            <td class="questions w50">
                08. Utilização de cheque especial (últimos 6 meses)
            </td>
            <td class="questions w50">
                09. Situação atual das operações
            </td>
        </tr>

         <!-- Repostas das perguntas 8 e 9 -->
         <tr>
            <td class="answers">
                @if($chequeDir2 === "0.000000001")
                    Não possui cheque especial - opção da agência
                @elseif($chequeDir2 === "0.000000005")
                    Utiliza frequentemente o limite de seu cheque especial
                @elseif($chequeDir2 === "0.000000002")
                    Não possui cheque especial - opção do cliente
                @elseif($chequeDir2 === "0.000000006")
                    Excede frequentemente o limite de seu cheque especial
                @elseif($chequeDir2 === "0.000000003")
                    Nunca utiliza o limite de seu cheque especial
                @elseif($chequeDir2 === "0.000000007")
                    Não correntista
                @elseif($chequeDir2 === "0.000000004")
                    Utiliza eventualmente o limite de seu cheque especial    
                @endif
            </td>
            <td class="answers">
                @if($operDir2 == 40)
                    Normal
                @elseif($operDir2 == 15)
                    Ainda não tomou empréstimos              
                @elseif($operDir2 == 0)
                    Responsável por composição de dívidas
                @elseif($operDir2 == 10)
                    Não correntista
                @elseif($operDir2 == -900)
                    Responsável por operações em curso anormal             
                @endif
            </td>
        </tr>

         <!-- Perguntas 10 e 11 -->
         <tr>
            <td class="questions w50">
                10. Pontualidade no pagamento de empréstimos no Banco nos últimos 3 anos
            </td>
            <td class="questions w50">
                11. Pontualidade - Fontes externas
            </td>
        </tr>

         <!-- Repostas das perguntas 10 e 11 -->
         <tr>
            <td class="answers">
                @if($pontualBB_Dir2 == 20)
                    Não tomou empréstimos
                @elseif($pontualBB_Dir2 == 0)
                    Deixou de pagar vários empréstimos no vencimento
                @elseif($pontualBB_Dir2 == 60)
                    Pagou todos os empréstimos no vencimento
                @elseif($pontualBB_Dir2 === "7.000000001")
                    Não correntista
                @elseif($pontualBB_Dir2 == 7)
                    Deixou de pagar algum empréstimo no vencimento                 
                @endif
            </td>
            <td class="answers">
                @if($pontualExtDir2 == 10)
                    Pontualidade não apurada
                @elseif($pontualExtDir2 == 0)
                    Paga com atrasos (de 16 a 60 dias)           
                @elseif($pontualExtDir2 == 30)
                    Pontual
                @elseif($pontualExtDir2 == -900)
                    Habitualmente impontual (mais de 60 dias)
                @elseif($pontualExtDir2 == 15)
                    Paga com pequenos atrasos (até 15 dias)            
                @endif
            </td>
        </tr>

    </table>                                                                  
</div>



