<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\General;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GeneralController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('general_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.general.index');
    }

    public function create()
    {
        abort_if(Gate::denies('general_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.general.create');
    }

    public function edit(General $general)
    {
        abort_if(Gate::denies('general_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.general.edit', compact('general'));
    }

    public function show(General $general)
    {
        abort_if(Gate::denies('general_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.general.show', compact('general'));
    }
}
