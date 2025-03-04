<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\FilterRequest;
use App\Http\Requests\StoreRequest;
use App\Models\Products;
use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RimskieShtoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $query = Products::where('category_id', '3');
        // Проверяем, есть ли запрос на поиск
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "{$search}%");
        }
        // Получаем результаты запроса
        $products = $query->get();
        return view('catalogs.rimskieshtory.index', compact('products'));
    }

    public function create()
    {
        $products = Products::where('category_id', '3')->get();
        $suppliers = Supplier::all();
        return view('catalogs.rimskieshtory.create', compact('products', 'suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:1000',
            'material' => 'required|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'category_id' => 'nullable|numeric',
            'supplier_id' => 'required|numeric',
        ]);
        $imagePath = $request->file('image')->store('uploads', 'public');
        $data = [
            'name' => $request->input('name'),
            'material' => $request->input('material'),
            'image' => $imagePath,
            'price' => $request->input('price'),
            'category_id' => 3,
            'supplier_id' => $request->input('supplier_id'),
        ];

        Products::create($data);
        return redirect()->route('rimskieShtory.index');
    }

    public function edit(Products $product)
    {
        $suppliers = Supplier::all();
        return view('catalogs.rimskieshtory.edit', compact('product', 'suppliers'));
    }

    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required|string|max:1000',
            'material' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'category_id' => 'nullable|numeric',
            'supplier_id' => 'required|numeric',
        ]);
        if (!empty($request->image)) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        } else {
            $imagePath = $product->image;
        }
//        $imagePath = $request->file('image')->store('uploads', 'public');
        $data = [
            'name' => $request->input('name'),
            'material' => $request->input('material'),
            'image' => $imagePath,
            'price' => $request->input('price'),
            'category_id' => 3,
            'supplier_id' => $request->input('supplier_id'),
        ];
        $product->update($data);
        return redirect()->route('rimskieShtory.index');
    }

    public function show(Products $product)
    {
        $supplier_id = $product->supplier->id;
        $supplier = Supplier::where('id',$supplier_id)->first();
        return view('catalogs.rimskieshtory.show', compact('product', 'supplier'));
    }

    public function destroy(Products $product){
        if ($product->image) {
            Storage::delete('public/' . $product->image); // Удаляет фото
        }
        $product->delete();
        return redirect()->route('rimskieShtory.index');
    }
}
