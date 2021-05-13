<!-- 
Este código é uma cópia da blade original Entidades.entidade e serve de preparação para o PDF que será gerado
para a construção da súmula.

Utilizamos as variáveis de Request que são enviados ao Controller e o retorno da função JS 

Autor: Marcelo Suguiura
Data da criação: 30/03/2021
Data da alteração: 
-->

<!-- cabeçalho -->
<table>
    <tr class="bold">
        <td> MCI: {{$mci}} </td>
        <td> Nome da Entidade: {{$nome}} </td>
        <td> Data: <?= date('d/m/Y') ?> </td>
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
                @if($anotSer == 65)
                    Não possui anotações restritivas
                @elseif($anotSer == 0)
                    Possui anotações restritivas impeditivas relativas flexibilizadas
                @elseif($anotSer == 20)
                    Possui anotações restritivas fracas
                @elseif($anotSer == -900)
                    Possui anotações restritivas impeditivas absolutas ou relativas não flexibilizadas
                @elseif($anotSer == 10)
                    Possui anotações restritivas fortes
                @endif
            </td>
            <td class="answers">
                @if($anotSer == 65)
                    Não possui anotações replicadas
                @elseif($anotSer == 0)
                    Possui anotações replicadas impeditivas relativas flexibilizadas
                @elseif($anotSer == 20)
                    Possui anotações replicadas fracas
                @elseif($anotSer == -900)
                    Possui anotações replicadas impeditivas absolutas ou relativas não flexibilizadas
                @elseif($anotSer == 10)
                    Possui anotações replicadas fortes
                @elseif($anotSer == 99)
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
                04. Tempo de atividade
            </td>
        </tr>

        <!-- Repostas das perguntas 3 e 4 -->
        <tr>
            <td class="answers">
                @if($histRest == -10)
                    Impeditiva
                @elseif($histRest == -5)
                    Forte
                @elseif($histRest == 0)
                    Fraca
                @elseif($histRest === "0.0000001")
                    Sem histórico de restrições
                @endif
            </td>
            <td class="answers">
                @if($tempAtv == -950)
                    Menos de 6 meses
                @elseif($tempAtv == 10)
                    De 3 a menos de 6 anos
                @elseif($tempAtv == 25)
                    De 11 a menos de 16 anos
                @elseif($tempAtv == 50)
                    A partir de 31 anos
                @elseif($tempAtv == 0)
                    De 6 meses a menos de 3 anos
                @elseif($tempAtv == 15)
                    De 6 anos a menos de 11 anos
                @elseif($tempAtv == 40)
                    De 16 a menos de 31 anos
                @endif
            </td>
        </tr>

        <!-- Perguntas 5 e 6 -->
        <tr>
            <td class="questions w50">
                05. Cliente desde
            </td>
            <td class="questions w50">
                06. Conceito na praça
            </td>
        </tr>

        <!-- Repostas das perguntas 5 e 6 -->
        <tr>
            <td class="answers">
                @if($cliDes == 0)
                    Menos de 6 meses
                @elseif($cliDes == 10)
                    De 2 a menos de 5 anos
                @elseif($cliDes == 20)
                    De 10 a menos de 15 anos
                @elseif($cliDes == 5)
                    De 6 meses a menos de 2 anos
                @elseif($cliDes == 15)
                    De 5 a menos de 10 anos
                @elseif($cliDes == 25)
                    A partir de 15 anos
                @endif
            </td>
            <td class="answers">
                @if($conceito == 10)
                    Bem referido/bem conceituado
                @elseif($conceito == 5)
                    Sem conceito firmado
                @elseif($conceito === "5.0000001")
                    Desconhecido das fontes
                @elseif($conceito == -900)
                    Mal referido/conceituad
                @elseif($conceito == 0)
                    Informações contraditórias das fontes
                @endif
            </td>
        </tr>

        <!-- Pergunta 7 -->
        <tr>
            <td class="questions">
                 07. Histórico de conta corrente (últimos 6 meses)
            </td>            
        </tr>

         <!-- Repostas da pergunta 7 -->
        <tr>
            <td class="answers">
                @if($devol == 60)
                    Sem ocorrência de devoluções
                @elseif($devol == 15)
                    Cheques devolvidos raramente (até 2 cheques)
                @elseif($devol == 0)
                    Cheques devolvidos frequentemente (acima de 2 cheques)
                @endif                        
                <span class="space">
                    {{isset($cliNovo) && ($cliNovo === 25.000000001 || $cliNovo === "25.000000001") ? "Cliente novo............: Sim" : "Cliente novo............: Não"}}
                </span>
            </td>
        </tr>

        <tr>
            <td class="answers">
                @if($excessos == 60)
                    Sem ocorrência de excessos
                @elseif($excessos == 25)
                    Excessos, raramente (até 6 excessos)
                @elseif($excessos == 10)
                    Excessos, frequentemente (acima de 6 cheques)
                @endif            
                <span class="space">
                    {{isset($talonario) && ($talonario === 0 || $talonario === "0") ? "Talonário bloqueado: Sim" : "Talonário bloqueado: Não"}}
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
                @if ($cheque == 0)
                    Não possui cheque especial - opção da agência
                @elseif ($cheque == 35)
                    Utiliza eventualmente o limite de seu cheque especial
                @elseif($cheque == 30)
                    Não possui cheque especial - opção da entidade
                @elseif($cheque == 15)
                    Utiliza frequentemente o limite de seu cheque especial
                @elseif($cheque == 50)
                    Nunca utiliza o limite de seu cheque especial
                @elseif($cheque == 5)
                    Excede frequentemente o limite de seu cheque especial
                @endif
            </td>
            <td class="answers">
                @if($opr == 40)
                    Normal
                @elseif($opr == -900)
                    Responsável por operações em curso anormal
                @elseif($opr == 0)
                    Responsável por composição de dívidas
                @elseif($opr == 15)
                    Ainda não tomou empréstimos
                @endif
            </td>
        </tr>

        <!-- Perguntas 10 e 11 -->
        <tr>
            <td class="questions w50">
                10. Pontualidade no pagamento de empréstimos no Banco nos últimos 3 anos
            </td>
            <td class="questions w50">
                11. Pontualidade Fontes Externas
            </td>
        </tr>

        <!-- Repostas das perguntas 10 e 11 -->
        <tr>
            <td class="answers">
                @if($pontBB === "10.000000001")
                    Não tomou empréstimos
                @elseif($pontBB == 10)
                    Deixou de pagar algum empréstimo no vencimento
                @elseif($pontBB == 60)
                    Pagou todos os empréstimos no vencimento
                @elseif($pontBB == 0)
                    Deixou de pagar vários empréstimos no vencimento
                @endif
            </td>
            <td class="answers">
                @if($pontExt === "10.000000001")
                    Pontualidade não apurada
                @elseif($pontExt == 30)
                    Pontual
                @elseif($pontExt == 10)
                    Paga com pequenos atrasos (até 15 dias)
                @elseif($pontExt == 0)
                    Paga com atrasos (de 16 a 60 dias)
                @elseif($pontExt == -900)
                    Habitualmente impontual (mais de 60 dias)
                @endif
            </td>
        </tr>
   

        <!-- Questão 12-->      
        <tr>
            <td class="questions">
                12. Reponsabilidades fiscais e previdenciárias
            </td>
        </tr>
        
        <!-- Preenchimento da questão 12 -->
        <table class="border answers width-auto">
            <tr>
                <td class="w22"></td>
                <td class="bold w15" style="text-align: center;"> Último Exercício - R$ </td>
                <td class="bold w15" style="text-align: center; "> Atual - R$ </td>
                <td class="w15"> <span class="bold"> Situação:&nbsp </span>{{$situacaoDoze}} </td>
            </tr>
            <tr>
                <td>A vencer</td>
                <td class="number">{{$respFiscPrev1_ant}}</td>
                <td class="number">{{$respFiscPrev1}}</td>
                <td>&nbsp</td>
            </tr>
            <tr>
                <td>Vencidas - até 60 dias</td>
                <td class="number">{{$respFiscPrev2_ant}}</td>
                <td class="number">{{$respFiscPrev2}}</td>
                <td>&nbsp</td>
            </tr>
            <tr>
                <td>Vencidas - há mais de 60 dias</td>
                <td class="number">{{$respFiscPrev3_ant}}</td>
                <td class="number">{{$respFiscPrev3}}</td>
                <td>&nbsp</td>
            </tr>
            <tr>
                <td>Renegociadas - a vencer</td>
                <td class="number">{{$respFiscPrev4_ant}}</td>
                <td class="number">{{$respFiscPrev4}}</td>
                <td>&nbsp</td>
            </tr>
            <tr>
                <td>Renegociadas - vencidas até 60 dias</td>
                <td class="number">{{$respFiscPrev5_ant}}</td>
                <td class="number">{{$respFiscPrev5}}</td>
                <td>&nbsp</td>
            </tr>
            <tr>
                <td>Renegociadas - vencidas há mais de 60 dias</td>
                <td class="number">{{$respFiscPrev6_ant}}</td>
                <td class="number">{{$respFiscPrev6}}</td>
                <td>&nbsp</td>
            </tr>
        </table>

    </table>
    <table>
        <!-- Questão 13-->
        <tr>
            <td class="questions">
                13. Reponsabilidades junto aos fornecedores
            </td>
        </tr>
    
            <!-- Preenchimento da questão 13 -->
        <table class="border answers width-auto">    
            <tr>
                <td class="w22"></td>
                <td class="bold w15" style="text-align: center;"> Último Exercício - R$ </td>
                <td class="bold w15" style="text-align: center;"> Atual - R$ </td>
                <td class="w15"> <span class="bold"> Situação:&nbsp </span>{{$situacaoTreze}} </td>
            </tr>
            <tr>
                <td>A vencer</td>
                <td class="number">{{$RespForn1_ant}}</td>
                <td class="number">{{$RespForn1}}</td>
                <td>&nbsp</td>                
            </tr>
            <tr>
                <td>Vencidas - até 60 dias</td>
                <td class="number">{{$RespForn2_ant}}</td>
                <td class="number">{{$RespForn2}}</td>
                <td>&nbsp</td> 
            </tr>
            <tr>
                <td>Vencidas - há mais de 60 dias</td>
                <td class="number">{{$RespForn3_ant}}</td>
                <td class="number">{{$RespForn3}}</td>
                <td>&nbsp</td> 
            </tr>
            <tr>
                <td>Renegociadas - a vencer</td>
                <td class="number">{{$RespForn4_ant}}</td>
                <td class="number">{{$RespForn4}}</td>
                <td>&nbsp</td> 
            </tr>
            <tr>
                <td>Renegociadas - vencidas até 60 dias</td>
                <td class="number">{{$RespForn5_ant}}</td>
                <td class="number">{{$RespForn5}}</td>
                <td>&nbsp</td> 
            </tr>
            <tr>
                <td>Renegociadas - vencidas há mais de 60 dias</td>
                <td class="number">{{$RespForn6_ant}}</td>
                <td class="number">{{$RespForn6}}</td>
                <td>&nbsp</td> 
            </tr>
        </table>
    </table>    
    
    <table>
        <!-- Questão 14-->
        <tr>
            <td class="questions">
                14. Reponsabilidades trabalhistas
            </td>
        </tr>

            <!-- Preenchimento da questão 14 -->
        <table class="border answers width-auto">    
            <tr>
                <td class="w22"></td>
                <td class="bold w15" style="text-align: center;"> Último Exercício - R$ </td>
                <td class="bold w15" style="text-align: center;"> Atual - R$ </td>
                <td class="w15"> <span class="bold"> Situação:&nbsp </span>{{$situacaoCatorze}} </td>               
            </tr>
            <tr>
                <td>A vencer</td>
                <td class="number">{{$RespTrab1_ant}}</td>
                <td class="number">{{$RespTrab1}}</td>
                <td>&nbsp</td>                
            </tr>
            <tr>
                <td>Vencidas - até 60 dias</td>
                <td class="number">{{$RespTrab2_ant}}</td>
                <td class="number">{{$RespTrab2}}</td>
                <td>&nbsp</td> 
            </tr>
            <tr>
                <td>Vencidas - há mais de 60 dias</td>
                <td class="number">{{$RespTrab3_ant}}</td>
                <td class="number">{{$RespTrab3}}</td>
                <td>&nbsp</td> 
            </tr>
            <tr>
                <td>Renegociadas - a vencer</td>
                <td class="number">{{$RespTrab4_ant}}</td>
                <td class="number">{{$RespTrab4}}</td>
                <td>&nbsp</td> 
            </tr>
            <tr>
                <td>Renegociadas - vencidas até 60 dias</td>
                <td class="number">{{$RespTrab5_ant}}</td>
                <td class="number">{{$RespTrab5}}</td>
                <td>&nbsp</td> 
            </tr>
            <tr>
                <td>Renegociadas - vencidas há mais de 60 dias</td>
                <td class="number">{{$RespTrab6_ant}}</td>
                <td class="number">{{$RespTrab6}}</td>
                <td>&nbsp</td> 
            </tr>
        </table>
    </table>
    <table>
        <!-- 15. Autorização SCR -->
        <tr>
            <td class="questions">
                15. Autorização para consulta ao sistema de informações de crédito do Bacen (SCR)
            </td>
        </tr>        
        <!-- Resposta da questão 15 -->
        <tr>
            <td class="answers">
                @if($scr == 0)
                    Sim
                @else
                    Não
                @endif
            </td>    
        </tr>
        

        <!-- Pergunta da questão 16 -->
        <tr>
            <td class="questions">
                16. Endividamento no SCR (Fonte: aplicativo Clientes-04)
            </td>
        </tr>

        <!-- Respostas da questão 16 -->
        
        <table  class="tab16a anwers">
            <tr class="bold" style="text-align:center">
                <td> A vencer</td>
                <td>Valor em R$</td>
            </tr>
            <tr>
                <td>Em até 180 dias</td>
                <td class="number">{{$entVencerSCR1}}</td>
            </tr>
            <tr>
                <td>De 180 a 360 dias</td>
                <td class="number">{{$entVencerSCR2}}</td>
            </tr>
            <tr>
                <td>Acima de 360 dias</td>
                <td class="number">{{$entVencerSCR3}}</td>
            </tr>
            <tr>
                <td><b>Total</b></td>
                <td class="number bold">{{$entTotVencerSCR}}</td>
            </tr>
        </table>
       
        <table class="tab16b">
            <tr class="bold" style="text-align:center">
                <td style ="width:20%"> Vencidos</td>
                <td style ="width:10%"> Valor em R$</td>
            </tr>
            <tr>
                <td>Até 60 dias</td>
                <td class="number"> {{$entVencidoSCR1}}</td>
            </tr>
            <tr>
                <td>De 61 a 180 dias</td>
                <td class="number"> {{$entVencidoSCR2}}</td>
            </tr>
            <tr>
                <td>De 181 a 360 dias</td>
                <td class="number"> {{$entVencidoSCR3}}</td>
            </tr>
            <tr>
                <td>Acima de 360 dias</td>
                <td class="number"> {{$entVencidoSCR4}}</td>
            </tr>
            <tr>
                <td class="bold">Total vencido</td>
                <td class="number bold">{{$entVencidoSCR}}</td>
            </tr>
        </table>


        <table class="tab16c">
            <tr>
                <td>Créditos baixados no(s) exercício(s) anterior(es)</td>
                <td class="number">{{$entBaixSCR}}</td>
            </tr>
            <tr>
                <td>Coobrigações</td>
                <td class="number">{{$coobrig}}</td>
            </tr>
        </table>
        
       
        <table>
            <tr>
                <td class="questions" style="color: black;">
                        Houve atraso nos últimos 12 meses já regularizados?
                </td>
            </tr>        
            
            <tr>
                <td class="answers">
                    @if($atraso == -5)
                        Sim
                    @else
                        Não
                    @endif
                </td>    
            </tr>
        </table>   

         <!-- Perguntas 17 e 18-->
        <table>
            <tr>
                <td class="questions w50">         
                    17. Análise anterior do limite efetuada na Dicre conforme IN 23, com envio de documentação
                </td>  
                        
                <td class="questions w50">         
                    18. Risco anterior
                </td>  
            </tr>

            <!-- Respostas  17 e 18-->
            <tr> 
                <td class="answers">    
                    @if($analise === "0.000000001")
                        Sim
                    @else
                        Não, efetuada por meio de planilha
                    @endif
                </td>  

                <td class="answers">   
                    @if($riscAnt === "0.000000001")
                        A
                    @elseif($riscAnt === "0.000000002")
                        B
                    @elseif($riscAnt === "0.000000003")
                        C
                    @elseif($riscAnt === "0.000000004")
                        D
                    @elseif($riscAnt === "0.000000005")
                        E
                    @elseif($riscAnt === "0.000000006")
                        Sem risco anterior
                    @endif
                </td>       
            </tr>
        </table>

        <!-- Pergunta 19 -->
        <table>
            <tr>
                <td class="questions">         
                    19. Concentração de receitas nos cinco principais clientes/associados/colaboradores/doadores
                </td>  
                        
                
            </tr>

            <!-- Resposta  19-->
            <tr> 
                <td class="answers">    
                    @if($concent === "0.000000001")
                        Menos de 20%
                    @elseif($concent === "0.000000002")
                        De 20 a 49%
                    @elseif($concent === "0.000000003")
                        De 50 a 79%
                    @elseif($concent === "0.000000004")
                        De 80 a 100%
                    @endif
                </td>  
                
            </tr>
        </table>

        <!-- Pergunta e resposta da questão 20 -->
        <table>
            <tr>
                <td class="questions">         
                    20. Limite vigente: 
                    <span class="nobold">
                        @if($limVig === "0.000000001")
                                Sim
                        @else
                                Não
                        @endif
                    </span>    
                <td>                                                           
            </tr>            
        </table>

        <!-- tabela da questão 20 -->
        <table  class="anwers tab20">
            <tr class="bold" style="text-align:center">
                <td>&nbsp</td>
                <td> Valor em R$</td>
                <td> Vencimento</td>
            </tr>
            <tr>
                <td>Limite de Crédito</td>
                <td class="number td_tab20">{{$entLim}}</td>
                <td class="number td_tab20">{{$vencAtual}}</td>
            </tr>
            <tr>
                <td>Cheque Ouro Empresarial</td>
                <td class="number td_tab20">{{$entCheque}}</td>
                <td class="number td_tab20">{{$venCheque}}</td>
            </tr>
            <tr>
                <td>Cartão Empresarial</td>
                <td class="number td_tab20">{{$entCartaoEmp}}</td>
                <td class="number td_tab20">{{$venCartao}}</td>
            </tr>            
        </table>


        <!-- Pergunta 21 -->
        <table>
            <tr>
                <td class="questions">         
                    21. Receita bruta anual nos últimos 3 exercícios                    
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


        <table class="anwers tab21">
            <tr>
                <td class="questions" style="color: black;">Últimos 12 meses</td>
                <td class="number"> {{$entTotROB}}</td>
            </tr>
        </table>


        <!-- Pergunta da questão 22 -->
        <table>
            <tr>
                <td class="questions">         
                    22. Informe a quantidade de dirigentes:
                        <span class="nobold">
                            @if($dirigente == 1)
                                Um dirigente
                            @else
                                Dois dirigentes
                            @endif
                        </span>            
                <td>        
            </tr>            
        </table>
    </table>      
</div>
   

   
    
