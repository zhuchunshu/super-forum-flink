@if(count(getFlink()))
    <div class="col-md-12">
        <div class="card">
            <div class="card-status-top bg-green"></div>
            <div class="card-body">
                <h3 class="card-title">
                    友情链接
                </h3>
                <p>
                    @foreach(getFlink() as $data)
                        <a href="{{$data->link}}" class="badge {{FlinkrandBg()}}">{{$data->name}}</a>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
@endif