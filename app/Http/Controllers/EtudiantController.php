<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
class EtudiantController extends Controller
{
    public function newEtudiant(){
        $newEtu=new Etudiant;
        $newEtu->nom='hjk';
        $newEtu->prenom='k';
        $newEtu->email='rgh';
        $newEtu->mat='rgh';
        $newEtu->annee='1cp';
        $newEtu->password='me';

        $newEtu->grp='1';


        $newEtu->save();

    }
    public function listEtudiant(){
        $etu= Etudiant::all();
        dd($etu);
    }
    public function index(){
        $etu= Etudiant::all();
        return view('index',['etudiants'=>$etu]) ;
    }
    public function create(){
        return view('acceuil') ;
    }
    public function store(Request $request){
        //return $request->all();         
        $newEtu=new Etudiant();
        $newEtu->nom=$request->input('nom');
        $newEtu->prenom=$request->input('prenom');
        $newEtu->email=$request->input('email');
        $newEtu->mat=$request->input('mat');
        $newEtu->grp=$request->input('grp');
        $newEtu->annee=$request->input('annee');
        $newEtu->password=$request->input('password');

        


        $newEtu->save();
        return view('store') ;
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
