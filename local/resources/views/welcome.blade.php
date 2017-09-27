@extends('layouts.default.default')

@section('content')



        <!-- start slider -->
                    <!-- Slider -->
                    <div id="main-slider" class="main-slider flexslider">
                        <ul class="slides">
                              <li>
                                  <img height="300" src="{{asset('local/public/template/img/slides/flexslider/slider-16.jpg')}}" alt="" />
                                  <div class="flex-caption">
                                  <h3>IIC OFFERS</h3>
                                  <p>IIC offers complete range of services from office space to seed funding and from prototype development to mentoring and coaching.</p>
                                  </div>
                              </li>
                            <li>
                                <img height="300" src="{{asset('local/public/template/img/slides/flexslider/9.jpg')}}" alt="" />
                                <div class="flex-caption">
                                    <h3>IIC EMPOWERS</h3>
                                    <p>IIC empowers aspiring entrepreneurs to start and grow their companies as it is working to achieve the mission of UOL to equip the youth with the potential and confidence required to become a job creator.</p>
                                     {{--<a href="#" class="btn btn-theme">Learn More</a>--}}
                                </div>
                            </li>
                            <li>
                                <img height="300" src="{{asset('local/public/template/img/slides/flexslider/8.jpg')}}" alt="" />
                                <div class="flex-caption">
                                    <h3>IIC GUIDES </h3>
                                    <p>IIC guides you how to convert your business idea in business plan through action oriented lecturing sessions.</p>

                                </div>
                            </li>
                            <li>
                                <img height="300" src="{{asset('local/public/template/img/slides/flexslider/7.jpg')}}" alt="" />
                                <div class="flex-caption">
                                    <h3>IIC</h3>
                                    <p>IIC is a mixed-use incubation center that provides legal, administrative and infrastructural support to aspiring entrepreneurs who have a business idea and want to start a business.</p>
                                </div>
                            </li>
<li>
                                <img height="300" src="{{asset('local/public/template/img/slides/flexslider/n1.jpg')}}" alt="" />
                                <div class="flex-caption">
                                    <h3>IIC</h3>
                                    <p>IIC is a mixed-use incubation center that provides legal, administrative and infrastructural support to aspiring entrepreneurs who have a business idea and want to start a business.</p>
                                </div>
                            </li>
<li>
                                <img height="300" src="{{asset('local/public/template/img/slides/flexslider/n2.jpg')}}" alt="" />
                                <div class="flex-caption">
                                    <h3>IIC</h3>
                                    <p>IIC is a mixed-use incubation center that provides legal, administrative and infrastructural support to aspiring entrepreneurs who have a business idea and want to start a business.</p>
                                </div>
                            </li>

                            {{--<li>--}}
                                {{--<img height="300" src="{{asset('local/public/template/img/slides/flexslider/transprint-bg.png')}}" alt="" />--}}
                                {{--<div class="flex-caption">--}}
                                    {{--<h3>IIC OFFERS</h3>--}}
                                    {{--<p>IIC offers complete range of services from office space to seed funding and from prototype development to mentoring and coaching.</p>--}}
                                {{--</div>--}}
                            {{--</li>--}}

                        </ul>
                    </div>
        <div class="tp-bannertimer"></div>

        <!-- end slider -->




        <!--End Banner-->






        {{--<+++++++++++++++++++++++++++++++++++++++++>--}}
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="highlight">Welcome</span> </h2>
                        <p><strong>Innovation and Incubation Center (IIC), is an initiative of The University of Lahore to bridge the gap between the industry and academia and transform knowledge into commercial success. IIC, is a mixed use incubator supporting technological and non-technological entrepreneurial projects. Understanding the importance of the role that SME’s can play in the development of economy of Pakistan, we are here to provide a nurturing environment to the young business and help them to survive the hostile environment. Further at IIC, we believe in promoting entrepreneurial mindset among the young lot and up skill them so that they gain to confidence to start their own businesses and become job providers instead of becoming job hunters. We at IIC welcome you to be a part of it and are here to help you to convert your business dreams into a reality.</strong></p>
                    </div>
                </div>
            </div>
        </div>



        <!-- divider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
        </div>
        <!-- end divider -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <h3>About Organization</h3>
                            <p><strong>IIC is a central body of UOL that provides following services to the prospective entrepreneurs.</strong></p>
                            <p>
                            <h3>Services</h3>
                            <p><strong>The IIC would provide following services:
                                </strong></p>

                            <h3>Business Planning & Awareness</h3>

                            <ol>
                                <li>Dissemination of information and awareness regarding entrepreneurship and innovation among students</li>
                                <li>Helping students in developing business ideas if they have some rudimentary skeleton: Innovation Development (idea development, IP advice, market research)
                                </li>
                                <li>After selection for incubation delineating upon the practical aspects of business plan and modalities for execution of plan</li>
                                <li>Continuous performance evaluation of the startups and giving them feedback regarding their pace and direction of progress</li>
                                <li>Market readiness counseling</li>
                            </ol>
                            <a href="{{url('aboutOrganize')}}">Read More</a>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Chairman</a></li>
                                <li><a href="#two" data-toggle="tab">Director</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="one">
                                    <h3>Chairman Says</h3><p>The Business Incubation Center at University of Lahore (UoL) aims at commercialization of Research and Development undertaken at the campus. This is to be achieved through conversion of concepts and knowledge created at UoL into viable projects and their successful execution for sustainable development of economy and the society.
                                        The vision relies on education and technology inputs especially that is available or developed at UoL to industry, agriculture, health and in all other areas of UoL expertise and to contribute towards improvement of socio-economic conditions of people of Pakistan.
                                        The purpose of establishment of BIC at UoL is in alignment with the vision 2030 of Planning Commission of Pakistan that Pakistan must become a developed, industrialized, just and prosperous nation within one generation.
                                        The concept underscores application of R&D for a knowledge based economy and creation of profitable employment opportunities for the educated and technical human resource and development of indigenous enterprises to create suitable jobs for the youth.
                                        The establishment of Business Incubation Center is a step in that direction and part of the scheme to utilize knowledge and expertise thus generated.

                                    </p>

                                </div>
                                <div class="tab-pane" id="two">
                                    <h3>Dear Visitor</h3><p>Allow me to welcome you to the virtual tour of Innovation and Incubation Center. This website will give you an insight information about the center, its services and how we can work together to turn your business dreams into a reality. Founded in 1999 University of Lahore is one of the leading institutions in only Pakistan but is among well reputed academic institutions of the World. According to the ranking published by Quacquarelli Symonds (QS) for 2015-2016, UOL is one of the six Universities of Pakistan that made to the top 800 universities of the World. While adjusting to the demands of future and to expand career opportunities for University’s graduates; commercialization of academic research has become the core focus of institution as just mere work of teaching and research shall not be sufficient for thriving in this highly competitive era. Knowledge and technology transfer activities have become the hall mark of leading institutions around the world. And following the footsteps of these best academic institutions the University has set up the department of “Innovation and Incubation Center”, that will help the researchers by all possible means to implement their ideas on the practical grounds’ will provide nesting facilities to the startups and will be the first institution in Pakistan that shall be working on academic commercialization. To setup a new business and to run it successfully a wise combination of innovation and risk taking is required. The curriculum offered by most academic institutions is Pakistan inhibit innovation and risk taking attitude in students. At IIC; we are the rebels that believe in changing these present norms and are working to teach and brush up the entrepreneurial skills in students so that after graduation they just don’t become the part of the flock looking for job but become the change makers and by starting their own ventures to create jobs. The goal of IIC is to nurture and encourage young entrepreneurs who are the leaders of the future and work as a bridge between these young minds and the market leaders so that they can work together for their mutual benefit as well as betterment of the society.
                                    </p>

                                </div>

                            </div>
                        </div>
                        {{--<div class="col-sm-6 col-lg-6">--}}
                            {{--<h4>Projects</h4>--}}
                            {{--<div class="progress">--}}
                                {{--<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">--}}
                                    {{--40% Complete (success)--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="progress">--}}
                                {{--<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">--}}
                                    {{--20% Complete--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="progress">--}}
                                {{--<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">--}}
                                    {{--60% Complete--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="progress">--}}
                                {{--<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">--}}
                                    {{--80% Complete--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>

        <!-- divider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blankline">
                    </div>
                </div>
            </div>
        </div>
        <!-- end divider -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h4>Quotes</h4>
                            <div class="testimonialslide clearfix flexslider">
                                <ul class="slides">
                                    <li><blockquote>
                                            "A person who never made a mistake never tried anything new." - Albert Einstein,
                                            “If you just work on stuff that you like and you’re passionate about, you don’t have to have a master plan with how things will play out.”

                                        </blockquote>
                                        <h4>- Mark Zuckerberg<span></span></h4>
                                    </li>
                                    <li><blockquote>
                                            "When everything seems to be going against you, remember that the airplane takes off against the wind, not with it."
                                        </blockquote>
                                        <h4>- Henry Ford <span></span></h4>
                                    </li>

                                    <li><blockquote>
                                            “Risk more than others think is safe. Dream more than others think is practical.”
                                        </blockquote>
                                        <h4>- Howard Schultz <span></span></h4>
                                    </li>

                                    <li><blockquote>
                                            I’m convinced that about half of what separates the successful entrepreneurs from the non-successful ones is pure perseverance.”
                                        </blockquote>
                                        <h4>- Steve Jobs <span></span></h4>
                                    </li>

                                    <li><blockquote>
                                            “Do not be embarrassed by your failures, learn from them and start again.”
                                        </blockquote>
                                        <h4>- Richard Branson <span></span></h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{--<div class="col-sm-6 col-lg-6">--}}
                            {{--<ul class="nav nav-tabs">--}}
                                {{--<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Chairman</a></li>--}}
                                {{--<li><a href="#two" data-toggle="tab">Director</a></li>--}}
                            {{--</ul>--}}
                            {{--<div class="tab-content">--}}
                                {{--<div class="tab-pane active" id="one">--}}
                                    {{--<h3>Chairman Says</h3><p>The Business Incubation Center at University of Lahore (UoL) aims at commercialization of Research and Development undertaken at the campus. This is to be achieved through conversion of concepts and knowledge created at UoL into viable projects and their successful execution for sustainable development of economy and the society.--}}
                                        {{--The vision relies on education and technology inputs especially that is available or developed at UoL to industry, agriculture, health and in all other areas of UoL expertise and to contribute towards improvement of socio-economic conditions of people of Pakistan.--}}
                                        {{--The purpose of establishment of BIC at UoL is in alignment with the vision 2030 of Planning Commission of Pakistan that Pakistan must become a developed, industrialized, just and prosperous nation within one generation.--}}
                                        {{--The concept underscores application of R&D for a knowledge based economy and creation of profitable employment opportunities for the educated and technical human resource and development of indigenous enterprises to create suitable jobs for the youth.--}}
                                            {{--The establishment of Business Incubation Center is a step in that direction and part of the scheme to utilize knowledge and expertise thus generated.--}}

                                    {{--</p>--}}

                                {{--</div>--}}
                                {{--<div class="tab-pane" id="two">--}}
                                    {{--<h3>Dear Visitor</h3><p>Allow me to welcome you to the virtual tour of Innovation and Incubation Center. This website will give you an insight information about the center, its services and how we can work together to turn your business dreams into a reality. Founded in 1999 University of Lahore is one of the leading institutions in only Pakistan but is among well reputed academic institutions of the World. According to the ranking published by Quacquarelli Symonds (QS) for 2015-2016, UOL is one of the six Universities of Pakistan that made to the top 800 universities of the World. While adjusting to the demands of future and to expand career opportunities for University’s graduates; commercialization of academic research has become the core focus of institution as just mere work of teaching and research shall not be sufficient for thriving in this highly competitive era. Knowledge and technology transfer activities have become the hall mark of leading institutions around the world. And following the footsteps of these best academic institutions the University has set up the department of “Innovation and Incubation Center”, that will help the researchers by all possible means to implement their ideas on the practical grounds’ will provide nesting facilities to the startups and will be the first institution in Pakistan that shall be working on academic commercialization. To setup a new business and to run it successfully a wise combination of innovation and risk taking is required. The curriculum offered by most academic institutions is Pakistan inhibit innovation and risk taking attitude in students. At IIC; we are the rebels that believe in changing these present norms and are working to teach and brush up the entrepreneurial skills in students so that after graduation they just don’t become the part of the flock looking for job but become the change makers and by starting their own ventures to create jobs. The goal of IIC is to nurture and encourage young entrepreneurs who are the leaders of the future and work as a bridge between these young minds and the market leaders so that they can work together for their mutual benefit as well as betterment of the society.--}}
                                    {{--</p>--}}

                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>

        <!-- divider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
        </div>
        <!-- end divider -->


        <!-- divider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
        </div>
        <!-- end divider -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 aligncenter client">
                    <div class="col-xs-4 aligncenter client">
                        <h2><span  class="highlight">Our Strategic Partner</span> </h2>
                    </div>
                    <div class="col-xs-8 aligncenter client">
                        <img alt="logo" style="width: 10%" src="{{asset('local/public/template/img/clients/stragic-partner1.png')}}" class="img-responsive" />
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection






