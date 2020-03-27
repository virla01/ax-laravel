<?php

namespace App\Http\Controllers\Backend\Modules\Article\Source;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Backend\Modules\Article\Model\Source;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sources = Source::orderBy('id', 'ASC')->paginate(10);
        return view('Backend.Modules.Article.Source.index', compact('sources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Modules.Article.Source.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $source = Source::create($request->all());

        //file upload
        if($request->file('images')){
            $path = Storage::disk('public')->put('images/source' , $request->file('images'));
            $source->fill(['images' => asset($path)])->save();
        }

        return redirect()->route('source.index')->with('flash','Source creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $source = Source::find($id);
        return view('Backend.Modules.Article.Source.show', compact('source'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $source = Source::find($id);
        return view('Backend.Modules.Article.Source.edit', compact('source'));
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
        $source = Source::find($id);
        $source->fill($request->all())->save();
        return redirect()->route('source.index')->with('flash','Source actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Source::find($id)->delete();
        return back()->with('flash','Source eliminado correctamente.');
    }
}
