@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <p class="pt-2 m-0 float-left"><i class="fas fa-info-circle text-primary"></i> Fields with <b>*</b> are required.</p></h3> 
            <a href="{{ route('personal_details.index') }}" class="btn btn-success float-right"><i class="fas fa-users"></i> Personal Details List</a>
        </div>
        <div class="card-body">
              
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach

            @endif
            {{ Form::open(['url' => route('personal_details.store'), 'method' => 'POST', 'files' => 'true']) }}
            @include('includes.forms.personal_detail')
            <div class="mt-3">
                <button type="reset" class="btn btn-danger"><i class="fas fa-recycle"></i> Reset</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
            </div>
        </div>
    </div>
@endsection


