@extends('layouts.app')

@section('meta')
    <title>IDM WS</title>
@endsection

@section('content')
    <section id="intro">

        <div class="container">
            <div class="row">
                <div class="span6">
                    <h2><strong>IDM VS </strong><br><span style="color: #09828c;">управление правами доступа</span></h2>
                    <p class="lead">
                        IDM VS позволяет автоматизировать процесс управления матрицей доступов к информационным системам
                        организации, так и отдельных подразделений, узлов и приложений. Автоматизация согласования новых
                        доступов (requests), аудита текущего состояния (audit) и контроля согласованных запросов
                        (archive) в сочетании с интеграцией AD позволяют IDM VS обеспечивать непрерывный аудит
                        безопасности прав доступов к информационным системам организации.
                    </p>
                    <ul class="list list-ok strong bigger">
                        <li>Позволяет видеть матрицу доступов действующих сотрудников</li>
                        <li>Оперативно отозвать доступы уволенных сотрудников</li>
                        <li>Предоставлять доступы новым сотрудникам, согласно ролевой модели</li>
                    </ul>

                </div>
                <div class="span6">

                    <div class="group section-wrap upper" id="upper">
                        <div class="section-2 group">
                            <ul id="images" class="rs-slider">
                                <li class="group">
                                    <a href="#">
                                        <img src="assets/img/slides/refine/slide1.png" alt=""/>
                                    </a>
                                </li>
                                <li class="group">
                                    <a href="#" class="slide-parent">
                                        <img src="assets/img/slides/refine/slide2.png" alt=""/>
                                    </a>
                                </li>
                                <li class="group">
                                    <img src="assets/img/slides/refine/slide3.png" alt=""/>
                                </li>
                            </ul>
                        </div>
                        <!-- /.section-2 -->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="features">
                        <div class="icon">
                            <i class="icon-bg-dark icon-circled icon-code icon-5x"></i>
                        </div>
                        <div class="features_content">
                            <h3>Надежность</h3>
                            <p class="left">
                                IDM VS использует методы безопасной разработки и тестирования ПО
                            </p>
                            <a href="/product" class="btn btn-color btn-rounded"><i class="icon-angle-right"></i> Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="features">
                        <div class="icon">
                            <i class="icon-bg-dark icon-circled icon-bug icon-5x"></i>
                        </div>
                        <div class="features_content">
                            <h3>Доступность</h3>
                            <p class="left">
                                IDM VS является одним из самых доступных решений на рынке.
                            </p>
                            <a href="/partner" class="btn btn-color btn-rounded"><i class="icon-angle-right"></i> Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="features">
                        <div class="icon">
                            <i class="icon-bg-dark icon-circled icon-android icon-5x"></i>
                        </div>
                        <div class="features_content">
                            <h3>Техническая поддержка</h3>
                            <p class="left">
                                Техническая поддержка SLA с стандартами.
                            </p>
                            <a href="/support" class="btn btn-color btn-rounded"><i class="icon-angle-right"></i> Подробнее</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- blank divider -->
            <div class="row">
                <div class="span12">
                    <div class="blank10"></div>
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <div class="cta-box">
                        <div class="cta-text">
                            <h2>Запросите расчет по специальной цене сайта</h2>
                        </div>
                        <div class="cta">
                            <a class="btn btn-large btn-rounded btn-color" href="tel:+79999999999">
                                <i class="icon-chevron-right"></i> +7 (999) 999 9999</a>
                        </div>
                    </div>
                    <!-- end tagline -->
                </div>
            </div>

            <div class="row">
                <div class="span6">
                    <h4>Что говорят о нас</h4>
                    <div class="testmonial_slider">
                        <ul class="slides">
                            <li>
                                <div class="testimonial_item">
                                    <p>
                                        Ачуметь как круто!
                                    </p>
                                    <span class="author">Жанна Польская</span>
                                    <span class="occupation">Директор</span>
                                    <!-- end testmonial -->
                                </div>
                            </li>
                            <li>
                                <div class="testimonial_item">
                                    <p>
                                        Aenean commodo ligula eget dolor. Aenean massa.
                                    </p>
                                    <span class="author">John Doe</span>
                                    <span class="occupation">CEO Engineer</span>
                                    <!-- end testmonial -->
                                </div>
                            </li>
                            <li>
                                <div class="testimonial_item">
                                    <p>
                                        libero quam euismod quam, sed sodales purus nisl eget felis. Pellentesque elit
                                        massa, cursus id.
                                    </p>
                                    <span class="author">Roro Still</span>
                                    <span class="occupation">New In Field</span>
                                    <!-- end testmonial -->
                                </div>
                            </li>
                        </ul>
                        <!-- end testmonial slider -->
                    </div>
                    <div class="blank"></div>

                    <h4>Наши портнеры</h4>
                    <ul class="clients">
                        <li>
                            <a href="#">
                                <img src="assets/img/dummies/clients/client1.png" class="client-logo" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/dummies/clients/client2.png" class="client-logo" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/dummies/clients/client3.png" class="client-logo" alt=""/>
                            </a>
                        </li>

                    </ul>

                </div>

                <div class="span6">
                    <h4>Our services</h4>
                    <!-- start: Accordion -->
                    <div class="accordion" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapseOne">
                                    <i class="icon-caret-down"></i> Social media optimization </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                    vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                    raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                    labore
                                    sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapseTwo">
                                    <i class="icon-caret-right"></i> Web design and development </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                    vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                    raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                    labore
                                    sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapseThree">
                                    <i class="icon-caret-right"></i> Business strategy and management </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                    vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                    raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                    labore
                                    sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Accordion -->
                </div>
            </div>


        </div>
    </section>
@endsection
