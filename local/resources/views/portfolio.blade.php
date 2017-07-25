@extends('layouts.default.default')

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('portfolio')}}"><i class="fa fa-briefcase"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active"><a href="{{url('portfolio')}}">Project Portfolio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Nosh-e-Jaan Tandoor</h3>
                   <p> A fusion of Afghani and Pakistani flavors made by skilled artisans. The traditional cooking of (earthen oven baking) tandoori baking is merged with the contemporary flavors to bring you authentic experience that is restaurant quality. Some of the products offered include Nutella Nan, Pizza Nan, Cheese Nan and Afghani Naan etc.</p>

                    <h3>E-Masla</h3>

                   <p> An online portal that provides home improvement services. Here you can find specialists like electrician, plumber painter etc. At the beginning the areas of Wapda Town, Valenica, Bahria Town, Cantt and Defence Road shall be covered.</p>

                    <h3>Motor bike hailing and ride sharing</h3>

                    <p>An application that provides a platform through which the commuters shall be able to hail a nearby available registered motorbike or rideshare daily to university or work.</p>

                    <h3>Auto-Canic</h3>

                    <p>A service that provides access to the network of mechanics. The users shall put their query to the service provider by calling the provided number if their car breaks down and needs some tuning. At the initial stage the area of canal road shall be covered especially.</p>

                    <h3>3-Phase Inverter: (Prototype Development)</h3>

                    <p>Three-phase inverters are used for variable-frequency drive applications and for high power applications such as HVDC (High voltage direct circuit) power transmission.
                    </p>

                </div>
            </div>

        </div>
    </section>
@endsection




