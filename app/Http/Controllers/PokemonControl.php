<?php

namespace Laradex\Http\Controllers;
use Laradex\Pokemon;
use Laradex\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use PDF;
class PokemonControl extends Controller

{
    //
    public function index(Trainer $trainer ,Request $request) {
        if($request->ajax()){

           return response()-> json($trainer-> pokemons,200);
        }
        return view("pokemones.index");
    }
    public function imprimir(){
       $pokemon=  DB::table('pokemon')
       ->where('id','17');
       $data = compact('pokemon');
      $pdf = Pdf::loadView('pdf.reporte', $data);


    }

    public function store(Trainer $trainer,Request $request){
         /*
        Schema::table('pokemon',function (Blueprint $table) use ($request) {

        $table-> string($request ->input("atributo"))->default('verde');
        $table-> string($request ->input("atributo2"))->default('agua');


        });*/
        if($request-> ajax()){
            $named =$request ->input("name");
            $atributo= $request ->input("atributo");
            $valor =$request ->input("valor");
            $pokemon = new Pokemon();
            $pokemon -> name =$request ->input("name");
            $pokemon -> picture =$request ->input("picture");
            $pokemon ->  tipo=$request ->input("tipo");
            $pokemon ->  peso=$request ->input("peso");
            $pokemon ->  ataque=$request ->input("ataque");
            $pokemon ->  defensa=$request ->input("defensa");
            $pokemon ->  altura=$request ->input("altura");
          /*
          DB::table('pokemon')
            ->where('name',$named)
             ->update([ $request ->input("atributo") => $valor]);
*/
        $pokemoncito=  DB::table('pokemon')
       ->where('id','17');

            $pokemon-> trainer()->associate($trainer)->save();

            return response()->json([
                "traidfner"=> $pokemoncito,
                "mesage"=> "pokemon good",

            ],200);
            }

    }

     public function show($id)
    {

       return view("pokemones.edit");
    }
}
