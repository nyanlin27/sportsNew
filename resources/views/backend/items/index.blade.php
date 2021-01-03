@extends('backend_master');
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('items.create') }}" class="btn btn-info float-right"> Add League <i class="mdi mdi-chevron-double-right menu-icon
                    "></i></a>
                <h4 class="card-title">Items List</h4>
                <p class="card-description">
                  All Items
                </p>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Photo</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                      @foreach($items as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="{{ $item->photo }}" alt="items photo"></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                  <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete')" class="d-inline-block">
                                      @csrf
                                      @method('DELETE')
                                      <input type="submit" class="btn btn-danger btn-sm" value="Delete" name="btnsubmit">
                                  </form>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
