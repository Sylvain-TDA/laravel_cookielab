    <x-header /> <!-- Pour injecter le header -->
<main class="container">

 <x-breadcrumb :items="$breadcrumbs ?? []" />
     

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

</main>

<x-footer /> <!-- Pour injecter le footer -->



