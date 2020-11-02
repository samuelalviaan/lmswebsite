  @csrf
  <div class="form-group">

      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}">
      @if ($errors->has('name'))
      <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif

  </div>

  <div class="form-group">

      <label for="status">Status</label>
      <input type="text" name="status" id="status" class="form-control" value="{{ $course->status }}">
      @if ($errors->has('status'))
      <span class="text-danger">{{ $errors->first('status') }}</span>
      @endif
  </div>

  <div class="form-group">

      <label for="image">Image</label>
      <input type="file" name="image" id="image" class="form-control" style="background-color: grey;" value="{{ $course->image }}">

  </div>

  <div class="form-group">

      <label for="description">Description</label>
      <textarea name="description" id="description" class="form-control" rows="8">{{ $course->description }}</textarea>
      @if ($errors->has('description'))
      <span class="text-danger">{{ $errors->first('description') }}</span>
      @endif
  </div>


  <div class="form-group">

      <label for="user_id">User_ID</label>
      <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $course->user_id }}">
      @if ($errors->has('user_id'))
      <span class="text-danger">{{ $errors->first('user_id') }}</span>
      @endif

  </div>


  <button type="submit" class="btn btn-primary">{{ $submit }}</button>
