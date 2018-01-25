@extends('layouts.admin-layout')
@section('title', 'All posts')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All posts and statistics</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Post name</th>
                                    <th>Author</th>
                                    <th>Popularity</th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->user_name }}</td>
                                    <td><span class="peity-line" data-width="120" data-peity="{ &quot;fill&quot;: [&quot;#009efb&quot;], &quot;stroke&quot;:[&quot;#009efb&quot;]}" data-height="40" style="display: none;">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span><svg class="peity" height="40" width="120"><polygon fill="#009efb" points="0 0.5 0 0.5 13.333333333333334 23.9 26.666666666666668 16.1 40 31.7 53.333333333333336 39.5 66.66666666666667 31.7 80 23.9 93.33333333333334 16.1 106.66666666666667 39.5 120 8.299999999999997 120 0.5"></polygon><polyline fill="none" points="0 0.5 13.333333333333334 23.9 26.666666666666668 16.1 40 31.7 53.333333333333336 39.5 66.66666666666667 31.7 80 23.9 93.33333333333334 16.1 106.66666666666667 39.5 120 8.299999999999997" stroke="#009efb" stroke-width="1" stroke-linecap="square"></polyline></svg> </td>
                                    <td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection