@extends('layouts.admin_app')

@section('admin_content')
    <div class="album py-5 bg-light">
        <div class="container">
            <p>登録件数：{{ $catsCount }}件</p>
            <div class="row">
                @foreach ($cats as $cat)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ route('cat.show', $cat->id) }}">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;"
                                    src="{{ Storage::url($cat->image_url) }}" alt="...">
                            </a>
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; vertical-align: middle;">
                                    <div style="display: flex;">
                                        <h6 class="card-title">{{ $cat->title }}</h6>
                                    </div>
                                </div>
                                <p class="card-text">年齢：{{ $cat->old }}</p>
                                <p class="card-text">所在地：{{ $cat->adress }}</p>
                                <p class="card-text">応募可能地域：{{ $cat->area }}</p>
                                <p class="card-text">特徴：{{ $cat->category }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    @if (Auth::check())
                                        <div class="btn-group">
                                            <a href="{{ route('cat.show', $cat->id) }}"><button type="button"
                                                    class="btn btn-sm btn-outline-secondary">View</button></a>
                                            <a href="{{ route('cat.edit', $cat->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
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
