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
                        <input type="text" class="form-control" value="{{$professeurs->nom}}" name="nom" >
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom :</label>
                        <input type="text" class="form-control"value="{{$professeurs->prenom}}" name="prenom" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control"value="{{$professeurs->email}}" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="cin">CIN :</label>
                        <input type="text" class="form-control"value="{{$professeurs->cin}}" name="cin" >
                    </div>
                    
                    @if($professeurs->image)
                    <div class="form-group">
                        <img src="/storage/{{$professeurs->image}}" alt="">
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" value="{{$professeurs->image}}" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone :</label>
                        <input type="tel" class="form-control"value="{{$professeurs->telephone}}" name="telephone" >
                    </div>
                    <div class="form-group">
                        <label for="date_recrutement">Date de recrutement :</label>
                        <input type="date" class="form-control"value="{{$professeurs->date_recrutement}}" name="date_recrutement" >
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance :</label>
                        <input type="date" class="form-control"value="{{$professeurs->date_naissance}}" name="date_naissance" >
                    </div>
                    <div class="form-group">
                        <label for="specialite">Specialite :</label>
                        <select name="specialite" class="form-select">
                            <option value="A" {{$professeurs->specialite=="info" ?'selected' :''}}>info</option>
                            <option value="B" {{$professeurs->specialite=="genie civil" ?'selected' :''}}>genie civil</option>
                            <option value="C" {{$professeurs->specialite=="indus" ?'selected' :''}}>indus</option>
                        </select>

                    </div>
                    
                    <div class="form-group has-feedback" style="padding-top: 15px">
                        <label>Appartenant_a_ENSAJ : </label>
                            
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> Oui </label>
                            <input type="radio" name="appartenant_a_ENSAJ" value="Oui" {{ $professeurs->appartenant_a_ENSAJ=="Oui" ? 'checked' : ''}}  >
                                    
                            <label for="appartenant_a_ENSAJ"> No </label>
                            <input type="radio" name="appartenant_a_ENSAJ"  value="No" {{ $professeurs->appartenant_a_ENSAJ=="No" ? 'checked' : ''}}  >
                        </div>
                            
                    </div>

                    @if($professeurs->Dossier_scientifique)
                    <div class="form-group">
                        
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="Dossier_scientifique">Dossier scientifique :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_scientifique}}" name="Dossier_scientifique" >
                    </div>
                    
                    @if($professeurs->Dossier_Pedagogique)
                    <div class="form-group">
                    
                    </div>
                    @endif
                    <div class="form-group">
                        <a></a>
                        <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_Pedagogique}}" name="Dossier_Pedagogique" >
                    </div>

                    @if($professeurs->Dossier_administratif)
                    <div class="form-group">
                    
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="Dossier_administratif">Dossier administratif :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_administratif}}" name="Dossier_administratif" >
                    </div>
                <button type="submit" class="btn btn-danger">Modifier</button>

           </div>
       </div>
    </div>
 
</form>

@endsection