<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LongLoan;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LongLoanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('long_loan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.long-loan.index');
    }

    public function create()
    {
        abort_if(Gate::denies('long_loan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.long-loan.create');
    }

    public function edit(LongLoan $longLoan)
    {
        abort_if(Gate::denies('long_loan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.long-loan.edit', compact('longLoan'));
    }

    public function show(LongLoan $longLoan)
    {
        abort_if(Gate::denies('long_loan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.long-loan.show', compact('longLoan'));
    }
}
