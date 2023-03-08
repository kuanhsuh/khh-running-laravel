<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::paginate(5);
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store()
    {
        request()->validate(Transaction::$createRules);
        $description = request('transaction_date') . ' 從帳號-' . request('last_five_digit') . ', 儲值金額-' . request('amount');
        $transaction = Transaction::create([
            'last_five_digit' => request('last_five_digit'),
            'transaction_date' => request('transaction_date'),
            'amount' => request('amount'),
            'user_id' => Auth()->user()->id,
            'description' => $description,
            'confirmed' => false,
        ]);
        Mail::to('kuanhsuh@gmail.com')->send(new \App\Mail\NewTransactionMail());


        dd("Email is Sent.");
        return redirect()->route('dashboard')->with('success', '你儲值成功，請等待管理者確認');
    }

    public function confirm(Transaction $transaction)
    {
        if(Auth()->user()->hasRole('Admin')) {
        $transaction->update([
            'confirmed' => true,
        ]);
        $transaction->user->increment('credit', $transaction->amount);
        return redirect()->route('transactions.index')->with('success', '儲值已確認');
        }
    }
}

