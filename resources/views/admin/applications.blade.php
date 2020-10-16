@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-12">
        <h4 class="p-2">Recent Applications</h4>
        <div class="table-wrapper table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($applications as $key=>$applicant)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <th scope="row">{{$applicant->fullname}}</th>
                        <th scope="row">{{$applicant->email}}</th>
                        <th scope="row">{{$applicant->contact}}</th>
                        <td>
                            <a href="{{route('download.cv', [$applicant->id])}}" class="btn btn-primary" target="_blank">Download CV</a>
                            <form action="{{route('delete.application', [$applicant->id])}}" method="post">
                                @method('post')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @endsection