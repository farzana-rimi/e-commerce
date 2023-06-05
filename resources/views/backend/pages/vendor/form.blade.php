@extends('backend.pages.master')
@section('content')
<form action="{{route('vendor.store')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class=row>
        <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                 <label for="">Enter Vendor Name:</label>
                 <input name="vendor_name" placeholder="Enter vendor name" type="text" class="form-control">
                </div>

                <div>
                 <label for="">Contact:</label>
                 <input name="contact" placeholder="contact" type="integer" class="form-control">
                </div>
                
                <div>
                 <label for="">Address</label>
                 <input name="address" placeholder="address" type="text" class="form-control">
                </div>
          

                <div>
                    <label for="">Upload Image</label>
                    <input name="vendor_image" type="file" class="form-control">
                </div>

                <div>
                 <label for="">Email</label>
                 <input name="email" placeholder="email" type="email" class="form-control">
                </div>

                <div>
                 <label for="">Password</label>
                 <input name="password" placeholder="password" type="password" class="form-control">
                </div>

                     
               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>

               <div>
                 <label for="">Bank info</label>
                 <input name="bank_info" placeholder="bank_info" type="text" class="form-control">
                </div>
          
                <div>
                 <label for="">City</label>
                 <input name="city" placeholder="city" type="text" class="form-control">
                </div>
          

            <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>
    </div>
    <div class="col-md-4"></div>


</form>
@endsection