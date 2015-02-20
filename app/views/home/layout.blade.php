<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    <title><?php echo trans('text.encyclopaedia') ?> :: ยินดีต้อนรับ</title>

    <!-- Bootstrap -->

    <!-- Semantic -->
    {{--<link href="/components/semantic-ui/dist/semantic.min.css" rel="stylesheet" type="text/css">--}}
    <link href="/components/semantic-ui/dist/components/icon.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/image.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/input.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/item.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/modal.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/popup.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/rail.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/search.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/segment.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/sticky.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/transition.min.css" rel="stylesheet" type="text/css">

    <link href="/app/home/css/semantic/button2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/divider2low.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/dropdow.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/grid2low.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/header2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/labell.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/list2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/menu2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/statistic2.css" rel="stylesheet" type="text/css">

    @yield('css')

    <link href="/app/home/stylesheets/app.css" rel="stylesheet">

    <script>
        //        (function () {
        //            var
        //                    eventSupport = ('querySelector' in document && 'addEventListener' in window)
        //            jsonSupport  = (typeof JSON !== 'undefined'),
        //                    jQuery       = (eventSupport && jsonSupport)
//                            ? '/components/jquery/dist/jquery.min.js'
//                            : '/css/jquery.legacy.min.js'
//            ;
//            document.write('<script src="' + jQuery + '"><\/script>');
//        }());
    </script>

    <script src="/components/jquery/dist/jquery.js"></script>

    <script src="/css/easing.min.js"></script>
    <script src="/css/highlight.min.js"></script>
    <script src="/css/highlight.languages.min.js"></script>
    <script src="/css/history.min.js"></script>
    <script src="/css/tablesort.min.js"></script>

    <script src="/components/semantic-ui/dist/semantic.js"></script>

    {{--<script src="/css/docs.js"></script>--}}

    <script src="/app/home/js/docs.js"></script>
    <script src="/app/home/js/search.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <nav class="tab-bar show-for-small">
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon">
                    <span></span>
                </a>
            </section>

            <section class="middle tab-bar-section">
                <h3 class="title"><?php echo trans('text.encyclopaedia') ?></h3>
            </section>
        </nav>

        <aside class="left-off-canvas-menu">
            <div>
                <a href="/">
                    <img src="/app/home/images/sample.png" width="50%">
                </a>
            </div>
            <ul class="off-canvas-list">
                <li><label><?php echo trans('text.encyclopaedia') ?></label></li>
                <li></li>
            </ul>
        </aside>

        {{--<script src="/app/home/js/search.js"></script>--}}

        <header><!-- header & menu -->
            <nav>
                <div >
                <div id="logo-search-profile-category" class="ui page grid">
                    <div class="three wide colum">
                        <div class="ui centered grid">
                        <div class="ui statistic"> <!-- logo -->
                            <img class="ui tiny circular centered image" src="/app/home/images/sample.png">
                            <div class="labell">สารานุกรมกว๊านพะเยา</div>
                        </div> <!-- // logo -->
                        </div>
                    </div>

                    <div id="search-profile-category" class="thirteen wide colum">
                        <div class="ui grid">
                            <div class="low">
                                <div class="six wide colum">
                                    <div class="ui search"> <!-- search -->
                                        <div class="ui icon input">
                                            <input class="prompt" type="text" placeholder="ค้นหา">
                                            <i class="search icon"></i>
                                        </div>
                                        <div>
                                            <p>เรียงตาม : <a href="#">โพสต์ล่าสุด</a> | <a href="#">เป็นที่นิยม</a></p>
                                        </div>
                                        <div class="results"></div>
                                    </div> <!-- // search -->
                                </div>

                                <div id="profile-frame" class="ten wide colum">
                                    <div class="right-fix"> <!-- profile -->
                                        <h3 class="ui header">
                                            <div class="profile-shelf">
                                                    <div class="profile-book-first"><img src="/app/home/images/manow.jpg" class="ui avatar image"></div>
                                                    <div class="profilename">Ratanapat</div>
                                            </div>

                                        </h3>
                                        <div class="profile-shelf">
                                            <div class="profile-book-first">
                                                <a href="">
                                                    <div class="ui red circular labell">27</div>
                                                </a>
                                            </div>
                                            <div class="profile-book-last">
                                                <div class="ui icon top right pointing dropdow buttun">
                                                    <i class="setting icon"></i>
                                                    <i class="dropdown icon"></i>
                                                    <div class="menu">
                                                        <div class="item">เพิ่ม/แก้ไข เนื้อหา</div>
                                                        <div class="item">ตั้งค่าบัญชี</div>
                                                        <div class="item">ออกจากระบบ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- // profile -->
                                    </div>
                                </div>

                            </div>
                            <div class="low">
                                <div class="sixteen wide colum">
                                    <div class="ui grid"> <!-- main category -->
                                        <div class="computer only low">
                                            <div class="sixteen wide colum">
                                                <div class="ui fluid labeled small icon menu">
                                                    <a class="{{Request::path() == 'phayao' ? 'active ' : '';}}item" href="{{Request::path() == 'phayao' ? '#' : '/phayao';}}">
                                                        <i class="circular inverted{{Request::path() == 'phayao' ? ' red ' : ' teal ';}}large dashboard icon"></i>
                                                        <span>ข้อมูลทั่วไปกว๊านพะเยา</span>
                                                    </a>
                                                    <a class="{{Request::path() == 'ecology' ? 'active ' : '';}}item" href="{{Request::path() == 'ecology' ? '#' : '/ecology';}}">
                                                        <i class="circular inverted{{Request::path() == 'ecology' ? ' red ' : ' teal ';}}large pagelines icon"></i>
                                                        <span>นิเวศวิทยาและสิ่งแวดล้อม</span>
                                                    </a>
                                                    <a class="{{Request::path() == 'economy' ? 'active ' : '';}}item" href="{{Request::path() == 'economy' ? '#' : '/economy';}}">
                                                        <i class="circular inverted{{Request::path() == 'economy' ? ' red ' : ' teal ';}}large plane icon"></i>
                                                        <span>เศรษฐกิจและการท่องเที่ยว</span>
                                                    </a>
                                                    <a class="{{Request::path() == 'nature' ? 'active ' : '';}}item" href="{{Request::path() == 'nature' ? '#' : '/nature';}}">
                                                        <i class="circular inverted{{Request::path() == 'nature' ? ' red ' : ' teal ';}}large theme icon"></i>
                                                        <span>การจัดการทรัพยากรธรรมชาติ</span>
                                                    </a>
                                                    <a class="{{Request::path() == 'history' ? 'active ' : '';}}item" href="{{Request::path() == 'history' ? '#' : '/history';}}">
                                                        <i class="circular inverted{{Request::path() == 'history' ? ' red ' : ' teal ';}}large history icon"></i>
                                                        <span>ประวัติศาสตร์และวัฒนธรรม</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tablet only centered low">
                                            <div class="ui icon menu">
                                                <a class="{{Request::path() == 'phayao' ? 'active ' : '';}}item" href="{{Request::path() == 'phayao' ? '#' : '/phayao';}}">
                                                    <i class="circular inverted{{Request::path() == 'phayao' ? ' red ' : ' teal ';}}large dashboard icon"></i>
                                                </a>
                                                <a class="{{Request::path() == 'ecology' ? 'active ' : '';}}item" href="{{Request::path() == 'ecology' ? '#' : '/ecology';}}">
                                                    <i class="circular inverted{{Request::path() == 'ecology' ? ' red ' : ' teal ';}}large pagelines icon"></i>
                                                </a>
                                                <a class="{{Request::path() == 'economy' ? 'active ' : '';}}item" href="{{Request::path() == 'economy' ? '#' : '/economy';}}">
                                                    <i class="circular inverted{{Request::path() == 'economy' ? ' red ' : ' teal ';}}large plane icon"></i>
                                                </a>
                                                <a class="{{Request::path() == 'nature' ? 'active ' : '';}}item" href="{{Request::path() == 'nature' ? '#' : '/nature';}}">
                                                    <i class="circular inverted{{Request::path() == 'nature' ? ' red ' : ' teal ';}}large theme icon"></i>
                                                </a>
                                                <a class="{{Request::path() == 'history' ? 'active ' : '';}}item" href="{{Request::path() == 'history' ? '#' : '/history';}}">
                                                    <i class="circular inverted{{Request::path() == 'history' ? ' red ' : ' teal ';}}large history icon"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="mobile only centered low">
                                            <div class="ui icon menu">
                                                <a class="{{Request::path() == 'phayao' ? 'active ' : '';}}item" href="{{Request::path() == 'phayao' ? '#' : '/phayao';}}">
                                                    <i class="circular inverted{{Request::path() == 'phayao' ? ' red ' : ' teal ';}}dashboard icon"></i>
                                                </a>
                                                <a class="{{Request::path() == 'ecology' ? 'active ' : '';}}item" href="{{Request::path() == 'ecology' ? '#' : '/ecology';}}">
                                                    <i class="circular inverted{{Request::path() == 'ecology' ? ' red ' : ' teal ';}}pagelines icon"></i>
                                                </a>
                                                <a class="{{Request::path() == 'economy' ? 'active ' : '';}}item" href="{{Request::path() == 'economy' ? '#' : '/economy';}}">
                                                    <i class="circular inverted{{Request::path() == 'economy' ? ' red ' : ' teal ';}}plane icon"></i>
                                                </a>
                                                <a class="{{Request::path() == 'nature' ? 'active ' : '';}}item" href="{{Request::path() == 'nature' ? '#' : '/nature';}}">
                                                    <i class="circular inverted{{Request::path() == 'nature' ? ' red ' : ' teal ';}}theme icon"></i>
                                                </a>
                                                <a class="{{Request::path() == 'history' ? 'active ' : '';}}item" href="{{Request::path() == 'history' ? '#' : '/history';}}">
                                                    <i class="circular inverted{{Request::path() == 'history' ? ' red ' : ' teal ';}}history icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div> <!-- // main category -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sixteen wide colum">
                        <div class="ui pointing inverted menu"> <!-- menu -->
                            <a class="{{Request::path() == '/' ? 'active red ' : '';}}item" href="{{Request::path() == '/' ? '#' : '/';}}">
                                <i class="home icon"></i>หน้าหลัก
                            </a>
                            <a class="{{Request::path() == 'about' ? 'active red ' : '';}}item" href="{{Request::path() == 'about' ? '#' : '/about';}}">
                                <i class="book icon"></i>เกี่ยวกับสารานุกรมกว๊านพะเยา
                            </a>
                        </div> <!-- // menu -->
                    </div>
                </div>
                </div>
            </nav>
        </header>

        <section id="main-content">
            <div class="ui page grid">
                <div class="sixteen wide colum">
                    <div class="ui red tall stacked raised segment">
                        <div class="sixteen wide colum">
                            <article>
                                @yield('content')
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="ui grid">
                {{--<div class="ui four colum centered grid">--}}
                    {{--<div class="equal height divided low">--}}
                        <div class="eight wide mobile eight wide tablet four wide computer colum">
                            <h4 class="ui header">
                                <a href="">
                                    <i class="send outline icon"></i>
                                    <div class="content">
                                        ติดต่อสอบถาม
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide mobile eight wide tablet four wide computer colum">
                            <h4 class="ui header">
                                <a href="">
                                    <i class="comments outline icon"></i>
                                    <div class="content">
                                        ข้อเสนอแนะ
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide mobile eight wide tablet four wide computer colum">
                            <h4 class="ui header">
                                <a href="">
                                    <i class="pie chart icon"></i>
                                    <div class="content">
                                        แบบสอบถาม
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide mobile eight wide tablet four wide computer colum">
                            <h4 class="ui header">
                                <a href="">
                                    <i class="write icon"></i>
                                    <div class="content">
                                        เพิ่ม/แก้ไขเนื้อหา
                                    </div>
                                </a>
                            </h4>
                        </div>
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </footer>

        <!-- popup modal area -->

        <a class="exit-off-canvas"></a> <!-- back to the main page -->
    </div>
</div>
<!--requireJS help to require JavaScript modules-->
{{--<script src="/app/home/js/config.js"></script>--}}
{{--<script data-main="js/config" src="/app/home/js/lib/require.js"></script>--}}
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/components/jquery/dist/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Semantic -->
{{--<script src="/components/semantic-ui/dist/components/semantic.js"></script>--}}
{{--<script src="/components/semantic-ui/dist/components/dimmer.js"></script>--}}
{{--<script src="/components/semantic-ui/dist/components/modal.min.js"></script>--}}
<script src="/components/semantic-ui/dist/components/popup.min.js"></script>
<script src="/components/semantic-ui/dist/components/transition.js"></script>
<script src="/components/semantic-ui/dist/components/search.min.js"></script>
<script src="/components/semantic-ui/dist/components/sticky.min.js"></script>

<script src="/app/home/js/semantic/dropdow.js"></script>
<script src="/app/home/js/search.js"></script>

<!-- Foundation -->
<script src="/components/foundation/js/foundation.min.js"></script>
<script src="/components/foundation/js/foundation/foundation.offcanvas.js"></script>

<!-- Bootstrap -->

@yield('javascript')
<script>
    $('.ui.dropdow').dropdow();
//    $('.ui.search')
//            .search({
//                apiSettings: {
//                    url: '//api.semantic-ui.com/search/{query}'
//                },
////                type: 'category'
//            })
//    ;
    $(document)
        .ready(function () {
            $('.ui.search')
                .search({
                    apiSettings: {
                        url: '//api.semantic-ui.com/search/{query}'
                    },
                    type: 'category'
//                    debug: true
//                    verbose: true
                });
        });
    $(document).foundation();
</script>
</body>
</html>