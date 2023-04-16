@extends('admin.masterlayout')
@section('content')
{{--    <div>content dashborad</div>--}}
{{--    <form action="{{route('admin.post.logout')}}" method="post">--}}
{{--        {{csrf_field()}}--}}
{{--        <input type="submit" value="Logout">--}}
{{--    </form>--}}
    <div class="row">
        <div class="col-lg-8 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Market Overview</h4>
                                    <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                </div>
                            </div>
                            <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                <div class="me-3"><div id="marketing-overview-legend"></div></div>
                            </div>
                            <div class="chartjs-bar-wrapper mt-3">
                                <canvas id="marketingOverview"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                    <div class="card card-rounded">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                    <div class="card card-rounded">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
