@extends('layouts.layout')
@section('content')
<div class="container">
<div class="jumbotron">
    <h2 class="text-center">
        Create a blog
    </h2>
    <form action="/blogs" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Author" required>
        </div>
        <div class="form-group col-md-6">
            <label for="tilte">Tilte</label>
            <input type="text" maxlength="50" name="title" id="title" class="form-control" placeholder="Tilte" required>
            <small class="form-text text-muted"> Only 50 characters</small>
        </div>
    </div>

    <div class="form-group">
    <fieldset>
      <label>Select the category: </label>
      <input type="checkbox" name="category[]" value="Tech" class="ml-1" id="Tech"> Tech
      <input type="checkbox" name="category[]" value="Cult" class="ml-1" id="Cultural"> Cultural
      <input type="checkbox" name="category[]" value="Fun" class="ml-1" id="Fun"> Fun<br />
    </fieldset>
    </div>

    <div class="form-group">
        <label for="post">Post</label>
        <textarea name="post" id="post"  class="form-control" style="min-height:150px;height:100%;width:100%;" required ></textarea>
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
    </form>
</div>
</div>


@endsection