 @extends('layouts.app')
 @section('content')
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1>Edit Teacher</h1>
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
                             <form action="" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="form-group col-md-6">
                                             <label>First Name <span style="color: red">*</span> </label>
                                             <input type="text" name="name"
                                                 value="{{ old('name', $getRecord->name) }}" class="form-control"
                                                 placeholder=" First Name" required>
                                             <div style="color: red;">
                                                 {{ $errors->first('name') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6" style="margin-bottom:0px;">
                                             <label> Last Name <span style="color: red">*</span> </label>
                                             <input type="text" name="last_name"
                                                 value="{{ old('last_name', $getRecord->last_name) }}" class="form-control"
                                                 placeholder="Last Name" required>
                                             <div style="color: red;">
                                                 {{ $errors->first('last_name') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Gender <span style="color: red">*</span> </label>
                                             <select name="gender" required class="form-control">
                                                 <option value="">Select Gender</option>
                                                 <option {{ old('gender', $getRecord->gender) == 'Male' ? 'selected' : '' }}
                                                     value="Male">
                                                     Male
                                                 </option>
                                                 <option
                                                     {{ old('gender', $getRecord->gender) == 'Female' ? 'selected' : '' }}
                                                     value="Female">
                                                     Female</option>
                                                 <option value="Other">Other</option>
                                             </select>
                                             <div style="color: red;">
                                                 {{ $errors->first('gender') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Date of Birth <span style="color: red">*</span> </label>
                                             <input type="date" name="date_of_birth"
                                                 value="{{ old('date_of_birth', $getRecord->date_of_birth) }}"
                                                 class="form-control" required>
                                             <div style="color: red;">
                                                 {{ $errors->first('date_of_birth') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Date of Joining <span style="color: red">*</span> </label>
                                             <input type="date" name="admission_date"
                                                 value="{{ old('admission_date', $getRecord->admission_date) }}"
                                                 class="form-control" required>
                                             <div style="color: red;">
                                                 {{ $errors->first('admission_date') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Mobile Number <span style="color: red">*</span> </label>
                                             <input type="text" name="mobile_number"
                                                 value="{{ old('mobile_number', $getRecord->mobile_number) }}"
                                                 class="form-control" placeholder="Mobile Number" required>
                                             <div style="color: red;">
                                                 {{ $errors->first('mobile_number') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6" style="margin-bottom:0px;">
                                             <label> Marital Status <span style="color: red">*</span> </label>
                                             <input type="text" name="marital_status"
                                                 value="{{ old('marital_status', $getRecord->marital_status) }}"
                                                 class="form-control" placeholder="Marital Status" required>
                                             <div style="color: red;">
                                                 {{ $errors->first('marital_status') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Profile Pic <span style="color: red">*</span> </label>
                                             <input type="file" name="profile_pic" class="form-control">
                                             <div style="color: red;" {{ $errors->first('profile_pic') }}>
                                                 @if (!empty($getRecord->getProfile()))
                                                     <img src="{{ $getRecord->getProfile() }}" alt="profile_pic"
                                                         style="width: auto ;height:70px;">
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Current Address <span style="color: red">*</span> </label>
                                             <textarea name="address" style="display: inline-block" class="form-control" required>{{ old('address', $getRecord->address) }}</textarea>
                                             <div style="color: red;">
                                                 {{ $errors->first('address') }}</div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Permanent Address <span style="color: red">*</span> </label>
                                             <textarea name="permanent_address" style="display: inline-block" class="form-control" required>{{ old('permanent_address', $getRecord->permanent_address) }}</textarea>
                                             <div style="color: red;">
                                                 {{ $errors->first('permanent_address') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Qualification <span style="color: red">*</span> </label>
                                             <textarea name="qualification" class="form-control" style="display: inline-block" required>{{ old('qualification', $getRecord->qualification) }}</textarea>
                                             <div style="color: red;">
                                                 {{ $errors->first('qualification') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Work Experience <span style="color: red">*</span> </label>
                                             <textarea name="work_experience" class="form-control" required>{{ old('work_experience', $getRecord->work_experience) }}</textarea>
                                             <div style="color: red;">
                                                 {{ $errors->first('work_experience') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Note <span style="color: red">*</span> </label>
                                             <textarea name="note" class="form-control" required>{{ old('note', $getRecord->note) }}</textarea>
                                             <div style="color: red;">
                                                 {{ $errors->first('note') }}
                                             </div>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label> Status <span style="color: red">*</span> </label>
                                             <select name="status" required class="form-control">
                                                 <option value="">Select Status</option>
                                                 <option {{ old('status', $getRecord->status) == 0 ? 'selected' : '' }}
                                                     value="0">Active
                                                 </option>
                                                 <option {{ old('status', $getRecord->status) == 1 ? 'selected' : '' }}
                                                     value="1">
                                                     Inactive</option>
                                             </select>
                                             <div style="color: red;">
                                                 {{ $errors->first('status') }}
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label> Email <span style="color: red">*</span> </label>
                                         <input type="email" name="email"
                                             value="{{ old('email', $getRecord->email) }}" class="form-control"
                                             placeholder="Email" required>
                                         <div style="color: red;">
                                             {{ $errors->first('email') }}
                                         </div>
                                     </div>
                                     <div class="form-group" style="margin-top:1rem;">
                                         <label>Password <span style="color: red">*</span> </label>
                                         <input type="password" name="password" class="form-control"
                                             placeholder="Password">
                                         <div style="color: red;">
                                             {{ $errors->first('password') }}
                                         </div>
                                         <div>Due you want to change password so Please add new password</div>
                                     </div>
                                 </div>

                                 <div class="card-footer">
                                     <button type="submit" class="btn btn-primary">Update</button>
                                 </div>
                             </form>
                             <!-- form end -->
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
     <!-- /.content-wrapper -->
 @endsection
