            <x-header /> <!-- Pour injecter le header -->

            <main class="container">

                <x-breadcrumb :items="$breadcrumbs ?? []" />

                <div class="d-flex flex-column bd-hightlight mb-3">
                    <div class="d-flex">
                        <img src="/images/cookie.png" width="600px" height="auto" alt="Responsive image" />
                        <div>
                            <h1 class="m-1 p-1 rounded" style="background-color : rgba(229,171,105,255)">{{ $product->name }}</h1>

                            <br>
                            <h2>{{ $product->description_short}}</h2>
                            <br>

                            <h3 class="m-1 p-1 rounded" style="background-color : rgba(229,171,105,255)">
                                {{ $product->description_long}}
                            </h3>


                            <div div class="d-flex flex-row rounded">
                                <div style="width : 130px; height : 60px;"> <!--Button lot-->
                                    <select class="rounded" style="width : 130px; height : 60px;">
                                        @for($i = 1; $i <= 5; $i++)
                                            <option class="text-center" value="test"> Lot de {{$i}} </option>
                                            @endfor
                                    </select>
                                </div>

                                <div class="d-flex flex-row mx-1 px-0 rounded border border-dark"> <!-- Button quantité -->
                                    <button class="rounded" style="width: 60px; height : 100%"> <b>-</b> </button>
                                    <h1 class="d-flex mx-3">1</h1>
                                    <button class="rounded" style="width: 60px; height : 100%"> <b>+</b> </button>
                                </div>
                                <input type="hidden" name="price" id="price" value='$product->price' />
                                <input type="hidden" name="name" id="name" value='$product->name' />
                                <input type="hidden" name="quantity" id="quantity" value={{$i}} />
                                @csrf <!-- Protection contre les attaques CSRF -->
                                <button class="rounded" type="submit" style="width : 130px; height : 60px; background-color : rgba(189,125,26,255)" disabled>
                                    Validation de l'achat
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </main>

            </div>

            </div>
            </div>
            </main>

            <x-footer /> <!-- Pour injecter le footer -->