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

  public function createTransaction(Request $request)
  {
    $external_id = rand(1, 10000);

    $data = [
      'amount' => $request->value,
      'payment_method' => $request->payment_method,
      'card_holder_name' => $request->card_holder_name,
      'card_cvv' => $request->card_cvv,
      'card_number' => $request->card_number,
      'card_expiration_date' => $request->card_expiration_date,
      'customer' => [
        'external_id' => (string) $external_id,
        'name' => $request->name,
        'type' => 'individual',
        'country' => 'br',
        'documents' => [
          [
            'type' => 'cpf',
            'number' => $request->cpf
          ]
        ],
        'phone_numbers' => ['+55' . $request->phone],
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
