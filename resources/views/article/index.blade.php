@extends('app')
@section('content')
    <div class="col-md-8">
        <h1 class="text-center">Danh sach bai viet</h1>
    </div>
    @if(session('success'))
        <div class="alert alert-success col-md-8">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-md-10">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($articles) > 0)
                @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->content }}</td>
                        <td>
                            @if($article->status == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-warning">Disable</span>
                            @endif
                        </td>
                        <td width="20%">
                            <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td rowspan="4">no data</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
    <div class="col-md-10 d-flex justify-content-end">
        {{$articles->links()}}
    </div>
@endsection