<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiGenCB;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiGenCBController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_gen_c_b_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-c-b.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_gen_c_b_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-c-b.create');
    }

    public function edit(KpiGenCB $kpiGenCB)
    {
        abort_if(Gate::denies('kpi_gen_c_b_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-c-b.edit', compact('kpiGenCB'));
    }

    public function show(KpiGenCB $kpiGenCB)
    {
        abort_if(Gate::denies('kpi_gen_c_b_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-gen-c-b.show', compact('kpiGenCB'));
    }
}
