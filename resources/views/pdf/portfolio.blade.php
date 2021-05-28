<!-- Preencher os dados do portfólio na súmula  

Autor: Marcelo Suguiura
Data da criação: 23/05/2021
Data da alteração:  -->

<!-- Portfólio do limite de crédito -->

<table>
    <tr>
        <td class="w20">&nbsp;</td>
        <td class="w20 bold">Calculado</td>
        <td class="w20 bold">Proposto</td>
    </tr>
    <tr>
        <td class="w20 bold">COMERCIALIZAÇÃO</td>
        <td class="w20">{{$portfCalcComer}}</td>
        <td class="w20">{{$estabComercial}}</td>
    </tr>

    <!-- Antecipação de recebíveis -->
    <tr>
        <td class="w20 bold" style="padding-left: 46px;">Antecipação de Recebíveis</td>
        <td class="w20">{{$portfCalcAntRec}}</td>
        <td class="w20">{{$estabAntecRec}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;"> 1. ACL – Antecipação VISA</td>
        <td class="w20">{{$portfCalcAntACL}}</td>
        <td class="w20">{{$estabACL}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;"> 2. Desconto de Cheques</td>
        <td class="w20">{{$portfCalcDescChq}}</td>
        <td class="w20">{{$estabDesCheq}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;"> 3. Desconto de Duplicatas</td>
        <td class="w20">{{$portfCalcDescDupl}}</td>
        <td class="w20">{{$estabDescDupl}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;"> 4. Vendor</td>
        <td class="w20">{{$portfCalcVend}}</td>
        <td class="w20">{{$estabVendor}}</td>
    </tr>


    <!-- Lastreado por recebíveis -->
    <tr>
        <td class="w20 bold" style="padding-left: 46px;">Lastreadas por Recebíveis</td>
        <td class="w20">{{$portfCalcLastRec}}</td>
        <td class="w20">{{$estabLastRec}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;"> 1. Lastreadas por fatura VISA</td>
        <td class="w20">{{$portfCalcLastVisa}}</td>
        <td class="w20">{{$estabVisa}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;"> 2. Lastreadas por Cheques</td>
        <td class="w20">{{$portfCalcLastChq}}</td>
        <td class="w20">{{$estabCheq}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;"> 3. Lastreadas por Títulos</td>
        <td class="w20">{{$portfCalcLastTit}}</td>
        <td class="w20">{{$estabTit}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;"> 4. Antecipação Fatura SUS</td>
        <td class="w20">{{$portfCalcAntSUS}}</td>
        <td class="w20">{{$estabSus}}</td>
    </tr>

    <!-- Capital de Giro -->
    <tr>
        <td class="w20 bold"> CAPITAL DE GIRO</td>
        <td class="w20">{{$calcCapitGiro}}</td>
        <td class="w20">{{$estabCapitalGiro}}</td>
    </tr>
    <tr>
        <td class="w20 bold" style="padding-left: 46px;">Crédito Rotativo</td>
        <td class="w20">{{$calcCredRot}}</td>
        <td class="w20">{{$estabCredRot}}</td>
    </tr>
    <tr>
        <td class="w20" style="padding-left: 56px;">1. Cheque Ouro Empresarial</td>
        <td class="w20">{{$calcChequeOur}}</td>
        <td class="w20">{{$estabChqOuro}}</td>
    </tr>

    <tr>
        <td class="w20 bold" style="padding-left: 46px;">Demais Operações</td>
        <td class="w20">&nbsp;</td>
        <td class="w20">&nbsp;</td>
    </tr>

    <tr>
        <td class="w20" style="padding-left: 56px;">1. Sem Garantias – Cartão de Crédito Empresarial</td>
        <td class="w20">{{$calcSemGar}}</td>
        <td class="w20">{{$estabCartEmp}}</td>
    </tr>

    <tr>
        <td class="w20 bold">LONGO PRAZO</td>
        <td class="w20">&nbsp;</td>
        <td class="w20">&nbsp;</td>
    </tr>

    <tr>
        <td class="w20" style="padding-left: 56px;">1. Investimento/Leasing doméstico</td>
        <td class="w20">{{$calcInvest}}</td>
        <td class="w20">{{$estabInv}}</td>
    </tr>

</table>