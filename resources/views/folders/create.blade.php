@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-8 offset-2 col-md-4 offset-md-4">
        <h2 class="text-center">フォルダ作成</h2>
        <form action="{{ route('folders.store') }}" method="post">
          @csrf
          <div class="row my-3">
            <label for="title" class="col-4">フォルダ名</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="col-8"/>
          </div>
          @if($errors->any())
            @foreach($errors->all() as $message)
            <div class="row">
              <span class="col">{{ $message }}</span>
            </div>
            @endforeach
          @endif
          <div class="row mt-3">
            <button type="submit" class="btn btn-secondary mx-auto">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
