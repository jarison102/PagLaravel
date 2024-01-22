<?php

namespace App\Http\Controllers;

use App\Models\Categoriap;
use Illuminate\Http\Request;

/**
 * Class CategoriapController
 * @package App\Http\Controllers
 */
class CategoriapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaps = Categoriap::paginate();

        return view('categoriap.index', compact('categoriaps'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriaps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriap = new Categoriap();
        return view('categoriap.create', compact('categoriap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Categoriap::$rules);

        $categoriap = Categoriap::create($request->all());

        return redirect()->route('categoriap.index')
            ->with('success', 'Categoriap created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriap = Categoriap::find($id);

        return view('categoriap.show', compact('categoriap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriap = Categoriap::find($id);

        return view('categoriap.edit', compact('categoriap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoriap $categoriap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoriap $categoriap)
    {
        request()->validate(Categoriap::$rules);

        $categoriap->update($request->all());

        return redirect()->route('categoriap.index')
            ->with('success', 'Categoriap updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoriap = Categoriap::find($id)->delete();

        return redirect()->route('categoriap.index')
            ->with('success', 'Categoriap deleted successfully');

            
    }
}
