<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id', 'desc')->get();
        return view('backend.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // Validation
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|min:1',
            'description' => 'required|min:3',
            'photo' => 'required|mimes:png,jpg,jpeg'
        ]);
        //  Upload
        if ($request->file()) {
            // File Name Change
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            //categoryimg change
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');
            $path = '/storage/' . $filePath;
        }
        // Store Data
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->photo = $path;
        $item->save();
        // redirect
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('backend.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        // dd($request);
        // Validation
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|min:1',
            'description' => 'required|min:3',
            'photo' => 'sometimes|mimes:png,jpg,jpeg'
        ]);
        //  Upload
        if ($request->file()) {
            // File Name Change
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            //categoryimg change
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');
            $path = '/storage/' . $filePath;
            $item->photo = $path;
        }
        // Store Data
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->save();
        // redirect
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
