@extends('backend.pages.master')
@section('content')


<form action="{{route('category.update',$categories->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
               <div>
               <label for="">Enter Category Name:</label>
               <input name="category_name" value="{{$categories->name}}"  type="text" class="form-control">
               </div>

               <div>
                   <label for="">Select Status</label>
                   <select name="status" value="{{$categories->status}}" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>

               <div>
                   <label for="">Upload Image</label>
                   <input name="category_image" value="{{$categories->image}}"type="file" class="form-control">
               </div>

               <div>
                   <label for="">Write description</label>
                   <textarea name="description" value="{{$categories->description}}" class="form-control"></textarea>
               </div>
               <div>
                   <label for="">Parent Id</label>
                   <select name="parent_id" id="parent_id" class="form-control">
                    @foreach($parent as $data)
                       <option value="{{$data->parent_id}}">{{$data->name}}</option>
                      @endforeach
                   </select>
               </div>

            
                <div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>

           </div>
           <div class="col-md-4"></div>

       </div>
    </form>

@endsection