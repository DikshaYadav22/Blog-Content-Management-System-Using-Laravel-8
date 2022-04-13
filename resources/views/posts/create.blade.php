@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Add Posts</h3>
    </div>

    <div class="card-body">

        <div class="form-group">
            <form method="POST">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content">
        </div>

        <div class="form-group">
            <label for="date">Published At:</label>
            <input type="date" id="published_at" name="published_at" class="form-control">
        </div>
        <br />
        <button class="btn btn-info" type="submit">Add</button>
        </form>

    </div>
</div>

@endsection