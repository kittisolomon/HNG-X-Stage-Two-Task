<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Http\Resources\PersonsResource;
use App\Models\Person;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class PersonsController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PersonsResource::collection(
            Person::get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        $request->validated($request->all());

        $person = Person::create([

            'name' => $request->name

        ]);

        

        $isTrue =  new PersonsResource($person);

        $notTrue = $this->error('', 'Error resource not  created', 501);

        return $person ? $isTrue :  $notTrue;

       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    
      $notExistId = $this->notExistId($id);

      $details = Person::find($id);

      return $notExistId ? $notExistId : new PersonsResource($details);
      
    }

    /**
     * Show the form for editing the specified resource.
     */
   
    public function update(Request $request, $id)
    {
        $notExistId = $this->notExistId($id);

        $updatePerson = Person::find($id);

        $updatePerson->update([
            'name' => $request->name
        ]);
    
       return $notExistId ? $notExistId : new PersonsResource($updatePerson);
      
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notExistId = $this->notExistId($id);

        Person::where('id', $id)
        ->delete();
    
       return $notExistId ? $notExistId : $this->success('','Resource Deleted Succesfully', 200);
        
    }

    private function notExistId($id)
    {
       if(!Person::where('id', $id)->exists()){

        return $this->error('', 'Person with id:'. $id. ' does not exist', 404);

       }
        
    }
}
