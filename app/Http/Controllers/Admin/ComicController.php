<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Database\Seeders\ComicsSeeder;
use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $comics = Comic::all();
            return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('comics.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
        $validatedData = $request->validate([
            'src'               => 'nullable|max:1024|url',
            'title'             => 'required|max:150',
            'description'       => 'nullable|max:4096',
            'price'             => 'required|numeric',
            'series'            => 'nullable|string',
            'sale_date'         => 'required|date',
            'type'              => 'nullable|string',
            'artists'           => 'nullable|string',
            'writers'           => 'nullable|string',
        ],[
            'title.required' => 'MESSAGGIO CUSTOM TITLE REQUIRED',
            'title.max' => 'MESSAGGIO CUSTOM TITLE MAX',
        ]);

            $comic = new Comic();
            $comic->title =$validatedData['title'];
            $comic->description =$validatedData['description'];
            $comic->thumb =$validatedData['src'];
            $replacePrice = str_replace('$', '',$validatedData['price']);
            $comic->price = intval($replacePrice);
            $comic->series =$validatedData['series'];
            $comic->sale_date =$validatedData['sale_date'];
            $comic->type =$validatedData['type'];
            $comic->artists =$validatedData['artists'];
            $comic->writers =$validatedData['writers'];
            $comic->save();
            return redirect()->route('comics.show',['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $comic = Comic::find($id);
            return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)

    {     
         $validatedData = $request->validate([
            'src'               => 'nullable|max:1024|url',
            'title'             => 'required|max:150',
            'description'       => 'nullable|max:4096',
            'price'             => 'required|numeric',
            'series'            => 'nullable|string',
            'sale_date'         => 'required|date',
            'type'              => 'nullable|string',
            'artists'           => 'nullable|string',
            'writers'           => 'nullable|string',
        ]);
            $comic->title =  $validatedData ['title'];
            $comic->description =  $validatedData ['description'];
            $comic->thumb =  $validatedData ['src'];
            $replacePrice = str_replace('$', '',  $validatedData ['price']);
            $comic->price = intval($replacePrice);
            $comic->series =  $validatedData ['series'];
            $comic->sale_date =  $validatedData ['sale_date'];
            $comic->type =  $validatedData ['type'];
            $comic->artists =  $validatedData ['artists'];
            $comic->writers = $validatedData ['writers'];
            $comic->save();
            return redirect()->route('comics.show',['comic' => $comic->id]);
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
      
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
