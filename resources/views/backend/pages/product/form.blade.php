@extends('backend.pages.master')
@section('content')
<form action="{{route('product.store')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class=row>
        <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                 <label for="">Enter Product Name:</label>
                 <input name="product_name" placeholder="Enter product name" type="text" class="form-control">
                </div>

                <div>
                 <label for="">Enter Product Price:</label>
                 <input name="product_price" placeholder="Enter product price" type="text" class="form-control">
                </div>
          

                <div>
                    <label for="">Upload Image</label>
                    <input name="product_image" type="file" class="form-control">
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
                    <label for="">Select Brand</label>
                    <select name="brand_id" id="" class='form-control'>
                        @foreach($brands as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                    
                </div>

         
               <div>
                    <label for="">Select Category</label>
                    <select name="category_id" id="" class='form-control'>
                        @foreach($categories as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                    
                </div>

              

                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>
    </div>
    <div class="col-md-4"></div>


</form>
@endsection