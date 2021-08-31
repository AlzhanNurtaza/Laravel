<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiZppPnhz;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiZppPnhzController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_zpp_pnhz_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-pnhz.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_zpp_pnhz_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-pnhz.create');
    }

    public function edit(KpiZppPnhz $kpiZppPnhz)
    {
        abort_if(Gate::denies('kpi_zpp_pnhz_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-pnhz.edit', compact('kpiZppPnhz'));
    }

    public function show(KpiZppPnhz $kpiZppPnhz)
    {
        abort_if(Gate::denies('kpi_zpp_pnhz_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-pnhz.show', compact('kpiZppPnhz'));
    }
}
