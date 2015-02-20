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
    <link href="/components/semantic-ui/dist/components/button.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/divider.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/dropdow.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/grid.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/header.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/icon.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/image.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/input.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/label.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/menu.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/modal.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/search.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/segment.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/statistic.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/transition.min.css" rel="stylesheet" type="text/css">

<!--     <link href="/components/semantic-ui-button/button.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-divider/divider.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-dropdown/dropdown.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-grid/grid.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-header/header.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-icon/icon.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-image/image.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-input/input.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-label/label.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-menu/menu.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-modal/modal.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-search/search.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-segment/segment.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui-statistic/statistic.css" rel="stylesheet" type="text/css"> -->

    <link href="/app/home/stylesheets/app.css" rel="stylesheet">

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
                    <img src="/app/home/images/logo.png" width="50%">
                </a>
            </div>
            <ul class="off-canvas-list">
                <li><label><?php echo trans('text.encyclopaedia') ?></label></li>
                <li></li>
            </ul>
        </aside>

        <header><!-- header & menu -->
            <nav>
                <div class="ui grid">
                    <div class="two wide green column"> <!-- logo -->
                        <div class="">
                            <div class="">
                                <div class="ui inverted statistic">
                                        <img class="ui tiny circular centered image" src="/app/home/images/logo.png">
                                    <div class="labell">สารานุกรมกว๊านพะเยา</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fourteen wide column"> <!-- search & profile -->
                        <div class="ui two column grid">
                            <div class="red column">
                                <div class="ui search"> <!-- search -->
                                    <div class="ui icon input">
                                        <input class="prompt" type="text" placeholder="ค้นหา">
                                        <i class="search icon"></i>
                                    </div>
                                    <div>
                                        <p>เรียงตาม : <a href="#">โพสต์ล่าสุด</a> | <a href="#">เป็นที่นิยม</a></p>
                                    </div>
                                    <div class="results"></div>
                                </div>
                            </div>
                            <div class="column">
                                <div class=""> <!-- profile -->
                                    <h3 class="ui header">
                                        <img src="/app/home/images/manow.jpg" class="ui avatar image">
                                        Ratanapat
                                    <div class="ui red circular labell">27</div>
                                    </h3>
                                    <div class="ui icon top right pointing dropdow buttun">
                                        <i class="large setting icon"></i>
                                        <i class="dropdown icon"></i>
                                        <div class="menu">
                                            <div class="item">เพิ่ม/แก้ไข เนื้อหา</div>
                                            <div class="item">ตั้งค่าบัญชี</div>
                                            <div class="item">ออกจากระบบ</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui grid">
                        <div class="ui fluid labeled icon small menu"> <!-- main category -->
                            <a class="item">
                                <i class="circular inverted red dashboard icon"></i>
                                <span>ข้อมูลทั่วไปกว๊านพะเยา</span>
                            </a>
                            <a class="item">
                                <i class="circular inverted teal pagelines icon"></i>
                                <span>นิเวศวิทยาและสิ่งแวดล้อม</span>
                            </a>
                            <a class="item">
                                <i class="circular inverted teal plane icon"></i>
                                <span>เศรษฐกิจและการท่องเที่ยว</span>
                            </a>
                            <a class="item">
                                <i class="circular inverted teal theme icon"></i>
                                <span>การจัดการทรัพยากรธรรมชาติ</span>
                            </a>
                            <a class="item">
                                <i class="circular inverted teal history icon"></i>
                                <span>ประวัติศาสตร์และวัฒนธรรม</span>
                            </a>
                        </div>
                    </div>
                    <div> <!-- menu -->

                    </div>
                </div>
            </nav>
        </header>

        <section class="main-content">
            <article>
                @yield('content')
            </article>
        </section>

        <footer>
            <div class="ui four column centered grid">
                <div class="equal height divided row">
                    <div class="column">
                        <a href="">ติดต่อสอบถาม</a>
                    </div>
                    <div class="column">
                        <a href="">ข้อเสนอแนะ</a>
                    </div>
                    <div class="column">
                        <a href="">แบบสอบถาม</a>
                    </div>
                    <div class="column">
                        <a href="">เพิ่ม/แก้ไขเนื้อหา</a>
                    </div>
                </div>
            </div>
        </footer>

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
{{--<script src="/components/semantic-ui/dist/semantic.js"></script>--}}
{{--<script src="/components/semantic-ui-dimmer/dimmer.js"></script>--}}
{{--<script src="/components/semantic-ui-modal/modal.min.js"></script>--}}
<script src="/components/semantic-ui/dist/components/transition.js"></script>
<script src="/components/semantic-ui/dist/components/dropdow.js"></script>
<script src="/components/semantic-ui/dist/components/search.min.js"></script>

<!-- Foundation -->
<script src="/components/foundation/js/foundation.min.js"></script>
<script src="/components/foundation/js/foundation/foundation.offcanvas.js"></script>

<!-- Bootstrap -->

@yield('javascript')
<script>
    $('.ui.dropdow').dropdow();
</script>
</body>
</html>