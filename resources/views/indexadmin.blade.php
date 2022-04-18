@extends('layouts.app')
@section('content')
<div class="container">
       <div class="row">
           <div class="col-md-10 col-md-offset-2">
           <!-- <div class="pull-right"><a href="{{url('create')}}" class="btn btn-success">Nouveau Profe</a></div> -->
           <table class="table table-info">
                <thead>
                    <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">telecharger Dossier_scientifique</th>
                    <th scope="col">telecharger Dossier_Pedagogique</th>
                    <th scope="col">telecharger Dossier_administratif</th>
                    
                    <th scope="col">consulter profil</th>
                    <th scope="col">modifier etat dossier</th>
                    <!-- <th scope="col">Delete</th> -->


                    </tr>
                </thead>
                <tbody>
                    @foreach($professeurs as $professeur)
                    <tr>
                    <td>{{$professeur->nom}}</td>
                    <td>{{$professeur->prenom}}</td>
                    <td><a class="btn btn-dark " href="/storage/{{$professeur->Dossier_scientifique}}"   download> Dossier_scientifique</a></td>
                    <td><a class="btn btn-dark " href="/storage/{{$professeur->Dossier_Pedagogique}}"  download> Dossier_Pedagogique</a></td>
                    <td><a class="btn btn-dark " href="/storage/{{$professeur->Dossier_administratif}}"  download> Dossier_administratif</a></td>
                    
                    <td><form action="" method="post"><a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-dark">consulter profil</a></form></td>
                    <td><form action="" method="post"><a href="{{route('professeurs.edit',$professeur->id)}}" class="btn btn-primary">modifier etat dossier</a></form></td>
                    <!-- <td><form action="{{route('professeurs.destroy',$professeur->id)}}" method="post">{{csrf_field()}}{{method_field('DELETE')}}<button type="submit" class="btn btn-danger">Delete</button></form></td> -->

                    </tr>
                    
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
</div>


@endsection