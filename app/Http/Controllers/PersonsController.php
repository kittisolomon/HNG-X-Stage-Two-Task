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
        return  Person::all();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        $request->validated($request->all());

        $person = new Person($request->validated());

        $person->save();

        return response()->json($person, 201);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
    
        return $person;
      
    }

    /**
     * Show the form for editing the specified resource.
     */
   
    public function update(UpdatePersonRequest $request, Person $person)
    {
       
        $validated = $request->validated();

        $person->update($validated);

        return response()->json($person);
      
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return response()->json('Deleted', 204);
        
    }

  
}
