<?php

namespace App\Http\Controllers\Backend\Modules\Menu;

use App\User;
use App\Http\Controllers\Backend\Model\Role;

use Gate;
use App\Http\Controllers\Backend\Modules\Menu\Model\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class MenuController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
        if(Gate::denies('edit-users')){
           // return view(route('Backend.Modules.dashboard');
        }
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('Backend.Modules.Menu.index')->with('menus',$menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        return view('Backend.Modules.Menu.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Menu::create($request->all());
        return redirect()->route('menu.index')->with('flash','Menu creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $menu = Menu::where('slug',$slug)->firstOrFail();
        return view('Backend.Modules.Menu.edit',compact('menu'));
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
        $menu = Menu::findOrFail($id);
        $menu->fill($request->all())->save();
        return redirect()->route('menu.index')->with('flash','Menu actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.index')->with('flash','Menu eliminado correctamente.');
    }
}
