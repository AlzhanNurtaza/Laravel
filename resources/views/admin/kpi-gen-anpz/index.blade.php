@extends('layouts.adminQlikCapability')
@section('content')
    <div class="row m-0">
        <div class="card bg-white">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.kpiGenAnpz.title') }}
                    </h6>
                </div>
            </div>

            <div class="card-body" style="min-height: 140px">
                <div class="flex flex-wrap">

                    <div class="w-full" id="CurrentSelections">

                    </div>
                    <div class="qs-object w-full md:w-6/12 lg:w-6/12 xl:w-6/12  py-4" id="yqvADd" style="height: 60px">
                    </div>
                    <div class="qs-object  w-full md:w-6/12 lg:w-6/12 xl:w-6/12 py-4"
                        id="93dc8873-4423-45b3-8843-2642bd1762ca" style="height: 60px">
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
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab1" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab1')">
                        OPEX/CAPEX
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab2" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab2')">
                        Обеспечение надежности
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab3" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab3')">
                        Займы
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab4" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab4')">
                        Tazalyk
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab5" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab5')">
                        Закупки
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab6" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab6')">
                        LTIR
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab7" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab7')">
                        СНЭ
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-space">
                <div class="block" data-tab-content="true" id="tab0">
                    <div class=" mx-auto w-full">
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab" id="uxnVJV" style="height: 250px">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab" id="ac67620d-475a-4437-b983-7b5242be0e53"
                                        style="height: 250px">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab" id="YLDtxF" style="height: 250px">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab" id="KbMBSy" style="height: 250px">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab" id="6d6971a8-55d7-4552-a771-ead89d649d70"
                                        style="height: 250px">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab" id="cBAdP" style="height: 250px">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab" id="PTfKu" style="height: 250px">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab" id="LQJrAN" style="height: 250px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full  p-4 hidden md:block lg:block xl:block">
                        <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="w-full mb-12 p-4 qs-object-tab" id="GUZuvx" style="height: 600px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab1">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 ">
                                <div class="bg-white rounded shadow-lg  p-4 m-4 qs-object-tab"
                                    id="3e99ced6-9b4a-4095-8bc5-ac5754109d92" style="height: 200px">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab"
                                    id="e70518d7-3ce8-4e0a-a4fd-f5b810b2d6e1" style="height: 200px">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="UCtjkJE"
                                    style="height: 200px">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12">
                                <div class="flex-auto  bg-white rounded shadow-lg qs-object-tab p-4 m-4" id="dCPFM"
                                    style="height: 630px">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab" id="1ec8de9b-6d64-478e-8f41-230759ef3a4f"
                                    style="height: 600px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab2">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 ">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab" id="AXdUkP"
                                    style="height: 200px">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="GDNCJN"
                                    style="height: 200px">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="aaTPFSv"
                                    style="height: 200px">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12 hidden md:block lg:block xl:block">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4" id="Lpxxjcv"
                                    style="height: 630px">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab" id="yGfDjLq" style="height: 600px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab3">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 ">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab" id="xdkDf"
                                    style="height: 200px">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="cFtBWQ"
                                    style="height: 200px">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="UQCVKnh"
                                    style="height: 200px">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4" id="hWbPW"
                                    style="height: 630px">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab" id="NBDjwp" style="height: 600px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab4">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap justify-between">
                            <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab" id="VLQaPMY"
                                style="height: 250px">
                            </div>

                            <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="xmTMjh"
                                style="height: 250px">
                            </div>
                            <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="DjHEHFE"
                                style="height: 250px">
                            </div>
                            <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab hidden md:block lg:block xl:block" id="DHGLTbW"
                                style="height: 250px">
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab" id="DYPM" style="height: 600px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab5">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 ">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab" id="KNpSp"
                                    style="height: 200px">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="WXqeCMC"
                                    style="height: 200px">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="AxAsMB"
                                    style="height: 200px">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4" id="PRDufSE"
                                    style="height: 630px">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab" id="NJwjne" style="height: 600px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab6">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg  p-4 m-4 qs-object-tab" id="scawKG"
                                style="height: 200px">
                            </div>

                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="mcjaU"
                                style="height: 200px">
                            </div>
                            <div class=" flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="VTyWF"
                                style="height: 200px">
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab" id="hFxZ" style="height: 600px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab7">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg  p-4 m-4 qs-object-tab" id="fHHJLmx"
                                style="height: 200px">
                            </div>

                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="tWyXzm"
                                style="height: 200px">
                            </div>
                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg p-4 m-4 qs-object-tab" id="mmASpG"
                                style="height: 200px">
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab" id="jVtWeM" style="height: 600px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        let i = 0;
        var qlikApp = null;
        var appObjects = [];

        function callAjax(resolve, reject) {
            setTimeout(function() {
                $.ajax({
                    headers: {
                        'X-Qlik-Xrfkey': 'abcdefg123456789',
                        'Content-Type': 'application/json'
                    },
                    xhrFields: {
                        withCredentials: true
                    },
                    dataType: 'json',
                    complete: function(xmlHttp) {
                        console.log(xmlHttp.status);
                        if (xmlHttp.status == 200) {
                            resolve("success");
                        } else if (xmlHttp.status == 0) {
                            console.log("Probably a 302 handling");
                            if (i < 10) {
                                i++;
                                callAjax(resolve, reject);
                            } else {
                                console.log("Max retries reached. Rejecting");
                                reject("Error");
                            }
                        } else {
                            reject("Error");
                        }
                    },
                    type: 'GET',
                    url: "{{ env('QLIK_HOST') }}/{{ env('QLIK_PREFIX') }}/qrs/about?xrfkey=abcdefg123456789"
                })
            }, 1000)
        };

        var promise = new Promise(function(resolve, reject) {
            callAjax(resolve, reject);
        });

        promise.then(function() {
            $('head').append(
                '<link rel="stylesheet" type="text/css" href="{{ env('QLIK_HOST') }}/{{ env('QLIK_PREFIX') }}/resources/autogenerated/qlik-styles.css">'
            );
            $.getScript(
                "{{ env('QLIK_HOST') }}/{{ env('QLIK_PREFIX') }}/resources/assets/external/requirejs/require.js"
            ).done(


                function() {
                    $(".qs-object, .qs-object-tab").append(
                        '<img src="/img/preloader/Gear.gif" class="qs-preloader">');
                    var config = {
                        host: 'srv228.kmg.kz',
                        isSecure: true,
                        prefix: '/hdr/',
                        port: 443
                    };

                    require.config({
                        paths: {
                            'qlik': '{{ env('QLIK_HOST') }}/{{ env('QLIK_PREFIX') }}/resources/js/qlik'
                        },
                        baseUrl: '{{ env('QLIK_HOST') }}/{{ env('QLIK_PREFIX') }}/resources'
                    });

                    require(["js/qlik"], function(qlik) {
                        qlik.setLanguage('ru');

                        /////Set application ID
                        var app = qlik.openApp('ab01b5bb-d205-4804-b4a8-0490a046d62f', config);

                        ////Set app theme if needed
                        qlik.theme.apply('breeze')

                        //Apply bookmark or just comment 
                        app.bookmark.apply('2fb11271-3054-459c-a75a-6b59d58c9f13');

                        //Set Current Selections
                        app.getObject("CurrentSelections", "CurrentSelections");


                        //Set always visible and active tab objects
                        $('.qs-object, div[data-tab-content="true"]:not(.hidden) .qs-object-tab').each(
                            function(i) {
                                var objectID = $(this).attr('id')
                                if (objectID !== "")
                                    app.getObject(objectID, objectID).then(function(model) {
                                        appObjects.push(model)
                                    });
                            });
                        qlikApp = app;
                    });
                }
            )
        });
    </script>
    <script type="text/javascript">
        function changeAtiveTab(event, wrapperID, color, tabID) {
            let tabsWrapper = document.getElementById(wrapperID);
            let tabsAnchors = tabsWrapper.querySelectorAll("[data-tab-toggle]");
            let tabsContent = tabsWrapper.querySelectorAll("[data-tab-content]");

            for (let i = 0; i < tabsAnchors.length; i++) {
                if (tabsAnchors[i].getAttribute("data-tab-toggle") === tabID) {
                    tabsAnchors[i].classList.remove("text-" + color + "-600");
                    tabsAnchors[i].classList.remove("bg-white");
                    tabsAnchors[i].classList.add("text-white");
                    tabsAnchors[i].classList.add("bg-" + color + "-600");
                    tabsContent[i].classList.remove("hidden");
                    tabsContent[i].classList.add("block");
                    $('div[data-tab-content="true"].hidden .qs-object-tab').each(function(i) {
                        var objectID = $(this).attr('id')
                        for (var i = 0; i < appObjects.length; i++) {
                            if (appObjects[i].id === objectID) {
                                appObjects[i].close();
                                appObjects.splice(i, 1);
                                i--;
                            }
                        }
                    });
                    $('div[data-tab-content="true"]:not(.hidden) .qs-object-tab').each(function(i) {
                        $(this).html('<img src="/img/preloader/Gear.gif" class="qs-preloader">');
                        var objectID = $(this).attr('id')
                        if (objectID !== "")
                            qlikApp.getObject(objectID, objectID).then(function(model) {
                                appObjects.push(model)
                            });
                    });
                } else {
                    tabsAnchors[i].classList.add("text-" + color + "-600");
                    tabsAnchors[i].classList.add("bg-white");
                    tabsAnchors[i].classList.remove("text-white");
                    tabsAnchors[i].classList.remove("bg-" + color + "-600");
                    tabsContent[i].classList.add("hidden");
                    tabsContent[i].classList.remove("block");
                }
            }
        }
    </script>
@endsection
