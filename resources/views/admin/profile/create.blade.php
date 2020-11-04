    @extends('layouts.profile')


    {{-- admin.profile.phpの@yield('title')に'profileの新規作成'を埋め込む --}}
    @section('title', 'profileの新規作成')

    {{-- admin.profile.phpの@yield('content')に以下のタグを埋め込む --}}
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>profile</h2>
            </div>
        </div>
    </div>
    @endsection
