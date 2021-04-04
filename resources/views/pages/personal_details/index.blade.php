@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('personal_details.create') }}" class="btn btn-primary float-right"><i class="fas fa-user-plus"></i> Add</a>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Birth Date</th>
                        <th>Gender</th>
                        <th>Marital Status</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>Address</th>
                        <th>SSS ID No.</th>
                        <th>TIN ID No.</th>
                        <th>Philhealth ID No.</th>
                        <th>Pag-Ibig ID No.</th>
                        <th>Date Created</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection


