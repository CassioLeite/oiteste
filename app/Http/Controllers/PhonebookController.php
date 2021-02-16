<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use App\Http\Requests\PhonebookRequest;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = \Auth::user()->phonebooks()->paginate(3);
        return view('phonebook.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phonebook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\PhonebookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhonebookRequest $request)
    {
        $request->merge(['user_id' => \Auth::id()]);
        $request->merge(['address' => $this->setAddress($request)]);
        Phonebook::create($request->all());
        return redirect()->route('phonebooks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phonebook $phonebook
     * @return \Illuminate\Http\Response
     */
    public function show(Phonebook $phonebook)
    {
        $contact = $phonebook;
        return view('phonebook.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phonebook $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Phonebook $phonebook)
    {
        return view('phonebook.edit', ['contact' => $phonebook]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request\PhonebookRequest  $request
     * @param  \App\Models\Phonebook $phonebook;
     * @return \Illuminate\Http\Response
     */
    public function update(PhonebookRequest $request, Phonebook $phonebook)
    {
        $request->merge(['user_id' => \Auth::id()]);
        $request->merge(['address' => $this->setAddress($request)]);
        $phonebook->update($request->all());
        return redirect()->route('phonebooks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phonebook $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phonebook $phonebook)
    {
        $phonebook->delete();
        return redirect()->route('phonebooks.index');
    }

    /**
     * Change a Phonebook status.
     *
     * @param  \Illuminate\Http\Requests $request
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
        $status = $request->get('status');
        $phonebook = Phonebook::find($request->get('contact'));
        $phonebook->status = $status ? 0 : 1;
        $phonebook->save();

        return redirect()->back();
    }

    /**
     * Export CSV.
     */
    public function export()
    {
        $filename = 'usuarios';
        $delimiter = ';';
        $phonebooks = Phonebook::all()->toArray();
        
        $f = fopen('php://memory', 'w'); 
       
        foreach ($phonebooks as $line) { 
            unset($line['user_id']);
            unset($line['created_at']);
            unset($line['updated_at']);
            $line['status'] = $line['status'] ? 'Ativo' : 'Inativo';
            
            fputcsv($f, $line, $delimiter); 
        }
        fseek($f, 0);
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="'.$filename.'";');
        
        fpassthru($f);
    }

    /**
     * Format the address.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function setAddress($request)
    {
        return "{$request->get('street')}, nº{$request->get('number')}, {$request->get('neighborhood')}, {$request->get('city')}-{$request->get('uf')}";
    }
}
