<?php

namespace App\Http\Controllers;

use App\Repositories\RecordRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(RecordRepository $repository)
    {
        return view('record', ['records' => $repository->get()]);
    }

    public function store(Request $request, RecordRepository $repository): RedirectResponse
    {
        $repository->save([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'phone' => $request->get('phone'),
        ]);

        return redirect()->back();
    }

    public function destroy($record): RedirectResponse
    {
        app(RecordRepository::class)->delete($record);

        return redirect()->back();
    }
}
