<?php

namespace App\Http\Controllers;

use App\Models\Registromovie;
use Illuminate\Http\Request;

/**
 * Class RegistromovieController
 * @package App\Http\Controllers
 */
class RegistromovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registromovies = Registromovie::paginate();

        return view('registromovie.index', compact('registromovies'))
            ->with('i', (request()->input('page', 1) - 1) * $registromovies->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registromovie = new Registromovie();
        return view('registromovie.create', compact('registromovie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Registromovie::$rules);

        $registromovie = Registromovie::create($request->all());

        return redirect()->route('registromovies.index')
            ->with('success', 'Registromovie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registromovie = Registromovie::find($id);

        return view('registromovie.show', compact('registromovie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registromovie = Registromovie::find($id);

        return view('registromovie.edit', compact('registromovie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Registromovie $registromovie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registromovie $registromovie)
    {
        request()->validate(Registromovie::$rules);

        $registromovie->update($request->all());

        return redirect()->route('registromovies.index')
            ->with('success', 'Registromovie updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $registromovie = Registromovie::find($id)->delete();

        return redirect()->route('registromovies.index')
            ->with('success', 'Registromovie deleted successfully');
    }
}
