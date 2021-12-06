<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capex;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CapexController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('capex_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capex.index');
    }

    public function create()
    {
        abort_if(Gate::denies('capex_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capex.create');
    }

    public function edit(Capex $capex)
    {
        abort_if(Gate::denies('capex_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capex.edit', compact('capex'));
    }

    public function show(Capex $capex)
    {
        abort_if(Gate::denies('capex_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capex.show', compact('capex'));
    }
}
