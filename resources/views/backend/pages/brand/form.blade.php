@extends('backend.pages.master')
@section('content')

<form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
    @csrf
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
               <div>
               <label for="">Enter Brand Name:</label>
               <input name="brand_name" placeholder="Enter brand name" type="text" class="form-control">
               </div>

               <div>
                   <label for="">Upload Image</label>
                   <input name="brand_image" type="file" class="form-control">
               </div>


               <div>
                   <label for="">Select Status</label>
                   <select name="status" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>

         

              
               <div>
                   <label for="">Write description</label>
                   <textarea name="description" placeholder="Enter description" class="form-control"></textarea>
               </div>

               <div>
                <label for="">Select Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach($category as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
               </div>

                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>
           <div class="col-md-4"></div>

       </div>
    </form>
@endsection