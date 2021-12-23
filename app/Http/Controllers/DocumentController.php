<?php

namespace App\Http\Controllers;

use App\Models\Document_type;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create()
    {
        $types = Document_type::all();
        return view('create',['types' => $types]);
    }

    public function store(Request $request)
    {
        Document::create([
            'type_id' =>$request->type,
            'title' =>$request->title,
            'name_archive' =>$request->description
        ]);

        return redirect('/documents')->with('message', 'Documento cadastrado com sucesso!');
    }

    public function show(){
        $documents = Document::all();
        return view('list',['documents' => $documents]);
    }

    public function edit($id){
        $types = Document_type::all();
        $document = Document::findOrFail($id);
        return view('edit',['document' => $document, 'types' => $types]);
    }

    public function update(Request $request, $id){
        $document = Document::findOrFail($id);
        $document->update([
            'type_id' =>$request->type,
            'title' =>$request->title,
            'name_archive' =>$request->description
        ]);
        return redirect('/documents')->with('message', 'Documento editado com sucesso!');
    }

    public function destroy($id){
        $document = Document::findOrFail($id);
        $document->delete();
        return redirect('/documents')->with('message', 'Documento deletado com sucesso!');
    }
}
