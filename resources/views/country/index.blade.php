<?php $page_title='Country'; ?>
@extends('layouts.app')

@section('content')
<?php $inc=1; ?>
@include('flash::message')

    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <a href="{{url('country/create')}}">Create New</a>

                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                    </div>
                </div>

                <div class="box-body">
               	
 			
 				<table class="table table-striped table-bordered table-hover">
     			<thead>
     			<tr class="bg-info">
     				<th>S. no.</th>
     				<th>Name</th>
     				<th colspan="2">Options</th>
     				
     			</tr>
     			</thead>
     			<tbody>
			     @foreach ($country as $countries)
			         <tr>
			         <td>{{$inc}}</td>
			         <td>{{$countries->name}}</td>
			         <td><a href="{{route('country.edit',$countries->id)}}" class="btn btn-warning">Update</a></td>
			         <td>
                     {!! Form::open(['method' => 'DELETE', 'route'=>['country.destroy', $countries->id],'id'=>'myForm']) !!}
                     {!! Form::submit('Delete', ['class' => 'btn btn-danger','id'=>'delete']) !!}
                     {!! Form::close() !!}         
                     </td>
			         </tr>
			         <?php $inc++; ?>
			     @endforeach    
			         </tbody>
     			</table>
     			</div>
                </div>
                </div>
    </div>
           <script>
    $('#flash-overlay-modal').modal();

    $("#myForm").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });

</script>

@endsection
