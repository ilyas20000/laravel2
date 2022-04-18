

@extends('layouts.app')

@section('content')
 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('assets/css/css.css')}}" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <!-- <a href="#"> -->
              <img  src="/img/téléchargement.png"/>
              <!-- <img  src="/image/{{$professeur->image}}"/>  -->
              </a>
              <h1><span class="font-weight-bold">{{$professeur->nom}}  {{$professeur->prenom}}</span></h1>
             
          </div>

          <ul class="nav nav-pills nav-stacked">
              <!-- <li class="active"><a href="#" class="btn btn-primary profile-button"> <i class="fa fa-user"></i> Profile</a></li> -->
              <!-- <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li> -->
              <li><form action="" method="post"><a href="{{route('professeurs.edit',$professeur->id)}}" class="btn btn-primary">Edit profile</a></form></li>
          </ul>
      </div>
  </div>
  <div class="profile-info col-md-9">
      <div class="panel">
          
      </div>
      <div class="panel">
          
          <div class="panel-body bio-graph-info">
              <h1>Profile Detail</h1>
              <div class="row alert alert-primary">
                  <div class="bio-row">
                      <p><span>nom </span>: {{$professeur->nom}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>prenom </span>: {{$professeur->prenom}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>email </span>{{$professeur->email}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>telephone</span>: {{$professeur->telephone}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>cin </span>: {{$professeur->cin}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>specialite </span>: {{$professeur->specialite}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>date recrutement </span>: {{$professeur->date_recrutement}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>date naissance </span>: {{$professeur->date_naissance}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>appartenance Ensaj </span>: {{$professeur->appartenant_a_ENSAJ}}</p>
                  </div>
                 
                  <!-- <div class="bio-row">
                      <p><span>Dossier_scientifique </span>: {{$professeur->Dossier_scientifique}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Dossier_Pedagogique </span>: {{$professeur->Dossier_Pedagogique}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Dossier_administratif </span>: {{$professeur->Dossier_administratif}}</p>
                  </div> -->
              </div>
          </div>
      </div>
      <div>
          <div class="row alert alert-primary">
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              
                          </div>
                          <div class="bio-desk">
                              <h4 class="red"><a href="/storage/{{$professeur->Dossier_scientifique}}" class="link-success text-dark"  download>Dossier_scientifique</a></h4>
                              <p>Etat : pas evalué</p>
                              
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              
                          </div>
                          <div class="bio-desk">
                              <h4 class="green"><a href="/storage/{{$professeur->Dossier_Pedagogique}}" class="link-success text-dark" download>Dossier_Pedagogique</a></h4>
                              <p>Etat : pas evalué</p>
                              
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              
                          </div>
                          <div class="bio-desk">
                              <h4 class="purple" ><a href="/storage/{{$professeur->Dossier_administratif}}" class="link-success text-dark" download>Dossier_administratif</a></h4>
                              <p>Etat : pas evalué</p>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="mt-5 text-center"><a href="{{ url('/professeurs') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-success">Back</a></div>
  </div>
</div>
</div>

@endsection