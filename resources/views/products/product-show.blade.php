<x-header /> <!-- Pour injecter le header -->

<main class="container">

    <x-breadcrumb :items="$breadcrumbs ?? []" />

    <div class="d-flex flex-column bd-hightlight mb-3">
        <div class="">
            <img src="/images/cookie.png" width="300vh" height="auto" alt="Responsive image" />
            <div>
                <h1 class="m-1 p-1 text-light" style="background-color:#B66E00cc; border-radius:10px;">
                    {{ $product->name }}
                </h1>
                <br>
                <h2>{{ $product->description}}</h2>
                <br>
            </div>
        </div>
    </div>
    <form class="d-flex" action="{{ route('basketForm') }}" method="POST">
        @csrf

        <div class="text-end" style="width:50vh">
            <div class="input-group">
                <input type="number" class="form-control" id="price" name="price" value="{{ old('quantity',request('quantity')) }}">
                <span class="input-group-text">cookie(s)</span>
            </div>
           

            <p class="m-3" value="{{ old('price',request('price')) }}">Prix : {{$product->price}}</p>
            <button class="btn text-light" type="submit" style="width: 130px;height: 60px;background-color:#BE6600cc;">
                Ajouter au panier
            </button>

            {{ request('price') }}

        </div>
    </form>

</main>
<x-footer />