<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\appartment;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class appartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appartments = Appartment::all();
        
        return view('property-list', compact('appartments'));
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function destroy($id)
{
    // Find the appartment by its ID
    $appartment = Appartment::findOrFail($id);

    // Check if the authenticated user owns the appartment
    if ($appartment->user_id !== Auth::id()) {
        return redirect()->route('property-list')->with('error', 'You are not authorized to delete this appartment.');
    }

    // Delete the appartment
    $appartment->delete();

    // Redirect back to the property list page with a success message
    return redirect()->route('property-list')->with('success', 'Appartment deleted successfully.');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    
    // Validate the incoming request data
    $request->validate([
        'apartment_type' => 'required|string',
        'phone' => 'required|string',
        'home_space' => 'required|string',
        'floor' => 'required|string',
        'home_price' => 'required|string',
        'num_of_bathrooms' => 'required|integer',
        'num_of_bedrooms' => 'required|integer',
        'location' => 'required|string',
    ]);

    // Create a new instance of the Appartment model
    $appartment = new Appartment();

    // Assign values from the request to the model attributes
    $appartment->apartment_type = $request->apartment_type;
    $appartment->phone = $request->phone;
    $appartment->home_space = $request->home_space;
    $appartment->floor = $request->floor;
    $appartment->home_price = $request->home_price;
    $appartment->num_of_bathrooms = $request->num_of_bathrooms;
    $appartment->num_of_bedrooms = $request->num_of_bedrooms;
    $appartment->location = $request->location;
    
    // Assign the user_id from the authenticated user
    $appartment->user_id = Auth::id();

    // Save the data to the database
    $appartment->save();

    // Redirect to the property list page after successful insertion
    return redirect()->route('property-list')->with('success', 'Appartment created successfully.');
}
}





