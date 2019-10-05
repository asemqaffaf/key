@extends('layouts.app')
<h1>create</h1>
@section('content')
    <div class="container">
<form action="{{ route('room.store') }}" method="POST" enctype="multipare/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Enter phone">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" placeholder="Price">
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <select class="form-control" name="location" id="location">
            <option>"university of Jordan st."</option>
            <option>"Yarmouk university st. "</option>
            <option>"Al-Balq'a university"</option>
            <option>"Sumaya university"</option>
        </select>
    </div>
    <div class="form-group">
        <label for="floor">Floor</label>
        <select class="form-control" name="floor" id="floor">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="floor">Number of bed</label>
        <select class="form-control" name="num_bed" id="floor">
            <option>1</option>
            <option>2</option>
        </select>
    </div>

    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="one" id="male" value="male" checked>
                    <label class="form-check-label" for="male">
                         Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="one" id="female" value="female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="form-group">
        <label for="description">description textarea</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>

{{--    <div class="form-group">--}}
{{--        <label for="img">Upload Image</label>--}}
{{--        <input type="file" class="form-control-file" id="img">--}}
{{--    </div>--}}


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
@endsection
