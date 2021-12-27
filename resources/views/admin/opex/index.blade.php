@extends('layouts.adminQlikCapability')
@section('content')
    <div class="row m-0 ">
        <div class="card bg-white mb-0  !rounded-none !rounded-t-lg">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.opex.title') }}
                    </h6>
                </div>
            </div>
            <div class="card-body !pb-0" style="min-height: 130px">
                <div class="flex flex-wrap filterpane ">

                    <div class="qs-object w-6/12 lg:w-3/12" id="yCVxcU" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="42fae803-1154-4560-8db6-292eca9517a3" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="3e6556a4-4f54-4ceb-b355-eee079c08c27" style="height: 60px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-6/12 lg:w-3/12" id="saKJp" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="asazJnq" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="SaJjySN" style="height: 60px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 sticky top-0 z-50 " style="min-height: 40px">
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
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab1" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab1')">
                        Детализация
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab2" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab2')">
                        Информация по неденежным затратам
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-senseColor-600 bg-white cursor-pointer"
                        data-tab-toggle="tab3" onclick="changeAtiveTab(event,'wrapper-for-text-pink','senseColor','tab3')">
                        Информация о смене курса
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-space">
                <div class="block" data-tab-content="true" id="tab0">
                    <div class=" mx-auto w-full">
                        <!-- Card stats -->
                        <div class="flex flex-wrap ">
                            <div class="w-full lg:w-2/12 xl:w-1/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">

                                    <div class="flex-auto p-2 qs-object-tab h-50-px"
                                        id="37b977f0-ffae-4ab1-a419-383623fc37c5">
                                    </div>

                                    <div class="flex-auto p-2 qs-object-tab h-50-px"
                                        id="e5afb703-aba3-4936-8efa-ca205cda2930">
                                    </div>

                                    <div class="flex-auto p-2 qs-object-tab h-50-px" id="TVAzLfN">
                                    </div>

                                    <div class="flex-auto p-2 qs-object-tab h-100-px" id="dVEwSsP">
                                    </div>

                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 xl:w-5/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="BpdQRxY">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 xl:w-5/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="TTZj">
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
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="RxtmfH">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-400-px lg:h-600-px" id="GsJuj">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blocks 2 -->
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-100-px" id="LHnEa">
                                    </div>
                                </div>
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-350-px  lg:h-500-px" id="xNjWDH">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4 hidden lg:block">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="cjfWj">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="hidden" data-tab-content="true" id="tab1">
                    <div class=" mx-auto w-full">
                        <!-- Card stats -->
                        <div class="flex flex-wrap ">
                            <div class="w-full lg:w-3/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">

                                    <div class="flex-auto p-2 qs-object-tab h-50-px" id="GCkqAAg">
                                    </div>
                                    <div class="flex-auto p-2 qs-object-tab h-50-px" id="DkEmDN">
                                    </div>

                                    <div class="flex-auto p-2 qs-object-tab h-150-px" id="zMqt">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-3/12 xl:w-2/12 p-4 flex-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="rRMmS">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-3/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="NFqpAvq">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-3/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="RfPzP">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-3/12 xl:w-2/12 p-4 flex-auto ">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="QDggp">
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
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="jSTdXpc">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-400-px lg:h-600-px"
                                        id="9c48c112-9bfc-40dd-890e-5b585661b9ec">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blocks 2 -->
                    <div class=" mx-auto w-full">
                        <div class="w-full   p-4 hidden lg:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="FEtX">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab2">
                    <div class=" mx-auto w-full">
                        <!-- Card stats -->
                        <div class="w-2/12  p-4 ">
                            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">

                                <div class="flex-auto p-2 qs-object-tab h-50-px" id="GuWNJKV">
                                </div>
                                <div class="flex-auto p-2 qs-object-tab h-50-px" id="KjvUEeW">
                                </div>
                            </div>
                        </div>


                        <div class="w-full  p-4 flex-auto">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4 qs-object-tab h-350-px lg:h-600-px"
                                    id="9ad17bfd-a26b-43cb-b284-1331d6422f9a">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blocks 1 -->
                    <div class=" mx-auto w-full">
                        <div class="w-full   p-4 hidden lg:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="GbyXhD">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab3">
                    <!-- Blocks 1 -->
                    <div class=" mx-auto w-full">
                        <div class="w-full   p-4 hidden lg:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="RumQj">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blocks 2 -->
                    <div class=" mx-auto w-full">
                        <div class="w-full   p-4 hidden lg:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="HsPBd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@section('QlikScripts')
    qlikConnection('9d3732f6-66c6-45c9-8adb-fba5fb5ee193','breeze',null);
@endsection
@endsection
