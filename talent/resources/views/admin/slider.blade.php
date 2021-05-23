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
              <h3 class="text-center title-2">Create Slider</h3>
            </div>
            <hr>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <form action="slider" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}
              <div class="form-group">
                <label for="Title" class="control-label mb-1">Title</label>
                <input name="title" type="text" class="form-control" value="{{ old('title') }}">
                @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                @endif
              </div>

              <div class="form-group">
                <label for="subTitle" class="control-label mb-1">SubTitle</label>
                <input name="subTitle" type="text" class="form-control" value="{{ old('subTitle') }}">
                @if ($errors->has('subTitle'))
                <div class="alert alert-danger">{{ $errors->first('subTitle') }}</div>
                @endif
              </div>
              
              <div class="form-group">
                <label for="image" class="control-label mb-1">Image Slider</label>
                <input name="image" type="file" class="form-control">
              </div>
              @if ($errors->has('image'))
                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
              @endif

              <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Add
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- *********************************************************** --}}
    <!-- Start Table  -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
              <h5 class="card-header">Data Table</h5>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered first">
                          <thead>
                              <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>SubTitle</th>
                                <th>image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($sliders as $slider)
                              <tr>
                                  <td>{{$slider->id}}</td>
                                  <td>{{$slider->titleSlider}}</td>
                                  <td>{{$slider->subTitle}}</td>
                                  <td>
                                    <div class="image img-cir img-40 ">
                                      <img src="{{asset("images/{$slider->image}")}}">
                                    </div>
                                  </td>
                                  <td>
                                    <a href="{{ route('slider.edit', $slider->id)}}" class="btn btn-warning">Edit</a>
                                  </td>
                                  <td>
                                    <form action="{{ route('slider.destroy', $slider->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                  </td>
                                </tr>
                                @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>SubTitle</th>
                                <th>image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
      </div>

      <!-- end basic table  -->
  </div>
  {{-- *********************************************************** --}}
  </div>
</div>

@endsection