<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Note;
use App\Models\User;

class NoteController extends Controller
{
    public function index(): View
    {
        $note = Note::query()->paginate(10);
        return view('note.index',[
            'notes' => $note
        ])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'note' => 'required',
            'user_id' => 'required',
        ]);

        Note::create($request->all());

        return redirect()
            ->route('note.index')
            ->with('success','Note created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note): View
    {
        return view('note.show',compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note): View
    {
        return view('note.edit',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note): RedirectResponse
    {
        $request->validate([
            'note' => 'required',
            'user_id' => 'required',
        ]);

        $note->update($request->all());

        return redirect()
            ->route('note.index')
            ->with('success','Note updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()
            ->route('note.index')
            ->with('success','Note deleted successfully');
    }
}
