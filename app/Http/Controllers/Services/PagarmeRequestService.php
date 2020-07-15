<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;

class PagarmeRequestService extends BaseRequestService
{
  public function createForm()
  {
    return view('donation');
  }

  public function getCustomers()
  {
    return $allCustomers = $this->get('customers');
  }

  public function clearRequest($request)
  {
    $request->value = intval(explode(',', $request->value)[0]) * 100;
    $request->card_number = str_replace(' ', '', $request->card_number);
    $request->card_expiration_date = str_replace('/', '', $request->card_expiration_date);
    $request->cpf = str_replace('-', '',str_replace('.', '', $request->cpf));
    $request->phone = str_replace('-', '',str_replace(' ', '', str_replace(')', '', str_replace('(', '', $request->phone))));

    return $request;
  }

  public function createTransaction(Request $request)
  {
    $external_id = rand(1, 10000);

    $clear_request = $this->clearRequest($request);

    $data = [
      'amount' => $clear_request->value,
      'payment_method' => 'credit_card',
      'card_holder_name' => $request->card_holder_name,
      'card_cvv' => $request->card_cvv,
      'card_number' => $clear_request->card_number,
      'card_expiration_date' => $clear_request->card_expiration_date,
      'customer' => [
        'external_id' => (string) $external_id,
        'name' => $request->name,
        'type' => 'individual',
        'country' => 'br',
        'documents' => [
          [
            'type' => 'cpf',
            'number' => $clear_request->cpf
          ]
        ],
        'phone_numbers' => ['+55' . $clear_request->phone],
        'email' => $request->email
      ],
    ];

    $this->post('transactions', $data);

    return redirect()->route('site');
  }

  public function getTransactions()
  {
    return $allTransactions = $this->get('transactions');
  }
}
