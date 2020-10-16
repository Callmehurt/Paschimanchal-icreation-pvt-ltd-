@extends('admin.dashboard-layout')

@section('content')

    <div class="col-lg-12">
        <h4 class="p-2">Manage Details</h4>
        <div class="table-wrapper table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">Location</th>
                    <th scope="col">Landline Contact</th>
                    <th scope="col">Mobile Contact</th>
                    <th scope="col">Mail Account</th>
                    <th scope="col">Gmail Account</th>
                    <th scope="col">Domain</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($details as $detail)
                    <tr>
                        <td>{{$detail->office_location}}</td>
                        <td>{{$detail->landline}}</td>
                        <td>{{$detail->mobile}}</td>
                        <td>{{$detail->mail}}</td>
                        <td>{{$detail->gmail}}</td>
                        <td>{{$detail->domain}}</td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#companyModal-{{$detail->id}}">Edit Detail</a>
                        </td>
                    </tr>
                    @include('admin.company-detail-edit')
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @endsection