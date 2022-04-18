@extends('layouts.app')
@section('content')
 



<div class="container">
    <div class="row">
     
        <div class="col">
            <div class="card bg-white d-flex align-items-center justify-content-center">
            @foreach($professeurs as $professeur)
                <div class="w-100 text-center"><img class="rounded-circle mt-5" width="150px" src="/storage/{{$professeur->image}}"/></div><span class="font-weight-bold  ">{{$professeur->nom}}  {{$professeur->prenom}}</span><span class="text-black-50"></span><span> </span>
                <div class="text-center">
               
                    <p class="name">{{$professeur->nom}}</p>
                    <p class="job">{{$professeur->prenom}}</p>
                   <p>Email  :   </label>{{$professeur->email}}</p>
                    <p>Cin    :   </label>{{$professeur->cin}}</p>
                    <p>Telephone  :   </label>{{$professeur->telephone}}</p>
                    <p>date_recrutement   :   </label>{{$professeur->date_recrutement}}</p>
                    <p>date_naissance :   </label>{{$professeur->date_naissance}}</p>
                    <p>specialite :   </label>{{$professeur->specialite}}</p>
                    <p>appartenant_a_ENSAJ    :   </label>>{{$professeur->appartenant_a_ENSAJ}}</p>
                    
                   
                    @endforeach

                    <td><form action="" method="post"><a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-dark">Detail Profil</a></form></td>
                    
                </div>
            </div>
        </div>
    </div>
</div>



@endsection