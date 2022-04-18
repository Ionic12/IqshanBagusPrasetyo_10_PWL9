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
                    <form method="post" action="{{ route('hcontent.store') }}" id="myForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="part1">part1</label>
                            <input type="text" name="part1" class="form-control" id="part1" aria-describedby="part1" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc1">desc1</label>
                            <input type="textarea" name="desc1" class="form-control" id="desc1" aria-describedby="desc1" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="part2">part2</label>
                            <input type="text" name="part2" class="form-control" id="part2" aria-describedby="part2" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc2">desc2</label>
                            <input type="textarea" name="desc2" class="form-control" id="desc2" aria-describedby="desc2" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="part3">part3</label>
                            <input type="text" name="part3" class="form-control" id="part3" aria-describedby="part3" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc3">desc3</label>
                            <input type="textarea" name="desc3" class="form-control" id="desc3" aria-describedby="desc3" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="part4">part4</label>
                            <input type="text" name="part4" class="form-control" id="part4" aria-describedby="part4" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc4">desc4</label>
                            <input type="textarea" name="desc4" class="form-control" id="desc4" aria-describedby="desc4" >
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
        <th>part1</th>
        <th>part2</th>
        <th>part3</th>
        <th>part4</th>
        <th>desc1</th>
        <th>desc2</th>
        <th>desc3</th>
        <th>desc4</th>
        <th width="280px">Action</th>
        </tr>
        @foreach ($hcontent as $rd)
        <tr>
        <td>{{ $rd -> part1 }}</td>
        <td>{{ $rd -> part2 }}</td>
        <td>{{ $rd -> part3 }}</td>
        <td>{{ $rd -> part4 }}</td>
        <td>{{ $rd -> desc1 }}</td>
        <td>{{ $rd -> desc2 }}</td>
        <td>{{ $rd -> desc3 }}</td>
        <td>{{ $rd -> desc4 }}</td>
        <td style="text-align: center">
            <form action="{{ route('hcontent.destroy',['hcontent'=>$rd->id]) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('hcontent.edit',$rd->id) }}">Edit</a>
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