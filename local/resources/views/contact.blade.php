@extends('layouts.default.default')

@section('content')
    <link href="{{asset('local/public/multiselect/jquery.multiselect.css')}}" rel="stylesheet" />
    <link href="{{asset('local/public/multiselect/range.css')}}" rel="stylesheet" />
    <link href="{{asset('local/public/template/css/jquery-ui.css')}}" rel="stylesheet" />
    <link href="{{asset('local/public/template/css/jquery.datetimepicker.css')}}" rel="stylesheet" />
    <style>
        ul,li { margin:0; padding:0; list-style:none;}

        .percentInput { position:relative;}
        .percentInput span { position: absolute; top:36px; padding-left: 10px; line-height:100%; vertical-align: middle; }
        .num_percent { width:30px; text-align: right; padding-right: 15px; }
    </style>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{url('contact')}}"><i class="fa fa-phone"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active"><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="map">
        <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54453.01209404574!2d74.20877400875635!3d31.46056793557617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919018a8ea548c1%3A0x4a52db69c2c814f!2sThe+University+of+Lahore+-+Raiwind+Road+Campus!5e0!3m2!1sen!2s!4v1480422112344" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Contact us <small>get in touch with us by filling form below</small></h2>
                <hr class="colorgraph">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                @if(Session::has('message'))
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert {{ Session::get('alert-class display-success', 'alert-info') }}" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{ Session::get('message') }}
                    </div>
                @endif
                <form action="{{url('requestForm')}}" method="post" id="myForm" role="form"  class="contactForm" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger fade in" id="closeWin">
                            <a href="#" class="close" id="tagClose" data-dismiss="alert" aria-label="close">&times;</a>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <span style="color: #ff0000;">
                        <li>{{ $error }}</li>
                        </span>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Name</label>
                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control input-size">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Gender</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Dob</label>
                            <input type="date" name="dob" class="form-control input-size" id="dob" placeholder="Date of Birth">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">N.I.C</label>
                            <input type="text" name="nic" class="form-control input-size" pattern=”/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/” id="nic" placeholder="e.g 12345-1234567-1" required="required">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Marital</label>
                            <select id="martial" name="martial" class="form-control">
                                <option value="1">Single</option>
                                <option value="0">Married</option>
                            </select>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Contact #</label>
                            <input id="contact" name="contact" type="text" placeholder="Your Contact Number E.g. 3003333333"
                                   class="form-control input-size">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Nationality</label>
                            <select id="nationality" name="nationality" class="form-control">
                                @foreach($countries as $key  =>  $country)
                                    <option value="{{$key}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Email </label>
                            <input id="email" name="email" type="email" placeholder="Enter Email" class="form-control input-size">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Landlines #</label>
                            <input id="landlines" name="landline" type="text" placeholder="Land Line without dashes"
                                   class="form-control input-size">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Postal Address</label>
                            <input id="postalAddr" name="postalAddr" type="text" placeholder="Postal Address"
                                   class="form-control input-size">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Permanent Address</label>
                            <input id="permanentAddr" name="permanentAddr" type="text" placeholder="Permanent Address"
                                   class="form-control input-size">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Name of Institution</label>
                            <input id="institution" name="institution" type="text" placeholder="institution"
                                   class="form-control input-size">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Name of Department</label>
                            <input id="department" name="department" type="text" placeholder="Department"
                                   class="form-control input-size">

                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="input-size">Select Degree</label>
                                <select class="form-control" name="degreeTitle[]" multiple id="degreeTitle">
                                    <option value="bachelor">Bachelor</option>
                                    <option value="master">Master</option>
                                    <option value="phd">PHD</option>
                                </select>
                            </div>
                        </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Registration Number (Please attach a copy of your student/university
                                card)</label>

                            <div class="form-group">
                                <div class="lt-col col s12">
                                    <input type="file" name="image"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Occupation</label>
                            <input id="occupation" name="occupation" type="text" placeholder="Occupation"
                                   class="form-control input-size">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Company address: (if applicable)</label>
                            <input id="company_address" name="company_address" type="text" placeholder="Company address"
                                   class="form-control input-size">

                        </div>
                    </div>

                    <br/>
                        <div class="form-group">
                            <div class="col-md-12">
                            <h2 class="lt-title">Business Plan/Idea Information</h2>
                        </div>
                    </div>
                    <div class="lt-vertical-spacer"></div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Name of Business/Product/Technology</label>
                            <input id="business" name="business" type="text" placeholder="Name of Business/Product/Technology"
                                   class="form-control input-size">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Tag line of Business/Product/Technology</label>
                            <input id="tag_line " name="tag_line" type="text" placeholder="Tag line of Business/Product/Technology"
                                   class="form-control input-size">

                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Amount of Funding Required</label>
                            <input id="amtFunding" name="amtFunding" type="text" placeholder="Amount of Funding e.g 15000"
                                   class="form-control input-size">

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="input-size">Approximated time required for profit generation</label>
                            <input id="datetimepicker_mask" name="profit_generation" type="text" placeholder="Approximated time required for profit generation"
                                   class="form-control input-size">

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <span class="percentInput">
                                <label class="input-size">Approximated % of Profit</label>
                            <input id="approximated_Profit" style="padding-left: 25px;" name="approximated_Profit" type="text" placeholder="Approximated Profit e.g 25"
                                   class="form-control input-size percent">
                            <span>%</span>
                             </span>
                        </div>
                    </div>
                    <br/>

                    <div class="form-group" style="margin-bottom: 10px">
                        <div class="col-md-12">
                            <label class="input-size">Summary</label>

                                <textarea class="form-control" name="summary" rows="5" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <br/>
                        <div class="form-group" style="margin-top:10px">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-theme btn-block btn-md saveM">Send Message</button>
                                </div>
                          </div>
                        </div>
                </form>

                <br/>
                <div class="form-group" style="margin-top:10px">
                    <div class="col-md-12">
                        <hr class="colorgraph">
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<script src="{{asset('local/public/multiselect/jquery.min.js')}}"></script>
<script src="{{asset('local/public/multiselect/jquery.multiselect.js')}}"></script>
<script src="{{asset('local/public/multiselect/jquery.validate.min.js')}}"></script>
<script src="{{asset('local/public/template/js/jquery-ui.js')}}"></script>
<script src="{{asset('local/public/template/js/jquery.datetimepicker.full.js')}}"></script>
    <script>
        $('#datetimepicker_mask').datetimepicker({
            mask:'9999/19/39 29:59'
        });
       /* $('#nic').keydown(function(){

            //allow  backspace, tab, ctrl+A, escape, carriage return
            if (event.keyCode == 8 || event.keyCode == 9
                    || event.keyCode == 27 || event.keyCode == 13
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                return;
            if((event.keyCode < 48 || event.keyCode > 57))
                event.preventDefault();

            var length = $(this).val().length;

            if(length == 5 || length == 13)
                $(this).val($(this).val()+'-');

        });*/

        $("#dob").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
            yearRange: "-90:+0",
            maxDate: 0,
            inline: true,
            showOtherMonths: true,
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });



        $(document).ready(function () {
            $(".yes").click(function () { //when click on flip radio button
                if ($(this) == $(this).find('input:radio').prop('checked', false)) {
                    $(this).find('input:radio').prop('checked', true);
                }
            });

            $(".no").click(function () { //when click on flip radio button
                if ($(this) == $(this).find('input:radio').prop('checked', true)) {
                    $(this).find('input:radio').prop('checked', false);
                }
            });
        });
        $('#yes').click(function(){
            $('.summaryFile').show();
        });
        $('#no').click(function(){
            $('.summaryFile').hide();
        });
        $('#degreeTitle').multiselect({
            columns: 1,
            placeholder: 'Select Degree'
        });

        $.validator.addMethod('customphone', function (value, element) {
            return this.optional(element) || /^[+]?([0-9]*[\.\s\-\(\)]|[0-9]+){3,24}$/.test(value);
        }, "Please enter a valid phone number");

        $.validator.addMethod('cnic', function (value, element) {
            return this.optional(element) || /\d{5}-\d{7}-\d/.test(value);
        }, "Please enter a valid nic");

        jQuery(document).ready(function(e){
            jQuery('#myForm').validate({
                errorElement : 'span',
                rules : {
                    'name': {required: true},
                    'dob': {required: true},
                    nic: 'cnic',
                    contact: 'customphone',
                    'email': {required: true, email: true},
                    'landline': {required: true},
                    'postalAddr': {
                        required: true,
                        minlength: 5,
                        digits: true
                    },
                    'permanentAddr': {required: true},
                    'institution': {required: true},
                    'department': {required: true},
                    'registerNumber': {required: true},
                    'occupation': {required: true},
                    'company_address': {required: true},
                    'business': {required: true},
                    'tag_line': {required: true},

                }
            });
        });
        jQuery(document).on('click','.saveM',function (e) {
            e.preventDefault();
            jQuery('#myForm').submit();
        });
        $("#ex5").slider();


        jQuery(document).ready(function( $ ) {

            //Google Map
            var get_latitude = $('#google-map').data('latitude');
            var get_longitude = $('#google-map').data('longitude');

            function initialize_google_map() {
                var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
                var mapOptions = {
                    zoom: 14,
                    scrollwheel: false,
                    center: myLatlng
                };
                var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize_google_map);

        });
    </script>
@endsection
