<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Image;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($ownerId)
    {

        $owner = Owner::findOrFail($ownerId);
        // prepare empty object
        $animal = new Animal;



        $animal->owner_id = $ownerId;


        $animal->save();

        //dd($animal);

        // display the form view, passing in the movie
        return view('animals.create', compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $ownerId)
    {
        $animal = new Animal;

        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->owner_id = $ownerId;


        $animal->save();

        session()->flash('success_message', 'New animal registered.');

        return redirect(url('/animals/detail/' . $animal->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        //dd($animal);
        $animal_image = DB::selectOne(
            "SELECT images.path 
            FROM images
            LEFT JOIN animals ON images.id = animals.image_id
            WHERE animals.id = ?",
            [$id]
        );
        //dd($animal_image);

        // dd($animal_image);
        $animal_owners = DB::select(
            "SELECT *
            FROM animals
            LEFT JOIN owners ON owners.id = animals.owner_id
            WHERE animals.id = ?",
            [$id]
        );
        return view('animals.detail', compact('animal', 'animal_image', 'animal_owners'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);

        return view('animals.create', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',

        ], [
            'text.required' => 'Please be so kind and fill-in the NAME field',
            'text.species' => "Please be so kind and fill-in the SPECIES field",
            'text.breed' => "Please be so kind and fill-in the BREED field",
            'text.age' => "Please be so kind and fill-in the AGE field",
            'text.weight' => "Please be so kind and fill-in the WEIGHT field"
        ]);

        $animal = Animal::findOrFail($id);

        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');

        $animal->save();



        session()->flash('success_message', 'Pet was edited.');

        return redirect(url('/animals/detail/' . $animal->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $owner = Owner::findOrFail($animal->owner_id);

        $animal->delete();
        session()->flash('success_deleting', 'A PET was DELETED.');

        return redirect(url('/owners/detail/' . $owner->id));
    }


    public function search(Request $request)
    {
        $search_word = $request->input('animal_name');
        $animals = Animal::where('name', 'like', "%" . $search_word . "%")->get();
        // dd($animals);
        return view('animals/search', compact('animals', 'search_word'));
    }
}
