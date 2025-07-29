    <x-header /> <!-- Pour injecter le header -->

    <main class="container">

        <x-breadcrumb :items="$breadcrumbs ?? []" />

        <div class="d-flex flex-column bd-hightlight mb-3">
            <div class="d-flex">
                <img src="/images/cookie.png" width="600px" height="auto" alt="Responsive image" />
                <div>
                    <h1 class="m-1 p-1 text-light" style="background-color : rgba(229,171,105,255); border-radius:10px;">{{ $product->name }}</h1>

                    <br>
                    <h2>{{ $product->description_short }}</h2>
                    <br>

                    <h3 class="m-1 p-1" style="background-color : rgba(229,171,105,255); border-radius:15px;">
                        {{ $product->description_long }}
                    </h3>
                </div>

            </div>

            <div div class="d-flex flex-row mx-3 px-0">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf <!-- Protection contre les attaques CSRF -->
                    <div class="d-flex flex-row">

                        <select>
                            @for($i = 1; $i <= 5; $i++)
                                <option value="test"> Lot de {{$i}} </option>
                                @endfor
                        </select>

                        <button style="width : 60px; height : 60px"> - </button>
                        <h1> 3 </h1>
                        <button style="width : 60px; height : 60px"> + </button>

                        <input type="hidden" name="price" id="price" value='$product->price' />
                        <input type="hidden" name="name" id="name" value='$product->name' />
                        <input type="hidden" name="quantity" id="quantity" value={{$i}} />

                        <button type="submit" style="width : 130px; height : 60px; background-color : rgba(189,125,26,255)">
                            Validation de l'achat
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </main>

    <x-footer /> <!-- Pour injecter le footer -->