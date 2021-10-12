<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiKpi;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiKpiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_kpi_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-kpi.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_kpi_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-kpi.create');
    }

    public function edit(KpiKpi $kpiKpi)
    {
        abort_if(Gate::denies('kpi_kpi_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-kpi.edit', compact('kpiKpi'));
    }

    public function show(KpiKpi $kpiKpi)
    {
        abort_if(Gate::denies('kpi_kpi_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-kpi.show', compact('kpiKpi'));
    }
}
