@extends('layouts.masterAdmin')


@section('content')
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <!-- Start Input  -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">Manage Event</div>
          <div class="card-body">
            <div class="card-title">
              <h3 class="text-center title-2">Edit Event</h3>
            </div>
            <hr>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <form action="{{route('event.update',$event->id)}}" method="post" enctype="multipart/form-data">
              @method('PATCH')
              {{ csrf_field() }}
              <div class="form-group">
                <label for="title" class="control-label mb-1">Title Event</label>
                <input name="title" type="text" class="form-control" value="{{ $event->title_event }}">
                @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="description" class="control-label mb-1">Description Event</label>
                <textarea class="form-control" name="description" type="text" rows="3">{{ $event->description_event }}</textarea>
                @if ($errors->has('description'))
                <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="image" class="control-label mb-1">Image</label>
                <input name="image" type="file" class="form-control">
                @if ($errors->has('image'))
                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                @endif
              </div>
              <div class="form-group col-lg-4">
                <label>Date Event <small class="text-muted">dd/mm/yyyy</small></label>
                <input name="dateEvent" type="date" class="form-control date-inputmask" id="date-mask" value="{{$event->date_event}}">
                @if ($errors->has('dateEvent'))
                  <div class="alert alert-danger">{{ $errors->first('dateEvent') }}</div>
                @endif
              </div>
              <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Update
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Input  -->
  </div>
</div>
@endsection
