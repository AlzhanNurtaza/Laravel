<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiGenPnhz;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiGenPnhzController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_gen_pnhz_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-pnhz.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_gen_pnhz_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-pnhz.create');
    }

    public function edit(KpiGenPnhz $kpiGenPnhz)
    {
        abort_if(Gate::denies('kpi_gen_pnhz_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-pnhz.edit', compact('kpiGenPnhz'));
    }

    public function show(KpiGenPnhz $kpiGenPnhz)
    {
        abort_if(Gate::denies('kpi_gen_pnhz_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-pnhz.show', compact('kpiGenPnhz'));
    }
}
