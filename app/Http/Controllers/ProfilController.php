<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'user' => User::findOrFail(Auth::user()->id)
        ];
        return view('profil.index', $data);
    }

    public function update(Request $request, $id)
    {
        echo "Tes";
        exit();
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20'],
            'alamat' => ['string', 'nullable'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::findOrFail($id);

        $inputan = $request->all();
        if ($user->update($inputan)) {
            return redirect()->route('profil.index')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect()->route('profil.index')->with('error', 'Data gagal diupdate');
        }
    }
}
