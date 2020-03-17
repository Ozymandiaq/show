<!doctype html>
<html lang="ru">
<head>
    <title>Техническое обеспечение мероприятий</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="Предоставление звукового, светового и видео оборудования в аренду для концертов, фестивалей и частных вечеринок по СНГ. Техническое оборудование топовых производителей с сертификатом качества.">
	<meta name="keywords" content="звук, свет, сцена, музыкальные инструменты, Led дисплеи, Бэклайн, технический продакшн, специалисты, концерты, мероприятия, шоу, вечеринки, техническое оборудование, проекты, аренда оборудования, брендовое оборудование, техническое обеспечение, выступления, развлечения, свадьбы, детские праздники, банкетные залы, артисты">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/ico.png') }}">
</head>
<body>
<div class="loader active">
    <img src="{{ asset('img/logo.png') }}">
</div>
<div class="body_line1 mob_none"></div>
<div class="body_line2 mob_none"></div>
<header>
    <div class="head_line mob_none"></div>
    <div class="head_container flex">
        <a href="{{ route('index') }}" class="head_logo">
            <img src="{{ asset('img/logo.png') }}">
        </a>
        <div class="head_right flex">
            <div class="head_lng">
                <div class="head_lng_box">
                    <div class="head_lng_main flex center align-center">
                        <p>Ru</p>
                    </div>
                    <div class="head_lng_fade">
                        <div class="head_lng_fade_box">
                            <form action="language">
                                <a href="#" class="head_lng_item active"><p>Ru</p></a>
                                <a href="#" class="head_lng_item"><p>En</p></a>
                                <a href="#" class="head_lng_item"><p>Kz</p></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head_tell">
                <a href="tel:+77779656415" target="_blank" class="head_tell_item">+7 (777) 965 64 15</a>
                <a href="tel:+77750051600" target="_blank" class="head_tell_item">+7 (775) 005 16 00</a>
            </div>
            <div class="head_soc flex align-start mob_none">
                <a href="https://t.me/ShowCultura/" target="_blank" class="head_soc_item">
                    <img src="{{ asset('img/head_i3.png') }}">
                </a>
                <a href="https://www.instagram.com/show_cultura/" target="_blank" class="head_soc_item">
                    <img src="{{ asset('img/head_i2.png') }}">
                </a>
                <a href="https://www.facebook.com/ShowCulturaRental/" target="_blank" class="head_soc_item">
                    <img src="{{ asset('img/head_i1.png') }}">
                </a>
            </div>
        </div>
    </div>
</header>
<section id="sec1">
    <div class="sec1_bg">
        <video src="/video/1.mp4" autoplay playsinline loop muted class="sec1_bg_video"></video>
    </div>
    <div class="sec1_line mob_none"></div>
    <div class="sec1_plashka mob_none"></div>
    <div class="sec1_box">
        <div class="sec1_title">
            Техническое обеспечение мероприятий:
        </div>
        <div class="sec1_text">
            <p>- более 100 брэндов профессионального оборудования</p>
            <p>- квалифицированная команда</p>
            <p>- обслуживание по Казахстану и СНГ</p>
        </div>
        <div class="sec1_btn">
            <a href="#showmodal" class="btn" data-toggle="modal">
                <p>Оставить заявку</p>
            </a>
        </div>
    </div>
    <div class="sec1_line_box mob_none">
        <div class="sec1_line_text"><p>Видео</p></div>
        <div class="sec1_video_box">
            <div class="sec1_video_item active">
                <div class="sec1_video_item_box" data-src="/video/1.mp4">
                    <img src="{{ asset('img/admin/sec1_v1.jpg') }}">
                </div>
                <div class="sec1_video_circle"></div>
            </div>
            <div class="sec1_video_item">
                <div class="sec1_video_item_box" data-src="/video/1.mp4">
                    <img src="{{ asset('img/admin/sec1_v1.jpg') }}">
                </div>
                <div class="sec1_video_circle"></div>
            </div>
        </div>
    </div>
</section>
<section id="sec2">
    <div class="sec2_ritm">
        <img src="{{ asset('img/sec2_ritm.png') }}">
    </div>
    <div class="sec2_title">
        Наше оборудование и квалифицированная команда
    </div>
    <div class="sec2_title2">
        гарантия успеха Вашего мероприятия
    </div>
    <div class="sec2_line">
        <div class="sec2_line_text mob_none"><p>оборудование</p></div>
        <div class="sec2_left_box">
            <div class="sec2_left_item active">
                <a href="#sec2" class="sec2_left_info" data-sec2="1">
                    <img src="{{ asset('img/sec2_i1.png') }}" class="sec2_left_img">
                    <div class="sec2_left_text">Звук</div>
                </a>
            </div>
            <div class="sec2_left_item">
                <a href="#sec2" class="sec2_left_info" data-sec2="2">
                    <img src="{{ asset('img/sec2_i2.png') }}" class="sec2_left_img">
                    <div class="sec2_left_text">Свет</div>
                </a>
            </div>
            <div class="sec2_left_item">
                <a href="#sec2" class="sec2_left_info" data-sec2="3">
                    <img src="{{ asset('img/sec2_i3.png') }}" class="sec2_left_img">
                    <div class="sec2_left_text">LED дисплеи</div>
                </a>
            </div>
            <div class="sec2_left_item">
                <a href="#sec2" class="sec2_left_info" data-sec2="4">
                    <img src="{{ asset('img/sec2_i4.png') }}" class="sec2_left_img">
                    <div class="sec2_left_text">Сценические конструкции</div>
                </a>
            </div>
            <div class="sec2_left_item">
                <a href="#sec2" class="sec2_left_info" data-sec2="5">
                    <img src="{{ asset('img/sec2_i5.png') }}" class="sec2_left_img">
                    <div class="sec2_left_text">Технический продакшн</div>
                </a>
            </div>
            <div class="sec2_left_item">
                <a href="#sec2" class="sec2_left_info" data-sec2="6">
                    <img src="{{ asset('img/sec2_i6.png') }}" class="sec2_left_img">
                    <div class="sec2_left_text">Технические специалисты</div>
                </a>
            </div>
        </div>
    </div>
    <div class="sec2_info">
        <div class="sec2_info_box flex align-center active" data-sec2="1">
            <div class="sec2_info_left">
                <div class="sec2_ileft_title">Звук</div>
                <div class="sec2_ileft_text">
                    <p>Качественное звуковое сопровождение – залог удачи любого мероприятия. Мы не просто сдаем железо в аренду - мы покажем, каким должен быть качественный звук! Наша команда предлагает оборудование топовых производителей разных стран с сертификатом качества.</p>
                </div>
                <div class="sec2_ileft_text2">
                    <p>В каталоге Вы можете выбрать интересующее Вас оборудование для аренды:</p>
                    <p><span></span> • акустические системы</p>
                    <p><span></span> • системы мониторинга</p>
                    <p><span></span> • микшерные консоли</p>
                    <p><span></span> • DJ-комплекты</p>
                </div>
                <div class="sec2_ileft_text2">
                    <p>Backline:</p>
                    <p><span></span> • микрофоны</p>
                    <p><span></span> • ударные инструменты</p>
                    <p><span></span> • музыкальные инструменты</p>
                    <p><span></span> • комбо-усиление</p>
                    <p><span></span> • стойки и аксессуары</p>
                </div>
                <div class="sec2_ileft_brend">
                    <span>Бренды:</span> Sennheiser, Shure, DPA, Audix, Neumann, Beyerdynamic, AKG, Audio-Technica, Yamaha, DW, TAMA, Pearl, Evans, Remo, Fender, Martin, MarkBass, Mesa Boogie, Ampeg, Kemper, Roland, Nord, BSS, Klark Teknik, Radial, K&M, Soundking, Klotz, Midas, DiGiCo, Avid, Allen&Heath, и многие другие
                </div>
                <div class="sec2_ileft_btn flex">
                    <a href="#showmodal" class="btn" data-toggle="modal">
                        <p>Заказать</p>
                    </a>
                </div>
            </div>
            <div class="sec2_info_right">
                @isset($contents)
                    <div class="sec2_iright_box owl-carousel" id="sec2sl1">
                        @foreach ($contents as $content)
                            @if ($content->category_name == 'Звук')
                                <div class="sec2_iright_item">
                                    @if ($content->video_url)
                                        <div class="sec2_iright_ibox" data-tip="video" data-src="/storage/{{$content->video_url}}">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="{{ asset('img/admin/sec2_2im1.jpg') }}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="/storage/{{$content->img_url}}">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="sec2_iright_ibox" data-tip="image" data-src="">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif

                        @endforeach

                    </div>
                    <div class="sec2_slide_btns flex end">
                        <div class="sec2_slide_arrow" id="to-left1">
                            <img src="{{ asset('img/next.png') }}" class="slide_prev">
                        </div>
                        <div class="sec2_slide_arrow" id="to-right1">
                            <img src="{{ asset('img/next.png') }}" class="slide_next">
                        </div>
                    </div>
                @endisset
            </div>
            <div class="mob_flex sec2_item_mobbtn">
                <a href="#showmodal" class="btn" data-toggle="modal">
                    <p>Заказать оборудование</p>
                </a>
            </div>
        </div>
        <div class="sec2_info_box flex align-center" data-sec2="2">
            <div class="sec2_info_left">
                <div class="sec2_ileft_title">Свет</div>
                <div class="sec2_ileft_text">
                    <p>Мы предоставляем в аренду световое оборудование, которое сделает любое мероприятие ярче! С нашим оборудованием вы получите шикарную радугу цветов и динамику световых лучей, которые превратят даже самый скромный праздник в эффектное шоу.</p>
                </div>
                <div class="sec2_ileft_text2">
                    <p>Наш каталог световых приборов – рай для художника по свету, здесь вы найдете все, от прожекторов до интеллектуального света:</p>
                    <p><span></span> • световые роботизированные приборы с точечным и рассеянным световым потоком</p>
                    <p><span></span> • стробоскопы</p>
                    <p><span></span> • пушки слежения</p>
                    <p><span></span> • точечные прожекторы;</p>
                    <p><span></span> • приборы архитектурной подсветки</p>
                    <p><span></span> • статичные/театральные приборы подсветки</p>
                    <p><span></span> • лазерные приборы</p>
                    <p><span></span> • стойки и аксессуары</p>
                    <p><span></span> • генераторы тяжелого дыма и генераторы тумана</p>
                </div>
                <div class="sec2_ileft_brend">
                    <span>Бренды:</span> Martin, Claypaky, DTS, LightSky, Acme
                </div>
                <div class="sec2_ileft_btn flex">
                    <a href="#showmodal" class="btn" data-toggle="modal">
                        <p>Заказать</p>
                    </a>
                </div>
            </div>
            <div class="sec2_info_right">
                <div class="sec2_iright_box owl-carousel" id="sec2sl2">
                    @isset($contents)
                        @foreach ($contents as $content)
                            @if ($content->category_name == 'Свет')
                                <div class="sec2_iright_item">
                                    @if ($content->video_url)
                                        <div class="sec2_iright_ibox" data-tip="video" data-src="/storage/{{$content->video_url}}">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="{{ asset('img/admin/sec2_2im1.jpg') }}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="/storage/{{$content->img_url}}">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="sec2_iright_ibox" data-tip="image" data-src="">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif

                        @endforeach
                        @endisset

                    </div>
                    <div class="sec2_slide_btns flex end">
                        <div class="sec2_slide_arrow" id="to-left2">
                            <img src="{{ asset('img/next.png') }}" class="slide_prev">
                        </div>
                        <div class="sec2_slide_arrow" id="to-right2">
                            <img src="{{ asset('img/next.png') }}" class="slide_next">
                        </div>
                    </div>

            </div>
            <div class="mob_flex sec2_item_mobbtn">
                <a href="#showmodal" class="btn" data-toggle="modal">
                    <p>Заказать оборудование</p>
                </a>
            </div>
        </div>
        <div class="sec2_info_box flex align-center" data-sec2="3">
            <div class="sec2_info_left">
                <div class="sec2_ileft_title">LED дисплеи</div>
                <div class="sec2_ileft_text">
                    <p>Мы предлагаем в аренду LED экраны ведущих мировых производителей, позволяющие обеспечить качественное отображение видеоконтента. Такие дисплеи одинаково хорошо подходят как для установки на крупномасштабных, деловых, спортивных и развлекательных мероприятиях, так и для креативного декорирования грандиозного шоу или концертов.</p>
                </div>
                <div class="sec2_ileft_text2">
                    <p>В нашем арсенале оборудований имеются:</p>
                    <p><span></span> • Indoor LED (для помещений)</p>
                    <p><span></span> • Outdoor LED (уличный)</p>
                    <p><span></span> • Гибкие LED экраны</p>
                </div>
                <div class="sec2_ileft_brend">
                    <span>Бренды:</span> Dicolor
                </div>
                <div class="sec2_ileft_btn flex">
                    <a href="#showmodal" class="btn" data-toggle="modal">
                        <p>Заказать</p>
                    </a>
                </div>
            </div>
            <div class="sec2_info_right">
                @isset($contents)
                    <div class="sec2_iright_box owl-carousel" id="sec2sl3">
                        @foreach ($contents as $content)
                            @if ($content->category_name == 'LED дисплеи')
                                <div class="sec2_iright_item">
                                    @if ($content->video_url)
                                        <div class="sec2_iright_ibox" data-tip="video" data-src="/storage/{{$content->video_url}}">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="sec2_iright_ibox" data-tip="image" data-src="">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif

                        @endforeach

                    </div>
                    <div class="sec2_slide_btns flex end">
                        <div class="sec2_slide_arrow" id="to-left3">
                            <img src="{{ asset('img/next.png') }}" class="slide_prev">
                        </div>
                        <div class="sec2_slide_arrow" id="to-right3">
                            <img src="{{ asset('img/next.png') }}" class="slide_next">
                        </div>
                    </div>
                @endisset
            </div>
            <div class="mob_flex sec2_item_mobbtn">
                <a href="#showmodal" class="btn" data-toggle="modal">
                    <p>Заказать оборудование</p>
                </a>
            </div>
        </div>
        <div class="sec2_info_box flex align-center" data-sec2="4">
            <div class="sec2_info_left">
                <div class="sec2_ileft_title">Сценические конструкции</div>
                <div class="sec2_ileft_text">
                    <p>Сцена – это самый важный элемент масштабного мероприятия, ведь только после ее установки и монтажа сценических конструкций можно приступать к световому, звуковому и видео оборудованию.</p>
                </div>
                <div class="sec2_ileft_text2">
                    <p>Наш профессиональный штат техников разбираются во всех тонкостях и правилах установки:</p>
                    <p><span></span> • Сцен и подиумов</p>
                    <p><span></span> • Декора и защиты</p>
                    <p><span></span> • конструкции ферм</p>
                    <p><span></span> • конструкции модульных лесов (Layher)</p>
                </div>
                <div class="sec2_ileft_btn flex">
                    <a href="#showmodal" class="btn" data-toggle="modal">
                        <p>Заказать</p>
                    </a>
                </div>
            </div>
            <div class="sec2_info_right">
                @isset($contents)
                    <div class="sec2_iright_box owl-carousel" id="sec2sl4">
                        @foreach ($contents as $content)
                            @if ($content->category_name == 'Сценические конструкции')
                                <div class="sec2_iright_item">
                                    @if ($content->video_url)
                                        <div class="sec2_iright_ibox" data-tip="video" data-src="/storage/{{$content->video_url}}">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="sec2_iright_ibox" data-tip="image" data-src="">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif

                        @endforeach

                    </div>
                    <div class="sec2_slide_btns flex end">
                        <div class="sec2_slide_arrow" id="to-left4">
                            <img src="{{ asset('img/next.png') }}" class="slide_prev">
                        </div>
                        <div class="sec2_slide_arrow" id="to-right4">
                            <img src="{{ asset('img/next.png') }}" class="slide_next">
                        </div>
                    </div>
                @endisset
            </div>
            <div class="mob_flex sec2_item_mobbtn">
                <a href="#showmodal" class="btn" data-toggle="modal">
                    <p>Заказать оборудование</p>
                </a>
            </div>
        </div>
        <div class="sec2_info_box flex align-center" data-sec2="5">
            <div class="sec2_info_left">
                <div class="sec2_ileft_title">Технический продакшн</div>
                <div class="sec2_ileft_text">
                    <p>Команда Show Cultura имеет опыт поэтапного создания мероприятий «под ключ» с вниманием к деталям, профессионализмом и любовью к своему делу.</p>
                </div>
                <div class="sec2_ileft_text2">
                    <p>Это значит, что мы можем взять на себя:</p>
                    <p><span></span> • Разработку концепции</p>
                    <p><span></span> • Дизайн сценических пространств и декора</p>
                    <p><span></span> • Визуализацию проекта в 3D</p>
                    <p><span></span> • Составление смет и подготовка необходимой документации</p>
                    <p><span></span> • Согласование райдеров</p>
                    <p><span></span> • Полный контроль за подготовкой и работой технических служб мероприятия</p>
                </div>
                <div class="sec2_ileft_btn flex">
                    <a href="#showmodal" class="btn" data-toggle="modal">
                        <p>Заказать</p>
                    </a>
                </div>
            </div>
            <div class="sec2_info_right">
                @isset($contents)
                    <div class="sec2_iright_box owl-carousel" id="sec2sl5">
                        @foreach ($contents as $content)
                            @if ($content->category_name == 'Технический продакшн')
                                <div class="sec2_iright_item">
                                    @if ($content->video_url)
                                        <div class="sec2_iright_ibox" data-tip="video" data-src="/storage/{{$content->video_url}}">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="sec2_iright_ibox" data-tip="image" data-src="">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif

                        @endforeach

                    </div>
                    <div class="sec2_slide_btns flex end">
                        <div class="sec2_slide_arrow" id="to-left5">
                            <img src="{{ asset('img/next.png') }}" class="slide_prev">
                        </div>
                        <div class="sec2_slide_arrow" id="to-right5">
                            <img src="{{ asset('img/next.png') }}" class="slide_next">
                        </div>
                    </div>
                @endisset
            </div>
            <div class="mob_flex sec2_item_mobbtn">
                <a href="#showmodal" class="btn" data-toggle="modal">
                    <p>Заказать оборудование</p>
                </a>
            </div>
        </div>
        <div class="sec2_info_box flex align-center" data-sec2="6">
            <div class="sec2_info_left">
                <div class="sec2_ileft_title">Технические специалисты</div>
                <div class="sec2_ileft_text">
                    <p>Наша команда состоит из настоящих фанатов своего дела, среди которых имеются системные инженеры, звукорежиссеры, художники по свету, видеоинженеры и техники:</p>
                </div>
                <div class="sec2_ileft_text2">
                    <p><span></span> • Системный инженер: рассчитывает и интегрирует акустическую систему</p>
                    <p><span></span> • Звукорежиссер: ответственный за сведение источников и передачу их публике</p>
                    <p><span></span> • Художник по свету: обеспечивает площадку качественным световым оформлением, создает эффект шоу</p>
                    <p><span></span> • Видеоинженер: просчитывает комплектацию и разрешение дисплеев, обеспечивает красивую подачу контента на экраны</p>
                    <p><span></span> • Технические специалисты: помощники инженеров в монтаже и курировании работы оборудования</p>
                </div>
                <div class="sec2_ileft_btn flex">
                    <a href="#showmodal" class="btn" data-toggle="modal">
                        <p>Заказать</p>
                    </a>
                </div>
            </div>
            <div class="sec2_info_right">
                @isset($contents)
                    <div class="sec2_iright_box owl-carousel" id="sec2sl6">
                        @foreach ($contents as $content)
                            @if ($content->category_name == 'Технические специалисты')
                                <div class="sec2_iright_item">
                                    @if ($content->video_url)
                                        <div class="sec2_iright_ibox" data-tip="video" data-src="/storage/{{$content->video_url}}">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="sec2_iright_ibox" data-tip="image" data-src="">
                                            <video src width="100%" height="100%" controls></video>
                                            <div class="sec2_item_pl">
                                                <img src="/storage/{{$content->img_url}}" class="sec2_item_img">
                                                <div class="sec2_video_icon flex center align-center">
                                                    <img src="{{ asset('img/video_icon.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif

                        @endforeach

                    </div>
                    <div class="sec2_slide_btns flex end">
                        <div class="sec2_slide_arrow" id="to-left6">
                            <img src="{{ asset('img/next.png') }}" class="slide_prev">
                        </div>
                        <div class="sec2_slide_arrow" id="to-right6">
                            <img src="{{ asset('img/next.png') }}" class="slide_next">
                        </div>
                    </div>
                @endisset
            </div>
            <div class="mob_flex sec2_item_mobbtn">
                <a href="#showmodal" class="btn" data-toggle="modal">
                    <p>Заказать оборудование</p>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="sec3">
    <div class="sec3_title">
        Ответьте на 5 вопросов и получите 10% скидку
    </div>
    <div class="sec3_title2">
        на все услуги от нашей компании!
    </div>
    <div class="sec3_container">
        <form>
            <div class="sec3_quiz active">
                <div class="sec3_quiz_circle1"></div>
                <div class="sec3_quiz_circle2"></div>
                <div class="sec3_quiz_item active" data-id="1">
                    <div class="sec3_quiz_img">
                        <img src="{{ asset('img/sec3_quiz_i1.png') }}">
                    </div>
                    <div class="sec3_quiz_title1">
                        Вопрос 01
                    </div>
                    <div class="sec3_quiz_title2">
                        Укажите тип площадки, куда необходимо подобрать оборудование:
                    </div>
                    <div class="sec3_quiz_main flex wrap">
                        <div class="sec3_q1">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz1" value="Театр">
                                <span class="sec3_quiz_check"></span>
                                <p>Театр</p>
                            </label>
                        </div>
                        <div class="sec3_q1">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz1" value="Учебное заведение">
                                <span class="sec3_quiz_check"></span>
                                <p>Учебное заведение</p>
                            </label>
                        </div>
                        <div class="sec3_q1">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz1" value="Спортивный объект">
                                <span class="sec3_quiz_check"></span>
                                <p>Спортивный объект</p>
                            </label>
                        </div>
                        <div class="sec3_q1">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz1" value="Банкетный зал">
                                <span class="sec3_quiz_check"></span>
                                <p>Банкетный зал</p>
                            </label>
                        </div>
                        <div class="sec3_q1">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz1" value="Ночной клуб">
                                <span class="sec3_quiz_check"></span>
                                <p>Ночной клуб</p>
                            </label>
                        </div>
                        <div class="sec3_q1">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz1" value="Концертный зал">
                                <span class="sec3_quiz_check"></span>
                                <p>Концертный зал</p>
                            </label>
                        </div>
                        <div class="sec3_q1">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz1" value="Развлекательный центр">
                                <span class="sec3_quiz_check"></span>
                                <p>Развлекательный центр</p>
                            </label>
                        </div>
                        <div class="sec3_q1">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz1" value="Бар/Ресторан">
                                <span class="sec3_quiz_check"></span>
                                <p>Бар/Ресторан</p>
                            </label>
                        </div>
                    </div>
                    <div class="sec3_quiz_btnbox flex center">
                        <div class="btn2 btn2_q1">
                            <div class="btn2_box flex align-center">
                                <div class="btn2_text">Следующий вопрос</div>
                                <img src="{{ asset('img/btn2_next.png') }}" class="btn2_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec3_quiz_item" data-id="2">
                    <div class="sec3_quiz_img">
                        <img src="{{ asset('img/sec3_quiz_i2.png') }}">
                    </div>
                    <div class="sec3_quiz_title1">
                        Вопрос 02
                    </div>
                    <div class="sec3_quiz_title2">
                        Укажите примерный размер сцены:
                    </div>
                    <div class="sec3_quiz_main flex wrap">
                        <div class="sec3_q2">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz2" value="Ширина, м (между кулис)">
                                <span class="sec3_quiz_check"></span>
                                <p>Ширина, м (между кулис)</p>
                            </label>
                        </div>
                        <div class="sec3_q2">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz2" value="Высота подвеса приборов, м">
                                <span class="sec3_quiz_check"></span>
                                <p>Высота подвеса приборов, м</p>
                            </label>
                        </div>
                        <div class="sec3_q2">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz2" value="Глубина (от края сцены до задника)">
                                <span class="sec3_quiz_check"></span>
                                <p>Глубина (от края сцены до задника)</p>
                            </label>
                        </div>
                        <div class="sec3_q2">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz2" value="Глубина авансцены, м (если есть)">
                                <span class="sec3_quiz_check"></span>
                                <p>Глубина авансцены, м (если есть)</p>
                            </label>
                        </div>
                    </div>
                    <div class="sec3_quiz_btnbox flex center">
                        <div class="btn2 btn2_q2">
                            <div class="btn2_box flex align-center">
                                <div class="btn2_text">Следующий вопрос</div>
                                <img src="{{ asset('img/btn2_next.png') }}" class="btn2_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec3_quiz_item" data-id="3">
                    <div class="sec3_quiz_img">
                        <img src="{{ asset('img/sec3_quiz_i3.png') }}">
                    </div>
                    <div class="sec3_quiz_title1">
                        Вопрос 03
                    </div>
                    <div class="sec3_quiz_title2">
                        На какой срок вам необходима аренда оборудования?
                    </div>
                    <div class="sec3_quiz_main flex wrap">
                        <div class="sec3_q3">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz3" value="На один день">
                                <span class="sec3_quiz_check"></span>
                                <p>На один день</p>
                            </label>
                        </div>
                        <div class="sec3_q3">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz3" value="На неделю">
                                <span class="sec3_quiz_check"></span>
                                <p>На неделю</p>
                            </label>
                        </div>
                        <div class="sec3_q3">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz3" value="На 2-3 дня">
                                <span class="sec3_quiz_check"></span>
                                <p>На 2-3 дня</p>
                            </label>
                        </div>
                        <div class="sec3_q3">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz3" value="Свой ответ:">
                                <span class="sec3_quiz_check"></span>
                                <p>Свой ответ:</p>
                            </label>
                            <div class="sec3_q3_answer">
                                <input type="text" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="sec3_quiz_btnbox flex center">
                        <div class="btn2 btn2_q3">
                            <div class="btn2_box flex align-center">
                                <div class="btn2_text">Следующий вопрос</div>
                                <img src="{{ asset('img/btn2_next.png') }}" class="btn2_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec3_quiz_item" data-id="4">
                    <div class="sec3_quiz_img">
                        <img src="{{ asset('img/sec3_quiz_i4.png') }}">
                    </div>
                    <div class="sec3_quiz_title1">
                        Вопрос 04
                    </div>
                    <div class="sec3_quiz_title2">
                        Имеется ли уже какое-нибудь оборудование на Вашей сцене?
                    </div>
                    <div class="sec3_quiz_main flex wrap">
                        <div class="sec3_q4">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz4" value="Ничего нет, нужен полный комплект.">
                                <span class="sec3_quiz_check"></span>
                                <p>Ничего нет, нужен полный комплект.</p>
                            </label>
                        </div>
                        <div class="sec3_q4">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz4" value="Оборудование имеется, необходимо добавить новые приборы.">
                                <span class="sec3_quiz_check"></span>
                                <p>Оборудование имеется, необходимо добавить новые приборы.</p>
                            </label>
                        </div>
                        <div class="sec3_q4">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz4" value="Оборудование имеется, но требуется полная замена на новое.">
                                <span class="sec3_quiz_check"></span>
                                <p>Оборудование имеется, но требуется полная замена на новое.</p>
                            </label>
                        </div>
                    </div>
                    <div class="sec3_quiz_btnbox flex center">
                        <div class="btn2 btn2_q4">
                            <div class="btn2_box flex align-center">
                                <div class="btn2_text">Следующий вопрос</div>
                                <img src="{{ asset('img/btn2_next.png') }}" class="btn2_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec3_quiz_item" data-id="5">
                    <div class="sec3_quiz_img">
                        <img src="{{ asset('img/sec3_quiz_i5.png') }}">
                    </div>
                    <div class="sec3_quiz_title1">
                        Вопрос 05
                    </div>
                    <div class="sec3_quiz_title2">
                        Когда планируете приобретение оборудования?
                    </div>
                    <div class="sec3_quiz_main flex wrap">
                        <div class="sec3_q5">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz5" value="Уже сейчас">
                                <span class="sec3_quiz_check"></span>
                                <p>Уже сейчас</p>
                            </label>
                        </div>
                        <div class="sec3_q5">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz5" value="В течение месяца">
                                <span class="sec3_quiz_check"></span>
                                <p>В течение месяца</p>
                            </label>
                        </div>
                        <div class="sec3_q5">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz5" value="В течение 6 месяцев">
                                <span class="sec3_quiz_check"></span>
                                <p>В течение 6 месяцев</p>
                            </label>
                        </div>
                        <div class="sec3_q5">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz5" value="Сроки закупки пока неизвестны">
                                <span class="sec3_quiz_check"></span>
                                <p>Сроки закупки пока неизвестны</p>
                            </label>
                        </div>
                        <div class="sec3_q5">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz5" value="В ближайшие дни">
                                <span class="sec3_quiz_check"></span>
                                <p>В ближайшие дни</p>
                            </label>
                        </div>
                        <div class="sec3_q5">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz5" value="Через 1-2 месяца">
                                <span class="sec3_quiz_check"></span>
                                <p>Через 1-2 месяца</p>
                            </label>
                        </div>
                        <div class="sec3_q5">
                            <label class="sec3_quiz_label">
                                <input type="radio" name="quiz5" value="В течение года">
                                <span class="sec3_quiz_check"></span>
                                <p>В течение года</p>
                            </label>
                        </div>
                        <div class="sec3_q5"></div>
                    </div>
                    <div class="sec3_quiz_btnbox flex center">
                        <div class="btn btn_q5">
                            <p>Завершить</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec3_data">
                <div class="sec3_data_title1">
                    Спасибо за Ваши ответы!
                </div>
                <div class="sec3_data_title2">
                    Мы подберем комплект оборудования, учитывая указанные параметры, рассчитаем стоимость и расскажем Вам о результатах в течении 24 часов. Пожалуйста, заполните форму ниже:
                </div>
                <div class="sec3_data_info flex">
                    <div class="sec3_form_group">
                        <input name="name" class="not_empty" type="text" placeholder="Имя:">
                    </div>
                    <div class="sec3_form_group">
                        <input name="phone" class="not_empty phone" type="text" placeholder="Телефон:">
                    </div>
                    <div class="sec3_form_group">
                        <input name="phone" class="not_empty" type="text" placeholder="E-mail:">
                    </div>
                </div>
                <div class="sec3_data_btn flex center">
                    <button type="submit" class="btn submit">
                        <p>Отправить</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
<section id="sec4">
    <div class="sec4_title">Мы–Show Cultura!</div>
    <div class="sec4_info">
        <div class="sec4_volna mob_none">
            <img src="{{ asset('img/sec4_volna.png') }}">
        </div>
        <div class="sec4_item_line sec4_l1">
            <div class="sec4_item_top">
                <div class="mob_block sec4_mobpuls1">
                    <div class="sec4_mobinpuls"></div>
                </div>
                <div class="sec4_item_title">24/7</div>
                <div class="sec4_item_text">
                    мы доступны для сотрудничества с Вами
                </div>
            </div>
            <div class="sec4_item_bottom">
                <div class="mob_block sec4_mobpuls2"></div>
                <div class="sec4_item_title">300</div>
                <div class="sec4_item_text">
                    голов света Martin, DTS, Claypaky и другие
                </div>
            </div>
            <div class="sec4_pulse1"></div>
        </div>
        <div class="sec4_item_line sec4_l2">
            <div class="sec4_item_top">
                <div class="mob_block sec4_mobpuls2"></div>
                <div class="sec4_item_title">2014</div>
                <div class="sec4_item_text">
                    год основания нашей команды
                </div>
            </div>
            <div class="sec4_item_bottom">
                <div class="mob_block sec4_mobpuls1">
                    <div class="sec4_mobinpuls"></div>
                </div>
                <div class="sec4_item_title">Более 500</div>
                <div class="sec4_item_text">
                    квадратных метров LED дисплеев разных разрешений
                </div>
            </div>
            <div class="sec4_pulse2">
                <div class="sec4_inpulse2"></div>
            </div>
        </div>
        <div class="sec4_item_line sec4_l3">
            <div class="sec4_item_top">
                <div class="mob_block sec4_mobpuls1">
                    <div class="sec4_mobinpuls"></div>
                </div>
                <div class="sec4_item_title">Более 300</div>
                <div class="sec4_item_text">
                    мероприятий мы обеспечили техническим оборудованием
                </div>
            </div>
            <div class="sec4_item_bottom">
                <div class="mob_block sec4_mobpuls2"></div>
                <div class="sec4_item_title">Более 500</div>
                <div class="sec4_item_text">
                    сценических станков и километр фермовых конструкций
                </div>
            </div>
            <div class="sec4_pulse1"></div>
        </div>
        <div class="sec4_item_line sec4_l4">
            <div class="sec4_item_top">
                <div class="mob_block sec4_mobpuls2"></div>
                <div class="sec4_item_title">Более 20</div>
                <div class="sec4_item_text">
                    дипломированных специалистов команды Show Cultura
                </div>
            </div>
            <div class="sec4_item_bottom">
                <div class="mob_block sec4_mobpuls1">
                    <div class="sec4_mobinpuls"></div>
                </div>
                <div class="sec4_item_title">3</div>
                <div class="sec4_item_text">
                    страны, в которых мы предоставляли свои услуги для мероприятий
                </div>
            </div>
            <div class="sec4_pulse2">
                <div class="sec4_inpulse2"></div>
            </div>
        </div>
        <div class="sec4_item_line sec4_l5">
            <div class="sec4_item_top">
                <div class="mob_block sec4_mobpuls1">
                    <div class="sec4_mobinpuls"></div>
                </div>
                <div class="sec4_item_title">Более<br> 200 кВт</div>
                <div class="sec4_item_text">
                    лучшего звука от L-acoustics и JBL
                </div>
            </div>
            <div class="sec4_item_bottom">
                <div class="mob_block sec4_mobpuls2"></div>
                <div class="sec4_item_title">Более 20000</div>
                <div class="sec4_item_text">
                    человек диапазон масштаба мероприятий
                </div>
            </div>
            <div class="sec4_pulse1"></div>
        </div>
    </div>
    <div class="sec4_btn_box flex center">
        <a href="/docs/sertificate.pdf" class="btn" target="_blank">
            <p>Лицензии и сертификаты</p>
        </a>
    </div>
</section>
<section id="sec5">
    <div class="sec5_title">Карточки успешных проектов</div>
    <div class="sec5_info owl-carousel" id="sec5slide">
        <div class="sec5_info_item" data-id="1">
            <div class="sec5_item_pl"></div>
            <div class="sec5_item_imgs">
                <img src="{{ asset('img/admin/sec5_im1.jpg') }}" class="sec5_item_im">
            </div>
            <div class="sec5_item_name">Нур-Султан</div>
            <div class="sec5_item_num">20</div>
        </div>
        <div class="sec5_info_item" data-id="2">
            <div class="sec5_item_pl"></div>
            <div class="sec5_item_imgs">
                <img src="{{ asset('img/admin/sec5_im2.jpg') }}" class="sec5_item_im">
            </div>
            <div class="sec5_item_name">Алматы</div>
            <div class="sec5_item_num">200</div>
        </div>
        <div class="sec5_info_item" data-id="3">
            <div class="sec5_item_pl"></div>
            <div class="sec5_item_imgs">
                <img src="{{ asset('img/admin/sec5_im3.jpg') }}" class="sec5_item_im">
            </div>
            <div class="sec5_item_name">Бишкек</div>
            <div class="sec5_item_num">4</div>
        </div>
        <div class="sec5_info_item" data-id="4">
            <div class="sec5_item_pl"></div>
            <div class="sec5_item_imgs">
                <img src="{{ asset('img/admin/sec5_im4.jpg') }}" class="sec5_item_im">
            </div>
            <div class="sec5_item_name">Шымкент</div>
            <div class="sec5_item_num">5</div>
        </div>
    </div>
    <div class="sec5_info_btns flex end">
        <div class="sec2_slide_arrow" id="to-left7">
            <img src="{{ asset('img/next.png') }}" class="slide_prev">
        </div>
        <div class="sec2_slide_arrow" id="to-right7">
            <img src="{{ asset('img/next.png') }}" class="slide_next">
        </div>
    </div>
    <div class="sec5_info_box">
        <div class="sec5_none_item" data-id="1">
            <a href="{{ asset('img/admin/sec5_1im1.jpg') }}" class="sec5_item_imurl" rel="1" data-fancybox="gallery"></a>
        </div>
        <div class="sec5_none_item" data-id="2">
            <a href="{{ asset('img/admin/sec5_2im1.jpg') }}" class="sec5_item_imurl" rel="2" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_2im2.jpg') }}" rel="2" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_2im3.jpg') }}" rel="2" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_2im4.jpg') }}" rel="2" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_2im5.jpg') }}" rel="2" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_2im6.jpg') }}" rel="2" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_2im7.jpg') }}" rel="2" data-fancybox="gallery"></a>
        </div>
        <div class="sec5_none_item" data-id="3">
            <a href="{{ asset('img/admin/sec5_3im1.jpg') }}" class="sec5_item_imurl" rel="3" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_3im2.jpg') }}" rel="3" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_3im3.jpg') }}" rel="3" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_3im4.jpg') }}" rel="3" data-fancybox="gallery"></a>
        </div>
        <div class="sec5_none_item" data-id="4">
            <a href="{{ asset('img/admin/sec5_4im1.jpg') }}" class="sec5_item_imurl" rel="4" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_4im2.jpg') }}" rel="4" data-fancybox="gallery"></a>
            <a href="{{ asset('img/admin/sec5_4im3.jpg') }}" rel="4" data-fancybox="gallery"></a>
        </div>
    </div>
</section>
<section id="sec6">
    <div class="sec6_ritm">
        <img src="{{ asset('img/sec6_ritm.png') }}">
    </div>
    <div class="sec6_title1">Успешные мероприятия</div>
    <div class="sec6_title2">с Show Cultura</div>
    <div class="sec6_main_btns flex center">
        <div class="sec6_main_btn active" data-id="1">100 концертов</div>
        <div class="sec6_main_btn" data-id="2">40 конференции</div>
        <div class="sec6_main_btn" data-id="3">150 частных мероприятий</div>
    </div>
    <div class="sec6_info">
        <div class="sec6_info_box active" data-id="1">
            <div class="sec6_info_left">
                @isset($events)
                    @foreach ($events as $event)
                        @if ($event->category_name == 'Концерт')
                            <div class="sec6_left_img active" data-im="{{$event->id}}">
                                <img src="/storage/{{$event->img_url}}">
                            </div>
                        @endif

                    @endforeach
                @endisset
            </div>
            <div class="sec6_info_right">
                <div class="sec6_info_slider owl-carousel" id="sec6sl1">
                    @isset($events)

                        @foreach ($events as $event)
                            @if ($event->category_name == 'Концерт')
                                <div class="sec6_info_item" data-im="{{$event->id}}">
                                    <div class="sec6_item_top">
                                        <div class="sec6_item_title">Название:</div>
                                        <div class="sec6_item_text1">
                                            <span>Концерт</span>&nbsp{{$event->title}}
                                        </div>
                                        <div class="sec6_item_title">Дата и локация:</div>
                                        <div class="sec6_item_text2">
                                            {{$event->date}}, {{$event->location}}
                                        </div>
                                        <div class="sec6_item_title">Оборудование:</div>
                                        <div class="sec6_item_text2">
                                            {{$event->equipment}}
                                        </div>
                                        <a href="{{$event->url}}" target="_blank" class="sec6_item_href">Ссылка мероприятия</a>
                                    </div>
                                    <div class="sec6_item_btn flex start">
                                        <a href="#showmodal" class="btn" data-toggle="modal">
                                            <p>Заказать похожее</p>
                                        </a>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endisset
                </div>
                <div class="sec6_slider_btns flex end">
                    <div class="sec2_slide_arrow" id="to-left8">
                        <img src="{{ asset('img/next.png') }}" class="slide_prev">
                    </div>
                    <div class="sec2_slide_arrow" id="to-right8">
                        <img src="{{ asset('img/next.png') }}" class="slide_next">
                    </div>
                </div>
            </div>
        </div>
        <div class="sec6_info_box" data-id="2">
            <div class="sec6_info_left">
                @isset($events)
                    @foreach ($events as $event)
                        @if ($event->category_name == 'Конференция')
                            <div class="sec6_left_img active" data-im="{{$event->id}}">
                                <img src="/storage/{{$event->img_url}}">
                            </div>
                        @endif

                    @endforeach
                @endisset
            </div>
            <div class="sec6_info_right">
                <div class="sec6_info_slider owl-carousel" id="sec6sl2">
                    @isset($events)
                        @foreach ($events as $event)
                            @if ($event->category_name == 'Конференция')
                                <div class="sec6_info_item" data-im="{{$event->id}}">
                                    <div class="sec6_item_top">
                                        <div class="sec6_item_title">Название:</div>
                                        <div class="sec6_item_text1">
                                            <span>Концерт</span>&nbsp{{$event->title}}
                                        </div>
                                        <div class="sec6_item_title">Дата и локация:</div>
                                        <div class="sec6_item_text2">
                                            {{$event->date}}, {{$event->location}}
                                        </div>
                                        <div class="sec6_item_title">Оборудование:</div>
                                        <div class="sec6_item_text2">
                                            {{$event->equipment}}
                                        </div>
                                        <a href="{{$event->url}}" target="_blank" class="sec6_item_href">Ссылка мероприятия</a>
                                    </div>
                                    <div class="sec6_item_btn flex start">
                                        <a href="#showmodal" class="btn" data-toggle="modal">
                                            <p>Заказать похожее</p>
                                        </a>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endisset
                </div>
                <div class="sec6_slider_btns flex end">
                    <div class="sec2_slide_arrow" id="to-left9">
                        <img src="{{ asset('img/next.png') }}" class="slide_prev">
                    </div>
                    <div class="sec2_slide_arrow" id="to-right9">
                        <img src="{{ asset('img/next.png') }}" class="slide_next">
                    </div>
                </div>
            </div>
        </div>
        <div class="sec6_info_box" data-id="3">
            <div class="sec6_info_left">
                @isset($events)
                    @foreach ($events as $event)
                        @if ($event->category_name == 'Частное мероприятие')
                            <div class="sec6_left_img active" data-im="{{$event->id}}">
                                <img src="/storage/{{$event->img_url}}">
                            </div>
                        @endif

                    @endforeach
                @endisset
            </div>
            <div class="sec6_info_right">
                <div class="sec6_info_slider owl-carousel" id="sec6sl3">
                    @isset($events)

                        @foreach ($events as $event)
                            @if ($event->category_name == 'Частное мероприятие')
                                <div class="sec6_info_item" data-im="{{$event->id}}">
                                    <div class="sec6_item_top">
                                        <div class="sec6_item_title">Название:</div>
                                        <div class="sec6_item_text1">
                                            <span>Концерт</span>&nbsp{{$event->title}}
                                        </div>
                                        <div class="sec6_item_title">Дата и локация:</div>
                                        <div class="sec6_item_text2">
                                            {{$event->date}}, {{$event->location}}
                                        </div>
                                        <div class="sec6_item_title">Оборудование:</div>
                                        <div class="sec6_item_text2">
                                            {{$event->equipment}}
                                        </div>
                                        <a href="{{$event->url}}" target="_blank" class="sec6_item_href">Ссылка мероприятия</a>
                                    </div>
                                    <div class="sec6_item_btn flex start">
                                        <a href="#showmodal" class="btn" data-toggle="modal">
                                            <p>Заказать похожее</p>
                                        </a>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endisset
                </div>
                <div class="sec6_slider_btns flex end">
                    <div class="sec2_slide_arrow" id="to-left10">
                        <img src="{{ asset('img/next.png') }}" class="slide_prev">
                    </div>
                    <div class="sec2_slide_arrow" id="to-right10">
                        <img src="{{ asset('img/next.png') }}" class="slide_next">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sec7">
    <div class="sec7_box flex">
        <div class="sec7_box_left">
            <div class="sec7_left_title">
                Как мы работаем?
            </div>
            <div class="sec7_left_info flex">
                <div class="sec7_left_item active">
                    <img src="{{ asset('img/sec7_left_pl.png') }}" class="sec7_left_pl">
                    <div class="sec7_litem_num">01</div>
                    <div class="sec7_litem_title">Начальный этап:</div>
                    <div class="sec7_litem_text">заявка, предоставление менеджера, просчет сметы, подписание договора</div>
                </div>
                <div class="sec7_left_item active">
                    <img src="{{ asset('img/sec7_left_pl.png') }}" class="sec7_left_pl">
                    <div class="sec7_litem_num">02</div>
                    <div class="sec7_litem_title">Реализация проекта:</div>
                    <div class="sec7_litem_text">подготовка оборудования, монтаж, проверка оборудования</div>
                </div>
                <div class="sec7_left_item active">
                    <img src="{{ asset('img/sec7_left_pl.png') }}" class="sec7_left_pl">
                    <div class="sec7_litem_num">03</div>
                    <div class="sec7_litem_title">Заключительный этап:</div>
                    <div class="sec7_litem_text">контроль в проведении мероприятия, демонтаж </div>
                </div>
            </div>
        </div>
        <div class="sec7_box_right">
            <div class="sec7_right_title">
                Команда Show Cultura поможет на всех этапах
            </div>
            <div class="sec7_right_info owl-carousel" id="sec7slider">
                <div class="sec7_right_item flex">
                    <div class="sec7_ritem_img">
                        <img src="{{ asset('img/admin/sec7_im3.jpg') }}">
                    </div>
                    <div class="sec7_ritem_info">
                        <div class="sec7_ritem_top">
                            <div class="sec7_ritem_text1">
                                Стаж: 17 лет
                            </div>
                            <div class="sec7_ritem_text2">
                                Рустам Мукатаев
                            </div>
                            <div class="sec7_ritem_text3">
                                Директор
                            </div>
                            <div class="sec7_ritem_text1">
                                Специализация:
                            </div>
                            <div class="sec7_ritem_text3">
                                Технический продакшн
                            </div>
                        </div>
                        <div class="sec7_ritem_bottom">
                            <a href="#showmodal" class="sec7_btn flex align-center" data-toggle="modal">
                                <div class="sec7_btn_text">Начать сотрудничество</div>
                                <img src="{{ asset('img/sec7_next.png') }}" class="sec7_btn_img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sec7_right_item flex">
                    <div class="sec7_ritem_img">
                        <img src="{{ asset('img/admin/sec7_im1.jpg') }}">
                    </div>
                    <div class="sec7_ritem_info">
                        <div class="sec7_ritem_top">
                            <div class="sec7_ritem_text1">
                                Стаж: 12 лет
                            </div>
                            <div class="sec7_ritem_text2">
                                Рустам Саинов
                            </div>
                            <div class="sec7_ritem_text3">
                                Проектный менеджер
                            </div>
                            <div class="sec7_ritem_text1">
                                Специализация:
                            </div>
                            <div class="sec7_ritem_text3">
                                Звуковое, световое, видео-оборудование
                            </div>
                        </div>
                        <div class="sec7_ritem_bottom">
                            <a href="#showmodal" class="sec7_btn flex align-center" data-toggle="modal">
                                <div class="sec7_btn_text">Начать сотрудничество</div>
                                <img src="{{ asset('img/sec7_next.png') }}" class="sec7_btn_img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sec7_right_item flex">
                    <div class="sec7_ritem_img">
                        <img src="{{ asset('img/admin/sec7_im2.jpg') }}">
                    </div>
                    <div class="sec7_ritem_info">
                        <div class="sec7_ritem_top">
                            <div class="sec7_ritem_text1">
                                Стаж: 10 лет
                            </div>
                            <div class="sec7_ritem_text2">
                                Станислав Плисс
                            </div>
                            <div class="sec7_ritem_text3">
                                Системный инженер
                            </div>
                            <div class="sec7_ritem_text1">
                                Специализация:
                            </div>
                            <div class="sec7_ritem_text3">
                                Сценические конструкции
                            </div>
                        </div>
                        <div class="sec7_ritem_bottom">
                            <a href="#showmodal" class="sec7_btn flex align-center" data-toggle="modal">
                                <div class="sec7_btn_text">Начать сотрудничество</div>
                                <img src="{{ asset('img/sec7_next.png') }}" class="sec7_btn_img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec7_slide_btns flex end">
                <div class="sec2_slide_arrow" id="to-left11">
                    <img src="{{ asset('img/next.png') }}" class="slide_prev">
                </div>
                <div class="sec2_slide_arrow" id="to-right11">
                    <img src="{{ asset('img/next.png') }}" class="slide_next">
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="flex align-end">
    <a href="{{ route('index') }}" class="foot_logo">
        <img src="{{ asset('img/foot-logo.png') }}">
    </a>
    <div class="foot_info flex align-end">
        <div class="foot_info_left flex align-center">
            <a href="https://go.2gis.com/m84ud" target="_blank" class="foot_left_item">
                <div class="foot_litem_img foot_img_sm">
                    <img src="{{ asset('img/foot_geo.png') }}">
                </div>
                <div class="foot_litem_text">
                    <p>г. Алматы, БЦ "Навои", Жандосова 98, оф. 708</p>
                </div>
            </a>
            <div class="foot_left_item">
                <div class="foot_litem_img">
                    <img src="{{ asset('img/foot_tell.png') }}">
                </div>
                <div class="foot_litem_tellbox">
                    <a href="tel:+77779656415" target="_blank" class="foot_litem_tell">+7 (777) 965 64 15</a>
                    <a href="tel:+77750051600" target="_blank" class="foot_litem_tell">+7 (775) 005 16 00</a>
                </div>
            </div>
        </div>
        <div class="foot_info_right flex align-center">
            <a href="https://maint.kz/" target="_blank" class="foot_maint">
                <img src="{{ asset('img/maint_icon.png') }}">
            </a>
            <div class="foot_soc flex">
                <a href="https://t.me/ShowCultura/" target="_blank" class="foot_soc_item">
                    <img src="{{ asset('img/head_i3.png') }}">
                </a>
                <a href="https://www.instagram.com/show_cultura/" target="_blank" class="foot_soc_item">
                    <img src="{{ asset('img/head_i2.png') }}">
                </a>
                <a href="https://www.facebook.com/ShowCulturaRental/" target="_blank" class="foot_soc_item">
                    <img src="{{ asset('img/head_i1.png') }}">
                </a>
            </div>
        </div>
    </div>
</footer>
<div class="mob_flex sec2_mobfoot">
    <a href="#sec2" class="sec2_left_info" data-sec2="1">
        <img src="{{ asset('img/sec2_i1.png') }}" class="sec2_left_img">
        <div class="sec2_left_text">Звук</div>
    </a>
    <a href="#sec2" class="sec2_left_info" data-sec2="2">
        <img src="{{ asset('img/sec2_i2.png') }}" class="sec2_left_img">
        <div class="sec2_left_text">Свет</div>
    </a>
    <a href="#sec2" class="sec2_left_info" data-sec2="3">
        <img src="{{ asset('img/sec2_i3.png') }}" class="sec2_left_img">
        <div class="sec2_left_text">LED дисплеи</div>
    </a>
    <a href="#sec2" class="sec2_left_info" data-sec2="4">
        <img src="{{ asset('img/sec2_i4.png') }}" class="sec2_left_img">
        <div class="sec2_left_text">Сценические конструкции</div>
    </a>
    <a href="#sec2" class="sec2_left_info" data-sec2="5">
        <img src="{{ asset('img/sec2_i5.png') }}" class="sec2_left_img">
        <div class="sec2_left_text">Технический продакшн</div>
    </a>
    <a href="#sec2" class="sec2_left_info" data-sec2="6">
        <img src="{{ asset('img/sec2_i6.png') }}" class="sec2_left_img">
        <div class="sec2_left_text">Технические специалисты</div>
    </a>
</div>
<script src="{{ asset('js/all_js.js') }}"></script>
<script src="{{ asset('js/all_st_js.js') }}"></script>
<script src="{{ asset('js/code.js') }}"></script>
</body>
</html>
<div class="modal animated zoomIn" id="showmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal_line">
                    <img src="{{ asset('img/modal_line.png') }}">
                </div>
                <form action="{{ route('send')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form_group">
                        <input name="name" class="not_empty" type="text" placeholder="Имя">
                    </div>
                    <div class="form_group">
                        <input name="phone" class="not_empty phone" type="text" placeholder="Телефон">
                    </div>
                    <div class="modal_btn flex center">
                        <button type="submit" class="btn submit">
                            <p>Отправить</p>
                        </button>
                    </div>
                </form>
                <button type="button" class="modal_close" data-dismiss="modal">
                    <img src="{{ asset('img/modal_close.png') }}">
                </button>
            </div>
        </div>
    </div>
</div>
