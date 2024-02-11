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
                <th class="th-sm">phone
                </th>
                <th class="th-sm">CV
                </th>
                <th class="th-sm">options
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($candidats as $candidat)
            <tr>
                <td>{{$candidat->id}}</td>
                <td>{{$candidat->nom}}</td>
                <td>{{$candidat->email}}</td>
                <td>{{$candidat->phone}}</td>
                <td><a href="#" class="btn btn-success">voir CV</a></td>
                <td><a href="{{route('information_candidat',['id' => $candidat->id])}}" class="btn btn-dark">detail</a></td>
            </tr>
            @empty
                <h5 class="text-danger">pas encore de candidature</h5>
            @endforelse
        </tbody>
        
    </table>
</div>

@endsection