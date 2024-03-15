<?php

namespace App\Http\Controllers\User;

use App\Events\ResgisterPessoas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequestPessoa;
use App\Mail\PessoasCriadas;
use App\Models\Empresa;
use App\Models\Pessoas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsuariosController extends Controller
{       


    public function index(){
        return view("pessoas.index");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function indexJson(){
        $pessoas =  Pessoas::all();
        if($pessoas->isEmpty()){
            return response()->json(["type" => "error", "empresas" => []], 200);
        }
        $pessoasDataList =[];
        foreach($pessoas as $pessoa){
            $btnEdit    = '<a href="' . route('pessoas.index', $pessoa->id) . '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
            <i class = "fa fa-lg fa-fw fa-pen"></i>
            </a>';
            $btnDelete  = '<button class="btn btn-xs btn-default text-danger mx-1 shadow excluir-dado" title="Delete" data-dado-id="' . $pessoa->id . '">
            <i class = "fa fa-lg fa-fw fa-trash"></i>
            </button>';

            $pessoasDataList []=[
                'id'=>$pessoa->id,
                'name'=>$pessoa->name,
                'email'=>$pessoa->email,
                "btns" => '<nobr>' . $btnEdit . $btnDelete . '</nobr>'
            ];

        }
        return response()->json(compact('pessoasDataList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(StoreRequestPessoa $request, Empresa $empresa){
        if($request->safe()->only(['json']) === '0'){
            return response()->json(['data'=>'implementar pessoas']);
        }
        $pessoa = Pessoas::create($request->validated());
        dd($pessoa);

        if($pessoa instanceof Pessoas){
            event(new ResgisterPessoas($pessoa->email, $request->validated('password'),$pessoa->name));
            return response()->json(['message' => 'Pessoa cadastrada com sucesso!', "code" => "201"], 201);
            
        }
        return response()->json([
            'errors' => [
                'message' => 'Erro ao cadastrar pessoa!',
            ]
        ], 422);
    }
    public function destroy (string $id){
        $removido = Pessoas::destroy($id);
        if ($removido !=0) {
            return response()->json(['message'=>'Pessoa excluida com sucesso']);
        }

    }
}
