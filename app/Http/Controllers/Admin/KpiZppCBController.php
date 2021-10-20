<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiZppCB;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiZppCBController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_zpp_c_b_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-c-b.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_zpp_c_b_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-c-b.create');
    }

    public function edit(KpiZppCB $kpiZppCB)
    {
        abort_if(Gate::denies('kpi_zpp_c_b_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-c-b.edit', compact('kpiZppCB'));
    }

    public function show(KpiZppCB $kpiZppCB)
    {
        abort_if(Gate::denies('kpi_zpp_c_b_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-c-b.show', compact('kpiZppCB'));
    }
}
