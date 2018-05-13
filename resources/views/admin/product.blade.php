@extends('admin.layout.app')
@section('title', 'Dashboard Product Controller')


@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">My Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Products List</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data of all products</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Added</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Added</th>
                <th>Delete</th>
              </tr>
            </tfoot>
            <tbody>
                @if(!empty(@products))
                  @forelse($products as $product)
              <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{count($product->category)?$product->category->name:"N/A"}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                {!! Form::open(['method'=>'DELETE', 'route'=>['product.destroy',$product->id]]) !!}
              <td>  <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit"
               class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"
               class='btn btn-danger'>Delete
             </button></td>
  {!! Form::close() !!}
                @empty
                <td>NO data</td>
              </tr>
              @endforelse
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

    </div>
      <a class="btn btn-primary" href="{{ route('product.create') }}">Add Products</a>
  </div>
    </div>
@endsection
