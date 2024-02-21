<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function editImagemUser(Request $request)
    {
        $request->validate([
            'image_link_user' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação para imagem
        ]);

        // Verificar se o usuário está autenticado
        if (Auth::check()) {
            // Obtenha o usuário autenticado atualmente
            $user = Auth::user();

            // Verificar se há uma nova imagem e atualizar, se existir
            if ($request->hasFile('image_link_user')) {
                $imagePath = $request->file('image_link_user')->store('images'); // Salva na pasta 'public/images'
                $user->image_link_user = '/storage/' . $imagePath; // Salva o caminho relativo da imagem no banco de dados
                $user->save(); // Salva as alterações do usuário apenas se houver uma nova imagem
            }

            return view('profile.edit', [
                'user' => $user,
            ]);
        } else {
            // O usuário não está autenticado, redirecione para a página de login ou faça qualquer outra ação necessária
            return redirect()->route('login');
        }
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updateProfileInformation(Request $request)
{

}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
