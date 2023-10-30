@extends('layouts.template')

@section('content')

    <!-- if there are creation errors, they will show here -->
    <ul>
        <li>Error</li>
    </ul>

    <div class="col">
        <div class="row-md-4">
            <form action="/sharks" method="post">
                @csrf
        
                <div class="form-grup">
                    <label for="name">Name</label>
                    <input class="form-control type="text" name="name" id="name" placeholder="input name">
                </div>
        
                <div class="form-grup">
                    <label for="email">Email</label>
                    <input class="form-control type="email" name="email" id="email" placeholder="input email">
                </div>
        
                <div class="form-grup mb-4  ">
                    <label for="shark_level">Level</label>
                    <select class="form-select" name="shark_level" id="level">
                        <option value="0">-- Select Level --</option>
                        <option value="1">Admin</option>
                        <option value="2">Guest</option>
                        <option value="3">Manager</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Create Data</button>
            </form>
        </div>
    </div>
    

@endsection