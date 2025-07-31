

@extends('Layout.edit')
@section('backoffice-edit-content')


@vite('resources/js/app.js')

    <div class="d-flex flex-row">
        <img src="{{$product->url_image}}" width="600px" height="auto" alt="Responsive image" />
        <div class="d-flex flex-column">
            <h2>Modifier le produit : {{$product->name}}</h2>

            <div class="d-flex flex-row">


                <form action="{{route('backoffice.name' , $product->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <h4>Name : </h4><input type="textfield" name="name" value="{{$product->name}}"> </input>
                    <button class="btn btn-primary" type="submit">Modifier</button>

                </form>

            </div>

            <div class="d-flex flex-row">

                <form action="{{route('backoffice.price' , $product->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <h4>Price :</h4><input type="number" name="price" value="{{$product->price}}" step="0.01"> </input>
                    <button class="btn btn-primary" type="submit">Modifier</button>

                </form>

            </div>

        </div>
    </div>

@endsection

