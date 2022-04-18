@extends('layouts.app')


@section('content')
 
<h1>Creation de profile</h1>
<form method="POST" action="{{route('professeurs.store')}}" enctype="multipart/form-data">
   @csrf
   <div class="container ">
       <div class="row">
           <div class="col-md-6 col-md-offset-4">
   
                    <div class="form-group ">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom :</label>
                        <input type="text" class="form-control" name="prenom" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="cin">CIN :</label>
                        <input type="text" class="form-control" name="cin" >
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone :</label>
                        <input type="tel" class="form-control" name="telephone" >
                    </div>
                    <div class="form-group">
                        <label for="date_recrutement">Date de recrutement :</label>
                        <input type="date" class="form-control" name="date_recrutement" >
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance :</label>
                        <input type="date" class="form-control" name="date_naissance" >
                    </div>
                    <div class="form-group">
                        <label for="specialite">Specialite :</label>
                        <select name="specialite" class="form-select">
                            <option value="A">info</option>
                            <option value="B">genie civil</option>
                            <option value="C">indus</option>
                        </select>
                    </div>
                    
                    <div class="form-group has-feedback" style="padding-top: 15px">
                        <label>Appartenant_a_ENSAJ : </label>
                            
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> Oui </label>
                            <input type="radio"  value="Oui" name="appartenant_a_ENSAJ" >
                                    
                            <label for="appartenant_a_ENSAJ"> No </label>
                            <input type="radio"  value="NO" name="appartenant_a_ENSAJ" >
                        </div>
                            
                    </div>
                    <div class="form-group">
                        <label for="Dossier_scientifique">Dossier scientifique :</label>
                        <input type="file" class="form-control" name="Dossier_scientifique" >
                    </div>
                    <div class="form-group">
                        <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                        <input type="file" class="form-control" name="Dossier_Pedagogique" >
                    </div>
                    <div class="form-group">
                        <label for="Dossier_administratif">Dossier administratif :</label>
                        <input type="file" class="form-control" name="Dossier_administratif" >
                    </div>
                <button type="submit" class="btn btn-primary">Add Professeurs</button>

           </div>
       </div>
    </div>
 
</form>

@endsection