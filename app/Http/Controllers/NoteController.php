<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Note;
use app\Http\Resources\Note as NoteResource;
use app\Http\Resources\NoteCollection;
use app\Http\Controllers\Controller;

class NoteController extends Controller
{
    public function index()
    {
        return new NoteCollection(Note::all());
    }

    public function show(Note $note)
    {
        return new NoteResource($note);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'description' => 'required|min:10|max:500'
        ]);

        $note = Note::create($request->all());

        return (new NoteResource($note))
                ->response()
                ->setStatusCode(201);
    }

    public function delete($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return response()->json(null, 204);
    }
}
