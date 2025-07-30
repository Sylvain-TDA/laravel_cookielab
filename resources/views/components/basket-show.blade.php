@extends('Layout.basket')
@section('basket-content')


    @vite('resources/js/app.js')

    <section class="h-100">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0" style="color: #B66E00cccc">Mon panier</h3>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="images/kit.png" class="img-fluid rounded-3" alt="Kit cookies">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Kit cookies prix</p>
                                    <p>Description de nos kits cookies super trop cool</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                        onclick="changeQuantity(this, -1)">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-sm quantity-input" data-price="19.99" />

                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                        onclick="changeQuantity(this, 1)">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0 total-price">39.98€</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{ asset('images/kit.png') }}" class="img-fluid rounded-3" alt="Kit cookies">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Kit cookies prix</p>
                                    <p>Description de nos kits cookies super trop cool</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                        onclick="changeQuantity(this, -1)">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-sm quantity-input" data-price="19.99" />

                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                        onclick="changeQuantity(this, 1)">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0 total-price">39.98€</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="images/kit.png" class="img-fluid rounded-3" alt="Kit cookies">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Kit cookies prix</p>
                                    <p>Description de nos kits cookies super trop cool</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                        onclick="changeQuantity(this, -1)">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-sm quantity-input" data-price="19.99" />

                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                        onclick="changeQuantity(this, 1)">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0 total-price">39.98€</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="images/kit.png" class="img-fluid rounded-3" alt="Kit cookies">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Kit cookies prix</p>
                                    <p>Description de nos kits cookies super trop cool</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                        onclick="changeQuantity(this, -1)">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-sm quantity-input" data-price="19.99" />

                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                        onclick="changeQuantity(this, 1)">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0 total-price">39.98€</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div data-mdb-input-init class="form-outline flex-fill">
                                <input type="text" id="form1" class="form-control form-control-lg" />
                                <label class="form-label" for="form1">Code promo</label>
                            </div>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-outline-warning btn-sm ms-2"
                                style="background-color: #FFEDD3; color:#B66E00cc ; border-color : white;">Appliquer</button>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div data-mdb-input-init class="form-outline flex-fill">
                                <input type="text" id="form1" class="form-control form-control-lg" />
                                <label class="form-label" for="form1">Note</label>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <h5 class="fw-normal mb-2" style="color: #B66E00cc">Vous aimeriez peut être :</h5>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="images/kit.png" class="img-fluid rounded-3" alt="Kit cookies">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Kit cookies</p>
                                    <p>Description de nos kits cookies super trop cool</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="images/kit.png" class="img-fluid rounded-3" alt="Kit cookies">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Kit cookies</p>
                                    <p>Description de nos kits cookies super trop cool</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4 d-flex flex-row">
                        <div class="form-check">
                            <input class="form-check-input delivery-option" type="radio" name="delivery" id="colissimo"
                                data-price="5.90">
                            <label class="form-check-label" for="colissimo">
                                Colissimo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input delivery-option" type="radio" name="delivery" id="dhl"
                                data-price="4.80">
                            <label class="form-check-label" for="dhl">
                                DHL
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input delivery-option" type="radio" name="delivery" id="dpd"
                                data-price="3.20">
                            <label class="form-check-label" for="dpd">
                                DPD
                            </label>
                        </div>

                    </div>
                    <div class="m-4" onclick="this.parentNode.querySelector('input[type=radio]')">Prix : <span
                            id="delivery-price">0.00€</span>
                    </div>
                </div>


                <div class="d-flex justify-content-end">
                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                        class="btn btn-warning btn-block btn-lg my-3"
                        style="background-color: #B66E00cccc; color: white; border-color : white;">Paiement</button>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection