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

                    <div class="w-full" id="CurrentSelections"></div>
                    <div class="qs-object w-full md:w-6/12 lg:w-6/12 xl:w-6/12  py-4" id="yqvADd" style="height: 60px">
                    </div>
                    <div class="qs-object  w-full md:w-6/12 lg:w-6/12 xl:w-6/12 py-4"
                        id="93dc8873-4423-45b3-8843-2642bd1762ca" style="height: 60px">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=" mx-auto w-full">
        <!-- Card stats -->
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 qs-object" id="uxnVJV" style="height: 250px">
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 qs-object" id="ac67620d-475a-4437-b983-7b5242be0e53" style="height: 250px">
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 qs-object" id="YLDtxF" style="height: 250px">
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 qs-object" id="KbMBSy" style="height: 250px">
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 qs-object" id="6d6971a8-55d7-4552-a771-ead89d649d70" style="height: 250px">
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 qs-object" id="cBAdP" style="height: 250px">
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 qs-object" id="PTfKu" style="height: 250px">
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 qs-object" id="LQJrAN" style="height: 250px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full  px-4">
        <div class="relative  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <div class="w-full mb-12 p-4 qs-object" id="GUZuvx" style="height: 600px">
            </div>
        </div>
    </div>
    <script>
        let i = 0;

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
                    $(".qs-object").append('<img src="/img/preloader/Gear.gif" class="qs-preloader">');
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
                        var app = qlik.openApp('ab01b5bb-d205-4804-b4a8-0490a046d62f', config);
                        qlik.theme.apply('breeze')
                        app.bookmark.apply('2fb11271-3054-459c-a75a-6b59d58c9f13');
                        app.getObject("CurrentSelections", "CurrentSelections");

                        $('.qs-object').each(function(i) {
                            var objectID = $(this).attr('id')
                            app.getObject(objectID, objectID);
                        });



                    });
                }
            )
        });
    </script>
@endsection
