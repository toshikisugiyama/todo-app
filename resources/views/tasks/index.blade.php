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
      <div class="panel-group col col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">タスク</div>
          <div class="panel-body">
            <div class="text-right">
              <a href="#" class="btn btn-default btn-block">
                タスクを追加する
              </a>
            </div>
            <table class="table">
              <tr>
                <th>タイトル</th>
                <th>状態</th>
                <th>期限</th>
              </tr>
              @foreach($tasks as $task)
                <tr>
                  <td>{{ $task->title }}</td>
                  <td>{{ $task->status_label }}</td>
                  <td>{{ $task->due_date }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
