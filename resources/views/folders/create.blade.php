@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-8 offset-2 col-md-4 offset-md-4">
        <form action="{{ route('folders.store') }}" method="post">
          @csrf
          <label for="title">フォルダー名</label>
          <input type="text" id="title" name="title"/>
          <button type="submit">送信</button>
        </form>
      </div>
    </div>
  </div>
@endsection
