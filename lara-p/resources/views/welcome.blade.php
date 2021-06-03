@extends('layouts.app')

@section('content')
<div class="album py-5">
    <div class="container">
        <div class="row">
            @foreach ($cats as $cat)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ route('cat.show', $cat->id) }}">
                            <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ Storage::url($cat->image_url) }}" alt="...">
                        </a>
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between; vertical-align: middle;">
                                <div style="display: flex;">
                                    <h6 class="card-title">{{ $cat->title }}</h6>
                                </div>
                                <div class="text-right mb-2" style="display: flex">
                                    @if (Auth::check())
                                        @if (Auth::id() != $cat->user_id)
                                            @if (Auth::user()->is_favorite($cat->id))
                                                {!! Form::open(['route' => ['favorites.unfavorite', $cat->id], 'method' => 'delete']) !!}
                                                {!! Form::submit('外す', ['class' => 'botton']) !!}
                                                {!! Form::close() !!}
                                            @else
                                                {!! Form::open(['route' => ['favorites.favorite', $cat->id]]) !!}
                                                {!! Form::submit('いいね！', ['class' => 'botton']) !!}
                                                {!! Form::close() !!}
                                            @endif
                                        @endif
                                    @endif
                                    <span class="badge badge-success pr-2 pl-2 ml-1" style="border-radius: 50%;  line-height: 24px;">{{ $cat->favorite_users()->count() }}</span>
                                </div>
                            </div>
                            <p class="card-text">年齢：{{ $cat->old }}</p>
                            <p class="card-text">所在地：{{ $cat->adress }}</p>
                            <p class="card-text">応募可能地域：{{ $cat->area }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                @if (Auth::check())
                                <div class="btn-group">
                                    <a href="{{ route('cat.show', $cat->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{ $cats->links() }}
@endsection
