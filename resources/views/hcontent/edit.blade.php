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
</style>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 40rem; background-color: #202020;">
                <div class="card-header"  style="text-align:center">
                    Edit Content
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
                <form method="post" action="{{ route('hcontent.update', $HContent->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="part1">part1</label>
                            <input type="text" name="part1" class="form-control" id="part1" values="{{ $HContent->part1 }}" aria-describedby="part1" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc1">desc1</label>
                            <input type="textarea" name="desc1" class="form-control" id="desc1" values="{{ $HContent->desc1 }}" aria-describedby="desc1" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="part2">part2</label>
                            <input type="text" name="part2" class="form-control" id="part2" values="{{ $HContent->part2 }}" aria-describedby="part2" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc2">desc2</label>
                            <input type="textarea" name="desc2" class="form-control" id="desc2" values="{{ $HContent->desc2 }}" aria-describedby="desc2" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="part3">part3</label>
                            <input type="text" name="part3" class="form-control" id="part3" values="{{ $HContent->part3 }}" aria-describedby="part3" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc3">desc3</label>
                            <input type="textarea" name="desc3" class="form-control" id="desc3" values="{{ $HContent->desc3 }}" aria-describedby="desc3" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="part4">part4</label>
                            <input type="text" name="part4" class="form-control" id="part4" values="{{ $HContent->part4 }}" aria-describedby="part4" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc4">desc4</label>
                            <input type="textarea" name="desc4" class="form-control" id="desc4" values="{{ $HContent->desc4 }}" aria-describedby="desc4" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
