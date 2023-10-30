@extends('layouts.template')

@section('content')

        <h1>All the Data</h1>

        <!-- will be used to show any messages -->
        @if(Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Level</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($sharks as $shark)
                <tr>
                    <td>{{ $shark->id }}</td>
                    <td>{{ $shark->name }}</td>
                    <td>{{ $shark->email }}</td>
                    <td>{{ $shark->shark_level }}</td>

                     <!-- we will also add show, edit, and delete buttons -->
                    <td>
                        <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                        <a href="" class="btn btn-small btn-danger">Delete Data</a>

                        <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                        <a href="{{ URL::to('sharks/' . $shark->id) }}" class="btn btn-small btn-success">Show Data</a>

                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        <a href="{{ URL::to('sharks/' . $shark->id . "/edit") }}" class="btn btn-small btn-info">Edit Data</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection
