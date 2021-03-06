@extends('layouts.app')

@section('content')
<div class="container">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/products/{{$product->id}}">
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class= "form-control" placeholder="Tulis nama produk di sini" name="title" value="{{(old('title')) ? old('title') : $product->title}}">

        </div>
        <div class="form-group">
            <label for="subject">Deskripsi</label>
            <textarea type="text" class= "form-control" rows= "8" cols= "80" placeholder="Tulis deskripsi produk di sini" name="subject">{{(old('subject')) ? old('title') : $product->subject}}</textarea>
        </div>

      {{csrf_field()}}
      <input type="hidden" name="_method" value="PUT"> 

        
        <button type="submit" class="btn btn-default btn-block">Edit Produk</button>
        
    </form>
</div>
@endsection
