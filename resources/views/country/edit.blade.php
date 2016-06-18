<?php $page_title='Update'; ?>
@extends('layouts.app')
@section('content')

{!!Form::model($classes,['method'=>'PATCH','route'=>['country.update',$classes->id]])!!}
@include('flash::message')
<div class='row'>

        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Country {{$classes->name}}</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                    </div>
                </div>

                <div class="box-body">
                <div class="form-group">
                <span class="star">*</span>
		        {!! Form::label('Name', 'Name') !!}
		        {!! Form::text('name',null,['class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
		    </div>

                </div>
                </div>
                </div>
                </div>
                <script>
    $('#flash-overlay-modal').modal();
</script>
{!!Form::close()!!}                

@endsection