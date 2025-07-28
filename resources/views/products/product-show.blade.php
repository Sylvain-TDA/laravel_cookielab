    <x-header /> <!-- Pour injecter le header -->

<main class="container">

 <x-breadcrumb :items="$breadcrumbs ?? []" />

    <div class = "d-flex flex-column bd-hightlight mb-3">
        <div class="d-flex">
        <img src="/images/cookie.png" width="600px" height="auto" alt="Responsive image"/>
        <div>
            <h1 class = "m-1 p-1" style = >{{ $product->name }}</h1>
            
            <br>
            <h2>{{ $product->description_short }}</h2>
            <br>

            <h3 class = "m-1 p-1" style = "">
                   {{ $product->description_long }}
            </h3>
    </div>
 
</div>

        <div div class="d-flex flex-row">
            <div> <!--Button lot-->
                <select>
                    @for($i = 1; $i <= 5; $i++)
                        <option value="test"> Lot de {{$i}} </option>
                    @endfor
                </select>
                </div>

                <div class = "d-flex flex-row mx-3 px-0"> <!-- Button quantité -->
                <form action="{{ route('basketForm') }}" method="POST">
                       @csrf <!-- Protection contre les attaques CSRF -->
                        <label for="Number of cookies">Number of cookies</label>
                        
                        <label for="name">Nom du produit :</label>
                        <input type="text" name="name" id="name">

                        <label for="price">Prix :</label>
                        <input type="number" id="price" name="price" min="1" max="10"/>
                            
                        <button type ="submit" style = "width : 130px; height : 60px; background-color : rgba(255,0,255,255)">
                        Validation de l'achat
                        </button>   
                    </form>
                </div>               
            </div>
        </div>
    </div>
</main>

<x-footer /> <!-- Pour injecter le footer -->



