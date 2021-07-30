
 
<style>
    /* formatar as questões */
    .pdf .questions {
        font-size : 16px;
        font-weight : bold;
        color: blue;
    }

    /* formatar as respostas */
    .pdf .answers {
        font-size : 14px;
        margin-bottom : 20px;
    }
    /* espaço na questão 7 */
    .pdf .space{
        left: 400px;
        position: absolute;
    }
    
    /* espaço na questão 7 */
    .pdf .space1{
        left: 800px;
        position: absolute;
    }
    /* negrito no documento */
    .pdf .bold {
        font-weight : bold; 
    }

    /* espaçamento nas margens das TDs */
    .pdf td{
        padding: 3px 10px;
    }

    /* bordas verticais nas tds */
    .pdf table.border td:not(:last-child){
       border-right: 2px solid #000;
    }

    /* alinhar os valores numéricos à direita */
    .pdf .number{
        text-align: right;
    }

    /* borda horizontal que separa a question da answer */
    .pdf table.border tr:first-child td{
       border-bottom: 2px solid #000;
    }

    /* borda colapsada */
    .pdf table.border {
        border-collapse: collapse;
    }
   
   /* largura de 50% para cada td */
   .pdf .w50{
       width: 50%;
   }

   /* largura de 33% para cada td */
   .pdf .w33{
       width: 33%;
   }

    /* largura de 20% para cada td */
    .pdf .w20{
       width: 20%;
   }

   /* configurar o tamanho de tela total para a tabela */
   .pdf table{
       width: 100%;
   }

   .pdf table.width-auto{
       width: auto;
   }

   .pdf table .w22{
       width: 22%;
   }

   .pdf table .w15{
       width: 15%;
   }

   .pdf table .w40{
       width: 40%;
   }
    /* configurar as tabelas da pergunta 16 */
   .pdf .tab16a {        
        border: 1px solid black;                   
        width: 45%;   
        float:left;
        margin-left: 5px;
   }

   .pdf .tab16a td{ 
        border:1px solid black;
        
   }

   .pdf .tab16b{        
        border: 1px solid black;                    
        width: 45%;   
        float:left;
        margin-left: 5px;
   }
   .pdf .tab16b td{ 
        border:1px solid black;        
   }

   .pdf .tab16c{        
        border: 1px solid black;                    
        width: 45%;   
        float:left;
        margin-left: 5px;
   }
   .pdf .tab16c td{ 
        border:1px solid black;        
   }

   .pdf .tab20{    
        width: 45%;                                            
   }
   .pdf .td_tab20{    
        border: 1px solid black;                                             
   }

   .pdf .tab21{    
        width: 25%;                                            
   }

   .pdf .nobold{
       font-weight: normal;
       margin-left: 1px;
       color: black;      
   }

   .pdf h1{
       color: white;
       background-color: blue;
       font-size: 21px;
   }

  
   .pdf table .w30{
        width: 30%;
   }

/* Texts areas */
textarea{
    width: 80%;
    resize: none !important;  
    border: 2px solid black;
    height: 6em;
}

 
   
</style>

<!-- includes das views -->
<div class="pdf">       
    <table>
        <tr class="bold">
            <td rowspan="2" style="width: 25%;"> <<img src="{{$logo}}" width='100%' height="auto"/> </td>            
            <td style="width: 75%; text-align:justify;">Súmula de Análise de Risco e Limite de Crédito </td>
        </tr>
        <tr class="bold">           
            <td style="text-align: justify;"> Entidades Sem Fins Lucrativos </td>
        </tr>

    </table>
    <h1>Dados da Entidade</h1>
    @include('pdf.entidade')

    @if($dirigente == 1)
        <h1>Dados do Dirigente/Administrador</h1>
        @include('pdf.dirigente1')
    @else
        <h1>Dados do Dirigente/Administrador 1</h1>
        @include('pdf.dirigente1')
        <h1>Dados do Dirigente/Administrador 2</h1>
        @include('pdf.dirigente2')              
    @endif           
    
    <h1>Faturamento</h1>
    @include('pdf.faturamento')

    <h1>Risco/Limite de Crédito</h1>
    @include('pdf.risco_limite')
    <h1>Portfólio do Limite de Crédito</h1>
    @include('pdf.portfolio')
    <h1>Informações Adicionais Sobre Garantias</h1>
    @include('pdf.garantias')
    <h1>Parecer/Despacho da Agência</h1>
    @include('pdf.parecer')

</div>                                                                         
