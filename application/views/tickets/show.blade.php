@layout('layouts/backend')

@section('content')
    <div class="row">
        {{-- Content --}}
            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Informatie:</div>

                    <ul class="list-group">
                        <li class="list-group-item">Email: {{ $ticket->email; }}</li>
                    </ul>
                </div>
            </div>
        {{-- /Content --}}

        {{-- Sidebar --}}
            <div class="col-sm-3">

            </div>
        {{-- /Sidebar --}}
    </div>
@endsection