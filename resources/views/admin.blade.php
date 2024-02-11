@extends('adminLayout.LayoutAdmin')
@section('contenu')

<div class="card-header font18 fw-bold bg-dark text-white">demande entreprise</div>
<div class="card-body">
    <hr>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Name
                </th>
                <th class="th-sm">Position
                </th>
                <th class="th-sm">Office
                </th>
                <th class="th-sm">Age
                </th>
                </th>
                <th class="th-sm">options
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($entreprise as $entreprises)
            <tr>
                <td>{{$entreprises->id}}</a></td>
                <td>{{$entreprises->nom}}</td>
                <td>{{$entreprises->email}}</td>
                <td>{{$entreprises->code}}</td>
                <td>{{$entreprises->phone}}</td>
                <td><a href="{{route('information_demande',['id' => $entreprises->id])}}" class="btn btn-dark">detail</a></td>
            </tr>

            @empty
            <p class="text-danger">pas encore de demande de compte entreprise</p>
            @endforelse

        </tbody>

    </table>
</div>

@endsection