@extends('layouts.admin_app')

@section('admin_content')
@include('commons.error_card_list')
    {!! Form::open(['route' => ['cat.update', $cat->id], 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('title', 'タイトル') !!}
        {!! Form::text('title', $cat->title, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('adress', '所在地') !!}
        <select class="form-control" name="adress">
            @foreach(config('japan_areas') as $index => $name)
              <option value="{{ $name }}" @if(old('japan_areas') == $index) selected @endif>{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {!! Form::label('area', '応募可能地域') !!}
        <select class="form-control" name="area">
            @foreach(config('japan_areas') as $index => $name)
              <option value="{{ $name }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {!! Form::label('category', '特徴') !!}
        {!! Form::text('category', $cat->category, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('old', '年齢') !!}
        {!! Form::text('old', $cat->old, ['class' => 'form-control']) !!}
    </div>
    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
    <div class="form-group">
        <input type="file" name="image_url">
    </div>
    <button type="submit" class="btn btn-primary">登録する</button>
    {!! Form::close() !!}
@endsection
