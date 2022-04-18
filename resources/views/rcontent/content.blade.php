@extends('layout.nav')
@section('content')
    <style>
        body{
            font-family: 'Josefin Sans';
            background-color: #000;
            color: white;
        }
        .container{
            padding-top: 50px;
        }
        td{
            color: white;  
        }
        th{
            text-align: center;
            color: white;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 50rem; background-color: #202020;">
                <div class="card-header" style="text-align:center">
                    Add Content
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <form method="post" action="{{ route('rcontent.store') }}" id="myForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="carrousel1">carrousel1</label>
                            <input type="text" name="carrousel1" class="form-control" id="carrousel1" aria-describedby="carrousel1" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc1">desc1</label>
                            <input type="textarea" name="desc1" class="form-control" id="desc1" aria-describedby="desc1" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="carrousel2">carrousel2</label>
                            <input type="text" name="carrousel2" class="form-control" id="carrousel2" aria-describedby="carrousel2" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc2">desc2</label>
                            <input type="textarea" name="desc2" class="form-control" id="desc2" aria-describedby="desc2" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="carrousel3">carrousel3</label>
                            <input type="text" name="carrousel3" class="form-control" id="carrousel3" aria-describedby="carrousel3" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc3">desc3</label>
                            <input type="textarea" name="desc3" class="form-control" id="desc3" aria-describedby="desc3" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="type1">type1</label>
                            <input type="text" name="type1" class="form-control" id="type1" aria-describedby="type1" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="typedesc1">typedesc1</label>
                            <input type="textarea" name="typedesc1" class="form-control" id="typedesc1" aria-describedby="typedesc1" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="type2">type2</label>
                            <input type="text" name="type2" class="form-control" id="type2" aria-describedby="type2" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="typedesc2">typedesc2</label>
                            <input type="textarea" name="typedesc2" class="form-control" id="typedesc2" aria-describedby="typedesc2" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-danger ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <br>
        <table class="table table-bordered table-responsive-md text-align-center">
        <tr>
        <th>carrousel1</th>
        <th>carrousel2</th>
        <th>carrousel3</th>
        <th>desc1</th>
        <th>desc2</th>
        <th>desc3</th>
        <th>type1</th>
        <th>typedesc1</th>
        <th>type2</th>
        <th>typedesc2</th>
        <th width="280px">Action</th>
        </tr>
        @foreach ($rcontent as $rd)
        <tr>
        <td>{{ $rd -> carrousel1 }}</td>
        <td>{{ $rd -> carrousel2 }}</td>
        <td>{{ $rd -> carrousel3 }}</td>
        <td>{{ $rd -> desc1 }}</td>
        <td>{{ $rd -> desc2 }}</td>
        <td>{{ $rd -> desc3 }}</td>
        <td>{{ $rd -> type1 }}</td>
        <td>{{ $rd -> typedesc1 }}</td>
        <td>{{ $rd -> type2 }}</td>
        <td>{{ $rd -> typedesc2 }}</td>
        <td style="text-align: center">
            <form action="{{ route('rcontent.destroy',['rcontent'=>$rd->id]) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('rcontent.edit',$rd->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
        </table>
    </div>
@endsection