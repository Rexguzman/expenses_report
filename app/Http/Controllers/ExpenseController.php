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
        return view('clients.show', [
            'expenses' => expenses::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($client_id)
    {
        return view('expense.create', [
            'client'=> client::findOrFail($client_id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $client_id)
    {
        $validateData = $request->validate([
            'description' => 'required|min:3', 
            'amount' => 'required|min:1', 
            ]);
        $expense = new Expense();
        $expense->description = $validateData['description'];
        $expense->amount = $validateData['amount'];
        $expense->client_id = client::findOrFail($client_id)->id;
        $expense->save();

        return redirect('/clients/' . client::findOrFail($client_id)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($client_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($client_id, $expense_id)
    {
        $expense = Expense::findOrFail($expense_id);
        $client = client::findOrFail($client_id);
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
    public function update(Request $request, $client_id, $expense_id)
    {
        $validateData = $request->validate([
            'description' => 'required|min:3', 
            'amount' => 'required|min:1', 
            ]);
        $report = expense::findOrFail($expense_id);
        $report->description = $validateData['description'];
        $report->amount = $validateData['amount'];
        $report->save();

        return redirect('/clients/' . client::findOrFail($client_id)->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($client_id)
    {
        $report = expense::findOrFail($client_id);
        $report->delete();

        return redirect('/clients/' . client::findOrFail($client_id)->id);
    }
}
