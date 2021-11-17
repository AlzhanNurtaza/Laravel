<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OPiU;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OPiUController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('o_pi_u_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.o-pi-u.index');
    }

    public function create()
    {
        abort_if(Gate::denies('o_pi_u_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.o-pi-u.create');
    }

    public function edit(OPiU $oPiU)
    {
        abort_if(Gate::denies('o_pi_u_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.o-pi-u.edit', compact('oPiU'));
    }

    public function show(OPiU $oPiU)
    {
        abort_if(Gate::denies('o_pi_u_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.o-pi-u.show', compact('oPiU'));
    }
}
