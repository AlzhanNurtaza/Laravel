<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiZppAnpz;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiZppAnpzController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_zpp_anpz_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-anpz.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_zpp_anpz_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-anpz.create');
    }

    public function edit(KpiZppAnpz $kpiZppAnpz)
    {
        abort_if(Gate::denies('kpi_zpp_anpz_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-anpz.edit', compact('kpiZppAnpz'));
    }

    public function show(KpiZppAnpz $kpiZppAnpz)
    {
        abort_if(Gate::denies('kpi_zpp_anpz_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-anpz.show', compact('kpiZppAnpz'));
    }
}
