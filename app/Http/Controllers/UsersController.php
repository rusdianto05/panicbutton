<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'penanggung_jawab' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ]);

        User::create($data);

        return redirect()->route('user.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $item = User::find($id);
        return view('admin.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'penanggung_jawab' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ]);

        $item = User::find($id);
        $item->update($data);

        return redirect()->route('user.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();

        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus');
    }

    public function register()
    {
        return view('register');
    }

    public function storeguest(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'penanggung_jawab' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ]);

        User::create($data);

        return redirect()->route('guest.register')->with('success', 'Data berhasil disimpan');
    }
}
