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
        return Auth::user()->role == 'admin' ?
            view('profil.index_admin', $data) :
            view('profil.index', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required|string|max:255|unique:users,email,' . $id,
            'phone' => ['required', 'string', 'max:20'],
            'alamat' => ['string', 'nullable'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::findOrFail($id);

        $inputan = $request->all();

        if (empty($inputan['password'])) {
            unset($inputan['password']);
            unset($inputan['password_confirmation']);
        }

        if ($user->update($inputan)) {
            return redirect()
                ->route('profil.index')
                ->with('success', 'Data berhasil diupdate');
        } else {
            return redirect()
                ->route('profil.index')
                ->with('error', 'Data gagal diupdate');
        }
    }
}
