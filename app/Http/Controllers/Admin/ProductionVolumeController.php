<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductionVolume;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductionVolumeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('production_volume_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.production-volume.index');
    }

    public function create()
    {
        abort_if(Gate::denies('production_volume_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.production-volume.create');
    }

    public function edit(ProductionVolume $productionVolume)
    {
        abort_if(Gate::denies('production_volume_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.production-volume.edit', compact('productionVolume'));
    }

    public function show(ProductionVolume $productionVolume)
    {
        abort_if(Gate::denies('production_volume_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.production-volume.show', compact('productionVolume'));
    }
}
