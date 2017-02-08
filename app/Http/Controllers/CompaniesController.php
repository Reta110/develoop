<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Controllers\Auth\AuthController;
use App\User;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;
use App\Http\Requests;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('name','ASC')->paginate(5);

        return view('empresa.list', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'tipology' => 'required',
            'country' => 'required',
            'estate' => 'required',
            'city' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        Company::create($data);

        session()->flash('message', 'La empresa ha sido creada exitosamente.');

        return redirect()->route('empresas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('empresa.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'tipology' => 'required',
            'country' => 'required',
            'estate' => 'required',
            'city' => 'required',
            'email' => 'required|email',
        ]);

        if ($request->input('password') == null) {
            $data = $request->except('password');
        } else {
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
        }

        Company::findOrFail($id)->update($data);

        session()->flash('message', 'La empresa ha sido actualizada exitosamente.');

        return redirect()->route('empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);

        session()->flash('message', "La empresa ha sido eliminada exitosamente.");

        return redirect()->to('empresas');
    }

}
