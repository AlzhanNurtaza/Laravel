@extends('layouts.adminQlikCapability')
@section('content')
    <div class="row m-0">
        <div class="card bg-white">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.kpiGenCB.title') }}
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
                        ИПП
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab2" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab2')">
                        Займы
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab3" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab3')">
                        OPEX/CAPEX
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab4" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab4')">
                        Модификация БО
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab5" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab5')">
                        Модификация УМБ
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab6" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab6')">
                        Закупки
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab7" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab7')">
                        Бенчмаркинг
                    </a>
                </li>
                <li class="-mb-px mr-2 last:mr-0 flex-auto text-center mt-4">
                    <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                        data-tab-toggle="tab8" onclick="changeAtiveTab(event,'wrapper-for-text-pink','pink','tab8')">
                        LTIR
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
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="Gjdma">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="PPXR">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="HfNtee">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="EPZuhp">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="zZAnpcJ">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="vFpF">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="FAFAEPJ">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4 qs-object-tab h-250-px" id="CJCrPn">
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
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 self-center">
                                <div class="bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px"
                                    id="uEJDfF">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="nuwJtMd">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="WpTTY">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12 self-center">
                                <div class="flex-auto  bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-630-px"
                                    id="Amzjsty">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px"
                                    id="SSgjnQ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab2">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px"
                                    id="xdkDf">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="cFtBWQ">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="UQCVKnh">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12 hidden md:block lg:block xl:block self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-630-px"
                                    id="hWbPW">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block ">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab  h-600-px"
                                    id="NBDjwp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab3">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px" id="3cd698d7-3625-479b-80f3-39b8fc8141a5">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="72ec3a80-e627-4cd8-89d4-5ce3a5c146e0">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px"
                                    id="fejkNAu">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12 self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-600-px md:h-630-px lg:h-630-px xl:h-630-px"
                                    id="DJwXqQ">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px" id="1ec8de9b-6d64-478e-8f41-230759ef3a4f" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab4">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px" id="d8385f46-58a1-48a8-86c1-207e52ff857e">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="5156e112-28d7-4487-8033-591facf515af">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="41e8559c-9f45-4f13-9abb-7c0cdebc7456">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12 self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-600-px md:h-630-px" id="6133fa6c-314b-4fde-aaab-483ae3bf02f7">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px" id="a640781a-33dd-49b2-a83d-eacbfed0451e">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab5">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px" id="YMqRqaD">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="myFeD">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="YqEALHr">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12 self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-630-px" id="PDhHwu">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px" id="eyuKN">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab6">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/12 lg:w-3/12 xl:w-3/12 self-center">
                                <div class="flex-auto bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px" id="fbBztc">
                                </div>

                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="jRBPRJ">
                                </div>
                                <div class="flex-auto bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="FXpDeLt">
                                </div>
                            </div>
                            <div class="w-full md:w-9/12 lg:w-9/12 xl:w-9/12 self-center">
                                <div class=" flex-auto bg-white rounded shadow-lg qs-object-tab p-4 m-4 h-630-px" id="mKEUjJA">
                                </div>
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px" id="jAMjA">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab7">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px" id="eSnka">
                            </div>

                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="JhsNAe">
                            </div>
                            <div class=" flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="SGnvhnA">
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px" id="PrKfar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" data-tab-content="true" id="tab8">
                    <div class=" mx-auto w-full">
                        <div class="flex flex-wrap">
                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg  p-4 m-4 qs-object-tab h-200-px" id="scawKG">
                            </div>

                            <div class="flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="mcjaU">
                            </div>
                            <div class=" flex-auto w-full md:w-3/12 lg:w-3/12 xl:w-3/12 bg-white rounded shadow-lg p-4 m-4 qs-object-tab h-200-px" id="VTyWF">
                            </div>
                        </div>

                        <div class="w-full  p-4 hidden md:block lg:block xl:block">
                            <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="w-full mb-12 p-4 qs-object-tab h-600-px" id="hFxZ">
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
                        var app = qlik.openApp('c891b18c-641b-42ea-9655-f42fddc73d2c', config);

                        ////Set app theme if needed
                        qlik.theme.apply('breeze')

                        //Apply bookmark or just comment 
                        app.bookmark.apply('f716dffe-a9e2-4825-91cd-2a98109ab4ac');

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
