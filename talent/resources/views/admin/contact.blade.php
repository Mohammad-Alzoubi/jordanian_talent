@extends('layouts.masterAdmin')

@section('content')
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <!-- Start Table  -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
              <h5 class="card-header">Data Table</h5>
              <div class="card-body">
              @if ($message = Session::get('success'))
                <p class="alert alert-success">
                  {{ $message }}
                </p>
              @endif
              
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered first">
                          <thead>
                              <tr>
                                <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Message</th>
                                  <th>Delete</th>
                                </tr>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($contacts as $contact)
                              <tr>
                                  <td>{{$contact->id}}</td>
                                  <td>{{$contact->name}}</td>
                                  <td>{{$contact->email}}</td>
                                  <td>{{$contact->message}}</td>
                                  {{-- <td>
                                    <form class="mb-0" action="{{ route('admin.contact', $contact->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                  </td> --}}
                                  <td><a style="color: #f00" href="/admin/contact/{{$contact['id']}}">Delete</a></td>

                                </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
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
    <div style="height: 300px;background:#EFEFF6">

    </div>
  </div>
</div>
@endsection
