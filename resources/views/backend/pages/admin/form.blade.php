@extends('backend.pages.master')
@section('content')

<form action="{{route('admin.store')}}" method="post" >
    @csrf
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
               <div>
               <label for="">Enter First Name:</label>
               <input name="first_name" placeholder="Enter first name" type="text" class="form-control">
               </div>
              
              
               <div>
                <label for="">Enter Last Name:</label>
               <input name="last_name" placeholder="Enter last name" type="text" class="form-control">
               </div>
               
               
    
               


               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>
               <div>
               <label for="">Email:</label>
               <input name="email" placeholder="email" type="email" class="form-control">
               </div>
               <div>
                   <label for="">Password</label>
                   <input name="password" placeholder="Enter password" type="password" class="form-control"></input>
               </div>

               
               <div>
                   <label for="">Contact</label>
                   <input name="contact" placeholder="Enter contact" type="integer" class="form-control"></input>
               </div>


         

              
               <div>
                   <label for="">Address</label>
                   <input name="address" placeholder="Enter address" type="text" class="form-control"></input>
               </div>

             

                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>
           <div class="col-md-4"></div>

       </div>
    </form>
@endsection