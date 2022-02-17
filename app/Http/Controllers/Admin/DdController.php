<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dd;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DdController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dd_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dd.index');
    }

    public function create()
    {
        abort_if(Gate::denies('dd_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dd.create');
    }

    public function edit(Dd $dd)
    {
        abort_if(Gate::denies('dd_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dd.edit', compact('dd'));
    }

    public function show(Dd $dd)
    {
        abort_if(Gate::denies('dd_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dd.show', compact('dd'));
    }
}
