    <x-header /> <!-- Pour injecter le header -->
<main class="container">

 <x-breadcrumb :items="$breadcrumbs ?? []" />

    <div class = "d-flex flex-column bd-hightlight mb-3">
        <div class="d-flex">
        <img src="/images/cookie.png" width="600px" height="auto" alt="Responsive image"/>
        <div>
            <h1 class = "m-1 p-1" style = "background-color: #E5AB69">{{ $product->name }}</h1>
            
            <br>
            <h2>{{ $product->description_short }}</h2>
            <br>

                <h3 class = "m-1 p-1" style = "background-color: #E5AB69">
                    {{ $product->description_long }}
                </h3>
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

                <div> <!-- Button quantité -->
                        <button>-</button>
                        <h1> 1 </h1>
                        <button>+</button>
                </div>

                <div> <!-- Button validation du panier -->
                
                </div>
            </div>
        </div>
    </div>
</main>

<x-footer /> <!-- Pour injecter le footer -->



