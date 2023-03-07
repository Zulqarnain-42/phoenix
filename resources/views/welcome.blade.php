@extends('layouts.main')
@section('content')

@if (count($collectionslider)>0)
<div id="main-slider" data-slider-width="100%" data-slider-height="950px" data-slider-arrows="true" data-slider-buttons="false" class="main-slider main-slider_mod-a slider-pro">
    <div class="sp-slides">
        @foreach ($collectionslider as $slider)
        <div class="sp-slide">
            <img src="assets/media/components/b-main-slider/bg-2.jpg" alt="slider" class="sp-image"/>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400" class="main-slider__info sp-layer">We are the Event Management Specialists</div>
                        <h2 data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__title sp-layer">we personalize your wedding events</h2>
                        <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="600" data-hide-delay="400" class="sp-layer">
                            <div class="main-slider__decor bg-primary"></div>
                        </div>
                        <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400" class="sp-layer"><a href="{{route('services')}}" class="main-slider__btn btn btn-default">our features</a></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="section-area">
                <div class="b-request-estimate">
                    <div class="b-request-estimate__info">Wedding Functions to Birthday Parties and Corporate Events to Musical Functions, We offer full Events Management Services!</div>
                    <div class="b-request-estimate__title bg-primary"><span class="ui-decor-2"></span>request your event estimate</div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-type-1">
    <div class="label-vertical">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/media/content/360x460/1.jpg" alt="foto" class="img-w-radius img-responsive">
                </div>
                <div class="col-md-8">
                    <div class="section-type-1__inner">
                        <div class="ui-decor-1">
                            <img src="assets/media/general/ui-decor-1.png" alt="decor">
                        </div>
                        <h2 class="ui-title-block">Welcome to<span class="text-primary"> Phoenix Events</span></h2>
                        <div class="ui-subtitle-block">Making your events smarter & impactful by personalised event management.</div>
                        <p>We compete with quality services, not prices. Working on this philosophy, we are convinced that for an adequate market presence, intellectual & aggressive promotion is needed and we strive just to do that.  </p>
                        <p>Our business beliefs include: Expertise & right approach makes the work more easier and effectual .Working under stipulated time frame. Delivering What We Say-No Matter What. We Make It Our Business to Understand Your Business.</p><a href="/" class="btn btn-default btn-xs"><i class="icon"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div class="section-progress section-progress_mod-b">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="b-progress-list b-progress-list_mod-a list-unstyled">
                    <li class="clearfix b-progress-list__item">
                        <div class="b-progress-list__inner">
                            <div class="b-progress-list__label"></div>
                            <span data-percent="320" class="b-progress-list__percent js-chart">
                                <span class="js-percent"></span>
                            </span>
                            <span class="b-progress-list__name">Featured Events</span>
                        </div>
                        <div class="b-progress-list__icon text-primary icon-cup"></div>
                    </li>
                    <li class="clearfix b-progress-list__item">
                        <div class="b-progress-list__inner">
                            <div class="b-progress-list__label"></div>
                            <span data-percent="156" class="b-progress-list__percent js-chart">
                                <span class="js-percent"></span>
                            </span>
                            <span class="b-progress-list__name">Loyal Customers</span>
                        </div>
                        <div class="b-progress-list__icon text-primary icon-user"></div>
                    </li>
                    <li class="clearfix b-progress-list__item">
                        <div class="b-progress-list__inner">
                            <div class="b-progress-list__label"></div>
                            <span data-percent="594" class="b-progress-list__percent js-chart">
                                <span class="js-percent"></span>
                            </span>
                            <span class="b-progress-list__name">Good Comments</span>
                        </div>
                        <div class="b-progress-list__icon text-primary icon-layers"></div>
                    </li>
                    <li class="clearfix b-progress-list__item">
                        <div class="b-progress-list__inner">
                            <div class="b-progress-list__label"></div>
                            <span data-percent="167" class="b-progress-list__percent js-chart">
                                <span class="js-percent"></span>
                            </span>
                            <span class="b-progress-list__name">Trophies Won</span>
                        </div>
                        <div class="b-progress-list__icon text-primary icon-badge"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}

@if (count($collectionservices)>0)
<section class="b-services area-bg area-bg_dark area-bg_op_90 parallax">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="ui-decor-1">
                        <img src="assets/media/general/ui-decor-1.png" alt="decor"/>
                    </div>

                    <h2 class="ui-title-block">
                        <span class="text-primary">Phoenix Events</span> Services
                    </h2>
                    <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ex ea consequat duis aute irure dolor in reprehenderit in voluptate labore et dolore.</p>
                </div>

                <div class="col-md-7">
                    <div class="bxslider">
                        <section class="b-advantages-2 b-advantages-2_light">
                            <i class="b-advantages-2__icon flaticon-people"></i>
                            <div class="b-advantages-2__inner">
                                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Wedding Events</h3>
                                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                            </div>
                        </section>

                        <section class="b-advantages-2 b-advantages-2_light">
                            <i class="b-advantages-2__icon flaticon-food"></i>
                            <div class="b-advantages-2__inner">
                                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Birthday Parties</h3>
                                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                            </div>
                        </section>

                        <section class="b-advantages-2 b-advantages-2_light">
                            <i class="b-advantages-2__icon flaticon-karaoke"></i>
                            <div class="b-advantages-2__inner">
                                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Corporate Seminars</h3>
                                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                            </div>
                        </section>

                        <section class="b-advantages-2 b-advantages-2_light">
                            <i class="b-advantages-2__icon flaticon-people"></i>
                            <div class="b-advantages-2__inner">
                                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Wedding Events</h3>
                                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                            </div>
                        </section>

                        <section class="b-advantages-2 b-advantages-2_light">
                            <i class="b-advantages-2__icon flaticon-food"></i>
                            <div class="b-advantages-2__inner">
                                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Birthday Parties</h3>
                                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                            </div>
                        </section>

                        <section class="b-advantages-2 b-advantages-2_light">
                            <i class="b-advantages-2__icon flaticon-karaoke"></i>
                            <div class="b-advantages-2__inner">
                                <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Corporate Seminars</h3>
                                <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


<section class="b-info-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="assets/media/components/b-info-section/1.png" alt="foto" class="b-info-section__img-1 img-mask"/>
                    </div>
                    <div class="col-sm-6">
                        <img src="assets/media/components/b-info-section/2.png" alt="foto" class="b-info-section__img-2 img-mask"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="b-info-section__inner">
                    <div class="ui-decor-1">
                        <img src="assets/media/general/ui-decor-1.png" alt="decor"/>
                    </div>
                    <h2 class="ui-title-block">
                        <span class="text-primary">Phoenix Events</span> - Events That Lasts
                    </h2>
                    <div class="ui-subtitle-block">You should choose Phoenix Events Services because we bring your guests closer to you & helps you to create a relationship that lasts long!</div>
                    <p>Consectetur elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquled tempor enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea volputate consequat aute irure dolor reprehenderit.</p>
                    <ul class="list list-mark-5 list_bold list_icon_color-primary">
                        <li>Excepteur sint occaecat cupidata non proident sunt</li>
                        <li>Qui officia deserunt anim labor tempore laboris volputate</li>
                        <li>Tempor incididunt uet labore dolore magna aliqua</li>
                        <li>Enim lanim veniam quis nostrud exercitation ullamco</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="b-taglines area-bg area-bg_dark parallax">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="b-taglines__inner">
                        <h2 class="b-taglines__title">With a full range of Event Planning Services, our Clients have Successful & Prosperous Events!</h2>
                        <div class="b-taglines__text">We make your events smart & impactful by personalised event management services.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ui-decor-1">
                    <img src="assets/media/general/ui-decor-1.png" alt="decor">
                </div>
                <h2 class="ui-title-block"><span class="text-primary">Phoenix Events</span> Gallery</h2>
                <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>
            </div>
        </div>
    </div>

    <div class="b-isotope">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="b-isotope-filter list-inline">
                        <li><a href="" data-filter="*" class="current">all events</a></li>
                        <li><a href="" data-filter=".corporate">corporate events</a></li>
                        <li><a href="" data-filter=".birthday">birthday parties</a></li>
                        <li><a href="" data-filter=".wedding">wedding events</a></li>
                        <li><a href="" data-filter=".product">product launches</a></li>
                        <li><a href="" data-filter=".social">social meetings</a></li>
                        <li><a href="" data-filter=".proposal">proposal events</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="grid b-isotope-grid list-unstyled js-zoom-gallery">
            <li class="grid-sizer"></li>
            <li class="b-isotope-grid__item grid-item corporate product"><a href="assets/media/content/gallery/480x290/1.jpg" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="assets/media/content/gallery/480x290/1.jpg" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate proposal"><a href="assets/media/content/gallery/480x290/2.jpg" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="assets/media/content/gallery/480x290/2.jpg" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item birthday product social proposal"><a href="assets/media/content/gallery/480x290/3.jpg" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="assets/media/content/gallery/480x290/3.jpg" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item wedding"><a href="assets/media/content/gallery/480x290/4.jpg" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="assets/media/content/gallery/480x290/4.jpg" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate product social proposal"><a href="assets/media/content/gallery/480x290/5.jpg" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="assets/media/content/gallery/480x290/5.jpg" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item birthday"><a href="assets/media/content/gallery/480x290/6.jpg" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="assets/media/content/gallery/480x290/6.jpg" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item wedding social"><a href="assets/media/content/gallery/480x290/7.jpg" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="assets/media/content/gallery/480x290/7.jpg" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate birthday"><a href="assets/media/content/gallery/480x290/8.jpg" class="b-isotope-grid__inner js-zoom-gallery__item"><img src="assets/media/content/gallery/480x290/8.jpg" alt="foto"/><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">Kids at Party</span><span class="b-isotope-grid__categorie">Birthday Parties</span></span><i class="icon icon-magnifier-add text-primary"></i></span></a></li>
        </ul>
    </div>
    <div class="text-center">
        <span class="b-isotope__info">See Our Full Gallery of Events!</span>
        <a href="/" class="b-isotope__btn btn btn-primary">visit full gallery</a>
    </div>
</section>

@if (count($collectionevents)>0)
<div class="section-events">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ui-decor-1">
                    <img src="assets/media/general/ui-decor-1.png" alt="decor" class="center-block">
                </div>

                <div class="text-center">
                    <h2 class="ui-title-block">
                        <span class="text-primary">Phoenix Events</span> Upcoming Events
                    </h2>
                    <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services.</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div data-min480="1" data-min768="3" data-min992="4" data-min1200="4" data-pagination="false" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                    <section class="text-center b-events-2">
                        <div class="b-events-2__media">
                            <img src="assets/media/components/b-events/262x390_1.jpg" alt="foto" class="img-responsive"/>
                            <div class="b-events-calendar">
                                <div class="b-events-calendar__wrap">
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">25</span>
                                        <span class="b-events-calendar__title">days</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">16</span>
                                        <span class="b-events-calendar__title">hours</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">47</span>
                                        <span class="b-events-calendar__title">mins</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">38</span>
                                        <span class="b-events-calendar__title">secs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                        <h3 class="b-events-2__title">Dance Event</h3>
                        <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Hill Ave, CA</div>
                    </section>
                    <section class="text-center b-events-2">
                        <div class="b-events-2__media">
                            <img src="assets/media/components/b-events/262x390_2.jpg" alt="foto" class="img-responsive"/>
                            <div class="b-events-calendar">
                                <div class="b-events-calendar__wrap">
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">25</span>
                                        <span class="b-events-calendar__title">days</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">16</span>
                                        <span class="b-events-calendar__title">hours</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">47</span>
                                        <span class="b-events-calendar__title">mins</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">38</span>
                                        <span class="b-events-calendar__title">secs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                        <h3 class="b-events-2__title">SEO Seminar 2016</h3>
                        <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Hill Ave, CA</div>
                    </section>
                    <section class="text-center b-events-2">
                        <div class="b-events-2__media">
                            <img src="assets/media/components/b-events/262x390_3.jpg" alt="foto" class="img-responsive"/>
                            <div class="b-events-calendar">
                                <div class="b-events-calendar__wrap">
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">25</span>
                                        <span class="b-events-calendar__title">days</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">16</span>
                                        <span class="b-events-calendar__title">hours</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">47</span>
                                        <span class="b-events-calendar__title">mins</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">38</span>
                                        <span class="b-events-calendar__title">secs</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                        <h3 class="b-events-2__title">TomWed Event</h3>
                        <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Hill Ave, CA</div>
                    </section>
                    <section class="text-center b-events-2">
                        <div class="b-events-2__media">
                            <img src="assets/media/components/b-events/262x390_4.jpg" alt="foto" class="img-responsive"/>
                            <div class="b-events-calendar">
                                <div class="b-events-calendar__wrap">
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">25</span>
                                        <span class="b-events-calendar__title">days</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">16</span>
                                        <span class="b-events-calendar__title">hours</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">47</span>
                                        <span class="b-events-calendar__title">mins</span>
                                    </div>
                                    <div class="b-events-calendar__item">
                                        <span class="b-events-calendar__number">38</span>
                                        <span class="b-events-calendar__title">secs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                        <h3 class="b-events-2__title">ABCD Concert</h3>
                        <div class="b-events__details"><i class="icon icon-map"></i> 32-B, Envato St, Hill Ave, CA</div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if (count($collectionteam)>0)
    <section class="section-team area-bg area-bg_dark parallax">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ui-decor-1">
                        <img src="assets/media/general/ui-decor-1.png" alt="decor" class="center-block">
                    </div>
                    <div class="text-center">
                        <h2 class="ui-title-block">
                            <span class="text-primary"> Phoenix Events</span> Team
                        </h2>
                        <div class="ui-subtitle-block">We make your events smart & impactful by personalised event management services</div>
                    </div>
                    <div data-min480="1" data-min768="1" data-min992="1" data-min1200="2" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                        <section class="b-team b-team_light">
                            <div class="b-team__media">
                                <img src="assets/media/components/b-team/1.jpg" alt="Foto" class="img-responsive"/>
                            </div>
                            <div class="b-team__inner">
                                <div class="ui-decor-2 bg-primary"></div>
                                <h3 class="b-team__name ui-title-inner">Charles Hasman</h3>
                                <div class="b-team__category">Founder &amp; Director</div>
                                <div class="b-team__description">Eorem ipsum dolor sit ame adipisicn elit sed do eiusmod tempor incidida labore dolor magna</div>
                                <ul class="social-net list-inline">
                                    <li class="social-net__item">
                                        <a href="twitter.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="facebook.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="plus.google.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="instagram.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="b-team b-team_light">
                            <div class="b-team__media">
                                <img src="assets/media/components/b-team/2.jpg" alt="Foto" class="img-responsive"/>
                            </div>
                            <div class="b-team__inner">
                                <div class="ui-decor-2 bg-primary"></div>
                                <h3 class="b-team__name ui-title-inner">Kethy Hilton</h3>
                                <div class="b-team__category">Events Manager</div>
                                <div class="b-team__description">Corem ipsum dolor sit ame adipisicn elit sed do eiusmod tempor incidida labore dolor aliqua</div>
                                <ul class="social-net list-inline">
                                    <li class="social-net__item">
                                        <a href="twitter.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="facebook.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="plus.google.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="instagram.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="b-team b-team_light">
                            <div class="b-team__media">
                                <img src="assets/media/components/b-team/3.jpg" alt="Foto" class="img-responsive"/>
                            </div>
                            <div class="b-team__inner">
                                <div class="ui-decor-2 bg-primary"></div>
                                <h3 class="b-team__name ui-title-inner">Anna Sydney</h3>
                                <div class="b-team__category">Events Manager</div>
                                <div class="b-team__description">Eorem ipsum dolor sit ame adipisicn elit sed do eiusmod tempor incidida labore dolor magna</div>
                                <ul class="social-net list-inline">
                                    <li class="social-net__item">
                                        <a href="twitter.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="facebook.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="plus.google.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="instagram.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="b-team b-team_light">
                            <div class="b-team__media">
                                <img src="assets/media/components/b-team/4.jpg" alt="Foto" class="img-responsive"/>
                            </div>
                            <div class="b-team__inner">
                                <div class="ui-decor-2 bg-primary"></div>
                                <h3 class="b-team__name ui-title-inner">Ava Taylor</h3>
                                <div class="b-team__category">Supervisor</div>
                                <div class="b-team__description">Corem ipsum dolor sit ame adipisicn elit sed do eiusmod tempor incidida labore dolor aliqua</div>
                                <ul class="social-net list-inline">
                                    <li class="social-net__item">
                                        <a href="twitter.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="facebook.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="plus.google.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="social-net__item">
                                        <a href="instagram.com" class="social-net__link text-primary_h">
                                            <i class="icon fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


{{-- <div data-stellar-background-ratio="0.4" class="section-brands bg-grey section-texture-2 stellar">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div data-min480="1" data-min768="3" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="b-brands owl-carousel owl-theme enable-owl-carousel">
                    <div class="b-brands__item">
                        <img src="assets/media/components/b-brands/logo-1.png" alt="foto" class="img-responsive center-block"/>
                    </div>
                    <div class="b-brands__item">
                        <img src="assets/media/components/b-brands/logo-2.png" alt="foto" class="img-responsive center-block"/>
                    </div>
                    <div class="b-brands__item">
                        <img src="assets/media/components/b-brands/logo-3.png" alt="foto" class="img-responsive center-block"/>
                    </div>
                    <div class="b-brands__item">
                        <img src="assets/media/components/b-brands/logo-4.png" alt="foto" class="img-responsive center-block"/>
                    </div>
                    <div class="b-brands__item">
                        <img src="assets/media/components/b-brands/logo-5.png" alt="foto" class="img-responsive center-block"/>
                    </div>
                    <div class="b-brands__item">
                        <img src="assets/media/components/b-brands/logo-3.png" alt="foto" class="img-responsive center-block"/>
                    </div>
                    <div class="b-brands__item">
                        <img src="assets/media/components/b-brands/logo-4.png" alt="foto" class="img-responsive center-block"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
