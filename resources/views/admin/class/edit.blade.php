 @extends('layouts.app')
 @section('content')
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1>Edit Class</h1>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Main content -->
         <section class="content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card card-primary">
                             <!-- form start -->
                             <form action="" method="post">
                                 {{ csrf_field() }}
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Class Name</label>
                                         <input type="text" name="name" class="form-control"
                                             value="{{ $getRecord->name }}" placeholder="Enter class name" required>
                                     </div>
                                     <div class="form-group">
                                         <label>Status</label>
                                         <select name="status" class="form-control">
                                             <option {{ $getRecord->status == 0 ? 'selected' : '' }} value="0">Active
                                             </option>
                                             <option {{ $getRecord->status == 1 ? 'selected' : '' }} value="1">Inactive
                                             </option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="card-footer">
                                     <button type="submit" class="btn btn-primary">Update</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
     <!-- /.content-wrapper -->
 @endsection
