<?php

namespace App\Http\Controllers;

use App\Client;
use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('expense.create', [
            'client'=> client::findOrFail($id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, client $client, $id)
    {
        $expense = new Expense();
        $expense->description = $request->get('description');
        $expense->amount = $request->get('amount');
        $expense->client_id = client::findOrFail($id)->id;
        $expense->save();

        return redirect('/clients/' . client::findOrFail($id)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, expense $expense, client $client)
    {
        $report = Expense::findOrFail($id);
        $client = client::findOrFail($id);
        return view('expense.edit', [
            'expense'=>$expense,
            'client'=>$client
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
            'description' => 'required|min:3', 
            'amount' => 'required|min:1', 
            ]);
        $report = expense::findOrFail($id);
        $report->description = $validateData['description'];
        $report->amount = $validateData['amount'];
        $report->save();

        return redirect('/clients/' . client::findOrFail($id)->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = expense::findOrFail($id);
        $report->delete();

        return redirect('/clients/' . client::findOrFail($id)->id);
    }
}
