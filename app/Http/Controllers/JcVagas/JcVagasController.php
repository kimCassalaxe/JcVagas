<?php
namespace App\Http\Controllers\JcVagas;

/*

*/

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Http\Request;
class JcVagasController extends Controller{

  function index() {
    $vagas  = Vaga::all();
    return view("welcome",['vagas' => $vagas]);
  } 
  function test() {
    $vaga  = Vaga::all();
    var_dump($vaga);
    return view("jcVagas.test");
  }
  function exibirVaga($id) {  
    $vaga = Vaga::findOrFail($id);
    return view("exibirVaga",['vaga'=>$vaga]);
  }
  
  public function store(Request $request){
    $vaga = new Vaga;
    $vaga->nomeVaga = $request->txtVaga;
    $vaga->empresa = $request->txtEmpresa;
    $vaga->email = $request->txtEmail;
    $vaga->local = $request->txtLocal;
    $vaga->competencias = $request->competencia;
    $vaga->descricao = $request->txtDescricao;
    $vaga->dataDaCriacao = $request->txtDataDaCriacao;
    $vaga->dataDalimite = $request->txtDataLimite;

    //pegar o  usuario que esta logado
    $user = auth()->user();
    $vaga->user_id = $user->id;

    $vaga->save();
    return redirect("/");
  }
  function criarVaga() {
    return  view("vagas/criarVaga");
  }
  function listar() {
    $vagas  = Vaga::all();
    return view("listarVagas", ['vagas'=> $vagas]);
  }

}
