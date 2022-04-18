@extends('layouts.app')


@section('content')

<h1>Modifier profil</h1>
<form method="POST" action="{{url('professeurs/'.$professeurs->id)}}" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">   
@csrf
   <div class="container">
       <div class="row">
           <div class="col-md-6">
   
                    <div class="form-group ">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" value="{{$professeurs->nom}}" name="nom" disabled>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom :</label>
                        <input type="text" class="form-control"value="{{$professeurs->prenom}}" name="prenom" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control"value="{{$professeurs->email}}" name="email" disabled >
                    </div>
                    
                    
                    <div class="form-group">
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="Dossier_scientifique">Dossier scientifique :</label>
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> accepté </label>
                            <input type="radio"  value="accepte" name="etat" >
                                    
                            <label for="appartenant_a_ENSAJ"> refusé </label>
                            <input type="radio"  value="refuse" name="etat" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <a></a>
                        <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> accepté </label>
                            <input type="radio"  value="accepte" name="appartenant_a_ENSAJ" >
                                    
                            <label for="appartenant_a_ENSAJ"> refusé </label>
                            <input type="radio"  value="refuse" name="appartenant_a_ENSAJ" >
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="Dossier_administratif">Dossier administ :</label>
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> accépté </label>
                            <input type="radio"  value="accepte" name="etat" >
                                    
                            <label for="appartenant_a_ENSAJ"> refusé </label>
                            <input type="radio"  value="refuse" name="refuse" >
                        </div>
                    </div>
                    
                <button type="submit" class="btn btn-danger">Modifier</button>

           </div>
       </div>
    </div>
 
</form>

@endsection