@extends('entidades.layout')
<header class="row">
        @include('entidades.header')
</header>
@section('conteudo')
<div class="container"> 		
 	<br> 
    {{ csrf_field()}}    
 
    <table class="table table-primary"> 
        <tr>	
                <td>MCI: {{ $entidades->cd_cli}}</td>
                <td>Entidade: {{$entidades->nome}}</td>                                 
        </tr>
        <tr>	   	
                <td>Atividade: {{$entidades->nom_atv}}</td>    	
                <td>Natureza: {{$entidades->nom_atv}}</td>    	
        </tr>           
    </table>      	
    <button class="btn btn-primary mb-2" type="button" onclick="window.location='{{ route('entidade.index') }}'">Voltar à Consulta</button>   	
</div>  

<div class="container">       
        <button class="btn btn-primary" type="button" id="entidadeBtn">
                Dados da Entidade
        </button>  

        <button class="btn btn-primary collapsed" type="button" id="dirigente1Btn" onclick="validaFormEnt();">
                Dirigente 1
        </button>        
       
        <button class="btn btn-primary collapsed" type="button" id="dirigente2Btn">
                Dirigente 2
        </button>   

        <button class="btn btn-primary" type="button" id="portfolioBtn" onclick="validarDirigentes();">
                Portfólio
        </button>  

        <button class="btn btn-primary" type="button" id="parecerBtn">
                Parecer                
        </button>  
        
        <!-- botão teste para o desenvolvedor -->
         <button class="btn btn-primary" type="button" id="desenvBtn">
                Desenvolvedor
        </button>  
        <!-- enviar dados na controller pdf                         -->
        <form method="post" action="{{ route('entidade.pdf') }}" name="form" id="formulario">                                             
                <input type="hidden" name="mci" value="{{$mci}}"/> 
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>  
                <input type="hidden" name="cd_nat" value="{{$entidades->cd_nat}}"/>
                <input type="hidden" name="nom_atv" value="{{$entidades->nom_atv}}"/>
                <input type="hidden" name="nome" value="{{$entidades->nome}}"/>
                <!-- Receber se os formulários foram preenchidos -->
                <input type="hidden" name="entControle" id="entControle" value="{{ csrf_token() }}"/>
                <input type="hidden" name="dirig1Controle" id="dirig1Controle" value="{{ csrf_token() }}"/>
                <input type="hidden" name="dirig2Controle" id="dirig2Controle" value="{{ csrf_token() }}"/>
                
                <!-- ////////////////////////////////////////////////////////////////////// -->
                <!-- //////Formulário da entidade////////////////////////////////////////// -->
                <!-- ////////////////////////////////////////////////////////////////////// -->
                <div id="entidadesToggle" style="display:none;">
                        @include('entidades.entidade')                                                                          
                </div>  
        
                <!-- ////////////////////////////////////////////////////////////////////// -->
                <!-- /////////Formulário do dirigente 1//////////////////////////////////// -->
                <!-- ////////////////////////////////////////////////////////////////////// -->
               
                <div id="dirigente1Toggle" style="display:none;">                                
                        @include('entidades.dirigente1')                                                                   
                </div>

                <!-- ////////////////////////////////////////////////////////////////////// -->
                <!-- /////////Formulário do dirigente 2//////////////////////////////////// -->
                <!-- ////////////////////////////////////////////////////////////////////// -->
                <div id="dirigente2Toggle" style="display:none;">
                        @include('entidades.dirigente2') 
                </div>
                

                <!-- ////////////////////////////////////////////////////////////////////// -->
                <!-- /////////////////////////////////Portfólio//////////////////////////// -->
                <!-- ////////////////////////////////////////////////////////////////////// -->
                <div id="portfolioToggle" style="display:none;">
                        @include('entidades.portfolio')                                                                          
                </div>        
                                
                <!-- /////////////////////////////////////////////////////////////////////// -->
                <!-- /////////////////////////////////Parecer/////////////////////////////// -->
                <!-- /////////////////////////////////////////////////////////////////////// -->

                <div id="parecerToggle"  style="display:none;">           
                        @include('entidades.parecer')                           
                </div> 
                 <!-- botão para gerar súmula -->
                <button class="btn btn-primary" type="submit" id="gerarBtn" action="pagina.php" >
                        Gerar Súmula
                </button>                                     
        </form>      
        <div class="ajax-loader" style = "display:none;">
                <img src="{{ url('img/ajax-loader.gif') }}" class="img-responsive" />
        </div>
</div>

@endsection

