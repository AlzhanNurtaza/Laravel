@extends('layouts.adminQlikCapability')
@section('content')
    <div class="row m-0 ">
        <div class="card bg-white mb-0 !rounded-none !rounded-t-lg">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.balance.title') }}
                    </h6>
                </div>
            </div>
            <div class="card-body !pb-0" style="min-height: 180px">
                <div class="flex flex-wrap filterpane">

                    <div class="qs-object w-6/12 lg:w-3/12" id="tJAnAu" style="height: 85px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="cVSZfmJ" style="height: 85px">
                    </div>
                    <div class="qs-object w-full lg:w-3/12" id="YnGVQzb" style="height: 85px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-6/12 lg:w-3/12" id="MQrZtY" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="FKZdT" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="Cpnhst" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="ApucU" style="height: 60px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-6/12 lg:w-1/12" id="CpkeHh" style="height: 30px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-1/12" id="HmCxkPJ" style="height: 30px">
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
                    <!-- Blocks 1 -->
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="RjGcvSZ">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-400-px lg:h-600-px" id="NBJHtY">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blocks 2 -->
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full   p-4 hidden lg:block">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab  h-350-px  lg:h-600-px" id="5485a2d5-9326-49c5-a450-be5c3073fb32">
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
    qlikConnection('3ac59fb1-73fb-47ea-8b12-c5691264ce10','breeze',null);
@endsection
@endsection
