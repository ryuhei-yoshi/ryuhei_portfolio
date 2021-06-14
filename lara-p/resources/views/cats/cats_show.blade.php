@if (Auth::guard('admin')->check())
    @extends('layouts.admin_app')
    @section('admin_content')
@elseif (Auth::check())
    @section('content')
@else
    @section('content')
@endif
    <div class="container">
        <div class="main_content">
            <div class="main_item d-sm-flex">
                <div class="main_item_img mr-2">
                    <img src="{{ Storage::url($cat->image_url) }}" alt="..." class="img-responsive img-rounded"
                        width="250" height="250">
                </div>
                <div class="main_item_text mt-1">
                    <div class="item_date d-flex justify-content-between">
                        <div class="category ml-2">
                            <p>カテゴリー</p>
                            <p>{{ $cat->category }}</p>
                        </div>
                    </div>
                    <div class="item_text mt-2">
                        <h2 class="item_text_title" style="font-size: 24px;">{{ $cat->title }}</h2>
                        <ul class="mt-2">
                            <li class="item_list">年齢:{{ $cat->old }}</li>
                            <li class="item_list">所在地:{{ $cat->adress }}</li>
                            <li class="item_list">応募可能地域<br>
                                <p>{{ $cat->area }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
