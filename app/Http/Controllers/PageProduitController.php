<?php

namespace App\Http\Controllers;


use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PageProduitController extends Controller
{
    
    public function show($id) : View
    {
        

        $products = collect([
            (object)[
                'id' =>1,
                'name' => 'Supper dupper cookie',
                'price' => 9.99,
                'description_short'=>'Dark chocolate',
                'description_long' =>'lqgfhdqgklhdfqsgkldhsqkghjpgkdfsvhorfkeqghreg gig gre otgiererq gergreq gere tgerqigreq zregfj o ffjreq',
                'pic-name' => 'cookie.jpg'
            ],
             (object)[
                'id' =>2,
                'name' => 'Supper dupper cookie',
                'price' => 9.99,
                'description_short'=>'Dark chocolate',
                'description_long' =>'lqgfhdqgklhdfqsgkldhsqkghjpgkdfsvhorfkeqghreg gig gre otgiererq gergreq gere tgerqigreq zregfj o ffjreq',
                'pic-name' => 'cookie.jpg'
            ],
              (object)[
                'id' =>3,
                'name' => 'Supper dupper cookie',
                'price' => 9.99,
                'description_short'=>'Dark chocolate',
                'description_long' =>'lqgfhdqgklhdfqsgkldhsqkghjpgkdfsvhorfkeqghreg gig gre otgiererq gergreq gere tgerqigreq zregfj o ffjreq',
                'pic-name' => 'cookie.jpg'
            ]
        ]);

        $product = $products[$id];
        
        return view('products.page-produit',['produits' => $product]);

    }

}
