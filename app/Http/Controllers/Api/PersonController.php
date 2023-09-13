<?php

namespace App\Http\Controllers\Api;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePersonRequest;
use Illuminate\Support\Facades\Validator;

class PersonController extends Controller
{
    public function index(){

        $persons = Person::select('id', 'name')->get();

        if($persons->count() > 0){

            $data = [
                'status' => 200,
                'persons' => $persons,
            ];
            return response()->json($persons, 200);

        }else{

            $data = [
                'status' => 404,
                'status_message' => "No records found",
            ];
            return response()->json($data, 200);

        }

        
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            
        ]);

        if($validator ->fails()){
            

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{

            $person =Person::create([
                'name' => $request->name,
                
            ]);

            if($person){

                return response()->json([
                    'status' => 200,
                    'message' => "Person created successfully"
                ],200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something went wrong"
                ],500);
            }
        }
    }

    // public function store(Request $request)
    // {
    //     Person::create($request->all());
    //     return response()->json(['Success' => "Details Inserted"], 200);
    // }

    public function show($id){
        $person = Person::find($id);
        if($person){

            $data = [
                'id' => $person->id,
                'name' => $person->name,
            ];
            
            return response()->json($data, 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => " No such person found"
            ], 404);
        }
    }

    public function edit($id){
        $person = Person::find($id);
        if($person){

            $data = [
                'id' => $person->id,
                'name' => $person->name,
            ];
            
            return response()->json($data, 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => " No such person found"
            ], 404);
        }
    }

    public function update( Request $request, int $id ){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            
        ]);

        if($validator ->fails()){

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{

            $person = Person::find($id);            

            if($person){

                $person->update([
                    'name' => $request->name,
                    
                ]);

                $data = [
                    'id' => $person->id,
                    'name' => $person->name,                    
                ];
                return response()->json($data,200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "No such student found"
                ],200);
            }
        }
    }

    public function destroy($id){
        $person = Person::find($id);

        if($person){

            $person->delete();

            return response()->json([
                'status' => 200,
                'message' => "Person Deleted Successfully."
            ],200);

        }else{
            return response()->json([
                'status' => 500,
                'message' => "No such student found"
            ],200);
        }
    }
}
