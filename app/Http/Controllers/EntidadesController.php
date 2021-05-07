<?php 
	// incluir o mapeamento da classe entidadesController
	namespace App\Http\Controllers;
	use Carbon\Carbon;	
	use DateTime;	
	//incluir o mapeamento da classe Entidade
	use App\Entidade;
	use Barryvdh\DomPDF\Facade as PDF;
	use illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use Session;
	use Illuminate\Support\Facades\Input;
	use Illuminate\Support\Facades\Storage;

//herda da classe Controller que já vem do laravel
	class EntidadesController extends Controller
	{
		public function index(Request $request) {
			// busca todos os registros da tabela entidades ordenados por nome
	        $entidades = Entidade::query()->orderBy('nome')->get(); 
	        // vamos armazenar dados da sessão na variável mensagem
	        //$mensagem = $request->session()->get(key: 'mensagem');
	        $mensagem = $request->session()->get('mensagem');

	       //envia o array para o index.php, passando o conteúdo da variável entidades - o compact serve para reduzir o código pois senão seria assim: return view ('entidades.index', [  'entidades' => $entidades - passa ainda a mensagem

	      return view('/entidades/index', compact('entidades',  'mensagem'));
    	}

	   	public function show(Request $request){					 	
			$mci = $request->get('mci');
			$limFinal = ($request->has('limFinal'))?$request->get('limFinal'):null;
			$risco1 = ($request->has('risco1'))?$request->get('risco1'):null;			
			$risco2 = ($request->has('risco2'))?$request->get('risco2'):null;
			
			
			
			
			$entidades = Entidade::where('cd_cli', $mci)->get()->first();  																  				   
    		if($entidades){    							
				return view ('/entidades/show',compact('entidades','limFinal','mci','risco1', 'risco2'));				    									
			} else {																							
				session()->flash('msg', 'MCI inválido ou a entidade não atende aos requisitos da IN 23!');
				return redirect()->back();
			} 			
										    		
		} 

				
	
	// envia a requisição para o create.php	
	public function create(){
    	return view('/entidades/create');
	}

	public function buscaMCI(Request $request){
		//Pega o MCI do REUEST
		//INSTANCIA um MODELO ENTIDADE
		// usa o metodo findOrfail() / find() / firstWhere('active', 1)
		// usa o metodo get() (OPCIONAL DEPENDENDO n PRECISA)
		// VERIFICA O RESULTADO  se veio algo do banco
		// RETORNA A STRING com resultado apropriado (SUGESTAO CODIGIQUE em formato JSON)
			// json_encode($objeto)


		//RETONRA um view ()!!
	}
	// função para receber os dados do formulário
	public function store(Request $request){				
		$request->has($request['formEntidade']);
		$request->has($request['dirigente1']);		
		$entAnotSer = intval($request->anotSer);		
		$entAnotRep = intval($request->anotRep);
		$entHistRest = $request->histRest;		
		$entTempAtv = $request->tempAtv;
		$entCliDes = intval($request->cliDes);
		$entConceito = $request->conceito;
			

		//devoluções e talonário bloqueado
		$entDevol = $request->devol;
		$entTalonario = $request->talonario;
		//se o checkbox do talonário estiver desmarcado
		if ($entTalonario === NULL){
			$entTalonario = -1;
		}	
		$ent7a = $entTalonario;	

		//excessos e cliente novo
		$entExcec = $request->excessos;
		$entCliNovo = $request->cliNovo;
		//se o checkbox cliente novo estiver desmarcado recebe -1
		if ($entCliNovo === NULL){
			$entCliNovo = -1;
		}	
		//se for respondido que é um cliente novo na questão 5 tambem recebe - 25,000000001	
		if ($entCliDes == 0){
			$ent7b = 25;
		}	else {
			$ent7b = intval($entCliNovo);
		}		

		// pontuação final da 7a
		if (($ent7a == -1) and ($ent7b == -1)){
			 $entFinal_7a = min($entDevol,$entExcec);			 
		} else if (($ent7a <> -1) and ($ent7b == -1)){
			$entFinal_7a = min($ent7a,$entDevol,$entExcec);
		} else if (($ent7a == -1) and ($ent7b <> -1)){
			$entFinal_7a = min($ent7b,$entDevol,$entExcec);
		} else if (($ent7a <> -1) and ($ent7b <> -1)){
			$entFinal_7a = min($ent7a,$ent7b,$entExcec,$entDevol);
		}		

		// pontuação final da 7b
			
		if (($ent7a == -1) and ($ent7b == -1) and ($entDevol == -1) and ($entExcec == -1)){
			$entFinal_7b = -1;
		} else if (($entDevol == 60) and ($entExcec == 60) and ($ent7a == 0) and ($ent7b == 25)){
				$entFinal_7b = ($entFinal_7a - 10);
		} else if (($entDevol <> 60) or ($entExcec <> 60) or ($ent7a <> -1) or ($ent7b <> -1)){
				$entFinal_7b = $entFinal_7a - 10;
		} else {
			$entFinal_7b = $entFinal_7a;
		}				
		if (($entDevol == 60) or ($entExcec == 60)){
				$entFinal_7b = $entFinal_7a;
		} else {
				$entFinal_7b = ($entFinal_7a - 10);
		}

		
		$entCheque = $request->cheque;
		$entOpr = $request->opr;
		$entPontBB = $request->pontBB;
		$entPontExt = $request->pontExt;
		// receber infs da questão 12 - exercício anterior
		$entRespFiscPrev1_ant = $request->respFiscPrev1_ant; 
		$entRespFiscPrev2_ant = $request->respFiscPrev2_ant;
		$entRespFiscPrev3_ant = $request->respFiscPrev3_ant;
		$entRespFiscPrev4_ant = $request->respFiscPrev4_ant;
		$entRespFiscPrev5_ant = $request->respFiscPrev5_ant;
		$entRespFiscPrev6_ant = $request->respFiscPrev6_ant;
		// tratamento da questão 12
		$entRespFiscPrev1 = $request->respFiscPrev1;
		$entRespFiscPrev2 = $request->respFiscPrev2;
		$entRespFiscPrev3 = $request->respFiscPrev3;
		$entRespFiscPrev4 = $request->respFiscPrev4;
		$entRespFiscPrev5 = $request->respFiscPrev5;
		$entRespFiscPrev6 = $request->respFiscPrev6;		
		$entRespFiscPrev1 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespFiscPrev1));
		$entRespFiscPrev2 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespFiscPrev2));
		$entRespFiscPrev3 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespFiscPrev3));
		$entRespFiscPrev4 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespFiscPrev4));
		$entRespFiscPrev5 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespFiscPrev5));
		$entRespFiscPrev6 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespFiscPrev6));

		if (($entRespFiscPrev5 > 0) or ($entRespFiscPrev6 > 0))  {
			$entPont12 = -900;					
		} else if (($entRespFiscPrev2 > 0) or ($entRespFiscPrev3 > 0))  {
			$entPont12 = 0;			
		} else if (($entRespFiscPrev4 > 0))  {
			$entPont12 = 10;
		} else if ($entRespFiscPrev1 >= 0)  {
			$entPont12 = 20;
		}	
		
		// receber infs da questão 13 - exercício anterior
		$entRespForn1_ant = $request->RespForn1_ant; 
		$entRespForn2_ant = $request->RespForn2_ant;
		$entRespForn3_ant = $request->RespForn3_ant;
		$entRespForn4_ant = $request->RespForn4_ant;
		$entRespForn5_ant = $request->RespForn5_ant;
		$entRespForn6_ant = $request->RespForn6_ant;
		// tratamento da questão 13
		$entRespForn1 = $request->RespForn1;
		$entRespForn2 = $request->RespForn2;
		$entRespForn3 = $request->RespForn3;
		$entRespForn4 = $request->RespForn4;
		$entRespForn5 = $request->RespForn5;
		$entRespForn6 = $request->RespForn6;
		$entRespForn1 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespForn1));
		$entRespForn2 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespForn2));
		$entRespForn3 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespForn3));
		$entRespForn4 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespForn4));
		$entRespForn5 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespForn5));
		$entRespForn6 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespForn6));

		if (($entRespForn5 > 0) or ($entRespForn6 > 0))  {
			$entPont13 = -900;					
		} else if (($entRespForn2 > 0) or ($entRespForn3 > 0))  {
			$entPont13 = 0;			
		} else if (($entRespForn4 > 0))  {
			$entPont13 = 10;
		} else if ($entRespForn1 >= 0)  {
			$entPont13 = 20;
		}
		// receber infs da questão 14 - exercício anterior
		$entRespTrab1_ant = $request->RespTrab1_ant; 
		$entRespTrab2_ant = $request->RespTrab2_ant;
		$entRespTrab3_ant = $request->RespTrab3_ant;
		$entRespTrab4_ant = $request->RespTrab4_ant;
		$entRespTrab5_ant = $request->RespTrab5_ant;
		$entRespTrab6_ant = $request->RespTrab6_ant;
		
		
		// tratamento da questão 14
		$entRespTrab1 = $request->RespTrab1;
		$entRespTrab2 = $request->RespTrab2;
		$entRespTrab3 = $request->RespTrab3;
		$entRespTrab4 = $request->RespTrab4;
		$entRespTrab5 = $request->RespTrab5;
		$entRespTrab6 = $request->RespTrab6;
		$entRespTrab1 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespTrab1));
		$entRespTrab2 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespTrab2));
		$entRespTrab3 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespTrab3));
		$entRespTrab4 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespTrab4));
		$entRespTrab5 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespTrab5));
		$entRespTrab6 = intval(preg_replace("/([^0-9\\,.])/i", "", $entRespTrab6));

		if (($entRespTrab5 > 0) or ($entRespTrab6 > 0))  {
			$entPont14 = -900;					
		} else if (($entRespTrab2 > 0) or ($entRespTrab3 > 0))  {
			$entPont14 = 0;			
		} else if (($entRespTrab4 > 0))  {
			$entPont14 = 10;
		} else if ($entRespTrab1 >= 0)  {
			$entPont14 = 20;
		}	
		
		$entScr = intval($request->scr);
		$entAtraso = $request->atraso;
		$cd_nat = $request->cd_nat;
		if($cd_nat == 20){
			$entNatJur = '0.000000001';
		} else if ($cd_nat == 21){
			$entNatJur = '0.000000002';
		}  else if ($cd_nat == 41){
			$entNatJur = '0.000000003';
		} else if ($cd_nat == 56){
			$entNatJur = '0.000000004';
		}

		// questão 16 - endividamento SCR
		$entTotVencidoSCR = $request->entVencidoSCR;
		$entTotVencidoSCR = intval(preg_replace("/([^0-9\\,.])/i", "", $entTotVencidoSCR));
		
		// questão 16 - créditos baixados no exercício anterior
		$entCredBaixSCR = $request->entBaixSCR;
		$entCredBaixSCR = intval(preg_replace("/([^0-9\\,.])/i", "", $entCredBaixSCR));

		$entAnalise = $request->analise;
		$entAtvd = $request->nom_atv;
		$entRiscAnt = $request->riscAnt;
		$entConcent = $request->concent;
		$entLimVig = $request->limVig;
		$entDirig = intval($request->dirigente);		

		
		// soma o endividamento
		$somaEntFiscaisPrev = $entRespFiscPrev2 + $entRespFiscPrev3 + $entRespFiscPrev5 + $entRespFiscPrev6;
		$somaEntFornec = $entRespForn2 + $entRespForn3 + $entRespForn5 + $entRespForn6;
		$somaEntRespTrab = $entRespTrab2 + $entRespTrab3 + $entRespTrab5 + $entRespTrab6;
		$somaEntSCR = $entTotVencidoSCR + $entCredBaixSCR; 
		
			
		/////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////receber dados do Dirigente 1////////////////////////////////////////////
		/////////////////////////////////////////////////////////////////////////////////////////////////
		$dir1AnotSer = intval($request->anotEmSerDir1);
		$dir1AnotRep = intval($request->anotRepDir1);
		$dir1HistRestr = intval($request->histRestDir1);
		$dir1CliDesd = $request->cliDesdeDir1;		
		$dir1Empres = intval($request->emprDir1);
		$dir1Conceito = intval($request->conceitoDir1);

		//devoluções e talonário bloqueado
		$dir1Dev = $request->dir1Devol;
		$dir1Talonario = $request->talBloqDir1;
		
		//se o checkbox do talonário estiver desmarcado
		if ($dir1Talonario === NULL){
			$dir1_7a = -1;
		} else {
			$dir1_7a = 0;
		}	
		
	
		//excessos, cliente novo e não correntista
		$dir1Exces = $request->dir1Exces;
		$dir1ExcesCheck = $request->excDir1Check;
		//se os checkboxes cliente novo e não correntista estiverem desmarcados recebe -1
		if ($dir1ExcesCheck === NULL){
			$dir1ExcesCheck = -1;
		}	
		
		//se for respondido que é um cliente novo na questão 4 recebe 25,000000001	
		if ($dir1CliDesd == '0,000000001'){
			$dir1_7b = 25;
		}	else {
			$dir1_7b = intval($dir1ExcesCheck);
		}		

		// pontuação final da 7a
		if (($dir1_7a == -1) and ($dir1_7b == -1)){
			 $dir1Final7a = intval(min($dir1Dev,$dir1Exces));				 	 
		} else if (($dir1_7a <> -1) and ($dir1_7b == -1)){
			$dir1Final7a = intval(min($dir1_7a,$dir1Dev,$dir1Exces));
		} else if (($dir1_7a == -1) and ($dir1_7b <> -1)){
			$dir1Final7a = intval(min($dir1_7b,$dir1Dev,$dir1Exces));
		} else if (($dir1_7a <> -1) and ($dir1_7b <> -1)){
			$dir1Final7a = intval(min($dir1_7a,$dir1_7b,$dir1Exces,$dir1Dev));
		}		
			
		
		// pontuação final da 7b
			
		
	   	if ($dir1_7b == 15){
			$dir1Final7b = 15;	
		} else if (($dir1_7a == -1) and ($dir1_7b == -1) and ($dir1Dev == -1) and ($dir1Exces == -1)){
			$dir1Final7b = -1;
		} 
		
		if (($dir1Dev == 60) and ($dir1Exces == 60) and ($dir1_7a == 0) and ($dir1_7b == 25)){
				$dir1Final7b = ($dir1Final7a - 10);
		}

		if (($dir1Dev <> 60) or ($dir1Exces <> 60)) {
				$dir1Final7b = $dir1Final7a - 10;
		} else  {
				$dir1Final7b = $dir1Final7a;
		} 
		
		if (($dir1_7a <> -1) or ($dir1_7b <> -1)) {
				$dir1Final7b = $dir1Final7a - 10;
		} else {
			$dir1Final7b = $dir1Final7a;
		}	
		
		if (($dir1Dev == 60) or ($dir1Exces == 60)){
				$dir1Final7b = $dir1Final7a;
		} 


	   	$dir1CheqEspec = $request->chequeDir1;
		$dir1SitOper = $request->operDir1;
		$dir1PontualBB = $request->pontualBB_Dir1;
		$dir1PontualExt = $request->pontualExtDir1;

	   	

		/////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////receber dados do Dirigente 2////////////////////////////////////////////
		/////////////////////////////////////////////////////////////////////////////////////////////////
		$dir2AnotSer = intval($request->anotEmSerDir2);
		$dir2AnotRep = intval($request->anotRepDir2);
		$dir2HistRestr = intval($request->histRestDir2);
		$dir2CliDesd = $request->cliDesdeDir2;		
		$dir2Empres = intval($request->emprDir2);
		$dir2Conceito = intval($request->conceitoDir2);

		//devoluções e talonário bloqueado
		$dir2Dev = intval($request->dir2Devol);
		$dir2Talonario = $request->talBloqDir2;
		
		//se o checkbox do talonário estiver desmarcado
		if ($dir2Talonario === NULL){
			$dir2_7a = -1;
		} else {
			$dir2_7a = 0;
		}	
		
	
		//excessos, cliente novo e não correntista
		$dir2Exces = intval($request->dir2Exces);
		$dir2ExcesCheck = $request->excDir2Check;
		//se os checkboxes cliente novo e não correntista estiverem desmarcados recebe -1
		if ($dir2ExcesCheck === NULL){
			$dir2ExcesCheck = -1;
		}	
		
		//se for respondido que é um cliente novo na questão 4 recebe 25,000000001	
		if ($dir2CliDesd == '0,000000001'){
			$dir2_7b = 25;
		}	else {
			$dir2_7b = intval($dir2ExcesCheck);
		}		

		// pontuação final da 7a
		if (($dir2_7a == -1) and ($dir2_7b == -1)){
			 $dir2Final7a = intval(min($dir2Dev,$dir2Exces));				 	 
		} else if (($dir2_7a <> -1) and ($dir2_7b == -1)){
			$dir2Final7a = intval(min($dir2_7a,$dir2Dev,$dir2Exces));
		} else if (($dir2_7a == -1) and ($dir2_7b <> -1)){
			$dir2Final7a = intval(min($dir2_7b,$dir2Dev,$dir2Exces));
		} else if (($dir2_7a <> -1) and ($dir2_7b <> -1)){
			$dir2Final7a = intval(min($dir2_7a,$dir2_7b,$dir2Exces,$dir2Dev));
		}		
			
		
		// pontuação final da 7b
		if ($dir2_7b == 15){
			$dir2Final7b = 15;	
		} else if (($dir2_7a == -1) and ($dir2_7b == -1) and ($dir2Dev == -1) and ($dir2Exces == -1)){
				$dir2Final7b = -1;
		}		
		if (($dir2Dev == 60) and ($dir2Exces == 60) and ($dir2_7a == 0) and ($dir2_7b == 25)){
				$dir2Final7b = ($dir2Final7a - 10);
		}		
		if (($dir2Dev <> 60) or ($dir2Exces <> 60)){
				$dir2Final7b = $dir2Final7a - 10;
		} else {
			$dir2Final7b = $dir2Final7a;
		} 

		if (($dir2_7a <> -1) or ($dir2_7b <> -1)){
			$dir2Final7b = $dir2Final7a - 10;
		} else {
			$dir2Final7b = $dir2Final7a;
		}	
		
		if (($dir2Dev == 60) or ($dir2Exces == 60)){
				$dir2Final7b = $dir2Final7a;
		} 

	   $dir2CheqEspec = $request->chequeDir2;
	   $dir2SitOper = $request->operDir2;
	   $dir2PontualBB = $request->pontualBB_Dir2;
	   $dir2PontualExt = $request->pontualExtDir2;

	
					/////////////////////////////////////////////////////////////////////////////////////////////////
					//////////////////////////////////////////Metodologia////////////////////////////////////////////
					////////////////////////////////////////////////////////////////////////////////////////////////   

				
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////Pontuação da coluna E - Análise////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		////////////////////////////////////////////
		///pontuação 1 - E5/////////////////////////
		////////////////////////////////////////////

		// Dirigente 2 da planilha - se não houver dirigente 2 pontuação = -1
		// - 950 bloqueia - análise - planilha - D5:D15
		if ($entDirig == 1){			
			$pont1Dir2 = -1;
			$pont2Dir2 = -1;
			$pont3Dir2 = -1;
			$pont4Dir2 = -1;
			$pont5Dir2 = -1;
			$pont6Dir2 = -1;
			$pont7Dir2 = -1;
			$pont8Dir2 = -1;
			$pont9Dir2 = -1;
			$pont10Dir2 = -1;
			$pont11Dir2 = -1;
			// Se houver apenas um dirigente pegar o mínimo entre os valores abaixo - fórmula E5
			$pontAnalise1 = min($entAnotSer,$entAnotRep,$dir1AnotSer,$dir1AnotRep);
			
		
		// se houver dois dirigentes - D5:D15	
		} else {
			$pont1Dir2 = $dir2AnotSer;
			$pont2Dir2 = $dir2AnotRep;
			$pont3Dir2 = $dir2HistRestr;
			$pont4Dir2 = $dir2CliDesd;
			$pont5Dir2 = $dir2Empres;
			$pont6Dir2 = $dir2Conceito;
			$pont7Dir2 = $dir2Final7b;
			$pont8Dir2 = $dir2CheqEspec;
			$pont9Dir2 = $dir2SitOper;
			$pont10Dir2 = $dir2PontualBB;
			$pont11Dir2 = $dir2PontualExt;	

			$pontAnalise1 = min($entAnotSer,$entAnotRep,$dir1AnotSer,$dir1AnotRep,$pont1Dir2,$pont2Dir2);
		}

		////////////////////////////////////////////
		///pontuação 2 - E6/////////////////////////
		////////////////////////////////////////////
		$pontAnalise2 = 0;

		////////////////////////////////////////////
		///pontuação 3 - E7/////////////////////////
		////////////////////////////////////////////

		// Se 1 dirigente
		if ($entDirig == 1){				
			$pontAnalise3 = intval(min($entHistRest,$dir1HistRestr));
		} else {
			$pontAnalise3 = intval(min($entHistRest,$dir1HistRestr, $dir2HistRestr));
		}

		////////////////////////////////////////////
		///pontuação 4 - E8/////////////////////////
		////////////////////////////////////////////
		$entTempAtv = intval($entTempAtv);
		if ($entTempAtv == -950){				
			$pontAnalise4 = 0;
		} else {
			$pontAnalise4 = intval($entTempAtv);
		}

		////////////////////////////////////////////
		///pontuação 5 - E9/////////////////////////
		////////////////////////////////////////////
		$pontAnalise5 = intval($entCliDes);

		////////////////////////////////////////////
		///pontuação 6 - E10////////////////////////
		////////////////////////////////////////////
		if ($entDirig == 1){				
			$pontAnalise6 = intval(min($entConceito,$dir1Conceito));
		} else {
			$pontAnalise6 = intval(min($entConceito,$dir1Conceito,$dir2Conceito));
		}

		////////////////////////////////////////////
		///pontuação 7 - E11////////////////////////
		////////////////////////////////////////////
		if ($entDirig == 1){				
			$pontAnalise7 = intval(min($entFinal_7b,$dir1Final7b));
		} else {
			$pontAnalise7 = intval(min($entFinal_7b,$dir1Final7b,$dir2Final7b));
		}

		////////////////////////////////////////////
		///pontuação 8 - E12////////////////////////
		////////////////////////////////////////////
		$pontAnalise8 = intval($entCheque);
		
		////////////////////////////////////////////
		///pontuação 9 - E13////////////////////////
		////////////////////////////////////////////
		if ($entDirig == 1){				
			$pontAnalise9 = intval(min($entOpr,$dir1SitOper));
		} else {
			$pontAnalise9 = intval(min($entOpr,$dir1SitOper, $dir2SitOper));
		}
		
		////////////////////////////////////////////
		///pontuação 10 - E14///////////////////////
		////////////////////////////////////////////
		if ($entDirig == 1){				
			$pontAnalise10 = intval(min($entPontBB,$dir1PontualBB));
		} else {
			$pontAnalise10 = intval(min($entPontBB,$dir1PontualBB,$dir2PontualBB));
		}

		////////////////////////////////////////////
		///pontuação 11 - E15///////////////////////
		////////////////////////////////////////////
		if ($entDirig == 1){				
			$pontAnalise11 = intval(min($entPontExt,$dir1PontualExt));
		} else {
			$pontAnalise11 = intval(min($entPontExt,$dir1PontualExt,$dir2PontualExt));
		}

		////////////////////////////////////////////
		///pontuação 12 - E16///////////////////////
		////////////////////////////////////////////

		$pontAnalise12 = intval(($entPont12));

		////////////////////////////////////////////
		///pontuação 13 - E17///////////////////////
		////////////////////////////////////////////

		$pontAnalise13 = intval(($entPont13));

		////////////////////////////////////////////
		///pontuação 14 - E18///////////////////////
		////////////////////////////////////////////

		$pontAnalise14 = $entPont14;

		////////////////////////////////////////////
		///pontuação 15 - E19///////////////////////
		////////////////////////////////////////////
		if ($entScr == -950){				
			$pontAnalise15 = "";
		} else {
			$pontAnalise15 = $entScr;
		}

		////////////////////////////////////////////
		///pontuação 16 - E20///////////////////////
		////////////////////////////////////////////

		$pontAnalise16 = intval($entAtraso);

		////////////////////////////////////////////
		///pontuação 17 - E21///////////////////////
		////////////////////////////////////////////

		$pontAnalise17 = intval($entNatJur);

		////////////////////////////////////////////
		///pontuação 18 - E22///////////////////////
		////////////////////////////////////////////

		$pontAnalise18 = intval($entAnalise);

		////////////////////////////////////////////
		///pontuação 19 - E23///////////////////////
		////////////////////////////////////////////

		$pontAnalise19 = 0;

		////////////////////////////////////////////
		///pontuação 20 - E24///////////////////////
		////////////////////////////////////////////

		$pontAnalise20 = intval($entRiscAnt);

		////////////////////////////////////////////
		///pontuação 21 - E25///////////////////////
		////////////////////////////////////////////

		$pontAnalise21 = intval($entConcent);


		////////////////////////////////////////////
		///pontuação 22 - E26///////////////////////
		////////////////////////////////////////////

		$pontAnalise22 = intval($entLimVig);

		////////////////////////////////////////////
		///Checagem da análise - E27/////////////////
		////////////////////////////////////////////
		
		if (($entTempAtv == -950) || ($entScr == -950)){
			$checagemAnalise = 1;
		} else {
			$checagemAnalise = 0;				
		}
		

		////////////////////////////////////////////
		///Checagem 2 da análise - E28///////////////
		////////////////////////////////////////////

		if($checagemAnalise == 1) {
			$checagemAnalise2 = "SIM";
		} else {
			$checagemAnalise2 = "NÃO";
		}	
		



		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////Pontuação da coluna F - Risco E////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		////////////////////////////////////////////
		///pontuação 1 - F5/////////////////////////
		////////////////////////////////////////////
		if($pontAnalise1 == -900){
			$pontRiscoE1 = 1;
		} else {
			$pontRiscoE1 = 0;
		}

		////////////////////////////////////////////
		///pontuação 2 - F6/////////////////////////
		////////////////////////////////////////////
		if($pontAnalise2 == -900){
			$pontRiscoE2 = 1;
		} else {
			$pontRiscoE2 = 0;
		}

		////////////////////////////////////////////
		///pontuação 3 - F7/////////////////////////
		////////////////////////////////////////////
		if($pontAnalise3 == -900){
			$pontRiscoE3 = 1;
		} else {
			$pontRiscoE3 = 0;
		}

		////////////////////////////////////////////
		///pontuação 4 - F8/////////////////////////
		////////////////////////////////////////////
		if($pontAnalise4 == -900){
			$pontRiscoE4 = 1;
		} else {
			$pontRiscoE4 = 0;
		}

		////////////////////////////////////////////
		///pontuação 5 - F9/////////////////////////
		////////////////////////////////////////////
		if($pontAnalise5 == -900){
			$pontRiscoE5 = 1;
		} else {
			$pontRiscoE5 = 0;
		}

		////////////////////////////////////////////
		///pontuação 6 - F10/////////////////////////
		////////////////////////////////////////////
		if($pontAnalise6 == -900){
			$pontRiscoE6 = 1;
		} else {
			$pontRiscoE6 = 0;
		}

		////////////////////////////////////////////
		///pontuação 7 - F11////////////////////////
		////////////////////////////////////////////
		if($pontAnalise7 == -900){
			$pontRiscoE7 = 1;
		} else {
			$pontRiscoE7 = 0;
		}

		////////////////////////////////////////////
		///pontuação 8 - F12////////////////////////
		////////////////////////////////////////////
		if($pontAnalise8 == -900){
			$pontRiscoE8 = 1;
		} else {
			$pontRiscoE8 = 0;
		}

		////////////////////////////////////////////
		///pontuação 9 - F13////////////////////////
		////////////////////////////////////////////
		if($pontAnalise9 == -900){
			$pontRiscoE9 = 1;
		} else {
			$pontRiscoE9 = 0;
		}

		////////////////////////////////////////////
		///pontuação 10 - F14///////////////////////
		////////////////////////////////////////////
		if($pontAnalise10 == -900){
			$pontRiscoE10 = 1;
		} else {
			$pontRiscoE10 = 0;
		}

		////////////////////////////////////////////
		///pontuação 11 - F15///////////////////////
		////////////////////////////////////////////
		if($pontAnalise11 == -900){
			$pontRiscoE11 = 1;
		} else {
			$pontRiscoE11 = 0;
		}

		////////////////////////////////////////////
		///pontuação 12 - F16///////////////////////
		////////////////////////////////////////////
		if($pontAnalise12 == -900){
			$pontRiscoE12 = 1;
		} else {
			$pontRiscoE12 = 0;
		}

		////////////////////////////////////////////
		///pontuação 13 - F17///////////////////////
		////////////////////////////////////////////
		if($pontAnalise13 == -900){
			$pontRiscoE13 = 1;
		} else {
			$pontRiscoE13 = 0;
		}

		////////////////////////////////////////////
		///pontuação 14 - F18////////////////////////
		////////////////////////////////////////////
		if($pontAnalise14 == -900){
			$pontRiscoE14 = 1;
		} else {
			$pontRiscoE14 = 0;
		}

		////////////////////////////////////////////
		///pontuação 15 - F19///////////////////////
		////////////////////////////////////////////
		if($pontAnalise15 == -900){
			$pontRiscoE15 = 1;
		} else {
			$pontRiscoE15 = 0;
		}

		////////////////////////////////////////////
		///pontuação 16 - F20///////////////////////
		////////////////////////////////////////////
		if($pontAnalise16 == -900){
			$pontRiscoE16 = 1;
		} else {
			$pontRiscoE16 = 0;
		}

		////////////////////////////////////////////
		///pontuação 17 - F21///////////////////////
		////////////////////////////////////////////
		if($pontAnalise17 == -900){
			$pontRiscoE17 = 1;
		} else {
			$pontRiscoE17 = 0;
		}

		////////////////////////////////////////////
		///pontuação 18 - F22///////////////////////
		////////////////////////////////////////////
		if($pontAnalise18 == -900){
			$pontRiscoE18 = 1;
		} else {
			$pontRiscoE18 = 0;
		}

		////////////////////////////////////////////
		///pontuação 19 - F23///////////////////////
		////////////////////////////////////////////
		if($pontAnalise19 == -900){
			$pontRiscoE19 = 1;
		} else {
			$pontRiscoE19 = 0;
		}

		////////////////////////////////////////////
		///pontuação 20 - F24///////////////////////
		////////////////////////////////////////////
		if($pontAnalise20 == -900){
			$pontRiscoE20 = 1;
		} else {
			$pontRiscoE20 = 0;
		}

		////////////////////////////////////////////
		///pontuação 21 - F25///////////////////////
		////////////////////////////////////////////
		if($pontAnalise21 == -900){
			$pontRiscoE21 = 1;
		} else {
			$pontRiscoE21 = 0;
		}

		////////////////////////////////////////////
		///pontuação 22 - F26///////////////////////
		////////////////////////////////////////////
		if($pontAnalise22 == -900){
			$pontRiscoE22 = 1;
		} else {
			$pontRiscoE22 = 0;
		}

		////////////////////////////////////////////
		///checagem risco E - F27///////////////////
		////////////////////////////////////////////
		$checagemRiscoE = ($pontRiscoE1 + $pontRiscoE2 + $pontRiscoE3 + $pontRiscoE4 + $pontRiscoE5 + $pontRiscoE6 + $pontRiscoE7 +
						  $pontRiscoE8 + $pontRiscoE9 + $pontRiscoE10 + $pontRiscoE11 + $pontRiscoE12 + $pontRiscoE13 + $pontRiscoE14 +
						  $pontRiscoE15 + $pontRiscoE16 + $pontRiscoE17 + $pontRiscoE18 + $pontRiscoE19 + $pontRiscoE20 + $pontRiscoE21 +
						  $pontRiscoE22);

		////////////////////////////////////////////
		///Checagem 2 risco E - F28///////////////
		////////////////////////////////////////////

		if($checagemRiscoE == 1) {
			$checagem2RiscoE = "SIM";
		} else {
			$checagem2RiscoE = "NÃO";
		}	


		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////Pontuação - I21////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		// se entidade com menos de 6 meses de atividade ou sem autorização SCR não calcula o risco
		if (($entTempAtv == -950) || ($entScr == -950)) {
			$pontuacao = "Risco não calculado";
		} else if ($somaEntSCR > 0) {
			$pontuacao = "Risco E!!";
		} else if ($checagemRiscoE <> 0){
			$pontuacao = "Risco E!!";
		} else {
			$pontuacao = 100 * ((($pontAnalise1 + $pontAnalise2 + $pontAnalise3 + $pontAnalise4 + $pontAnalise5 + $pontAnalise6 + $pontAnalise7 +
			$pontAnalise8 + $pontAnalise9 + $pontAnalise10 + $pontAnalise11 + $pontAnalise12 + $pontAnalise13 + $pontAnalise14 + $pontAnalise15 
			+ $pontAnalise16)+ 10) / (450+10));
			$pontuacao = round($pontuacao,4);
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////Risco 1 - I23////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		

		if ($checagemAnalise <> 0){
			$risco1 = "Não calculado";
		} else if ($checagemRiscoE <> 0){
			$risco1 = "E";
		} else if ($somaEntSCR > 0) {
			$risco1 = "E";
		} else if ($pontuacao < 42) {
			$risco1 = "E";
		} else if ($pontuacao < 54.5) {
			$risco1 = "D";
		} else if ($pontuacao < 64) {
			$risco1 = "C";
		} else if ($pontuacao < 75) {
			$risco1 = "B";
		} else {
			$risco1 = "A";
		} 
		
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////Risco 2 - I25//////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if ($checagemAnalise <> 0) {
			$risco2 = "Não calculado";
		} else if ($checagemRiscoE <> 0) {
			$risco2 = "E";
		} else if ($somaEntSCR > 0) {
			$risco2 = "E";
		} else if ($pontuacao < 42) {
			$risco2 = "E";
		} else if ($pontuacao < 54.5) {
			$risco2 = "D";
		} else if ($pontuacao < 59.25) {
			$risco2 = "C";
		} else if ($pontuacao < 64) {
			$risco2 = "C+";
		} else if ($pontuacao < 69.5) {
			$risco2 = "B";
		} else if ($pontuacao < 75) {
			$risco2 = "B+";
		} else if ($pontuacao < 83.33) {
			$risco2 = "A";
		} else if ($pontuacao < 91.66) {
			$risco2 = "AA";
		} else {
			$risco2 = "AAA";
		} 
		
		
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////ROB - E35//////////////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$ROB = $request->entTotROB;	
		$ROB1 = substr($ROB, 0, -3);
		$ROB2 = str_replace(".","",$ROB1);
		$ROB = (int)$ROB2;
		if ($ROB > 800000){
			$ROB = 800000;
		}
	
		
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////Critério 1 F34:F57/////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$criterio1_34 = ((20/100)*$ROB);
		$criterio1_35 = ((18.82/100)*$ROB);
		$criterio1_36 = ((17.67/100)*$ROB);
		$criterio1_37 = ((16.59/100)*$ROB);
		$criterio1_38 = ((15.58/100)*$ROB);
		$criterio1_39 = ((14.63/100)*$ROB);
		$criterio1_40 = ((13.74/100)*$ROB);
		$criterio1_41 = ((12.90/100)*$ROB);
		$criterio1_42 = ((12.11/100)*$ROB);
		$criterio1_43 = ((11.37/100)*$ROB);
		$criterio1_44 = ((10.68/100)*$ROB);
		$criterio1_45 = ((10.03/100)*$ROB);
		$criterio1_46 = ((9.42/100)*$ROB);
		$criterio1_47 = ((8.84/100)*$ROB);
		$criterio1_48 = ((8.30/100)*$ROB);
		$criterio1_49 = ((7.79/100)*$ROB);
		$criterio1_50 = ((7.31/100)*$ROB);
		$criterio1_51 = ((6.86/100)*$ROB);
		$criterio1_52 = ((6.44/100)*$ROB);
		$criterio1_53 = ((6.05/100)*$ROB);
		$criterio1_54 = ((5.68/100)*$ROB);
		$criterio1_55 = ((5.33/100)*$ROB);
		$criterio1_56 = ((5.00/100)*$ROB);
		$criterio1_57 = ((0/100)*$ROB);

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////Critério 2 G34:G57/////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$criterio2_34 = (50000 + $criterio1_34)/2;
		$criterio2_35 = (43194 + $criterio1_35)/2;
		$criterio2_36 = (37315 + $criterio1_36)/2;
		$criterio2_37 = (32236 + $criterio1_37)/2;
		$criterio2_38 = (27848 + $criterio1_38)/2;
		$criterio2_39 = (24058 + $criterio1_39)/2;
		$criterio2_40 = (20783 + $criterio1_40)/2;
		$criterio2_41 = (17954 + $criterio1_41)/2;
		$criterio2_42 = (15511 + $criterio1_42)/2;
		$criterio2_43 = (13399 + $criterio1_43)/2;
		$criterio2_44 = (11576 + $criterio1_44)/2;
		$criterio2_45 = (10000 + $criterio1_45)/2;
		$criterio2_46 = (8639 + $criterio1_46)/2;
		$criterio2_47 = (7463 + $criterio1_47)/2;
		$criterio2_48 = (6447 + $criterio1_48)/2;
		$criterio2_49 = (5570 + $criterio1_49)/2;
		$criterio2_50 = (4812 + $criterio1_50)/2;
		$criterio2_51 = (4157 + $criterio1_51)/2;
		$criterio2_52 = (3591 + $criterio1_52)/2;
		$criterio2_53 = (3102 + $criterio1_53)/2;
		$criterio2_54 = (2680 + $criterio1_54)/2;
		$criterio2_55 = (2315 + $criterio1_55)/2;
		$criterio2_56 = (2000 + $criterio1_56)/2;
		$criterio2_57 = (0 + $criterio1_57)/2;

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////Menor H  H34:H57/////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$menorH_34 = min($criterio1_34,$criterio2_34);
		$menorH_35 = min($criterio1_35,$criterio2_35);
		$menorH_36 = min($criterio1_36,$criterio2_36);
		$menorH_37 = min($criterio1_37,$criterio2_37);
		$menorH_38 = min($criterio1_38,$criterio2_38);
		$menorH_39 = min($criterio1_39,$criterio2_39);
		$menorH_40 = min($criterio1_40,$criterio2_40);
		$menorH_41 = min($criterio1_41,$criterio2_41);
		$menorH_42 = min($criterio1_42,$criterio2_42);
		$menorH_43 = min($criterio1_43,$criterio2_43);
		$menorH_44 = min($criterio1_44,$criterio2_44);
		$menorH_45 = min($criterio1_45,$criterio2_45);
		$menorH_46 = min($criterio1_46,$criterio2_46);
		$menorH_47 = min($criterio1_47,$criterio2_47);
		$menorH_48 = min($criterio1_48,$criterio2_48);
		$menorH_49 = min($criterio1_49,$criterio2_49);
		$menorH_50 = min($criterio1_50,$criterio2_50);
		$menorH_51 = min($criterio1_51,$criterio2_51);
		$menorH_52 = min($criterio1_52,$criterio2_52);
		$menorH_53 = min($criterio1_53,$criterio2_53);
		$menorH_54 = min($criterio1_54,$criterio2_54);
		$menorH_55 = min($criterio1_55,$criterio2_55);
		$menorH_56 = min($criterio1_56,$criterio2_56);
		$menorH_57 = min($criterio1_57,$criterio2_57);

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////Menor I  I34:I57/////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if (min($criterio1_34,$criterio2_34) > 100000) {
			$menorI_34 = 100000;
		} else {
			$menorI_34 = min($criterio1_34,$criterio2_34);
		}		
		
		$menorI_35 = min($criterio1_35,$criterio2_35);
		$menorI_36 = min($criterio1_36,$criterio2_36);
		$menorI_37 = min($criterio1_37,$criterio2_37);
		$menorI_38 = min($criterio1_38,$criterio2_38);
		$menorI_39 = min($criterio1_39,$criterio2_39);
		$menorI_40 = min($criterio1_40,$criterio2_40);
		$menorI_41 = min($criterio1_41,$criterio2_41);
		$menorI_42 = min($criterio1_42,$criterio2_42);
		$menorI_43 = min($criterio1_43,$criterio2_43);
		$menorI_44 = min($criterio1_44,$criterio2_44);
		$menorI_45 = min($criterio1_45,$criterio2_45);
		$menorI_46 = min($criterio1_46,$criterio2_46);
		$menorI_47 = min($criterio1_47,$criterio2_47);
		$menorI_48 = min($criterio1_48,$criterio2_48);
		$menorI_49 = min($criterio1_49,$criterio2_49);
		$menorI_50 = min($criterio1_50,$criterio2_50);
		$menorI_51 = min($criterio1_51,$criterio2_51);
		$menorI_52 = min($criterio1_52,$criterio2_52);
		$menorI_53 = min($criterio1_53,$criterio2_53);
		$menorI_54 = min($criterio1_54,$criterio2_54);
		$menorI_55 = min($criterio1_55,$criterio2_55);
		$menorI_56 = min($criterio1_56,$criterio2_56);
		$menorI_57 = min($criterio1_57,$criterio2_57);

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Risco A  N37/////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		if (($pontuacao >= 75) && ($pontuacao < 81.25)) {
			$riscoA = $menorI_37;
		} elseif (($pontuacao >= 81.25) && ($pontuacao < 87.5)) {
			$riscoA = $menorI_36;
		} elseif (($pontuacao >= 87.5) && ($pontuacao < 93.75)) {
			$riscoA = $menorI_35;
		} else if ($pontuacao >= 93.75) {
			$riscoA = $menorI_34;
		} else {
			$riscoA = "";
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Risco B  M37/////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if (($pontuacao >= 64) && ($pontuacao < 66.2)) {
			$riscoB = $menorI_42;
		} elseif (($pontuacao >= 66.2) && ($pontuacao < 68.4)) {
			$riscoB = $menorI_41;
		} elseif (($pontuacao >= 68.4) && ($pontuacao < 70.6)) {
			$riscoB = $menorI_40;
		} elseif (($pontuacao >= 70.6) && ($pontuacao < 72.8))  {
			$riscoB = $menorI_39;
		} elseif (($pontuacao >= 72.8) && ($pontuacao < 75)) {
			$riscoB = $menorI_38;
		} else if ($pontuacao < 64) {
			$riscoB = "";
		} else {
			$riscoB = $riscoA;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Risco C  L37/////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if (($pontuacao >= 54.5) && ($pontuacao < 55.86)) {
			$riscoC = $menorI_49;
		} elseif (($pontuacao >= 55.86) && ($pontuacao < 57.21)) {
			$riscoC = $menorI_48;
		} elseif (($pontuacao >= 57.21) && ($pontuacao < 58.57)) {
			$riscoC = $menorI_47;
		} elseif (($pontuacao >= 58.57) && ($pontuacao < 59.93))  {
			$riscoC = $menorI_46;
		} elseif (($pontuacao >= 59.93) && ($pontuacao < 61.28)) {
			$riscoC = $menorI_45;
		} elseif (($pontuacao >= 61.28) && ($pontuacao < 62.64)) {
			$riscoC = $menorI_44;
		} elseif (($pontuacao >= 62.64) && ($pontuacao < 64)) {
			$riscoC = $menorI_43;
		} else if ($pontuacao < 54.5) {
			$riscoC = "";
		} else {
			$riscoC = $riscoB;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Risco D  K37/////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if ($pontuacao < 42){
			$riscoD = "limite 0";
		} elseif (($pontuacao < 43.79) && ($pontuacao >= 42)) {
			$riscoD = $menorI_56;
		} elseif (($pontuacao < 45.58) && ($pontuacao >= 43.79)) {
			$riscoD = $menorI_55;
		} elseif (($pontuacao < 47.36) && ($pontuacao >= 45.58))  {
			$riscoD = $menorI_54;
		} elseif (($pontuacao < 49.15) && ($pontuacao >= 47.36)) {
			$riscoD = $menorI_53;
		} elseif (($pontuacao < 50.93) && ($pontuacao >= 49.15)) {
			$riscoD = $menorI_52;
		} elseif (($pontuacao < 52.72) && ($pontuacao >= 50.93)) {
			$riscoD = $menorI_51;
		} else if (($pontuacao < 54.5) && ($pontuacao >= 52.72)) {
			$riscoD = $menorI_50;
		} else {
			$riscoD = $riscoC;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Verifica se os dados foram preenchidos - similar ao G28//////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		// receber se os dados foram preenchidos nos três formulários
		$entControle = intval($request->entControle);
		$dirig1Controle = intval($request->dirig1Controle);
		$dirig2Controle = intval($request->dirig2Controle);	
		
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Limite calculado O37/////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if($pontuacao == "Risco E!!"){
			$limCalc = 0;
		} else if ($pontuacao == "Risco não calculado") {
			$limCalc = 0;
		} else if (($entControle == 1) || ($dirig1Controle == 1) || ($dirig2Controle == 1)) {
			$limCalc = 0;
		} else if ($pontuacao < 42) {
			$limCalc = 0;
		} else if ($pontuacao < 54.5) {
			$limCalc = $riscoD;
		} else if ($pontuacao < 64) {
			$limCalc = $riscoC;
		} else if ($pontuacao < 75) {
			$limCalc = $riscoB;
		} else if ($pontuacao <= 100) {
			$limCalc = $riscoA;
		} else {
			$limCalc = 0;
		}
		
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Endividamento Ceric O40 - SCR CP/////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$entVencerSCR1 = $request->entVencerSCR1;		
		$scr1 = substr($entVencerSCR1, 0, -3);
		$scr1 = str_replace(".","",$scr1);
		$entVencerSCR1 = (int)$scr1;

		$entVencerSCR2 = $request->entVencerSCR2;
		$scr2 = substr($entVencerSCR2, 0, -3);
		$scr2 = str_replace(".","",$scr2);
		$entVencerSCR2 = (int)$scr2;

		$ceric = $entVencerSCR1 + $entVencerSCR2;

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Faturamento últimos 12 meses O41 ////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$rob12Meses = $request->entROB3;
		$rob12Meses_I = substr($rob12Meses, 0, -3);
		$rob12Meses_II = str_replace(".","",$rob12Meses_I);
		$rob12Meses = (int)$rob12Meses_II;
				

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Faturamento / Endividamento CP P41///////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if (((2*$rob12Meses) < $ceric) || ($risco1 == "Não calculado")) {
			$rob12_ceric = 0;
		} else {
			$rob12_ceric = 1;
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Limite final O44/////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		if ($rob12_ceric == 1) {
			$limFinal = $limCalc;
		} else {
			$limFinal = 0;
		}
		$limFinal = number_format((int)$limFinal, 2, ',', '.');
		$mci = $request->get('mci');
		


		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////////////////////Portfólio/////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		/////////////////////Cheque Ouro Empresarial AC75 - Cartão Empresarial AC81///////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// Capturar o risco anterior
		$portfRiscAnt = $request->portfRiscAnt;	

		// Capturar o limite anterior
		$portfLimAnt = $request->portfLimAnt;
		
		// Capturar o vencimento atual
		$entLim = $request->entLim;

		// Capturar o risco atribuído
		$inputRisco1 = $request->risco1;
	
		// Capturar o risco atribuído FEI
		$inputRisco2 = $request->inputRisco2;

				
		// Capturar o valor calculado do cheque ouro
		$calcChequeOur = floatval($request->calcChequeOur);	
		
		// Captura o valor calculado do cartão empresarial
		$calcSemGar = floatval($request->calcSemGar);	
		
				
		// Foi preciso realizar um tratamento na data que vem do form, substituindo a barra por traço pois 
		//o programa estava invertendo o dia e o mês
		$vencimentoLimAtual = ($request->input('vencAtual'))?
			str_replace('/','-',$request->input('vencAtual')):null;
		
		// Se não for null realiza o tratamento	
		if ($vencimentoLimAtual)
			//$vencimentoLimAtual = Carbon::parse(strtotime($vencimentoLimAtual));
			$vencimentoLimAtual = date("d-m-Y",strtotime($vencimentoLimAtual));
		
		// Calcula a diferença entre a data de hoje e o vencimento do limite informado pelo usuário
		$datediff =  date_diff(date_create($vencimentoLimAtual), date_create(date('d-m-Y')));

		// retorna o cálcuo do intervalo em um formato de dias positivo ou negativo
		$intervalo =  $datediff->format("%r%a");
				
		// Captura o valor vigente estabelecido no cheque ouro
		$vigCheqOuro = ($request->has('entCheque'))?$request->get('entCheque'):null;
		
		// Captura o valor vigente estabelecido no cartão empresarial
		$vigCartaoEmp = ($request->has('entCartaoEmp'))?$request->get('entCartaoEmp'):null;
		
		if ($risco1 == "Não calculado"){
			  $auxCheqOuro = 0;
			  $auxCartaoEmp = 0;
			 
		} else if (($risco1 == "E") && ($entAnalise == '0.000000002')){
			  $auxCheqOuro = 0;
			  $auxCartaoEmp = 0;
			 
		} else if (($entAnalise == '0.000000001') && ($intervalo < 30) && ($intervalo <> -0)) {
			  $auxCheqOuro = max($calcChequeOur,$vigCheqOuro);
			  $auxCartaoEmp = max($calcSemGar,$vigCartaoEmp);
			  
		} else {
			$auxCheqOuro = $calcChequeOur;
			$auxCartaoEmp = $calcSemGar;
			
		}
		
		
		//return view('pdf.pdf', array_merge($request->all(),['inputRisco1'=>$risco1,'inputRisco2'=>$risco2,
		//'inputLimCalculado' =>$limCalc]));
	
		// dados que são retornados para o show				
		return json_encode(['limFinal'=> $limFinal, 'mci'=> $mci, 'risco1'=>$risco1, 'risco2'=>$risco2,
		'auxCheqOuro'=>$auxCheqOuro, 'auxCartaoEmp'=>$auxCartaoEmp]);
			
		
		// echo (var_dump($entControle))."<br>";'
		// echo (var_dump($dirig1Controle))."<br>";
		// echo (var_dump($dirig2Controle))."<br>";
		// echo ("vencer SCR1 ").($entVencerSCR1)."<br>";
		// echo ("vencer SCR2 ").($entVencerSCR2)."<br>";
		// echo ("lim calculado ").($limCalc)."<br>";
		

		
		// echo ("ceric ").($ceric)."<br>";
		

		// echo ("pontuação ").($pontuacao)."<br>";
		// echo ("risco A ").($riscoA)."<br>";
		// echo ("risco B ").($riscoB)."<br>";
		// echo ("risco C ").($riscoC)."<br>";
		// echo ("risco D ").($riscoD)."<br>";
		
		// echo "rob 12 meses ".($rob12Meses)."<br>";
		// echo ("faturamento 12 sobre CER cp ").($rob12_ceric)."<br>";
		
		// $numero = number_format((float)$menorI_34, 2, ',', '.');
		
		
		// echo ("rob ").($ROB)."<br>";
		// echo ("risco 1 ").($risco1)."<br>";
		// echo ("risco 2 ").($risco2)."<br>";
		// echo ("limite final ").($limFinal)."<br>";
		// echo (var_dump($risco1))."<br>";

		// echo (var_dump($pontAnalise1))."<br>";
		// echo (var_dump($pontAnalise2))."<br>";
		// echo (var_dump($pontAnalise3))."<br>";
		// echo (var_dump($pontAnalise4))."<br>";
		// echo (var_dump($pontAnalise5))."<br>";
		// echo (var_dump($pontAnalise6))."<br> <br>";
		// echo (var_dump($pontAnalise7))."<br>";
		// echo ("pontuação final 7b").(var_dump($entFinal_7b))."<br>";
		// echo ("dirigente 1 7b").(var_dump($dir1Final7b))."<br>";
		// echo ("dirigente 1 devolução").(var_dump($dir1Dev))."<br>";		
		// echo ("dirigente 1 excessos").(var_dump($dir1Exces))."<br>";		
		// echo "pontuação 7a do dirigente 1 "; var_dump($dir1_7a); echo "<br>";
		// echo "pontuação 7b do dirigente 1 "; var_dump($dir1_7b); echo "<br>";
		// echo ("dirigente 1 7a").(var_dump($dir1Final7a))."<br>";
		// echo ("dirigente 1 7b").(var_dump($dir1Final7b))."<br>";
		// echo ("dirigente 2 devolução").(var_dump($dir2Dev))."<br>";		
		// echo ("dirigente 2 excessos").(var_dump($dir2Exces))."<br>";		
		// echo "pontuação 7a do dirigente 2 "; var_dump($dir2_7a); echo "<br>";
		// echo "pontuação 7b do dirigente 2 "; var_dump($dir2_7b); echo "<br>";
		// echo ("dirigente 2 7a").(var_dump($dir2Final7a))."<br>";
		// echo ("dirigente 2 7b").(var_dump($dir2Final7b))."<br>";
		// echo (var_dump($pontAnalise8))."<br>";
		// echo (var_dump($pontAnalise9))."<br>";
		// echo (var_dump($pontAnalise10))."<br>";
		// echo (var_dump($pontAnalise11))."<br>";
		// echo (var_dump($pontAnalise12))."<br>";
		// echo (var_dump($pontAnalise13))."<br>";
		// echo (var_dump($pontAnalise14))."<br>";
		// echo (var_dump($pontAnalise15))."<br>";
		// echo (var_dump($pontAnalise16))."<br>";

		


		// $somaEntFiscaisPrev = $entRespFiscPrev2 + $entRespFiscPrev3 + $entRespFiscPrev5 + $entRespFiscPrev6;
		// $somaEntFornec = $entRespForn2 + $entRespForn3 + $entRespForn5 + $entRespForn6;
		// $somaEntRespTrab = $entRespTrab2 + $entRespTrab3 + $entRespTrab5 + $entRespTrab6;
		// $somaEntSCR = $entTotVencidoSCR + $entCredBaixSCR; 
		
		// echo (var_dump($pontAnalise1))."<br>";
		// echo (var_dump($pontAnalise2))."<br>";
		// echo (var_dump($pontAnalise3))."<br>";
		// echo (var_dump($pontAnalise4))."<br>";
		// echo (var_dump($pontAnalise5))."<br>";
		// echo (var_dump($pontAnalise6))."<br>";
		// echo (var_dump($pontAnalise7))."<br>";
		// echo (var_dump($pontAnalise8))."<br>";
		// echo (var_dump($pontAnalise9))."<br>";
		// echo (var_dump($pontAnalise10))."<br>";
		// echo (var_dump($pontAnalise11))."<br>";
		// echo (var_dump($pontAnalise12))."<br>";
		// echo (var_dump($pontAnalise13))."<br>";
		// echo (var_dump($pontAnalise14))."<br>";
		// echo (var_dump($pontAnalise15))."<br>";
		// echo (var_dump($pontAnalise16))."<br>";
		// echo (var_dump($pontAnalise17))."<br>";
		// echo (var_dump($pontAnalise18))."<br>";
		// echo (var_dump($pontAnalise19))."<br>";
		// echo (var_dump($pontAnalise20))."<br>";
		// echo (var_dump($pontAnalise21))."<br>";
		// echo (var_dump($pontAnalise22))."<br>";
		



		//echo ("tempo de atividade")."<br>"; echo (var_dump($entTempAtv))."<br>";
		// echo (var_dump($pontAnalise1))."<br>";
		// echo (var_dump($pontAnalise2))."<br>";
		// echo (var_dump($pontAnalise3))."<br>";
		// echo (var_dump($pontAnalise4))."<br>";
		// echo (var_dump($pontAnalise5))."<br>";
		// echo (var_dump($pontAnalise6))."<br>";
		// echo (var_dump($pontAnalise7))."<br>";
		// echo (var_dump($pontAnalise8))."<br>";
		// echo (var_dump($pontAnalise9))."<br>";
		// echo (var_dump($pontAnalise10))."<br>";
		// echo (var_dump($pontAnalise11))."<br>";
		// echo (var_dump($pontAnalise12))."<br>";
		// echo (var_dump($pontAnalise13))."<br>";
		// echo (var_dump($pontAnalise14))."<br>";
		// echo (var_dump($pontAnalise15))."<br>";
		// echo (var_dump($pontAnalise16))."<br>";
		// echo (var_dump($pontAnalise17))."<br>";
		// echo (var_dump($pontAnalise18))."<br>";
		// echo (var_dump($pontAnalise19))."<br>";
		// echo (var_dump($pontAnalise20))."<br>";
		// echo (var_dump($pontAnalise21))."<br>";
		// echo (var_dump($pontAnalise22))."<br>";
		// echo (var_dump($checagemAnalise));
		// echo "<br>";
		//  var_dump($entAnotSer);
		//  var_dump($entAnotRep);
		//  var_dump($dir1AnotSer);
		//  var_dump($dir1AnotRep);
		//  var_dump($entDirig);
		//  var_dump($pont1Dir2);
		//  var_dump($pontAnalise1);		
		// var_dump($entDevol); echo "<br>";
		// var_dump($ent7a); echo "<br>";
		// var_dump($entFinal_7a); echo "<br>";		
		// var_dump($entExcec); echo "<br>";
		// var_dump($ent7b); echo "<br>";
		// echo "pontuação final do 7b "; var_dump($entFinal_7b); echo "<br>";						
		// echo "pontuação final do dirigente 1 "; var_dump($dir1Final7b); echo "<br>";
		// echo "pontuação devolução do dirigente 2 "; var_dump($dir2Dev); echo "<br>";
		// echo "pontuação excessos do dirigente 2 "; var_dump($dir2Exces); echo "<br>";
		// echo "pontuação 7a do dirigente 2 "; var_dump($dir2_7a); echo "<br>";
		// echo "pontuação 7b do dirigente 2 "; var_dump($dir2_7b); echo "<br>";
		// echo "pontuação final A do dirigente 2 "; var_dump($dir2Final7a); echo "<br>";
		// echo "pontuação final B do dirigente 2 "; var_dump($dir2Final7b); echo "<br>";		
		// echo "talonário "; var_dump($ent7a); echo "<br>";
		// echo "cliente novo"; var_dump($ent7b); echo "<br>";
	}
	

	


		// capturar da session o id e o nome através da mensagem que foi definida no index. o flash dura apenas uma sessão
	    //$request->session()->flash('mensagem',"Entidade {$entidade->id} criada com sucesso {$entidade->nome}");
	    //return redirect('/entidades');
	//}

	// função para remover entidade
	public function destroy (Request $request)

	{

	    Entidade::destroy($request->id);
	    $request->session()->flash('mensagem',"Entidade removida com sucesso");

	    return redirect('/entidades');

	}

	public function pdf (Request $request){
		// Get image
		$baseImage = Storage::get('public/logo.png');
		// Turn into base64 image
		$baseImage = base64_encode($baseImage);
		$baseImage = 'data:image/png;base64,'.$baseImage;		
		$pdf = PDF::loadView('pdf.pdf', array_merge($request->all(),['logo'=>$baseImage]));
		$name = $request->mci.'-'.date('d-m-Y-h-i-s',time());
		Storage::put('controle-sumulas/'.$name.'.pdf',$pdf->download()->getOriginalContent());
		return view('pdf.pdf', array_merge($request->all(),['logo'=>$baseImage]));
	}

}

	
