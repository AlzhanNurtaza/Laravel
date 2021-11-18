@extends('layouts.adminQlikCapability')
@section('content')
    <div class="row m-0">
        <div class="card bg-white">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.productionVolume.title') }}
                    </h6>
                </div>
            </div>

            <div class="card-body" style="min-height: 140px">
                <div class="flex flex-wrap filterpane">
                    <div class="w-full" id="CurrentSelections">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-full lg:w-3/12 py-4" id="QLxrZVu" style="height: 100px">
                    </div>
                    <div class="qs-object w-full lg:w-3/12 py-4" id="kXzmbuB"
                        style="height: 100px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-full lg:w-2/12 py-4" id="TWjZrk" style="height: 100px">
                    </div>
                    <div class="qs-object w-full lg:w-2/12  py-4" id="jAPFnM" style="height: 100px">
                    </div>
                    <div class="qs-object w-full lg:w-2/12 py-4" id="qmHSPtA"
                        style="height: 100px">
                    </div>
                    <div class="qs-object w-full lg:w-2/12 py-4" id="zbVfh" style="height: 100px">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="flex flex-wrap" id="wrapper-for-text-pink">
        <div class="w-full">
            <ul class="flex mb-0 list-none flex-wrap pt-3 p-4 flex-row">
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-pink-600 cursor-pointer"
                        data-tab-toggle="tab0" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab0')">
                        Сводная информация
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-space">
                <div class="block" data-tab-content="true" id="tab0">
                    <div class=" mx-auto w-full">
                        <!-- Card stats -->
                        <div class="flex flex-wrap ">
                            <div class="w-full lg:w-1/12 p-4 flex-auto lg:max-w-200-px">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">

                                    <div class="flex-auto p-2 qs-object-tab h-50-px"
                                        id="TFXePXR">
                                    </div>

                                    <div class="flex-auto p-2 qs-object-tab h-50-px"
                                        id="Yrdbhz">
                                    </div>

                                    <div class="flex-auto p-2 h-50-px" >
                                    </div>

                                    <div class="flex-auto p-2 h-100-px" >
                                    </div>

                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="LXXrjN">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="VKpx">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Blocks 1 -->
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="JNfusEv">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-400-px lg:h-600-px" id="SNEL">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blocks 2 -->
                    <div class=" mx-auto w-full">
                        <div class="w-full   p-4 hidden lg:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="TmuJvj">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@section('QlikScripts')
    qlikConnection('c3415d6e-6772-466c-b542-2921b0a08841','breeze',null);
@endsection
@endsection
