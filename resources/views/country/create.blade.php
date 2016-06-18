<?php
/**
 * Created by PhpStorm.
 * User: Ritesh Singh
 * Date: 4/16/2016
 * Time: 5:10 PM
 */?>
<?php $page_title='create'?>
@extends('layouts.app')
@section('content')
 @include('flash::message')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">New Country</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                    </div>
                </div>

                <div class="box-body">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                    {!! Form::open([
    'route' => 'country.store'
]) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <span class="star">*</span>
                        {!! Form::label('title', 'Name', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                </div>
    </div>
    </div>

    <script>
    $('#flash-overlay-modal').modal();
</script>

@endsection
