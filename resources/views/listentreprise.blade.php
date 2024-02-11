@extends('adminLayout.LayoutAdmin')
@section('contenu')

<div class="card-header font18 fw-bold bg-dark text-white">entreprise list</div>
<div class="card-body">
    <hr>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">id
                </th>
                <th class="th-sm">nom entreprise
                </th>
                <th class="th-sm">email
                </th>
                <th class="th-sm">code
                </th>
                <th class="th-sm">phone
                </th>
                <th class="th-sm">options
                </th>
            </tr>
        </thead>
        <tbody>
           

        </tbody>

    </table>
</div>

@endsection