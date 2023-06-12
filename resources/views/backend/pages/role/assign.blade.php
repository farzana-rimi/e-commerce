@extends('backend.pages.master')
@section('content')


<div style="padding: 20px;">
    <h4>Assigning permissions to -{{$role->name}} </h4>
    <ul class="list-group">
        <li class="list-group-item active">
            <!-- Default checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="select_all" />
                <label class="form-check-label" for="flexCheckDefault">Select All</label>
            </div>

        </li>

        <form action="{{route('assign.store',$role->id)}}" method="post">
            @csrf


            @php
            $assigned_permissions=$role->assign->pluck('permission_id')->toArray();
            @endphp



            @foreach($permissions as $data)
            <li class="list-group-item">
                    <div class="form-check">
                        <input 

                        
                        @if(in_array($data->id,$assigned_permissions))
                                checked
                        @endif
                        
                        name="selected_permissions[]" class="form-check-input" type="checkbox" value="{{$data->id}}" id="permission_{{$data->id}}" />
                        <label class="form-check-label" for="{{$data->id}}">{{ucfirst(str_replace('.',' ',$data->name))}}</label>
                        </div>
                </li>

           
                @endforeach

                <button type="submit" class="btn btn-success my-3">Submit</button>
            </form>
           
    </ul>
    

</div>
<a href="{{route('role.list')}}" class="btn btn-primary my-3">Back</a>
@endsection