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

  public function show($id)
  {
      //
  }
}
