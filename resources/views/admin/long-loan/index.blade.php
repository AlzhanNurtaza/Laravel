@extends('layouts.adminQlikCapability')
@section('content')



    <div class="row m-0 ">
        <div class="card bg-white mb-0 !rounded-none !rounded-t-lg">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.longLoan.title') }}
                    </h6>
                </div>
            </div>
            <div class="card-body !pb-0 mt-1" style="min-height: 185px">
                <div class="flex flex-wrap filterpane">

                    <div class="qs-object w-6/12 lg:w-3/12" id="mFWcny" style="height: 85px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="vgtgkC" style="height: 85px">
                    </div>
                    <div class="qs-object w-full lg:w-3/12" id="VhuQmP" style="height: 85px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-6/12 lg:w-3/12" id="fUGVhJn" style="height: 90px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="SryJJf" style="height: 90px">
                    </div>
                    <div class="flex-auto p-4 qs-object h-200-px" id="KmBGfwZ">
                    </div>
                    <div class="flex-auto p-4 qs-object h-200-px" id="kEdfY">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 sticky top-0 z-10 " style="min-height: 40px">
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
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="vwUymRU">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-400-px lg:h-600-px" id="gDsgng">
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
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="NtYBwns">
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
    qlikConnection('6f93e959-df5c-49ea-a432-b7c5f14b0cb6','breeze',null);
@endsection
@endsection
