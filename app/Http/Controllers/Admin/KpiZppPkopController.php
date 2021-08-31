<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KpiZppPkop;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KpiZppPkopController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kpi_zpp_pkop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-pkop.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kpi_zpp_pkop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-pkop.create');
    }

    public function edit(KpiZppPkop $kpiZppPkop)
    {
        abort_if(Gate::denies('kpi_zpp_pkop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-pkop.edit', compact('kpiZppPkop'));
    }

    public function show(KpiZppPkop $kpiZppPkop)
    {
        abort_if(Gate::denies('kpi_zpp_pkop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kpi-zpp-pkop.show', compact('kpiZppPkop'));
    }
}
