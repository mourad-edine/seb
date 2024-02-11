@extends('adminLayout.LayoutAdmin')
@section('contenu')

<div class="card-header font18 fw-bold bg-dark text-white">Candidat list</div>
<div class="card-body">
    <hr>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th class="th-sm">id
                </th>
                <th class="th-sm">nom
                </th>
                <th class="th-sm">email
                </th>
                <th class="th-sm">code
                </th>
                
                <th class="th-sm">fiche CV
                </th>
                <th class="th-sm">options
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($utilisateur as $utilisateurs)
            <tr>
                <td>{{$utilisateurs->id}}</td>
                <td>{{$utilisateurs->nom}}</td>
                <td>{{$utilisateurs->email}}</td>
                <td>{{$utilisateurs->phone}}</td>
                <td><a href="#" class="btn btn-success">Appercue de la fiche</a></td>
                <td><a href="{{route('detail_fiche',['id' => $utilisateurs->id])}}" class="btn btn-dark">detail</a></td>
            </tr>
            @empty
                <h5 class="text-danger">pas encore de fiche</h5>
            @endforelse
        </tbody>
        
    </table>
</div>

@endsection