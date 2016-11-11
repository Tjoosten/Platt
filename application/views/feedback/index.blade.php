@layout('layouts/backend')

@section('content')
    <div class="row">
        {{-- Global options --}}
            <div class="col-sm-12">
                {{-- Search form --}}
                    <div style="margin-bottom: 10px;" class="pull-left">
                        <form action="" class="form-inline">
                            <input type="text" name="term" class="form-control" placeholder="Search term">

                            <button class="btn btn-danger" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </form>
                    </div>
                {{-- /Search form --}}

                {{-- Handling buttons --}}
                    <div style="margin-bottom: 10px;" class="pull-right">
                        <a href="#" data-toggle="modal" data-target="#newTicket" class="btn btn-success">Create ticket</a>
                    </div>
                {{-- /END handling buttons --}}
            </div>
        {{-- /END global options --}}

        {{-- Issue content --}}
            @if(count($tickets) == 0)
                <div class="col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table table-condensed table-hover">
                                <thead>

                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-sm-9">
                    <div class="alert alert-info">
                        <strong>Info:</strong> There are no tickets found in the petition.
                        {{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> --}}
                    </div>
                </div>
            @endif
        {{-- /END issue content --}}

        {{-- Menu options --}}
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu:</div>

                    <div class="list-group">
                        <a class="list-group-item">Assigned to you.</a>
                        <a class="list-group-item" href=""> Open Tickets</a>
                        <a class="list-group-item" href=""> Closed tickets</a>
                        <a class="list-group-item" href="{{ base_url('tickers') }}">
                            Total tickets:
                            <span class="pull-right">
                                <span class="label label-danger">2</span>
                                <span class="label label-success">1</span>
                                <span class="label label-info">3</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        {{-- /END menu option  --}}

        {{-- Includes --}}
            @include('feedback/create-ticket')
        {{-- /END includes --}}
    </div>
@endsection