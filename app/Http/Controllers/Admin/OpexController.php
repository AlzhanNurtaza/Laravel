<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opex;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OpexController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('opex_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.opex.index');
    }

    public function create()
    {
        abort_if(Gate::denies('opex_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.opex.create');
    }

    public function edit(Opex $opex)
    {
        abort_if(Gate::denies('opex_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.opex.edit', compact('opex'));
    }

    public function show(Opex $opex)
    {
        abort_if(Gate::denies('opex_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.opex.show', compact('opex'));
    }
}
