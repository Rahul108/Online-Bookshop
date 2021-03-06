@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      <div class="col-md-2" style="padding-top:20px">
        <a href="{{ route('view_category') }}" class="btn btn-success" style="margin:5px">Add Category</a><br>
        <a href="{{ route('view_author') }}" class="btn btn-success" style="margin:5px">Add Author</a><br>
        <a href="{{ route('view_publisher') }}" class="btn btn-success" style="margin:5px">Add Publication</a><br>
        <a href="{{ route('view_country') }}" class="btn btn-success" style="margin:5px">Add Country</a><br>
      </div>

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if(Auth::user()->status=='admin')
                        <table style="border-collapse: collapse;width: 100%;">
                        <tr style="border: 1px solid #dddddd;text-align: left;padding: 8px;font-size:20px;color: gray">
                            <th>Category</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        @foreach($info as $data)
                        <tr>
                            <th>{{ $data->category }}</th>
                            <th><a class="btn btn-success" href="{{ route('edit_category',$data->id) }}">Edit</a></th>
                            <th><a class="btn btn-success" href="{{ route('delete_category',$data->id) }}">Delete</a></th>
                                @endforeach
                                </table>

                                <form method="POST" action="{{ route('add_category') }}" aria-label="{{ __('add_category') }}" style="padding-top:20px">
                                    @csrf
                                    Add Category:<input id="book_type" type="text" name="book_type" style="width:200px" >
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>





                                @elseif(Auth::user()->status=='stuff')
                                   <  Checkout Stuff Here ! >
                                @else
                                     <  users info here !S >
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
