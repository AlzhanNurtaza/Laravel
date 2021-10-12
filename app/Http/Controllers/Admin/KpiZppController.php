<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiZpp;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiZppController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_zpp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_zpp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp.create');
    }

    public function edit(KpiZpp $kpiZpp)
    {
        abort_if(Gate::denies('kpi_zpp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp.edit', compact('kpiZpp'));
    }

    public function show(KpiZpp $kpiZpp)
    {
        abort_if(Gate::denies('kpi_zpp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp.show', compact('kpiZpp'));
    }
}
