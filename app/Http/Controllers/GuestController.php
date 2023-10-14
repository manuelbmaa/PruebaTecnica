<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $guests = Guest::orderBy('id','desc')->paginate(5);
        return view('guest.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Realiza la validación
        $request->validate([
            'hability' => 'required|array',
            'email' => 'required|email|unique:guests,email',
        ]);

        $input = $request->all();

        if ($request->has('hability')) {
            $input['hability'] = implode(',', $request->input('hability'));
        } else {
            $input['hability'] = null;
        }

        Guest::create($input);

        return redirect()->route('somos-emkt.index')
            ->withSuccess('Usuario registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
