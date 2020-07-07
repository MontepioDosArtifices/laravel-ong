<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

  public function index()
  {
    return response()->json(Event::all());
  }

  public function store(Request $request)
  {
    return Event::create($request->all());
  }

  public function show(Event $event)
  {
    return response()->json($event);
  }

  public function update(Request $request, Event $event)
  {
    $event->update($request->all());

    return response()->json($event);
  }

  public function destroy(Event $event)
  {
    $event->delete();

    return response()->json($event);
  }

}
