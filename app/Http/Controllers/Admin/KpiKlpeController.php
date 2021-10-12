<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiKlpe;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiKlpeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_klpe_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-klpe.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_klpe_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-klpe.create');
    }

    public function edit(KpiKlpe $kpiKlpe)
    {
        abort_if(Gate::denies('kpi_klpe_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-klpe.edit', compact('kpiKlpe'));
    }

    public function show(KpiKlpe $kpiKlpe)
    {
        abort_if(Gate::denies('kpi_klpe_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-klpe.show', compact('kpiKlpe'));
    }
}
