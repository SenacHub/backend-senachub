<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('auth\telaPublicacao', compact('posts'));
    }

    // Exibir o formulário de criação de postagem
    public function create()
    {
        return view('posts.create');
    }

    // Salvar uma nova postagem
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'image_link' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação para imagem
        ]);

        $post = new Post();
        $post->content = $request->content;
        $post->user_id = Auth::id();

        // Salvar a imagem na pasta pública, se existir
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Salva na pasta 'public/images'
            $post->image_link = '/storage/' . $imagePath; // Salva o caminho relativo da imagem no banco de dados
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Postagem criada com sucesso!');
    }

    // Exibir uma postagem específica
    public function show($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    // Exibir o formulário de edição de postagem
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    // Atualizar uma postagem existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Postagem atualizada com sucesso!');
    }

    // Excluir uma postagem
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Postagem excluída com sucesso!');
    }
}
