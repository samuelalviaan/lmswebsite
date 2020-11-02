@csrf
<div class="form-group">

    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $content->name }}">
    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif

</div>

<div class="form-group">

    <label for="type">Type</label>
    <input type="text" name="type" id="type" class="form-control" value="{{ $content->type }}">
    @if ($errors->has('type'))
    <span class="text-danger">{{ $errors->first('type') }}</span>
    @endif

</div>


<div class="form-group">

    <label for="body">Body</label>
    <input type="text" name="body" id="body" class="form-control" value="{{ $content->body }}">
    @if ($errors->has('body'))
    <span class="text-danger">{{ $errors->first('body') }}</span>
    @endif

</div>

<div class="form-group">

    <label for="status">Status</label>
    <input type="text" name="status" id="status" class="form-control" value="{{ $content->status }}">
    @if ($errors->has('status'))
    <span class="text-danger">{{ $errors->first('status') }}</span>
    @endif

</div>

<div class="form-group">

    <label for="course_id">Course_ID</label>
    <input type="text" name="course_id" id="course_id" class="form-control" value="{{ $content->course_id }}">
    @if ($errors->has('course_id'))
    <span class="text-danger">{{ $errors->first('course_id') }}</span>
    @endif

</div>


<button type="submit" class="btn btn-primary">{{ $submit }}</button>
