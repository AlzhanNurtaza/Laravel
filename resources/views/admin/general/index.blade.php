@extends('layouts.adminQlikCapability')
@section('content')
    <div class="row m-0 ">
        <div class="card bg-white mb-0 !rounded-none !rounded-t-lg">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.general.title') }}
                    </h6>
                </div>
            </div>
            <div class="card-body !pb-0" style="min-height: 180px">
                <div class="flex flex-wrap filterpane">

                    <div class="qs-object w-6/12 lg:w-3/12" id="yCVxcU" style="height: 85px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="42fae803-1154-4560-8db6-292eca9517a3" style="height: 85px">
                    </div>
                    <div class="qs-object w-full lg:w-3/12" id="3e6556a4-4f54-4ceb-b355-eee079c08c27" style="height: 85px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-6/12 lg:w-3/12" id="meycKf" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="vWZuPn" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="SaJjySN" style="height: 60px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-6/12 lg:w-1/12" id="37b977f0-ffae-4ab1-a419-383623fc37c5" style="height: 30px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-1/12" id="e5afb703-aba3-4936-8efa-ca205cda2930" style="height: 30px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 sticky top-0  z-2" style="min-height: 40px">
        <div class="flex flex-wrap filterpane">
            <div class="w-full" id="CurrentSelections">
            </div>
        </div>
    </div>


    <div class="flex flex-wrap" id="wrapper-for-text-pink">
        <div class="w-full">
            <ul class="flex mb-0 list-none flex-wrap pt-3 p-4 flex-row">
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-senseColor-600 cursor-pointer"
                        data-tab-toggle="tab0" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab0')">
                        Сводная информация
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-space">
                <div class="block" data-tab-content="true" id="tab0">
                    <div class=" mx-auto w-full">
                        <!-- Card stats -->
                        <div class="flex flex-wrap ">
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="jWTUHYu">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="fCpFCCd">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="qgKJVgp">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="UvPzcwe">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" mx-auto w-full">
                        <!-- Card stats -->
                        <div class="flex flex-wrap ">
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="mBSHRL">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="nTgbPHZ">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="ZpFNuN">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="Zpve">
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
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="RTVJzpJ">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-400-px lg:h-600-px" id="hfBkx">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blocks 2 -->
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12  p-4 hidden lg:block">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="rdtuwEf">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4 hidden lg:block">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="CjxXce">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@section('QlikScripts')
    qlikConnection('ab4076ab-cbef-461d-8a10-89d49b67b63a','breeze',null);
@endsection
@endsection
