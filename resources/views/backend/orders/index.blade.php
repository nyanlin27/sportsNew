@extends('backend_master')
@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Order Table</h4>
            {{-- <p class="card-description">
              Add class <code>.table</code>
            </p> --}}
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Order Date.</th>
                    <th>User Name</th>
                    <th>Total</th>
                    <th>Order No</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($orders as $order)
                        <th>{{ $i++ }}</th>
                        <th>{{ $order->orderdate }}</th>
                        <th>{{ $order->user_id }}</th>
                        <th>{{ $order->total }}</th>
                        <th>{{ $order->orderno }}</th>
                        <th>{{ $order->status }}</th>
                    @endforeach
                  {{-- <tr>
                      <th>1</th>
                      <td>12 May 2017</td>
                    <td>Jacob</td>
                    <td>53275531</td>
                    <td><label class="badge badge-danger">Pending</label></td>
                  </tr> --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
