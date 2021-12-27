@extends('layouts.adminQlikCapability')
@section('content')
    <div class="row m-0 ">
        <div class="card bg-white mb-0 !rounded-none !rounded-t-lg">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.kpiZpp.title') }}
                    </h6>
                </div>
            </div>
            <div class="card-body !pb-0" style="min-height: 65px">
                <div class="flex flex-wrap filterpane ">
                    <div class="qs-object w-6/12 lg:w-3/12" id="yqvADd" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="93dc8873-4423-45b3-8843-2642bd1762ca" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="kppxt" style="height: 60px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 sticky top-0 z-50 " style="min-height: 40px">
        <div class="flex flex-wrap filterpane ">
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
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab1" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab1')">
                        OPEX/CAPEX
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab2" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab2')">
                        ЧДП
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab3" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab3')">
                        Проекты ДУ КМГ
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab4" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab4')">
                        Реализация бизнес-инициатив
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab5" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab5')">
                        Выход светлых
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab6" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab6')">
                        CCI
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
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="HfNtee">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="KCBwaac">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="mcfWxXd">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="CbtMBK">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="Gjdma">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="bJKfuNu">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full  p-4">
                        <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="w-full mb-12 p-4 qs-object-tab h-600-px" id="GUZuvx">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab1">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full  lg:w-3/12 xl:w-3/12 self-center">
                                <div class="bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px"
                                    id="3cd698d7-3625-479b-80f3-39b8fc8141a5">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="72ec3a80-e627-4cd8-89d4-5ce3a5c146e0">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="fejkNAu">
                                </div>
                            </div>
                            <div class="w-full  lg:w-9/12 xl:w-9/12 self-center">
                                <div class="flex-auto  bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-350-px lg:h-630-px"
                                    id="DJwXqQ">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4  hidden md:block lg:block xl:block ">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px"
                                    id="1ec8de9b-6d64-478e-8f41-230759ef3a4f">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab2">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-3/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px"
                                    id="3a3c5892-180d-4fa9-a656-896585af0c06">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="609c7f8a-75d7-46e1-a441-66c491892389">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="exGMNp">
                                </div>
                            </div>
                            <div class="w-full lg:w-9/12 xl:w-9/12 self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-350-px lg:h-630-px"
                                    id="e46e4509-af77-4efb-98ed-e0fa6d3cc6e8">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block ">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab  h-600-px"
                                    id="de26a235-a9df-49a2-bd58-f7d7b1b4d8cd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab3">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-3/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px"
                                    id="VLQaPMY">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="xmTMjh">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="YZAJJ">
                                </div>
                            </div>
                            <div class="w-full lg:w-9/12 xl:w-9/12 self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-350-px lg:h-630-px"
                                    id="ccf4063e-f79c-43bf-ace0-fff195f9f73b">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden lg:block xl:block ">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab  h-600-px" id="DYPM">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab4">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-4/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-250-px"
                                    id="48eaeee1-38f6-4396-be74-0521b8b562e9">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-250-px"
                                    id="9a5ca6f3-d342-49e7-9063-9514b628e582">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="RmSPC">
                                </div>
                            </div>
                            <div class="w-full lg:w-8/12 xl:w-9/12 self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-350-px lg:h-730-px"
                                    id="eenWQq">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px"
                                    id="2f16a3cb-5d6f-464b-a1b5-00b4b50bfd5a">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab5">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-3/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px"
                                    id="3e99ced6-9b4a-4095-8bc5-ac5754109d92">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="e70518d7-3ce8-4e0a-a4fd-f5b810b2d6e1">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="UCtjkJE">
                                </div>
                            </div>
                            <div class="w-full lg:w-9/12 xl:w-9/12 self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-350-px lg:h-630-px"
                                    id="dCPFM">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px"
                                    id="fff18ef3-28ba-4e38-9bb0-b843db2e4706">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab6">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-250-px" id="rntkY">
                            </div>

                            <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-250-px"
                                id="85ba4ad0-1dcf-4efb-b6d8-8a7771075ae8">
                            </div>
                            <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-250-px" id="XzAcSM">
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px"
                                    id="ed45ce7c-4109-4f53-b49c-3c27fc5d3d55">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@section('QlikScripts')
    qlikConnection('241405e5-8bb8-4a9a-b85e-0b393d29594a','breeze','6e0f1fe3-1389-488e-8c67-44058417f64e');
@endsection
@endsection
