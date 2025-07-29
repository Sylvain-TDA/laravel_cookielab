<x-header /> <!-- Pour injecter le header -->

<main class="container">

    <x-breadcrumb :items="$breadcrumbs ?? []" />


    <form method="POST" action="{{ route('backoffice.product-update', $product->id) }}">
        @csrf
        @method('PUT')

        <table class="table table-bordered fs-6">
            <tr>
                <th>ID</th>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td><input type="text" name="name" class="form-control" value="{{ $product->name }}"></td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td><input type="text" name="category_id" class="form-control" value="{{ $product->category_id }}"></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><textarea name="description" class="form-control">{{ $product->description }}</textarea></td>
            </tr>
            <tr>
                <th>Prix</th>
                <td><input type="text" name="price" class="form-control" value="{{ $product->price }}"></td>
            </tr>
            <tr>
                <th>URL de l’image</th>
                <td><input type="text" name="url_image" class="form-control" value="{{ $product->url_image }}"></td>
            </tr>
            <tr>
                <th>Stock</th>
                <td><input type="number" name="stock" class="form-control" value="{{ $product->stock }}"></td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>
                    <select name="is_available" class="form-control">
                        <option value="1" @selected($product->is_available)>Oui</option>
                        <option value="0" @selected(!$product->is_available)>Non</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Poids</th>
                <td><input type="text" name="weight" class="form-control" value="{{ $product->weight }}"></td>
            </tr>
            <tr>
                <th>Date de création</th>
                <td>{{ $product->created_at }}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-end">
                    <button type="submit" class="btn btn-warning">Mettre à jour</button>
                </td>
            </tr>
        </table>
    </form>

    <div></div>

    <form method="POST" action="{{ route('backoffice.product-delete', $product->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>

</main>

<x-footer /> <!-- Pour injecter le footer -->