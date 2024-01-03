<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Snippet;

class SnippetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $snippet = Snippet::where('status','publish')->paginate(10);
        return view('snippet.index',[
            'snippets' => $snippet
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('snippet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Redirect
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Snippet::create($request->all());

        return redirect()
            ->route('snippet.index')
            ->with('success','Snippet created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Snippet $snippet): View
    {
        return view('snippet.show',compact('snippet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Snippet $snippet): View
    {
        return view('snippet.edit',compact('snippet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Snippet $snippet): Redirect
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $snippet->update($request->all());

        return redirect()
            ->route('snippet.index')
            ->with('success','Snippet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Snippet $snippet): Redirect
    {
        $snippet->delete();
        return redirect()
            ->route('snippet.index')
            ->with('success','Snippet deleted successfully');
    }
}
