@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="offset-md-4 col-md-4 col-12 my-5">
        <h2 class="text-center">まずはフォルダを作成しましょう</h2>
        <div>
          <a href="{{ route('folders.create') }}" class="btn btn-primary mx-auto d-block w-auto">
            フォルダ作成ページへ
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
