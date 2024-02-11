@extends('adminLayout.LayoutAdmin')

@section('contenu')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alerte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    Voulez-vous vraiment supprimer?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                    <button type="submit" name="delete" class="btn btn-danger text-white">
                        Oui
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<main class="main-container">
    <section class="mb-3">
        <div class="container py-1">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <h5>etudes et formations</h5>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <div class="d-flex justify-content-start">
                                <img src="{{ asset('images/emploi.png') }}" alt="Description de l'image" height="60" width="60">
                            </div>
                            <div class="d-flex justify-content-start mb-2">
                                <button class="btn btn-info">editer</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-3"><span class="text-primary font-italic me-1">Options</span></p>
                            <div class="text-dark">
                            <a href="{{route('qualification',['id' => $etudeformation->id])}}" class="text-dark m-2">
                                    qualification
                                </a>
                                <a href="{{route('diplome_candidat',['id'=>$etudeformation->id])}}" class="text-dark m-2">
                                    diplomes
                                </a>
                                <a href="{{route('etude_formation',['id' => $etudeformation->id])}}" class="text-dark m-2">
                                    etudes
                                </a>

                            </div>
                            <div class="mt-3">
                                @if(session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <form action="{{route('Create_Etude',['id'=>$etudeformation->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$etudeformation->id}}">
                                    <input type="text" class="form-control mb-2" name="etude" placeholder="titre du diplome">
                                    @error('diplome')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="date" class="form-control mb-2" name="date_debut" placeholder="date debut">
                                    @error('date_debut')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="date" class="form-control mb-2" name="date_fin" placeholder="date fin">
                                    @error('date_fin')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <button class="btn btn-dark">ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            @forelse($etudeformation->etudes as $etude)
                            <div class="card mb-2 mb-md-0 mt-1">
                                <p class="mx-3 mt-2">etudes {{$etude->id}} </p>
                                <div class="card-body">
                                    <ul>
                                        <li>études suivi : {{$etude->nom_etude}}</li>
                                        <li>debut : {{$etude->date_debut}}</li>
                                        <li>fin : {{$etude->date_fin}}</li>
                                    </ul>
                                </div>

                            </div>
                            @empty
                            <div class="card mb-2 mb-md-0 mt-1">
                                <p class="mx-3 mt-2">etudes et formations </p>
                                <div class="card-body">
                                    pas encore d'etudes
                                </div>
                            </div>
                            @endforelse
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-8">
                    </div>
                </div>
            </div>
    </section>
</main>

@endsection