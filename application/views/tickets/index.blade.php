@layout('layouts/backend')

@section('content')
	@if (isset($_SESSION['class']) && isset($_SESSION['message'])) 
		<div class="{{ $_SESSION['class'] }}">
		</div>
	@endif

	<div class="row">
		{{-- Navbar menu --}}
			<div class="col-sm-12">
				<ul class="nav nav-tabs" role="tablist">
			    	<li role="presentation" class="active"><a href="#tab_1" aria-controls="home" role="tab" data-toggle="tab">Tickets</a></li>
				    <li role="presentation"><a href="#tab_2" aria-controls="profile" role="tab" data-toggle="tab">Labels</a></li>
				    <li role="presentation"><a href="#tab_3" aria-controls="messages" role="tab" data-toggle="tab">Applicaties</a></li>
			  	</ul>
			</div>
		{{-- /Navbar menu --}}
	</div>

		{{-- Navbar tab menu --}}
			<div class="tab-content">
				{{-- Tickets --}}
				   	<div role="tabpanel" class="tab-pane fade in active" id="tab_1">
				    	<div class="row">
				    		{{-- Search and functions --}}
				    			<div class="col-sm-12">
				    				{{-- Search form --}}
					    				<div class="panel-functions pull-left">
					    					<form class="form-inline" method="POST" action="">
					    						<input type="text" class="form-control" name="term" placeholder="Uw zoekterm" />

					    						<button type="submit" class="btn btn-danger">
					    							<span class="glyphicon glyphicon-search"></span> Zoek	
					    						</button>
					    					</form>
					    				</div>
				    				{{--  /Search form --}}

				    				{{-- Functions --}}
				    					<div class="panel-functions pull-right">
				    						<a href="#" class="btn btn-success">Ticket aanmaken</a>
				    					</div>
				    				{{--  /Functions --}}
				    			</div>
				    		{{-- /Search and functions --}}

				    		{{-- Tickets overview --}}
				    			<div class="col-sm-12">
				    				<div class="panel panel-default">
					    				<div class="panel-body">
					    					<table class="table table-condensed table-hover">
					    						<thead>
					    							<tr>
					    								<th>#</th>
					    								<th>Email:</th>
					    								<th>Naam:</th>
					    							</tr>	
					    						</thead>
					    					</table>
					    				</div>
					    			</div>
				    			</div>
				    		{{-- /Tickets overview --}}
				    	</div>
					</div>
				{{-- /Tickets --}}

				{{-- Labels --}}
				    <div role="tabpanel" class="tab-pane fade in" id="tab_2">
				    	Labels
				    </div>
				{{--  /Labels --}}

				{{-- Applications --}}
				    <div role="tabpanel" class="tab-pane fade in" id="tab_3">
				    	Applicaties
				    </div>
				{{-- /Applications --}}
			</div>
		</div>
	{{-- /Navbar tab menu --}}
	
	{{--  Includes --}}
		@include('tickets/insert')
	{{--  /Includes --}}
@endsection