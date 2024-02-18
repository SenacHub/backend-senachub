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
        return view('auth.posts', compact('posts'));
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
        ]);

        $post = new Post();
        $post->content = $request->content;
        $post->user_id = Auth::id();
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
