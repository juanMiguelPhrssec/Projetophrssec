<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Empresa\StoreRequestEmpresa;
use App\Models\Empresa;
use App\Models\User;
use App\Rules\CnpjValido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class empresaController extends Controller
{
  
    public function index(User $user){
        $user= Auth::user(); 
        $breadcrumb= ['url'=>route('empresas.index',$user->id),'text'=>'Empresa'];
        return view('empresas.index',compact('user','breadcrumb'));
    }

    public function create(Empresa $empresa){
        $newEmpresa= $empresa->newEmpresa;
        
        $breadcrumb =[
            ['url'=>route('empresas.index'),'text'=>'Empresas'],
            ['url'=> route('empresas.create'),'text'=>'empresas']
        ];
            return view('empresas.create',compact('newEmpresa','breadcrumb','empresa'));

    }
    public function empresaJson()
    {
        $empresas = Empresa::all();
    
        if ($empresas->isEmpty()) {
            return response()->json(["type" => "error", "empresas" => []], 200);
        }
    
        $empresasList = [];
    
        foreach ($empresas as $empresa) {
            $routeEdit = route('empresas.index', $empresa->id);
            $btnEdit = "<a href='$routeEdit' id='$empresa->id' class='btn btn-xs btn-default text-primary mx-1 shadow' title='Editar'><i class='fa fa-lg fa-fw fa-pen'></i></a>";
    
            $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow excluir-dado btn-delete" title="Excluir" data-dado-id="' . $empresa->id . '"><i class="fa fa-lg fa-fw fa-trash"></i></button>';
    
            $btnDetails = '<a href="' . route('empresas.index', $empresa->id) . '" class="btn btn-xs btn-default text-teal mx-1 shadow show-dado" data-dado-id="' . $empresa->id . '" title="Detalhes"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
    
            $empresasList[] = [
                "id" => $empresa->id,
                "nome_da_empresa" => $empresa->nome_da_empresa,
                "cnpj" => preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $empresa->cnpj),
                "btns" => '<nobr>' . $btnEdit . $btnDelete . $btnDetails . '</nobr>',
            ];
        }
    
        return response()->json(compact('empresasList'));
    }
    
    public function store(StoreRequestEmpresa $request, User $user)
    {
        // Valida os dados do formulário
       $data = $request->validated();
       //$data['users_id']=auth()->id();
       $empresa = new Empresa($data);


     

       if($empresa->save()){
        if($request->json ==1){
            return response()->json(['type'=>'success','message'=>'empresa inserida com sucesso'],201);
        }
        return redirect()->route('empresas.index', 'empresa');
       }
       if($request->json == 1){
        return response()->json(['type'=>'error','message'=>'Erro no processamento'],400);
       }
       return back()->withErrors("Erro ao processar");
        


    }

    
    public function Buscarporid(string $id){
        $empresa = Empresa::findOrfail($id);
        return response()->json(
            compact('empresa'),
            200
        );
    }
}
