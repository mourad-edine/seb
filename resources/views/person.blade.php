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
                                <button class="btn btn-info text-white">voir CV</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-3"><span class="text-primary font-italic me-1"></span></p>
                            <div class="text-dark">
                                <p class="mb-3 mx-2">options</p>
                                <form action="{{route('creer_fiche',['id' => $person->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="nom" value="{{$person->id}}">
                                    <input type="hidden" name="nom" value="{{$person->nom}}">
                                    <input type="hidden" name="email" value="{{$person->email}}">
                                    <input type="hidden" name="code" value="{{$person->code}}">
                                    <input type="hidden" name="phone" value="{{$person->phone}}">
                                    <input type="hidden" name="cv" value="{{$person->cv_path}}">
                                    <div class="d-flex justify-content-start mb-2">
                                        <button class="btn btn-info text-white">creer une fiche cv</button>
                                    </div>
                                </form>
                                <form action="{{ route('delete', ['id' => $person->id]) }}" method="post">
                                    @csrf
                                    @method('delete') <!-- Ajoutez cette ligne pour spécifier la méthode DELETE -->
                                    <input type="hidden" name="nom" value="{{ $person->id }}">
                                    <div class="d-flex justify-content-start mb-2">
                                        <button class="btn btn-primary">supprimer la candidature</button>
                                    </div>
                                </form>
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
                                    <p class="text-muted mb-0">{{$person->nom}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$person->email}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">numero</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$person->phone}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">cv</p>
                                </div>
                                <div class="col-sm-9">
                                    <a class="text-muted mb-0" href="cv format pdf">{{$person->cv_path}}</a>
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