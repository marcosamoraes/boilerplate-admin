<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $packs = Pack::paginate(50);
        return view('packs.index', compact('packs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('packs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Pack::create($request->all());

            Alert::toast('Pacote cadastrado com sucesso.', 'success');
            return Redirect::route('packs.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            Alert::toast('Falha ao cadastrar pacote.', 'error');
            return back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pack $pack)
    {
        return view('packs.edit', compact('pack'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pack $pack)
    {
        try {
            $pack->update($request->all());

            Alert::toast('Pacote editado com sucesso.', 'success');
            return Redirect::route('packs.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            Alert::toast('Falha ao editar pacote.', 'error');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pack $pack)
    {
        $pack->delete();
        Alert::toast('Pacote deletado com sucesso.', 'success');
        return back();
    }
}
