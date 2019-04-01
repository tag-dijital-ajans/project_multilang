@extends('main/template')

@section('content')
    <section>
        <div class="container">
            <div class="pager-details full text-center">
                <h2 class="heading-title">{{__('general.projects')}}</h2>
                <ul>
                    <li><a href="#" title="">{{__('general.home')}}</a></li>
                    <li><span>{{__('general.projects')}}</span></li>
                </ul>
            </div>
        </div>
    </section>


    <section>
        <div class="portfolio-sec">
            <div class="container">
                <div class="portfolio-items-filter">
                    <section class="options">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set filters-nav" data-option-key="filter">
                                <li><a class="selected" data-option-value="*">All</a></li>
                                <li><a data-option-value=".residentials">Residentials</a></li>
                                <li><a data-option-value=".commercials">commercials</a></li>
                                <li><a data-option-value=".buildings">Buildings</a></li>
                                <li><a data-option-value=".industrials">Industrials</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="portfolio-grid">
                        <div class="row">
                            <div class="masonary">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/330x400" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">UMI Complex Residence</a></h3>
                                            <span>Residentials</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/330x500" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">Mercedes-Benz Museum</a></h3>
                                            <span>Buildings</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/330x300" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">MME Consulting Office</a></h3>
                                            <span>Building</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/330x500" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">Up-Co Working Office</a></h3>
                                            <span>Buildings</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/330x300" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">Heydar Aliyev Center</a></h3>
                                            <span>Commercials</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/330x400" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">Alex’s Villa</a></h3>
                                            <span>Residentials</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/330x500" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">Beijing Nation Stadium</a></h3>
                                            <span>Industrials</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/350x400" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">Cube Museum</a></h3>
                                            <span>Buildings</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 buildings">
                                    <div class="portfolio-item">
                                        <div class="pt-img">
                                            <img src="http://via.placeholder.com/330x300" alt="">
                                        </div>
                                        <div class="item-info">
                                            <h3><a href="#" title="">Art & Culture Museum</a></h3>
                                            <span>Buildings</span>
                                        </div>
                                    </div><!--portfolio-item end-->
                                </div>
                            </div><!--masonary end-->
                            <div class="load-more-items">
                                <a href="#" title="">Load more</a>
                            </div><!--load-more-items end-->
                        </div>
                    </div><!--portfolio-grid end-->
                </div><!--portfolio-items-filter end-->
            </div>
        </div><!--portfolio-sec end-->
    </section>
@endsection

@section('css')

@endsection

@section('js')

@endsection