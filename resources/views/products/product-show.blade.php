<x-header /> <!-- Pour injecter le header -->

<main class="container">

    <x-breadcrumb :items="$breadcrumbs ?? []" />

    <div class="d-flex flex-column bd-hightlight mb-3">
        <div class="d-flex">
            <img src="/images/cookie.png" width="600px" height="auto" alt="Responsive image" />
            <div>
                <h1 class="m-1 p-1" style=>{{ $product->name }}</h1>

                <br>
                <h2>{{$product->description}}</h2>
                <br>
                <h2>{{$product->price}} €</h2>

            </div>

        </div>

        <div div class="d-flex flex-row">
            <div> <!--Button lot-->
                <select>
                    <option value="test 0"> Achat unique </option>
                    <option value="test 1"> Lot de 2 </option>
                    <option value="test 2" selected> Lot de 3 </option>
                    <option value="test 3"> Lot de 4 </option>
                    <option value="test 4"> Lot de 5 </option>
                </select>
            </div>

            <div class="d-flex flex-row mx-3 px-0"> <!-- Button quantité -->
                <button class="w-100 h-50">-</button>
                <h1> 1 </h1>
                <button class="w-100 h-50">+</button>
            </div>

        </div>
    </div>
    <div> <!-- Button validation du panier -->
        <button style="width : 130px; height : 60px; background-color : rgba(255,0,255,255)">
            Validation de l'achat
        </button>
    </div>
    </div>
</main>

<x-footer /> <!-- Pour injecter le footer -->