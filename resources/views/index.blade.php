@extends('layouts.app')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>la list des etudiants </h1>
        <table class="table">
            <tr>
                <th> nom</th>
                <th> prenom</th>
                <th> group</th>
            </tr>
        </table>
        
        <body>
        @foreach($etu as $etudiant)
            <table class="table">
                <tr>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->prenom}}</td>
                    <td>{{$etudiant->grp}}</td>
                    <td>
                        <a href="" class="btn btn-primary" > detail </a>  
                        <a href="" class="btn btn-default"> modifier </a>  
                        <a href="" class="btn btn-danger">supprimer  </a>  
                    </td>
                </tr>
            </table>
        </body>
        </div>
    </div>
</div>
@endsection