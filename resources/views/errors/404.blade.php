@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 offset-md-4">
        <p>お探しのページは見つかりませんでした。</p>
        <a href="{{ route('home') }}" class="btn">
          ホームへ戻る
        </a>
      </div>
    </div>
  </div>
@endsection
