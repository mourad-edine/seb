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

<main class="main-container" style="margin-top: 80px;">
    <section class="mb-3">
        <div class="container py-1">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">

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
                                <a href="{{route('qualification',['id' => $personne->id])}}" class="text-dark m-2">
                                    qualification
                                </a>
                                <a href="{{route('etude_formation',['id' => $personne->id])}}" class="text-dark m-2">
                                    etudes
                                </a>
                                <a href="{{route('diplome_candidat',['id' => $personne->id])}}" class="text-dark m-2">
                                    diplomes
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">nom</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$personne->nom}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$personne->email}}</< /p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">numero</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$personne->phone}}</< /p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">code</p>
                                </div>
                                <div class="col-sm-9">
                                    <a class="text-muted mb-0" href="cv format pdf">{{$personne->code}}</< /a>
                                </div>
                            </div>
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