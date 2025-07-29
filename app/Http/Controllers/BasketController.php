<?php

namespace App\Http\Controllers;

use App\Models\DiscountCode;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(): View
    {
        $discount = session('discount', 0);
        return view('components.basket-show', compact('discount'));
    }

    public function codePromo(Request $request)
    {

        $codePromo = $request->get('code');

        $codeQuery = DiscountCode::where('code', $codePromo)->first();

        if (!$codeQuery || !$codeQuery->is_active) {
            return redirect()->back()->with('error', 'Code promo invalide ou inactif.');
        }

        session(['discount' => $codeQuery->discount_percentage]);

        return redirect()->back()->with('success', "Code promo appliqué : -{$codeQuery->discount_percentage}%");
    }
}
