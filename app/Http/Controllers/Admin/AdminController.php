<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $properties = Property::query();

        // Showing paginated data 2 for each page/table
        $properties = $properties->paginate(10);

        return view('admin.properties.index',compact('properties'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|string|max:30',
            'house_no' => 'required|string|max:30', 
            'street' => 'required|string|max:30', 
            'rent' => 'required|string|max:10', 
            'area' => 'required|string|max:10',
            'beds' => 'required|string|max:10', 
            'baths' => 'required|string|max:10', 
            'garages' => 'required|string|max:10'         
        ]);
    
        Property::create($request->all());
    
        return redirect()->route('properties.index')
            ->with('success','Added successfully.');
    }

    /**
     * Display the specified resource.
     */
        public function show(Property $property)
    {
        //
    }

    public function edit(Property $property)
    {
        return view('admin.properties.edit',compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $request->validate([
            'image' => 'required|string|max:30',
            'house_no' => 'required|string|max:30', 
            'street' => 'required|string|max:30', 
            'rent' => 'required|string|max:10', 
            'area' => 'required|string|max:10',
            'beds' => 'required|string|max:10', 
            'baths' => 'required|string|max:10', 
            'garages' => 'required|string|max:10' 
        ]);

        $property->update($request->all());
    
        return redirect()->route('properties.index')
            ->with('success','Updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('properties.index')
            ->with('success','Deleted successfully');

    }
}
