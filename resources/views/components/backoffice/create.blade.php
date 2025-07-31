
@extends('Layout.edit')
@section('backoffice-create-content')


@vite('resources/js/app.js')

<div class="d-flex flex-row">
    <img src="" width="600px" height="auto" alt="Responsive image" />
    <div class="d-flex flex-column">
        <h2>Modifier le produit : Waiting for a name...</h2>

        <div class="d-flex flex-row">

        </div>
               <form action="{{ route('backoffice.create') }}" method="POST">
                
                <h4>Price :</h4><input type="number" name="price" value="" step="0.01"> </input>
                <h4>Name : </h4><input type="textfield" name="name" value="name..."> </input>

                @csrf

                <h4>Créer un nouveau produit :</h4>
               

                <button class="btn btn-success" type="submit">
                    Créer un produit
                </button>

            </form>
    </div>
</div>
@endsection