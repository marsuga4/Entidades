<!-- Utilizamos as variáveis de Request que são enviados ao Controller e o retorno da função JS 

Autor: Marcelo Suguiura
Data da criação: 16/04/2021
Data da alteração:  -->


<!-- cabeçalho -->
<table>
    <tr class="bold">
        <td> Nome do Dirigente: {{$dir1}} </td>
        <td> CPF: {{$cpf1}} </td>
        <td> MCI: {{$mci1}} </td>        
    </tr>
    <tr class="bold">
        <td> Cargo: {{$cargo1}} </td>           
        <td> Vencimento do mandato: {{\Carbon\Carbon::parse($mandato1)->format('d/m/Y')}} </td>           
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
                @if($anotEmSerDir1 == 65)
                    Não possui anotações restritivas
                @elseif($anotEmSerDir1 == 0)
                    Possui anotações restritivas impeditivas relativas flexibilizadas
                @elseif($anotEmSerDir1 == 20)
                    Possui anotações restritivas fracas
                @elseif($anotEmSerDir1 == -900)
                    Possui anotações restritivas impeditivas absolutas ou relativas não flexibilizadas
                @elseif($anotEmSerDir1 == 10)
                    Possui anotações restritivas fortes
                @endif
            </td>
            <td class="answers">
                @if($anotRepDir1 == 65)
                    Não possui anotações replicadas
                @elseif($anotRepDir1 == 0)
                    Possui anotações replicadas impeditivas relativas flexibilizadas
                @elseif($anotRepDir1 == 20)
                    Possui anotações replicadas fracas
                @elseif($anotRepDir1 == -900)
                    Possui anotações replicadas impeditivas absolutas ou relativas não flexibilizadas
                @elseif($anotRepDir1 == 10)
                    Possui anotações replicadas fortes
                @elseif($anotRepDir1 == 99)
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
                @if($histRestDir1 == -10)
                    Impeditiva
                @elseif($histRestDir1 == -5)
                    Forte
                @elseif($histRestDir1 == 0)
                    Fraca
                @elseif($histRestDir1 === "0.0000001")
                    Sem histórico de restrições
                @endif
            </td>
            <td class="answers">
                @if($cliDesdeDir1 === "0.000000001")
                    Menos de 6 meses
                @elseif($cliDesdeDir1 === "0.000000003")
                    De 2 a menos de 5 anos
                @elseif($cliDesdeDir1 === "0.000000005")
                    Não correntista
                @elseif($cliDesdeDir1 === "0.000000002")
                    De 6 meses a menos de 2 anos
                @elseif($cliDesdeDir1 === "0.000000004")
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
                @if($emprDir1 === "0.000000001")
                    Ainda não tomou empréstimos
                @elseif($emprDir1 === "0.000000003")
                    Negocia taxas, cotando inclusive em outras instituições
                @elseif($emprDir1 === "0.000000002")
                    Costuma aceitar as taxas oferecidas pelo Banco
                @elseif($emprDir1 === "0.000000004")
                    Não correntista
                @endif
            </td>
            <td class="answers">
                @if($conceitoDir1 == 15)
                    Bem referido/bem conceituado
                @elseif($conceitoDir1 == -900)
                    Mal referido/conceituado
                @elseif($conceitoDir1 == 10)
                    Sem conceito firmado
                @elseif($conceitoDir1 === "0.000000001")
                    Informações contraditórias das fontes
                @elseif($conceitoDir1 == 5)
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
                @if($dir1Devol == 60)
                    Sem ocorrência de devoluções
                @elseif($dir1Devol == 15)
                    Cheques devolvidos raramente (até 2 cheques)
                @elseif($dir1Devol === "0.000000001")
                    Cheques devolvidos frequentemente (acima de 2 cheques)
                @endif                        
                <span class="space">                    
                    {{isset($excDir1Check) && ($excDir1Check === 25.000000001 || $excDir1Check === "25.000000001") 
                    ? "Cliente novo............: Sim" : "Cliente novo............: Não"}}                    
                </span>
                <span class="space1"> 
                    {{isset($excDir1Check) && ($excDir1Check == 15) 
                    ? "Não correntista: Sim" : "Não correntista: Não"}} 
                </span>    
            </td>            
        </tr>
            
         <!-- Repostas da pergunta 7 excessos-->                
        <tr>
            <td class="answers">
                @if($dir1Exces === "60.000000001")
                    Sem ocorrência de excessos
                @elseif($dir1Exces == 25)
                    Excessos, raramente (até 6 excessos)
                @elseif($dir1Exces == 10)
                    Excessos, frequentemente (acima de 6 cheques)
                @endif            
                <span class="space">
                    {{isset($talBloqDir1) && ($talBloqDir1 === 0 || $talBloqDir1 === "0") ? "Talonário bloqueado: Sim" : "Talonário bloqueado: Não"}}
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
                @if($chequeDir1 === "0.000000001")
                    Não possui cheque especial - opção da agência
                @elseif($chequeDir1 === "0.000000005")
                    Utiliza frequentemente o limite de seu cheque especial
                @elseif($chequeDir1 === "0.000000002")
                    Não possui cheque especial - opção do cliente
                @elseif($chequeDir1 === "0.000000006")
                    Excede frequentemente o limite de seu cheque especial
                @elseif($chequeDir1 === "0.000000003")
                    Nunca utiliza o limite de seu cheque especial
                @elseif($chequeDir1 === "0.000000007")
                    Não correntista
                @elseif($chequeDir1 === "0.000000004")
                    Utiliza eventualmente o limite de seu cheque especial    
                @endif
            </td>
            <td class="answers">
                @if($operDir1 == 40)
                    Normal
                @elseif($operDir1 == 15)
                    Ainda não tomou empréstimos              
                @elseif($operDir1 == 0)
                    Responsável por composição de dívidas
                @elseif($operDir1 == 10)
                    Não correntista
                @elseif($operDir1 == -900)
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
                @if($pontualBB_Dir1 == 20)
                    Não tomou empréstimos
                @elseif($pontualBB_Dir1 == 0)
                    Deixou de pagar vários empréstimos no vencimento
                @elseif($pontualBB_Dir1 == 60)
                    Pagou todos os empréstimos no vencimento
                @elseif($pontualBB_Dir1 === "7.000000001")
                    Não correntista
                @elseif($pontualBB_Dir1 == 7)
                    Deixou de pagar algum empréstimo no vencimento                 
                @endif
            </td>
            <td class="answers">
                @if($pontualExtDir1 == 10)
                    Pontualidade não apurada
                @elseif($pontualExtDir1 == 0)
                    Paga com atrasos (de 16 a 60 dias)           
                @elseif($pontualExtDir1 == 30)
                    Pontual
                @elseif($pontualExtDir1 == -900)
                    Habitualmente impontual (mais de 60 dias)
                @elseif($pontualExtDir1 == 15)
                    Paga com pequenos atrasos (até 15 dias)            
                @endif
            </td>
        </tr>

    </table>                                                                  
</div>



