<x-header /> <!-- Pour injecter le header -->

<main class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <h4>Des erreurs ont été détectées :</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('backoffice.product-create') }}">
        @csrf

        <table class="table table-bordered fs-6">
            <th>Nom</th>
            <td><input type="text" name="name" class="form-control" value="Nom du cookie"></td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td><input type="text" name="category_id" class="form-control" value="Catégorie"></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><input type="text" name="description" class="form-control" value="Description"></td>
            </tr>
            <tr>
                <th>Prix</th>
                <td><input type="text" name="price" class="form-control" value="Prix"></td>
            </tr>
            <tr>
                <th>URL de l’image</th>
                <td><input type="text" name="url_image" class="form-control" value="Url de l'image"></td>
            </tr>
            <tr>
                <th>Stock</th>
                <td><input type="text" name="stock" class="form-control" value="Quantité stock"></td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>
                    <select name="is_available" class="form-control">
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Poids</th>
                <td><input type="text" name="weight" class="form-control" value="Poids"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-end">
                    <button type="submit" class="btn btn-warning">Créer</button>
                </td>
            </tr>

        </table>
    </form>

    <div></div>

</main>

<x-footer /> <!-- Pour injecter le footer -->