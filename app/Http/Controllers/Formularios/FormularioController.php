<?php

namespace App\Http\Controllers\Formularios;

use App\Http\Controllers\Controller;
use App\Models\Processo;
use App\Models\Sistema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormularioController extends Controller
{
    public function index(){
        return view('perguntas.index');
    }
    public function create(){
        return view('perguntas.Formulario');
    }




    public function store(Request $request){
        //dd(Auth::user());
        $sistemas = array();
        $processos = array();
        $dadosPessoais = array();
        $dadosPessoaisEspeciais = array();
        
        $ctdadospessoais= array();
        $ctdadosPessoaisSensiveis= array();
        foreach ($request->input('nome_sistema') as $key => $value) {
            if (isset($request->input('nome_sistema')[$key]) && isset($request->input('informativo_sistema')[$key]) && isset($request->input('sitelinkousistema')[$key]) && isset($request->input('responsavel_sistema')[$key])) {
                $sistema = Sistema::create([
                    'secretaria'=>$request->input('secretaria')[$key],
                    'departamento'=>$request->input('departamento')[$key],
                    'nome_sistema' => $request->input('nome_sistema')[$key],
                    'cargo' => $request->input('cargo')[$key],
                    'informativo_sistema' => $request->input('informativo_sistema')[$key],
                    'sitelinkousistema' => $request->input('sitelinkousistema')[$key],
                    'responsavel_sistema' => $request->input('responsavel_sistema')[$key],
                ]);
                $sistemas[] = $sistema;
                
            } else {
                // Trate o erro ou registre uma mensagem de aviso aqui
            }
           
          
        }
        

        foreach ($request->input('nome_processo') as $key => $value) {
  


            if (
                isset($request->input('nome_processo')[$key]) &&
                isset($request->input('nome_do_responsavel_processo')[$key]) &&
                isset($request->input('telefone_responsavel')[$key])&& 
                isset($request->input('processo_email')[$key]) &&
                isset($request->input('processo_descricao')[$key])&&
                isset($request->input('processo_ciclodevida')[$key])&&
                isset($request->input('processo_coleta')[$key])&&
                isset($request->input('processo_exclusao')[$key])&&
                isset($request->input('processo_finalidade')[$key])&&
                isset($request->input('processo_previsao')[$key])&&
             
                isset($request->input('processo_resultados_pretendidos')[$key])&&
               /*  $request->has('dados_pessoais') && $request->input('dados_pessoais')[$key] !== null &&
                $request->has('dados_pessoais_sensiveis') && $request->input('dados_pessoais_sensiveis')[$key] !== null &&
                $request->has('dados_pessoais_especiais') && $request->input('dados_pessoais_especiais')[$key] !== null&&
                $request->has('ctdadospessoais') && $request->input('ctdadospessoais')[$key] !== null&&*/
               // $request->has('ct_dadospessoaissensiveis') && $request->input('ct_dadospessoaissensiveis')[$key] !== null
              
  

                isset($request->input('profilling')[$key])&&
                isset($request->input('documento')[$key])&&

                isset($request->input('frequencia')[$key])&&

                isset($request->input('quantidade_dados_titulartratatados')[$key])&&
                 isset($request->input('quantidade_pessoasespeciasesensiveis_dadostratados')[$key])&&
                isset($request->input('geografica')[$key])&&
                isset($request->input('processos_list_Areas_Compart')[$key])&&
                isset($request->input('processos_list_transf_dados_pessoais')[$key])&&
                isset($request->input('operacao_tratamento_mediante_tomadadecisao')[$key])&&
                isset($request->input('dado_formafisica')[$key])
              //  isset($request->input('auditoria')[$key])
     
            ) {
               
               $ctdadospessoais = $request->input('ctdadospessoais');
                $ctdadospessoaisString=[];
                foreach($ctdadospessoais as $valor){
                    $ctdadospessoaisString [] = $valor;
                    $ctdadosp= json_encode($ctdadospessoaisString);

                }
                
                $ctdadosPessoaisSensiveis = $request->input('ct_dadospessoaissensiveis');
                $ctdadosPessoaisSensiveisString=[];
                foreach($ctdadosPessoaisSensiveis as $valor){
                    $ctdadosPessoaisSensiveisString [] = $valor;
                    $ctdadospsensi= json_encode($ctdadosPessoaisSensiveisString);

                }

                $dadosPessoais = $request->input('dados_pessoais');
                $dadosPessoaisString = [];
                if (!is_null($dadosPessoais) && is_array($dadosPessoais)) {
                    foreach($dadosPessoais as $valor){
                       $dadosPessoaisString[]= $valor;
                       
                    }
                    
                }
                $dadosp = json_encode($dadosPessoaisString);


                $dadosPessoaisEspeciais = $request->input('dados_pessoais_especiais');
                $dadosPessoaisEspeciaisString = [];
                
                if (!is_null($dadosPessoaisEspeciais) && is_array($dadosPessoaisEspeciais)) {
                    foreach ($dadosPessoaisEspeciais as $valor) {
                     
                        $dadosPessoaisEspeciaisString[] = $valor;
                    }
                }
                $dados = json_encode($dadosPessoaisEspeciaisString);

   
                

 
                
                $processo = Processo::create([
                    'nome_processo' => $request->input('nome_processo')[$key],
                    'nome_do_responsavel_processo' => $request->input('nome_do_responsavel_processo')[$key],
                    'telefone_responsavel' => $request->input('telefone_responsavel')[$key],
                    'processo_email' => $request->input('processo_email')[$key],
                    'processo_descricao' => $request->input('processo_descricao')[$key],
                   'processo_ciclodevida' => $request->input('processo_ciclodevida')[$key],
                    'processo_coleta'=>$request->input('processo_coleta')[$key],
                    'processo_exclusao'=>$request->input('processo_exclusao')[$key],
                    'processo_finalidade'=>$request->input('processo_finalidade')[$key],
                    'processo_previsao'=>$request->input('processo_previsao')[$key],
                    'processo_resultados_pretendidos'=>$request->input('processo_resultados_pretendidos')[$key],
                    'dados_pessoais'=>$dadosp,
           
                 
                    'dados_pessoais_especiais'=> $dados,
                    'ctdadospessoais'=>$ctdadosp,
                    'ct_dadospessoaissensiveis'=>$ctdadospsensi,

                   
                    'profilling' => $request->input('profilling')[$key],
                    'documento' => $request->input('documento')[$key],
                    
                    'frequencia' => $request->input('frequencia')[$key],
                    'frequenciaobs' => $request->input('frequenciaobs')[$key],
                    'quantidade_dados_titulartratatados' => $request->input('quantidade_dados_titulartratatados')[$key],
                    'quantidade_pessoasespeciasesensiveis_dadostratados' => $request->input('quantidade_pessoasespeciasesensiveis_dadostratados')[$key],
                    'geografica' => $request->input('geografica')[$key],
                     'processos_list_Areas_Compart' => $request->input('processos_list_Areas_Compart')[$key],
                    'processos_list_transf_dados_pessoais' => $request->input('processos_list_transf_dados_pessoais')[$key],
                    'operacao_tratamento_mediante_tomadadecisao' => $request->input('operacao_tratamento_mediante_tomadadecisao')[$key],
                    'dado_formafisica' => $request->input('dado_formafisica')[$key],
                    'auditoria' => $request->input('auditoria')[$key],
                    'observacoes' => $request->input('observacao')[$key],
                 
                    // Adicione outros campos conforme necessário
                ]);

                $processos[] = $processo;
            
               
                return redirect()->route('formulario.index');
                
             
            }else{
                dd($request->all(),$processos);
                return redirect()->route('formulario.create');
            }

        }

        
        


    }
}
