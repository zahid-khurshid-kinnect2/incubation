@extends('layouts.default.default')

@section('content')




    <div class="x_panel">
        <div class="x_content">
            <div class="col-sm-6">
                <div class="modal-body">
                    {!! Form::open(['url' => '/edit-news','class' => '','data-parsley-validate', 'enctype'=>"multipart/form-data" , 'id' => 'addNews']) !!}


                    {{--Type Of TimeOff --}}
                    {{--<div class="form-group">--}}
                        {{--<label for="timeOff-type" class="control-label">Type Of TimeOff : </label>--}}
                        {{--<div class="selection-container">--}}
                            {{--<label class="radio-inline">--}}
                                {{--<input name="leave_type" type="radio" id="inlineCheckbox1" value="permanent" checked> Sick--}}
                            {{--</label>--}}
                            {{--<label class="radio-inline">--}}
                                {{--<input name="leave_type" type="radio" id="inlineCheckbox1" value="part-time"> Casual--}}
                            {{--</label>--}}

                            {{--<label class="radio-inline">--}}
                                {{--<input name="leave_type" type="radio" id="inlineCheckbox1" value="part-time"> Unpaid--}}
                            {{--</label>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    <div>
                        <label for="something">Something:</label>
                        <div class="form-group">
                            <input type="text" id="something" name="something">
                        </div>
                    </div>

                    <div>
                        <label for="something">Something 2:</label>
                        <div class="form-group">
                            <input type="text" id="something" name="something">
                        </div>
                    </div>


                    <div class="form-group" >
                        <label for="comments">Something 3:</label>
                        <textarea id="comments" name="remarks" class="form-control"></textarea>
                    </div>

                    <div class="form-group" >
                        <label for="comments">Something 4:</label>
                        <textarea id="comments" name="remarks" class="form-control"></textarea>
                    </div>


                    <button type="submit" class="btn btn-default">Submit</button>

                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>



@endsection
