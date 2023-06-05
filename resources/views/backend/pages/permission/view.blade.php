@extends ('backend.pages.master')
@section('content')


<label for="">Permission</label>
    <input type="text" value="{{$find->name}}" readonly class="form-control">

   
<label for="">Status</label>
    <input type="text" value="{{$find->status}}" readonly class="form-control">

@endsection