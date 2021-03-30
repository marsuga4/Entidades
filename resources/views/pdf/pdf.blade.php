<style>
    /* formatar as questões */
    .pdf .questions {
        font-size : 16px;
        font-weight : bold;
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

   /* configurar o tamanho de tela total para a tabela */
   .pdf table{
       width: 100%;
   }
</style>

<!-- includes das views -->
<div class="pdf">
    <h1>Dados da Entidade</h1>
    @include('pdf.entidade') 
</div>                                                                         
