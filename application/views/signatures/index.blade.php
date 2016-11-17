@layout('layouts/backend')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{-- Search form --}}
                <div style="margin-bottom: 15px;" class="pull-left">
                    <form method="POST" action="" class="form-inline"> 
                        <input class="form-control" placeholder="Search term" name="term" />
                        <button type="submit" class="btn btn-danger">
                            <span class="glyphicon glyphicon-search"></span> Zoek
                        </button>
                    </form>   
                </div>
            {{-- /Search form --}}

            {{-- Functions --}}
            {{-- /Functions -- --}}
        </div>

        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Handtekeningen:
                   <div class="pull-right">
                       {{ $signatures }} / <strong>{{ $this->config->item('sign_count') }}</strong> Handtekeningen.
                   </div>
                </div>

                <div class="panel-body">
                    @if (count($results) == 0)
                        <div class="alert alert-info">
                            There are no signatures found in the system.
                        </div> 
                    @else
                    @endif
                </div>
            </div>

            {{-- pagination --}}
                {{ $links }}
            {{-- /pagination --}}
        </div>
    </div>
@endsection