@extends('layouts.masterAdmin')

@section('content')
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">Manage News</div>
          <div class="card-body">
            <div class="card-title">
              <h3 class="text-center title-2">Create News</h3>
            </div>
            <hr>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <form action="news" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}
              <div class="form-group">
                <label for="title" class="control-label mb-1">Title News</label>
                <input name="title" type="text" class="form-control" value="{{ old('title') }}">
                @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label for="description" class="control-label mb-1">Description News</label>
                <textarea class="form-control" name="description" type="text" rows="3" value="{{ old('description') }}"></textarea>
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
                <label>Date News <small class="text-muted">dd/mm/yyyy</small></label>
                <input name="dateNews" type="date" class="form-control date-inputmask" id="date-mask">
                @if ($errors->has('dateNews'))
                  <div class="alert alert-danger">{{ $errors->first('dateNews') }}</div>
                @endif
            </div>
              <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Add
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- ************************************************* --}}
    
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
                              <th>description</th>
                              <th>Image</th>
                              <th>Date</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($news as $new)
                            <tr>
                              <td>{{$new->id}}</td>
                              <td>{{$new->title_news}}</td>
                              <td>{{$new->description_news}}</td>
                              <td>
                                <div class="image img-cir img-40 ">
                                  <img src="{{asset("images/{$new->image}")}}">
                                </div>
                              </td>
                              <td>{{$new->date_news}}</td>
                              <td>
                                <a href="{{ route('news.edit', $new->id)}}" class="btn btn-warning">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('news.destroy', $new->id)}}" method="post">
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
                              <th>description</th>
                              <th>Image</th>
                              <th>Date</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
      </div>

      <!-- end table  -->
  </div>


  </div>
</div>
@endsection


{{-- ************************************************* --}}
{{-- <div class="row m-t-30">
  <div class="col-md-12">
    <div class="table-responsive m-b-40">
      <table class="table table-borderless table-data3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>description</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($news as $new)
          <tr>
            <td>{{$new->id}}</td>
            <td>{{$new->title_news}}</td>
            <td>{{$new->description_news}}</td>
            <td>
              <div class="image img-cir img-40 ">
                <img src="{{asset("images/{$new->image}")}}">
              </div>
            </td>
            <td>
              {{ route('admin.admin.edit', $new->id)}}
              <a href="" class="btn btn-warning">Edit</a>
            </td>
            <td>
              <form action="" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div> --}}
