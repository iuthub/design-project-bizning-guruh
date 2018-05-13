@extends('admin.layout.app')
@section('title', 'Dashboard Category Controller')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Shopping</a>
        </li>
        <li class="breadcrumb-item active">Categories</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data of Categories</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
                  @if(!empty(@categories))
                    @forelse($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->created_at}}</td>
                  <td>{{$category->updated_at}}</td>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['category.destroy',$category->id]]) !!}

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

      <a class="btn btn-primary" data-toggle="modal" href="#modal-id">Add Category</a>
      <div class="modal fade" id="modal-id">
        <div class="modal-dialog">

          {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h4 class="modal-title">Add Category</h4>
           </div>
           <div class="modal-body">
             <div class="form-group">
             {{ Form::label('name', 'Name') }}
             {{ Form::text('name', null, array('class' => 'form-control'))}}
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class=""="btn btn-primary">Save changes</button>
           </div>
         </div>
         {!! Form::close() !!}

       </div>
     </div>
   </div>
 </div>
@endsection
