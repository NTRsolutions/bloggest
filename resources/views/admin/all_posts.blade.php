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
                            <tr>
                                <td>1</td>
                                <td>Milk Powder</td>
                                <td>Elchin Zakizadeh</td>
                                <td><span class="peity-line" data-width="120" data-peity="{ &quot;fill&quot;: [&quot;#009efb&quot;], &quot;stroke&quot;:[&quot;#009efb&quot;]}" data-height="40" style="display: none;">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span><svg class="peity" height="40" width="120"><polygon fill="#009efb" points="0 0.5 0 0.5 13.333333333333334 23.9 26.666666666666668 16.1 40 31.7 53.333333333333336 39.5 66.66666666666667 31.7 80 23.9 93.33333333333334 16.1 106.66666666666667 39.5 120 8.299999999999997 120 0.5"></polygon><polyline fill="none" points="0 0.5 13.333333333333334 23.9 26.666666666666668 16.1 40 31.7 53.333333333333336 39.5 66.66666666666667 31.7 80 23.9 93.33333333333334 16.1 106.66666666666667 39.5 120 8.299999999999997" stroke="#009efb" stroke-width="1" stroke-linecap="square"></polyline></svg> </td>
                                <td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Air Conditioner</td>
                                <td>Elchin Zakizadeh</td>
                                <td><span class="peity-line" data-width="120" data-peity="{ &quot;fill&quot;: [&quot;#009efb&quot;], &quot;stroke&quot;:[&quot;#009efb&quot;]}" data-height="40" style="display: none;">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span><svg class="peity" height="40" width="120"><polygon fill="#009efb" points="0 0.5 0 0.5 13.333333333333334 13.5 26.666666666666668 13.5 40 26.5 53.333333333333336 39.5 66.66666666666667 13.5 80 26.5 93.33333333333334 39.5 106.66666666666667 13.5 120 26.5 120 0.5"></polygon><polyline fill="none" points="0 0.5 13.333333333333334 13.5 26.666666666666668 13.5 40 26.5 53.333333333333336 39.5 66.66666666666667 13.5 80 26.5 93.33333333333334 39.5 106.66666666666667 13.5 120 26.5" stroke="#009efb" stroke-width="1" stroke-linecap="square"></polyline></svg> </td>
                                <td><span class="text-warning text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 8.55%</span> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>RC Cars</td>
                                <td>Elchin Zakizadeh</td>
                                <td><span class="peity-line" data-width="120" data-peity="{ &quot;fill&quot;: [&quot;#009efb&quot;], &quot;stroke&quot;:[&quot;#009efb&quot;]}" data-height="40" style="display: none;">0,3,6,1,2,4,6,3,2,1</span><svg class="peity" height="40" width="120"><polygon fill="#009efb" points="0 39.5 0 39.5 13.333333333333334 20 26.666666666666668 0.5 40 33 53.333333333333336 26.5 66.66666666666667 13.5 80 0.5 93.33333333333334 20 106.66666666666667 26.5 120 33 120 39.5"></polygon><polyline fill="none" points="0 39.5 13.333333333333334 20 26.666666666666668 0.5 40 33 53.333333333333336 26.5 66.66666666666667 13.5 80 0.5 93.33333333333334 20 106.66666666666667 26.5 120 33" stroke="#009efb" stroke-width="1" stroke-linecap="square"></polyline></svg> </td>
                                <td><span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span> </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Down Coat</td>
                                <td>Elchin Zakizadeh</td>
                                <td><span class="peity-line" data-width="120" data-peity="{ &quot;fill&quot;: [&quot;#009efb&quot;], &quot;stroke&quot;:[&quot;#009efb&quot;]}" data-height="40" style="display: none;">0,3,6,4,5,4,7,3,4,2</span><svg class="peity" height="40" width="120"><polygon fill="#009efb" points="0 39.5 0 39.5 13.333333333333334 22.78571428571429 26.666666666666668 6.0714285714285765 40 17.214285714285715 53.333333333333336 11.642857142857142 66.66666666666667 17.214285714285715 80 0.5 93.33333333333334 22.78571428571429 106.66666666666667 17.214285714285715 120 28.357142857142858 120 39.5"></polygon><polyline fill="none" points="0 39.5 13.333333333333334 22.78571428571429 26.666666666666668 6.0714285714285765 40 17.214285714285715 53.333333333333336 11.642857142857142 66.66666666666667 17.214285714285715 80 0.5 93.33333333333334 22.78571428571429 106.66666666666667 17.214285714285715 120 28.357142857142858" stroke="#009efb" stroke-width="1" stroke-linecap="square"></polyline></svg> </td>
                                <td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection