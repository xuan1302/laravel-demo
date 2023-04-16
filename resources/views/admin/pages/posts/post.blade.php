@extends('admin.masterlayout')
@section('content')
    <div class="content-post">
        <div class="table-wrap">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>Ngày tạo</th>
                    <th>Người tạo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$post->thumbnail}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->create_at}}</td>
                            <td>{{$post->user->username}}</td>
                            <td><a href="#" class="btn btn-success">Progress</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

