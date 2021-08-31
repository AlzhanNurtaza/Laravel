<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiGenAnpz;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiGenAnpzController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_gen_anpz_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-anpz.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_gen_anpz_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-anpz.create');
    }

    public function edit(KpiGenAnpz $kpiGenAnpz)
    {
        abort_if(Gate::denies('kpi_gen_anpz_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-anpz.edit', compact('kpiGenAnpz'));
    }

    public function show(KpiGenAnpz $kpiGenAnpz)
    {
        abort_if(Gate::denies('kpi_gen_anpz_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-anpz.show', compact('kpiGenAnpz'));
    }
}
