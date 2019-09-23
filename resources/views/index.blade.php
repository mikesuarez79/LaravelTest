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
                    <th>Category</th>
		    	</tr>
		    	@foreach($posts as $value)
		    	<tr>
		    		<td>{{ $value->title }}</td>
		    		<td>{{ $value->description }}</td>
                    <td>{{ $value->name }}</td>
		    	</tr>
		    	@endforeach
	    	</table>
    	</div>
    </div>

    <div class="container">

        <?php 
            // i have put it in here just for viewing, this can be removed and enabled on the controller
            echo response()->json($posts);
        ?>
    </div>
    
</body>
</html>