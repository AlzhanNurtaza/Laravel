<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OilTariff;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OilTariffController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('oil_tariff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oil-tariff.index');
    }

    public function create()
    {
        abort_if(Gate::denies('oil_tariff_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oil-tariff.create');
    }

    public function edit(OilTariff $oilTariff)
    {
        abort_if(Gate::denies('oil_tariff_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oil-tariff.edit', compact('oilTariff'));
    }

    public function show(OilTariff $oilTariff)
    {
        abort_if(Gate::denies('oil_tariff_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oil-tariff.show', compact('oilTariff'));
    }
}
