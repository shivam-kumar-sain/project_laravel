@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="pc-container">
    <div class="pc-content">
      <div class="page-header">
        <div class="page-block">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0)">DataTable</a></li>
            <li class="breadcrumb-item" aria-current="page">Leads</li>
          </ul>
          <div class="page-header-title">
            <h2 class="mb-0">Lead Data</h2>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 md:col-span-10 2xl:col-span-9 mb-5">
          <h5 class="mb-3">All Lead Show Here</h5>
          <p class="text-muted mb-3">The features that DataTables provides can be greatly enhanced by the use of the
            plug-ins available on this page, which give many new user interaction and configuration options.</p>
          <div><a class="btn btn-sm btn-light-dark dark:text-white/50 rounded-full px-2" role="button" target="_blank"
              href="#"><i class="ti ti-external-link me-1"></i> Create Lead</a>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-6">
          <div class="card">
            <div class="card-header">
              <h5>Left and Right Fixed Columns</h5><small>FixedColumns allows columns to be fixed from both the left and
                the right hand sides of the table.</small>
            </div>
            <div class="card-body">
              <table id="left-right-fix" class="table stripe row-border order-column">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Customer Name</th>
                      <th>Customer Phone</th>
                      <th>Customer Address</th>
                      <th>User ID</th>
                      <th>Created At</th>
                      <th>Updated At</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($leads as $lead)
                <tr>
                    <td>{{ $lead->id }}</td>
                    <td>{{ $lead->customer_name }}</td>
                    <td>{{ $lead->customer_phone }}</td>
                    <td>{{ $lead->customer_address }}</td>
                    <td>{{ $lead->user_id }}</td>
                    <td>{{ $lead->created_at }}</td>
                    <td>{{ $lead->updated_at }}</td>
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