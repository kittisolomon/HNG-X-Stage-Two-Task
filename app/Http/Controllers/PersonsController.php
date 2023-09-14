<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Http\Resources\PersonsResource;
use App\Models\Person;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class PersonsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person = Person::all(); 
    
        if ($person->count() > 0) {

            return response()->json($person, 200);

        } else {

            return response()->json([
                'message' => 'No Person Found'
            ], 404);
        }
    }
        
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        $request->validated($request->all());

        $person = new Person($request->validated());


        if($person->save()){

            return response()->json(['message' => 'Person Created', 'Person' => $person], 201);

        }else{
            return response()->json(['message' => 'Internal Error Occured'], 500);
        }

      
       
    }

    /**
     * Display the specified resource.
     */
    public function show ($id)
    {

     $person = Person::find($id);

    if($person){

        return response()->json($person, 200);
      
    }else{
        return response()->json(['message' => 'Person does not exist'], 404);
    }
}
    /**
     * Show the form for editing the specified resource.
     */
   
    public function update(UpdatePersonRequest $request, Person $person)
    {
       
        $validated = $request->validated();

        $person->update($validated);

        return response()->json(['message' => 'Person Updated', 'New Person Details' => $person], 200);
      
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $person = Person::find($id);

        if($person){

        $person->delete();

        return response()->json(['message' => 'Person Deleted'], 200);

        }
        return response()->json(['message' => "Person does not exist"], 400);
        
    }

  
}
