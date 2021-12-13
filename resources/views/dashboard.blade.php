@extends('layouts.main')
@section('title', "U.S. FDA Prior Notice Management System")

@section('meta_description', "Create U.S. FDA Prior Notice through our web form . Very easy and simple to use . Get yours prior notice confirmation within 5 minutes .")
@section('page-style')
<style>
    .status-block {
        height: 90px;
    }
    .status-block-1 {
        height: 100px;
    }
    .state-success {
        background: #49a75f;
    }
    .state-warning {
        background: #c2a442;
    }
    .state-danger {
        background: #e45460;
    }
</style>
@endsection
@section('content')

<!-- @include('Shipment.nav') -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header h5">Statistics</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <a href="/status?un-use=false&queued=false&processing-m=false&processing-a=false&complete=true&notified=true&exception=false">
                                <div class="card pink lighten-1 white-text mb-3">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-content-center p-2">
                                            <div><i class="far fa-paper-plane fa-3x"></i></div>
                                            <h1 class="mb-0">{{$ticket_created_count}}</h1>
                                        </div>
                                    </div>
                                    <hr class="hr-light">
                                    <div class="card-body pt-0">
                                        <h6 class="font-weight-bold mb-1 text-right">Prior notice created</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <a href="/status?un-use=false&queued=true&processing-m=false&processing-a=false&complete=false&notified=false&exception=false">
                                <div class="card cyan darken-1 white-text mb-3">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-content-center p-2">
                                            <div><i class="far fa-clock fa-3x"></i></div>
                                            <h1 class="mb-0">{{$ticket_queued_count}}</h1>
                                        </div>
                                    </div>
                                    <hr class="hr-light">
                                    <div class="card-body pt-0">
                                        <h6 class="font-weight-bold mb-1 text-right">Prior notice in queue</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <a href="/status?un-use=false&queued=false&processing-m=true&processing-a=true&complete=false&notified=false&exception=false">
                                <div class="card green darken-1 white-text mb-3">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-content-center p-2">
                                            <div><i class="fas fa-cogs fa-3x"></i></div>
                                            <h1 class="mb-0">{{$ticket_process_count}}</h1>
                                        </div>
                                    </div>
                                    <hr class="hr-light">
                                    <div class="card-body pt-0">
                                        <h6 class="font-weight-bold mb-1 text-right">Prior notice in process</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header h5">My remaining</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="card blue-gradient white-text mb-3">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between align-content-center p-2">
                                        <div><i class="far fa-credit-card fa-3x"></i></div>
                                        <h1 class="mb-0">{{$credits}}</h1>
                                    </div>
                                </div>
                                <hr class="hr-light">
                                <div class="card-body pt-0">
                                    <h6 class="font-weight-bold mb-1 text-right">Available credits</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <a href="/status?un-use=true&queued=false&processing-m=false&processing-a=false&complete=false&notified=false&exception=false">
                                <div class="card purple-gradient white-text mb-3">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-content-center p-2">
                                            <div><i class="fas fa-barcode fa-3x"></i></div>
                                            <h1 class="mb-0">{{$unused_count}}</h1>
                                        </div>
                                    </div>
                                    <hr class="hr-light">
                                    <div class="card-body pt-0">
                                        <h6 class="font-weight-bold mb-1 text-right">Unused voucher</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-2 text-right">
                    <a class="btn  rgba-pink-strong text-white" href="https://fda.express/US-FDA-Prior-Notice-Credit-p367724103" target="_blank">Buy more credit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header h5">System Health & Statistic</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-around align-items-center status-block-1">
                                    <h4 class="text-center">{{$queued}}</h4>
                                    <h6 style="width: 60%; text-align:center">Total prior notice<br>in queue</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-around align-items-center status-block-1">
                                    <h4 class="card-title text-center">{{$created}}</h4>
                                    <h6 style="width: 60%; text-align:center">Total prior notice created<br>( last 7 days )</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-around align-items-center status-block-1">
                                    <h4 class="card-title text-center">{{$avg_diff}} min</h4>
                                    <h6 style="width: 60%; text-align:center">Average time to create prior notice<br>( only 100 latest )</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($system_status as $item)
                        <div class="col-md-12 col-lg-3">
                            <div class="card py-2 mb-3 state-{{$item->color}}">
                                <div class="card-body text-white d-flex justify-content-center align-items-center status-block">
                                    <h5 class="font-weight-bold mb-0 text-center">
                                        {{$item->transportation_mode}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title text-center">The color meaning of system status</h5>
                                    <div class="note note-success mb-3">
                                        <h5 class="green-text">Full Operation</h5>
                                        <p class="font-weight-normal mb-0">😁 You will receive prior notice within 5 minutes.</p>
                                    </div>

                                    <div class="note note-warning mb-3">
                                        <h5 class="orange-text">Semi Operation</h5>
                                        <p class="font-weight-normal mb-0">😀 You will receive prior notice within 120-180 minutes.</p>
                                    </div>

                                    <div class="note note-danger mb-3">
                                        <h5 class="red-text">System Halt</h5>
                                        <p class="font-weight-normal mb-0">😕 Sorry . Something seems to have happened . We'll fix it soon.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
