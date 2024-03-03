<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CustomField;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    /**
     * @param string $slug
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse|Redirector|\Illuminate\View\View
     */
    public function productSingle(string $slug)
    {

        $product = Product::where('slug', $slug)->first();

        if (!$product) {return redirect('/404');}

        $customAttr = [];

        if (is_array($product->custom_fields)) {

            $customFields = CustomField::all();

            foreach ($product->custom_fields as $key => $custom) {
                $customAttr[$key]['icon'] = $customFields
                    ->where('id', Arr::get($custom, 'icon', '1'))
                    ->first()->icon;
                $customAttr[$key]['text'] = Arr::get($custom, 'text');
            }
        }

        $category = Category::with(['products', 'certificates'])
            ->orderBy('order')
            ->where('visible', 1)
            ->where('status', '=', 1)
            ->get();

        /*} else {
            $category = false;
            $customAttr = [];
        }*/

        //dd($product);

        return view('products-single', [
            'product' => $product,
            'category' => $category,
            'customAttr' => $customAttr
        ]);
    }

    public function products() {

        $category = Category::with('products')
            ->orderBy('order')
            ->where('visible', '=', 1)
            ->where('status', '=', '1')
            ->get();

        $settings = Setting::where('page', '=', 'products')->first();

        if (str_ends_with($settings->file, 'png') || str_ends_with($settings->file, 'jpg')) {
            $img = true;
        } else {
            $img = false;
        }

        //dd($settings->galery);

        foreach ((array)$settings->galery as $file) {
            $a = $file;
            break;
        }

        return view('products', [
            'category' => $category,
            'settings' => $settings,
            'img' => $img,
            'file' => $a
        ]);
    }
}
