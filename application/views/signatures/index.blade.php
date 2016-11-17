@layout('layouts/backend')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{-- Search form --}}
            {{-- /Search form --}}
        </div>

        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Handtekeningen:
                   <div class="pull-right">
                       {{ $signatures }} / <strong>{{ $this->config->item('sign_count') }}</strong> Handtekeningen.
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection