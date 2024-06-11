<?php

namespace App\Http\Controllers\menu\menu;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //
    public function index()
    {
        $categoryIds = DB::connection('other_system')
            ->table('categories')
            ->where('name', '!=', 'DELIVERY')
            ->pluck('id');

        $categoriesWithDishes = DB::connection('other_system')
            ->table('categories')
            ->leftJoin('dishes', 'categories.id', '=', 'dishes.category_id')
            ->select('categories.*', 'dishes.*')
            ->whereIn('categories.id', $categoryIds)
            ->get()
            ->groupBy('category_id');

        $company = DB::connection('other_system')->table('companies')->first();

        return view('menu.index', [
            'company' => $company,
            'categoriesWithDishes' => $categoriesWithDishes
        ]);
    }
}
