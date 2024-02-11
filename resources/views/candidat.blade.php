@extends('layout.layout')
@section('contenu')
<!-- Navbar Start -->

<!-- Navbar End -->

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card rounded-0 ">
                <div class="card-header font18 fw-bold">envoyer ma candidature</div>
                <div class="card-body">

                    @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{route('candidat.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Votre Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="cv" class="form-label">Votre CV en format PDF</label>
                            <input type="file" class="form-control" id="cv" name="cv" accept=".pdf">
                        </div>
                        <div class="phone-code-container" style="width: 100px">
                            <label for="phone" class="form-label">Numéro</label>
                            <select name="code" id="phone_code" class="select2 form-control">
                                <option class="option8" data-path="https://proratis.youpihost.fr/flag" data-icon="FR.svg" value="8">+33</option>
                                <option class="option144" data-path="https://proratis.youpihost.fr/flag" data-icon="BO.svg" value="144">+91</option>
                                <option class="option55" data-path="https://proratis.youpihost.fr/flag" data-icon="BQ.svg" value="55">+99</option>
                                <option class="option15" data-path="https://proratis.youpihost.fr/flag" data-icon="BR.svg" value="15">+5</option>
                                <option class="option100" data-path="https://proratis.youpihost.fr/flag" data-icon="BS.svg" value="100">+242</option>
                                <option class="option128" data-path="https://proratis.youpihost.fr/flag" data-icon="VG.svg" value="128">+284</option>
                                <option class="option65" data-path="https://proratis.youpihost.fr/flag" data-icon="VI.svg" value="65">+340</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" name="phone" >
                        <input type="hidden" name="status" value="candidat">
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-lg btn-primary col-12 col-md-6">
                                <span class="text-uppercase">Envoyer candidature</span>
                            </button>
                            <div class="mt-3"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Back to Top -->
@endsection