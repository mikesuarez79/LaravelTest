<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    

    <div class="container">
    	<div class="row">
    		<div class="col-12 text-center">
    			<h2>This is SEARCH page</h2>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-12">
    			@include('partials.search')
    		</div>
    	</div>
    	<div class="row">
	    	<table class="table">
	    		<tr>
		    		<th>Title</th>
		    		<th>Description</th>
		    	</tr>
		    	@foreach($data as $value)
		    	<tr>
		    		<td>{{ $value->title }}</td>
		    		<td>{{ $value->description }}</td>
		    	</tr>
		    	@endforeach
	    	</table>
    	</div>
    </div>
    
</body>
</html>