@extends('layouts.app')

@section('content')

        @foreach ($events as $event)
        <div class="row">   
       
        <div class="col-md-12">
            <div class="info-box">
                    <div class="info-box-icon bg-aqua">
                        <div class="fa fa-cogs"></div>
                    </div>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            {{$event->name}}
                        </span>
                        <span class="info-box-number">
                            {{$event->event_date}}
                        </span>
                    </div>
            </div>
        </div>
        <div class="col-md-4">
                <div class="info-box">
                        <div class="info-box-icon bg-yellow">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Sent Invitations
                            </span>
                            <span class="info-box-number">
                                 {{$event->sent}}
                            </span>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                    <div class="info-box">
                            <div class="info-box-icon bg-green">
                                <i class="fa fa-check-square-o"></i>
                            </div>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    Accepted
                                </span>
                                <span class="info-box-number">
                                    {{$event->accepted}}
                                </span>
                            </div>
                    </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <div class="info-box-icon bg-red">
                                    <i class="fa fa-ban"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">
                                        Rejected
                                    </span>
                                    <span class="info-box-number">
                                        {{$event->rejected}}
                                    </span>
                                </div>
                 </div>
            </div>
    </div>
    @endforeach
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('global.app_dashboard')</div>

                <div class="panel-body">
                    @lang('global.app_dashboard_text')
                </div>
            </div>
        </div>
    </div> --}}
@endsection
