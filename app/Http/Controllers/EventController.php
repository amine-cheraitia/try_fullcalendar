<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request)
    {

        return view('full-calendar');
    }

    public function store()
    {
    }

    public function update()
    {
    }

    public function create()
    {
    }
    public function destroy()
    {
    }
}