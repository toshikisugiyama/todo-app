@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel-group col col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
          <div class="panel-body">
            <a href="#">
              フォルダを追加する
            </a>
            @foreach($folders as $folder)
              <div class="list-group">
                <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item">
                  {{ $folder->title }}
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col col-md-8">

      </div>
    </div>
  </div>
@endsection
