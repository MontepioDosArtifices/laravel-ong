<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\PagarmeRequestService;

class DonateController extends Controller
{

  public function index()
  {
    $pagarme = new PagarmeRequestService();
    $allTransactions = $pagarme->getTransactions();

    return view('donate-list',['allTransactions' => $allTransactions]);
  }

  public function indexCustomers()
  {
    $pagarme = new PagarmeRequestService();
    $allCustomers = $pagarme->getCustomers();
    $allTransactions = $pagarme->getTransactions();

    return view('dashboard',['allCustomers' => $allCustomers, 'allTransactions' => $allTransactions]);
  }

  public function show($id)
  {
      //
  }
}
