<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BalanceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('balance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.balance.index');
    }

    public function create()
    {
        abort_if(Gate::denies('balance_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.balance.create');
    }

    public function edit(Balance $balance)
    {
        abort_if(Gate::denies('balance_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.balance.edit', compact('balance'));
    }

    public function show(Balance $balance)
    {
        abort_if(Gate::denies('balance_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.balance.show', compact('balance'));
    }
}
