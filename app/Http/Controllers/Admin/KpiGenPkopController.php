<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiGenPkop;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiGenPkopController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_gen_pkop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-pkop.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_gen_pkop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-pkop.create');
    }

    public function edit(KpiGenPkop $kpiGenPkop)
    {
        abort_if(Gate::denies('kpi_gen_pkop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-pkop.edit', compact('kpiGenPkop'));
    }

    public function show(KpiGenPkop $kpiGenPkop)
    {
        abort_if(Gate::denies('kpi_gen_pkop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-pkop.show', compact('kpiGenPkop'));
    }
}
