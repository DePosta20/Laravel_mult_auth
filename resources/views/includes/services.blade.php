@foreach ($services as $service)
    <div class="col-md-4 mb-3 service">
        <div class="card hover-shadow">
            <div class="bg-image hover-overlay hover-zoom hover-shadow">
                <img class="card-img-top img-fluid" style="height:250px;"
                    src="{{ asset('storage/' . $service->avatar) }}" alt="{{ $service->name }} image">
                <div class="mask hover-overlay" style="background-color: rgba(0, 0, 0, 0.589);">
                    <center class="p-3 py-4">
                        <h5>
                            <dl class="row card-text text-start text-white">
                                <dt class="col-sm-1"><i class="ri-cup-line"></i></dt>
                                <dd class="col-sm-11">
                                    {{ $service->cafeteria->name }}
                                </dd>
                            </dl>
                        </h5>
                        <h5>
                            <dl class="row card-text text-start text-white">
                                <dt class="col-sm-1"><i class="fa fa-university"></i></dt>
                                <dd class="col-sm-11">
                                    {{ $service->cafeteria->school->name }}
                                </dd>
                            </dl>
                        </h5>
                    </center>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <h6 class="card-title"><strong>{{ $service->name }}</strong></h6>
                    <h4>
                        <p class="card-text text-primary">
                            {{ $currency }} @convert($service->amount)
                        </p>
                    </h4>
                    <button class="btn btn-secondary" data-mdb-toggle="modal"
                        data-mdb-target="#service_{{ $service->id }}">
                        Details
                    </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="service_{{ $service->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        @include('user.services.show')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
