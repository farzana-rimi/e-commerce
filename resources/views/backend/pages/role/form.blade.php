@extends('backend.pages.master')
@section('content')
<form action="{{route('role.store')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class=row>
        <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                 <label for="">Enter Role Name:</label>
                 <input name="role_name" placeholder="Enter role name" type="text" class="form-control">
                </div>


                     
               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>

             

            <div>
                    <button type="submit" class="btn btn-success my-3">Create</button>
                </div>

           </div>
    </div>
    <div class="col-md-4"></div>


</form>
@endsection