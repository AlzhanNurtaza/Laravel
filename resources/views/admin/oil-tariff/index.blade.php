@extends('layouts.adminQlikCapability')
@section('content')
    <div class="row m-0 ">
        <div class="card bg-white mb-0 !rounded-none !rounded-t-lg">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.oilTariff.title') }}
                    </h6>
                </div>
            </div>
            <div class="card-body !pb-0" style="min-height: 180px">
                <div class="flex flex-wrap filterpane">

                    <div class="qs-object w-6/12 lg:w-3/12" id="18a8f106-3097-4239-aa7c-d43bef4f16cb" style="height: 85px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="c5db8614-8a7b-4806-8eab-15255a563bd2" style="height: 85px">
                    </div>
                    <div class="qs-object w-full lg:w-3/12" id="d3efbceb-2f31-446a-8871-082620c4e81e" style="height: 85px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-6/12 lg:w-3/12" id="7d4274ee-1665-48c4-b03a-f7654c99a0f7" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="c28d8514-b179-4cb7-a282-27c5de4d0209" style="height: 60px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-3/12" id="effdb4a7-b916-42f2-a5a6-23ac209bf52c" style="height: 60px">
                    </div>
                </div>
                <div class="flex flex-wrap filterpane">
                    <div class="qs-object w-6/12 lg:w-1/12" id="fa7712bc-3af5-4a21-b3c6-901ef43beead" style="height: 30px">
                    </div>
                    <div class="qs-object w-6/12 lg:w-1/12" id="b9a7af78-76e6-45af-b76e-65792e90e004" style="height: 30px">
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
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="DPmhXp">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-400-px lg:h-600-px" id="pqwPbSj">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    !-- Blocks 1/1 -->
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="hnFn">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-400-px lg:h-600-px" id="MDmWx">
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
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="kUFDCP">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12  p-4 hidden lg:block">
                                <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="w-full p-4 qs-object-tab h-350-px lg:h-600-px" id="KNLd">
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
    qlikConnection('9a8f2f76-c517-470b-885f-9ec2ebcf7e35','breeze',null);
@endsection
@endsection
