@extends('backend.pages.master')
@section('content')
<form action="{{route('permission.update',$edit->id)}}" method='post' enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class=row>
        <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                 <label for="">Enter permission Name:</label>
                 <input name="name" value="{{$edit->name}}"placeholder="Enter permission name" type="text" class="form-control">
                </div>


                     
               <div>
                   <label for="">Select Status</label>
                   <select name="status" value="{{$edit->status}}" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>

             

            <div>
                    <button type="submit" class="btn btn-success my-3">Update</button>
                </div>

           </div>
    </div>
    <div class="col-md-4"></div>


</form>
@endsection