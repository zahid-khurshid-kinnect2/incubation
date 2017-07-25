@extends('layouts.default.default')

@section('content')
    <section id="content">
        <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="page-title col-md-offset-4">
                    <div class="title_left">
                        <h3>
                            {{ucwords($usrDetail['0']['business_name'])}} Record

                        </h3>
                    </div>
                </div>
                <div class="col-md-12 col-md-offset-3">
                    @foreach($usrDetail as $registerRecords)
                        <div class="form-group row">
                            <label for="name" class="col-xs-2 col-form-label">Name:</label>
                            <div class="col-xs-10">
                                <label data-title="Name">{{strtoupper($registerRecords->name)}}</label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-xs-2 col-form-label">N.I.C Picture:</label>
                            <div class="col-xs-10">
                                <label data-title="N.I.C"><img style="width: 200px;height: 150px"
                                                               src="{!! getImage($registerRecords->uni_id_card) !!}"/></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="N.I.C" class="col-xs-2 col-form-label">N.I.C #:</label>
                            <div class="col-xs-10">
                                <label data-title="N.I.C #">{{$registerRecords->nic_number}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Gender" class="col-xs-2 col-form-label">Gender:</label>
                            <div class="col-xs-10">
                                <label data-title="Gender">{{$registerRecords->gender == 1 ? 'Male' : 'Female'}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Date Of Birth" class="col-xs-2 col-form-label">Date of Birth:</label>
                            <div class="col-xs-10">
                                <label data-title="Date Of Birth">{{$registerRecords->dob}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-xs-2 col-form-label">Degree:</label>
                            <div class="col-xs-10">
                                <?php
                                if(isset($registerRecords->contactId[1]->name )){
                                    $master = $registerRecords->contactId[1]->name;
                                }else{
                                    $master = '';
                                }
                                if(isset($registerRecords->contactId[2]->name )){
                                    $phd = $registerRecords->contactId[2]->name;
                                }else{
                                    $phd = '';
                                }
                                ?>
                                <label data-title="Degree">{{ucwords($registerRecords->contactId[0]->name). "," .ucwords($master). ",". ucwords($phd) }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nationality" class="col-xs-2 col-form-label">Nationality:</label>
                            <div class="col-xs-10">
                                <label data-title="Country">{!!country_name($registerRecords->nationality)  !!}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Marital Status:</label>
                            <div class="col-xs-10">
                                <label data-title="Marital Status">{{$registerRecords->marital_status == 1 ? 'Married': 'Unmarried'}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Contact Number:</label>
                            <div class="col-xs-10">
                                <label data-title="Marital Status">{{$registerRecords->contact_number}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Email:</label>
                            <div class="col-xs-10">
                                <label data-title="Email">{{$registerRecords->email}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Land Line:</label>
                            <div class="col-xs-10">
                                <label data-title="Land Line">{{$registerRecords->landline}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Postal Address:</label>
                            <div class="col-xs-10">
                                <label data-title="Postal Address">{{$registerRecords->postal_address}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Institute Name:</label>
                            <div class="col-xs-10">
                                <label data-title="Institute Name">{{$registerRecords->institution_name}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Department:</label>
                            <div class="col-xs-10">
                                <label data-title="Institute Name">{{$registerRecords->department_name}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Occupation:</label>
                            <div class="col-xs-10">
                                <label data-title="Occupation Name">{{$registerRecords->occupation == '' ? 'Not Available' : $registerRecords->occupation}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Company Address:</label>
                            <div class="col-xs-10">
                                <label data-title="Company Address">{{$registerRecords->company_address}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Business:</label>
                            <div class="col-xs-10">
                                <label data-title="Company Address">{{$registerRecords->business_name}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Business Tag:</label>
                            <div class="col-xs-10">
                                <label data-title="Company Address">{{$registerRecords->business_tag_line}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Profit:</label>
                            <div class="col-xs-10">
                                <label data-title="funding">{{$registerRecords->funding . " " . '%'}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Profit Generation Time:</label>
                            <div class="col-xs-10">
                                <label data-title="funding">{{$registerRecords->profit_time}}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital" class="col-xs-2 col-form-label">Action:</label>
                            <div class="col-xs-10">
                                <a href="#" class="delete-list delete" data-toggle="modal" data-target="#delModal" id="{{$registerRecords->id}}">Delete</a>
                            </div>
                        </div>


                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    <div id="delModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Record.</p>
                </div>
                <div class="modal-footer">
                    <input class="delUser" type="hidden" name="delUser" value="{{$registerRecords->id}}">
                    <a href="#" class="btn btn-danger delP" data-dismiss="modal">Delete</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>

        </div>
    </div>

    <script src="{{asset('local/public/multiselect/jquery.min.js')}}"></script>
    <script>
        $('.delP').click(function (e) {
            e.preventDefault();
            var delUser =  $('.delUser').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });//for token purpose in laravel

            jQuery.ajax({
                type: "Post",
                url: '{{url('deleteRecord')}}',
                data: {delUser: delUser},
                success: function (data) {
                    if (data > 0) {
                        window.location.href = "{{url('dataDetail')}}";
                    } else {
                        return false;
                    }
                }, error: function (xhr, ajaxOptions, thrownError) {
                    alert("ERROR:" + xhr.responseText + " - " + thrownError);
                }
            });
        });
    </script>
@endsection
