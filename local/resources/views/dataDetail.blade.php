@extends('layouts.default.default')

@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Client List Group</h2>
                    @if($registerRecord->isEmpty())
                        <ul class="list-group">
                                <li class="list-group-item">No Record Found</li>
                        </ul>
                    @else
                    <ul class="list-group">

                            @foreach($registerRecord as $registerRecords)
                                <li class="list-group-item"><a
                                            href="{{url('getUsrDetail/'.$registerRecords->id)}}">{{ucwords($registerRecords->business_name)}}</a>
                                </li>
                            @endforeach

                    </ul>
                    {!! $registerRecord->links() !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
