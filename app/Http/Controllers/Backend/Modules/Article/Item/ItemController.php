<?php

namespace App\Http\Controllers\Backend\Modules\Article\Item;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Backend\Modules\Article\Model\Item;
use App\Http\Controllers\Backend\Modules\Article\Model\Category;
use App\Http\Controllers\Backend\Modules\Article\Model\Tag;
use App\Http\Controllers\Backend\Modules\Article\Model\Author;
use App\Http\Controllers\Backend\Modules\Article\Model\Source;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id', 'DESC')->where('published',1)->paginate(10);
        return view('Backend.Modules.Article.Item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->get();
        $authors = Author::orderBy('id', 'ASC')->pluck('name', 'id');
        $sources = Source::orderBy('id', 'ASC')->pluck('name', 'id');
        return view('Backend.Modules.Article.Item.create',compact('categories','tags','authors','sources'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Item::create($request->all());

        //file upload
        if($request->file('image_img')){
            $path = Storage::disk('public')->put('images/photos' , $request->file('image_img'));
            $item->fill(['image_img' => asset($path)])->save();
        }

        //tags
        $item->tags()->attach($request->get('tags'));

        return redirect()->route('item.index')->with('flash','Article creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('Backend.Modules.Article.Item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('id', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->get();
        $authors = Author::orderBy('id', 'ASC')->pluck('name', 'id');
        $sources = Source::orderBy('id', 'ASC')->pluck('name', 'id');
        $item = Item::find($id);


        return view('Backend.Modules.Article.Item.edit',compact('item','categories','tags','authors','sources'));
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
        $item = Item::find($id);
        $item->fill($request->all())->save();

        //file upload
        if($request->file('image_img')){
            $path = Storage::disk('public')->put('images/photos' , $request->file('image_img'));
            $item->fill(['image_img' => asset($path)])->save();
        }

        //tags
        $item->tags()->sync($request->get('tags'));

        return redirect()->route('item.index')->with('flash','Article actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
        return back()->with('flash','Article eliminado correctamente.');
    }
}
