<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="icon" href="/img/fav/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>{{ trans('panel.site_title') }}</title>


    @livewireStyles
    @stack('styles')
</head>

<body class="text-blueGray-800 antialiased">

    <noscript>You need to enable JavaScript to run this app.</noscript>

    <div id="app">
        <x-sidebar />

        <div class="relative md:ml-64 bg-blueGray-50 min-h-screen">
            <x-nav />

            <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">&nbsp;</div>
            </div>

            <div class="relative px-1 md:px-10 mx-auto w-full min-h-full -m-48">
                @if (session('status'))
                    <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
                @endif
                <img style="display:none"
                    src="{{ env('QLIK_HOST') }}/{{ env('QLIK_PREFIX') }}/resources/img/core/dark_noise_16x16.png?qlikTicket={{ getTicket() }}"
                    alt="">

                @yield('content')


                <x-footer />
            </div>
        </div>

    </div>

    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
    @livewireScripts
    @yield('scripts')
    @stack('scripts')
    <script>
        function closeAlert(event) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            element.parentNode.parentNode.removeChild(element.parentNode);
        }
    </script>
    <script>

      
      let i = 0;
        var qlikApp = null;
        var appObjects = [];
        var objectAxisHide = ['qlik-variance-waterfall', 'linechart'];


        const mobileCheck = function() {
            let check = false;
            (function(a) {
                if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i
                    .test(a) ||
                    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
                    .test(a.substr(0, 4))) check = true;
            })(navigator.userAgent || navigator.vendor || window.opera);
            return check;
        };
        const getVisibleQlikCharts = function(app = qlikApp) {
            var isMobile = mobileCheck();
            $('.qs-object, div[data-tab-content="true"]:not(.hidden) .qs-object-tab').each(
                function(i) {
                    var objectID = $(this).attr('id')
                    if (objectID !== "") {
                        app.getObject(objectID, objectID).then(function(model) {
                            appObjects.push(model);
                            if (isMobile) {
                                if (model.genericType == 'container') {
                                    model.getChildInfos().then(function(childInfos) {
                                        childInfos.forEach(childInfo => {
                                            model.getChild(childInfo.qId).then(
                                                function(child) {
                                                    child.getLayout().then(
                                                        function(
                                                            childLayout
                                                        ) {
                                                            if (objectAxisHide
                                                                .includes(
                                                                    childLayout
                                                                    .visualization
                                                                )) {
                                                                childLayout.showTitles =false;
                                                                childLayout.measureAxis.show = 'none';
                                                                childLayout.legend.show = false;
                                                                child
                                                                    .Validated
                                                                    .bind(
                                                                        function() {
                                                                            childLayout.showTitles = false;
                                                                            childLayout.measureAxis.show = 'none';
                                                                            childLayout.legend.show = false;
                                                                        }
                                                                    );
                                                            }
                                                        });
                                                });
                                        });


                                    });
                                } else {
                                    model.getLayout().then(function(childLayout) {
                                        if (objectAxisHide.includes(childLayout
                                                .visualization)) {
                                            childLayout.showTitles = false;
                                            childLayout.measureAxis.show = 'none';
                                            childLayout.legend.show = false;
                                            child.Validated.bind(function() {
                                                childLayout.showTitles = false;
                                                childLayout.measureAxis.show ='none';
                                                childLayout.legend.show = false;
                                            });
                                        }
                                    });
                                }
                            }
                        });
                    }
                })

        }
        const destoryInvisibleObjects = function() {
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
        }
        const qlikOpenApp = function(appid, themename, bookmarkid, config) {
            require(["js/qlik"], function(qlik) {
                qlik.setLanguage('ru');

                /////Set application ID
                var app = qlik.openApp(appid, config);

                ////Set app theme if needed
                qlik.theme.apply(themename)

                //Apply bookmark or just comment 
                app.bookmark.apply(bookmarkid);

                //Set Current Selections
                app.getObject("CurrentSelections", "CurrentSelections");



                //Set always visible and active tab objects
                qlikApp = app;
                getVisibleQlikCharts(app);
            });
        }

        const qlikConnection = function(appid, themename,bookmarkid) {
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

                        qlikOpenApp(appid, themename, bookmarkid, config);
                    }
                )
            });
        }
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
                    getVisibleQlikCharts();
                } else {
                    tabsAnchors[i].classList.add("text-" + color + "-600");
                    tabsAnchors[i].classList.add("bg-white");
                    tabsAnchors[i].classList.remove("text-white");
                    tabsAnchors[i].classList.remove("bg-" + color + "-600");
                    tabsContent[i].classList.add("hidden");
                    tabsContent[i].classList.remove("block");
                    destoryInvisibleObjects();
                }
            }
        }
        
        @yield('QlikScripts');
      
    </script>
</body>

</html>
