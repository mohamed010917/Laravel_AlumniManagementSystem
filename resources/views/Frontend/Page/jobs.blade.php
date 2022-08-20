@extends("Frontend.layout")
@section('content')

<!-- start revolution slider -->
        <section class="p-5 example home-startup bg-dark-slate-blue">
            <article class="content">
                <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
                    
                </div>
            </article>
        </section>
<!-- end revolution slider -->


             <!-- start section -->
        <section class="bg-light-gray pt-5">
             <div class="container">
                <div class="row">
                    <div class="col-12 text-center">

                        <h4>All JObs</h4>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 filter-content">
                        <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>

                            @if(!empty($careers))
                                @foreach($careers as $career)
                            <!-- start portfolio item -->
                            <li class="grid-item graphics branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        {{-- <img src="{{asset('public/12345678.png')}}" alt="" /> --}}
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="{{asset('public/12345678.png')}}" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <!-- <a href="single-project-page-05.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="https://codewithzahid.dev" target="_blank"><span class="alt-font text-extra-dark-gray font-weight-500">{{ $career->job_title }}</span></a>
                                        <span class="text-medium d-block margin-one-bottom">{{ $career->company }}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @endif
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


@endsection