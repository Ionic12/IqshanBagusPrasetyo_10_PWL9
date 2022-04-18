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
                <form method="post" action="{{ route('gcontent.update', $GContent->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="carrousel1">carrousel1</label>
                            <input type="text" name="carrousel1" class="form-control" id="carrousel1" value="{{ $GContent->carrousel1 }}" aria-describedby="carrousel1" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc1">desc1</label>
                            <input type="textarea" name="desc1" class="form-control" id="desc1" value="{{ $GContent->desc1 }}" aria-describedby="desc1" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="carrousel2">carrousel2</label>
                            <input type="text" name="carrousel2" class="form-control" id="carrousel2" value="{{ $GContent->carrousel2 }}" aria-describedby="carrousel2" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc2">desc2</label>
                            <input type="text" name="desc2" class="form-control" id="desc2" value="{{ $GContent->desc2 }}" aria-describedby="desc2" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="carrousel3">carrousel3</label>
                            <input type="text" name="carrousel3" class="form-control" id="carrousel3" value="{{ $GContent->carrousel3 }}" aria-describedby="carrousel3" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="desc3">desc3</label>
                            <input type="text" name="desc3" class="form-control" id="desc3" value="{{ $GContent->desc3 }}" aria-describedby="desc3" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="type1">type1</label>
                            <input type="text" name="type1" class="form-control" id="type1" value="{{ $GContent->type1 }}" aria-describedby="type1" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="typedesc1">typedesc1</label>
                            <input type="text" name="typedesc1" class="form-control" id="typedesc1" value="{{ $GContent->typedesc1 }}" aria-describedby="typedesc1" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="type2">type2</label>
                            <input type="text" name="type2" class="form-control" id="type2" value="{{ $GContent->type2 }}" aria-describedby="type2" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="typedesc2">typedesc2</label>
                            <input type="text" name="typedesc2" class="form-control" id="typedesc2" value="{{ $GContent->typedesc2 }}" aria-describedby="typedesc2" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
