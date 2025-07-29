<x-header /> <!-- Pour injecter le header -->

<main class="container">

    <x-breadcrumb :items="$breadcrumbs ?? []" />

    <div class="d-flex flex-column bd-hightlight mb-3">
        <div class="d-flex">
            <img src="/images/cookie.png" width="20px" height="auto" alt="Responsive image" />
            <div>
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>category_id</th>
                        <th>description</th>
                        <th>price</th>
                        <th>url_image</th>
                        <th>stock</th>
                        <th>is_available</th>
                        <th>weight</th>
                        <th>created_at</th>
                    </tr>
                    <tr>
                        <td> {{ $product->id }}</td>
                        <td>{{ $product->name}}</td>
                        <td>{{$product->category_id}}</td>
                        <td>{{ $product->description}}</td>
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->url_image}}</td>
                        <td>{{ $product->stock}}</td>
                        <td>{{ $product->is_available}}</td>
                        <td>{{ $product->weight}}</td>
                        <td>{{ $product->created_at}}</td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>

<x-footer /> <!-- Pour injecter le footer -->