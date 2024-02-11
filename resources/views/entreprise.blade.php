@extends('layout.layout')
@section('contenu')
<!-- Navbar Start -->

<!-- Navbar End -->

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card rounded-0 ">
                <div class="card-header font18 fw-bold">J'ai un compte</div>
                <div class="card-body">
                    <form action="" method="post"><input type="hidden" name="_token" value="biO7mNE10ZkciKBFFeA6Vse2SeAPGzJ756stNEL3" autocomplete="off">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe...">
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-lg btn-primary col-12 col-md-6">
                                <span class="text-uppercase">se connecter</span>
                            </button>
                            <div class="mt-3">
                                <a href="" class="fw-bold text-dark">J'ai oublié mon mot de passe</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card rounded-0 shadow-sm">
                <div class="card-body">
                    <h2 class="font22 fw-bold">Je crée mon compte entreprise</h2>

                    <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus ipsam maiores unde explicabo, recusandae nemo itaque ducimus aspernatur quod ullam.</p>
                    @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{route('candidat.store')}}" method="post">
                        @csrf
                        <div class="row mb-2">
                            <label class="form-label col-12 col-md-4 text-start text-md-end fw-bold font14">Nom entreprise</label>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" name="nom" placeholder="Nom entreprise">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="form-label col-12 col-md-4 text-start text-md-end fw-bold font14">Email</label>
                            <div class="col-12 col-md-8">
                                <input autocomplete="off" type="email" class="form-control" name="email" placeholder="Email...">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="form-label col-12 col-md-4 text-start text-md-end fw-bold font14">Téléphone</label>
                            <div class="col-12 col-md-8">
                                <div class="input-group">
                                    <div class="phone-code-container" style="width: 100px">
                                        <select name="code" class="select2 form-control">

                                            <option class="option8" data-path="https://proratis.youpihost.fr/flag" data-icon="FR.svg" value="8">+33</option>
                                            <option class="option200" data-path="https://proratis.youpihost.fr/flag" data-icon="BF.svg" value="200">+26</option>
                                            <option class="option218" data-path="https://proratis.youpihost.fr/flag" data-icon="BG.svg" value="218">+59</option>
                                            <option class="option147" data-path="https://proratis.youpihost.fr/flag" data-icon="BH.svg" value="147">+73</option>
                                            <option class="option76" data-path="https://proratis.youpihost.fr/flag" data-icon="BI.svg" value="76">+57</option>
                                            <option class="option141" data-path="https://proratis.youpihost.fr/flag" data-icon="BJ.svg" value="141">+29</option>
                                            <option class="option124" data-path="https://proratis.youpihost.fr/flag" data-icon="BL.svg" value="124">+90</option>
                                            <option class="option193" data-path="https://proratis.youpihost.fr/flag" data-icon="BM.svg" value="193">+441</option>
                                            <option class="option238" data-path="https://proratis.youpihost.fr/flag" data-icon="BN.svg" value="238">+73</option>
                                            <option class="option144" data-path="https://proratis.youpihost.fr/flag" data-icon="BO.svg" value="144">+91</option>
                                            <option class="option55" data-path="https://proratis.youpihost.fr/flag" data-icon="BQ.svg" value="55">+99</option>
                                            <option class="option15" data-path="https://proratis.youpihost.fr/flag" data-icon="BR.svg" value="15">+5</option>
                                            <option class="option100" data-path="https://proratis.youpihost.fr/flag" data-icon="BS.svg" value="100">+242</option>
                                            <option class="option128" data-path="https://proratis.youpihost.fr/flag" data-icon="VG.svg" value="128">+284</option>
                                            <option class="option65" data-path="https://proratis.youpihost.fr/flag" data-icon="VI.svg" value="65">+340</option>
                                            <option class="option202" data-path="https://proratis.youpihost.fr/flag" data-icon="VN.svg" value="202">+4</option>
                                            <option class="option138" data-path="https://proratis.youpihost.fr/flag" data-icon="VU.svg" value="138">+78</option>
                                            <option class="option122" data-path="https://proratis.youpihost.fr/flag" data-icon="WF.svg" value="122">+81</option>
                                            <option class="option143" data-path="https://proratis.youpihost.fr/flag" data-icon="WS.svg" value="143">+85</option>
                                            <option class="option80" data-path="https://proratis.youpihost.fr/flag" data-icon="XK.svg" value="80">+83</option>
                                            <option class="option157" data-path="https://proratis.youpihost.fr/flag" data-icon="YE.svg" value="157">+67</option>
                                            <option class="option176" data-path="https://proratis.youpihost.fr/flag" data-icon="YT.svg" value="176">+62</option>
                                            <option class="option45" data-path="https://proratis.youpihost.fr/flag" data-icon="ZA.svg" value="45">+7</option>
                                            <option class="option206" data-path="https://proratis.youpihost.fr/flag" data-icon="ZM.svg" value="206">+60</option>
                                            <option class="option226" data-path="https://proratis.youpihost.fr/flag" data-icon="ZW.svg" value="226">+63</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" name="phone" id="company_phone">
                                    <input type="hidden" class="form-control" name="status" value="entreprise" id="company_phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="font14 form-check-label" for="flexCheckDefault">
                                En créant un compte vous acceptez pleinement nos <a href="" class="fw-bold text-dark">Conditions générale d'utilisation</a>, <a class="fw-bold text-dark">politique de confidentialité</a>.
                            </label>
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-lg btn-primary col-12 col-md-6">
                                <span class="text-uppercase">envoyer demande de compte</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection