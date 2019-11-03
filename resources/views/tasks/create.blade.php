@extends('layout')

@section('content')
  <div class="container">
    <h2 class="text-center mt-5">タスク追加</h2>
    <div class="row">
      <div class="col-12 col-md-4 offset-md-4">
        <form
          action="{{ route('tasks.create', [
            'id' => $folder_id,
          ]) }}"
          method="post"
        >
          @csrf
          <div class="row my-3">
            <label for="title" class="col-md-4">タイトル</label>
            <input id="title" name="title" type="text" class="col-md-8" value="{{ old('title') }}">
          </div>
          <div class="row my-3">
            <label for="due_date" class="col-md-4">期限</label>
            <input id="due_date" name="due_date" type="date" class="col-md-8" value="{{ old('due_date') }}">
          </div>
          @if($errors->any())
            @foreach($errors->all() as $message)
              <div class="row">
                <span>{{ $message }}</span>
              </div>
            @endforeach
          @endif
          <div class="row my-3">
            <button type="submit" class="mx-auto">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
