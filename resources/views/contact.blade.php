@extends('layouts.app')
@section('content')
    <section id="subintro">

        <div class="container">
            <div class="row">
                <div class="span4">
                    <h3><strong>Контакты</strong></h3>
                </div>
            </div>
        </div>

    </section>

    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside>
                        <div class="widget">
                            <h4>Как нас найти</h4>
                            <ul>
                                <li><label><strong>Телефон : </strong></label>
                                    <p>
                                        +900 888 707 123
                                    </p>
                                </li>
                                <li><label><strong>Почта : </strong></label>
                                    <p>
                                        name@yoursite.com
                                    </p>
                                </li>
                                <li><label><strong>Адрес : </strong></label>
                                    <p>
                                        Pasar sate tusuk 22A Ave X.300 Peterongan Semarang, Indonesia
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4>Мы в сети</h4>
                            <ul class="social-links">
                                <li><a href="#" title="Twitter"><i
                                                class="icon-bg-light icon-twitter icon-circled icon-1x active"></i></a>
                                </li>
                                <li><a href="#" title="Facebook"><i
                                                class="icon-bg-light icon-facebook icon-circled icon-1x active"></i></a>
                                </li>
                                <li><a href="#" title="Google plus"><i
                                                class="icon-bg-light icon-google-plus icon-circled icon-1x active"></i></a>
                                </li>
                                <li><a href="#" title="Linkedin"><i
                                                class="icon-bg-light icon-linkedin icon-circled icon-1x active"></i></a>
                                </li>
                                <li><a href="#" title="Pinterest"><i
                                                class="icon-bg-light icon-pinterest icon-circled icon-1x active"></i></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="span8">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="spacer30">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
