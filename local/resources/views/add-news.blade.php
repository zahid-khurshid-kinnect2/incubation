@extends('layouts.default.default')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Add News</h2>
                    {!! Form::open(['url' => '/save-news','class' => '','data-parsley-validate', 'enctype'=>"multipart/form-data" , 'id' => 'addNews']) !!}

                    <div>
                        <label for="something">Something:</label>
                        <div class="form-group">
                            <input type="text" id="something" name="title" required>
                        </div>
                    </div>

                    <div class="form-group" >
                        <label for="remarks">Something 3:</label>
                        <textarea id="remarks" name="description" class="form-control" required></textarea>
                    </div>

                    {{--Avatar--}}
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="middle-name" class="control-label">Image URL <span class="mandatory-color">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input id="file" type="file" class="btn btn-secondary" name="image_url">
                        </div>
                    </div>

                    {{--Avatar Image--}}
                    <div class="form-group hide" id="preview">
                        <div class="col-sm-8 col-sm-offset-4">
                            <div class="emp_upload_avatar">
                                <img class="img-responsive" alt="" src="">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-default">Submit</button>

                </div>

                {!! Form::close() !!}


                            </div>
                        </div>
    </section>











@endsection
