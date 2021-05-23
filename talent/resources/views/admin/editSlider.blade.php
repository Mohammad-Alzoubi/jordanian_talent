{{-- @extends('layouts.app') --}}
@extends('layouts.masterAdmin')

@section('content')

<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">Manage Slider</div>
          <div class="card-body">
            <div class="card-title">
              <h3 class="text-center title-2">Edit Slider</h3>
            </div>
            <hr>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif

            <form action="{{route('slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
              @method('PATCH')
              {{ csrf_field() }}
              <div class="form-group">
                <label for="Title" class="control-label mb-1">Title</label>
                <input name="title" type="text" class="form-control" value="{{$slider->titleSlider}}">
                @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                @endif
              </div>

              <div class="form-group">
                <label for="subTitle" class="control-label mb-1">SubTitle</label>
                <input name="subTitle" type="text" class="form-control" value="{{$slider->subTitle}}">
                @if ($errors->has('subTitle'))
                <div class="alert alert-danger">{{ $errors->first('subTitle') }}</div>
                @endif
              </div>
              
              <div class="form-group">
                <label for="image" class="control-label mb-1">Image Slider</label>
                <input name="image" type="file" class="form-control">
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
  </div>
</div>

@endsection