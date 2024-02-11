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
                        catégories Métier
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="d-flex justify-content-start">
                                <img src="{{ asset('images/emploi.png') }}" alt="Description de l'image" height="60" width="60">
                            </div>
                            <form action="{{route('Create_categorie')}}" method="post">
                                @csrf
                                <input type="text" class="form-control mb-2" name="nom_categorie" placeholder="titre du categorie">
                                @error('nom_categorie')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                <div class="d-flex justify-content-start mb-2">
                                    <button class="btn btn-info">Ajouter categories</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-3"><span class="text-primary font-italic me-1">listes catégories</span></p>
                            <div class="text-dark">
                                <ol>
                                    @forelse($categorie as $categories)
                                    <li>{{$categories->nom_categorie}}</li>
                                    @empty
                                    <li class="text-danger">pas encore de categorie disponibles</li>
                                    @endforelse
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
    </section>
</main>

@endsection