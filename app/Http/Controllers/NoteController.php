<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Note;
use app\Http\Resources\Note as NoteResource;
use app\Http\Resources\NoteCollection;

class NoteController extends Controller
{
    public function index()
    {
        return new NoteCollection(Note::all());
    }

    public function show($id)
    {
        return new NoteResource(Note::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
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
