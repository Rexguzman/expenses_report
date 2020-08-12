<?php

namespace App\Http\Controllers;

use App\client;
use App\user;
use Auth;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clients.index', [
            'clients' => User::find(Auth::id())->clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3', 
            'identity' => 'required|min:3', 
            'phone' => 'required|min:3', 
            'sex' => 'required|min:3',
            'direction' => 'required|min:3'
            ]);

        $report = new client();
        $report->name = $validateData['name'];
        $report->identity = $validateData['identity'];
        $report->phone = $validateData['phone'];
        $report->sex = $validateData['sex'];
        $report->direction = $validateData['direction'];
        $report->user_id = auth()->user()->id;
        $report->save();

        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        return view('clients.show', [
            'client'=>$client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = client::findOrFail($id);
        return view('clients.edit', [
            'client'=>$report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3', 
            'identity' => 'required|min:3', 
            'phone' => 'required|min:3',
            'direction' => 'required|min:3'
            ]);

        $report = client::findOrFail($id);
        $report->name = $validateData['name'];
        $report->identity = $validateData['identity'];
        $report->phone = $validateData['phone'];
        $report->direction = $validateData['direction'];
        $report->save();

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = client::findOrFail($id);
        $report->delete();

        return redirect('/clients');
    }
}
