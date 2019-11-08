@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="my-5 col-12 col-md-4 offset-md-4">
        <p class="text-center">お探しのページは表示できません。</p>
        <div class="my-3 col-12">
          <a href="{{ route('home') }}" class="btn btn-primary mx-auto d-block w-50">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
