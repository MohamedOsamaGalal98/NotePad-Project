<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Auth;

class NotePadController extends Controller
{
    public function index(){

        $notes = Note::where('user_id', Auth::user()->id)->get();
        return view('Notepad.index' , compact('notes'));
    }


    public function create(){

        return view('Notepad.create');
    }


    public function store(NoteRequest $request){

        $note = Note::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'note' => $request->note,
        ]);
        return redirect('/notepad');
    }


    public function edit($id){

        $note = Auth::user()->notes()->findOrFail($id);
        return view('Notepad.edit', compact('note'));
    }


    public function update(NoteRequest $request, $id){
        $note = Note::findOrFail($id);
        $note->update([
                'title' => $request->title,
                'note' => $request->note,
        ]);
        return redirect('/notepad');

    }

    

    public function delete($id){
        $note = Note::findOrFail($id);
        $note->destroy($id);
        return redirect('/notepad');

    }

}

