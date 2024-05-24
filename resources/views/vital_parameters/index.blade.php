@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Vital Parameters') }}</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Blood Pressure</th>
                                <th>Heart Rate</th>
                                <th>Body Temperature</th>
                                <th>Oxygen Level</th>
                                <th>Weight</th>
                                <th>Notes</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>120/80</td>
                                <td>72</td>
                                <td>98.6</td>
                                <td>98</td>
                                <td>160</td>
                                <td>Healthy vitals</td>
                                <td>2023-05-01 12:00:00</td>
                                <td>2023-05-01 12:00:00</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2</td>
                                <td>130/85</td>
                                <td>80</td>
                                <td>99.2</td>
                                <td>97</td>
                                <td>180</td>
                                <td>Slightly elevated blood pressure</td>
                                <td>2023-05-02 13:30:00</td>
                                <td>2023-05-02 13:30:00</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>3</td>
                                <td>110/70</td>
                                <td>68</td>
                                <td>97.8</td>
                                <td>99</td>
                                <td>150</td>
                                <td>Excellent vitals</td>
                                <td>2023-05-03 09:45:00</td>
                                <td>2023-05-03 09:45:00</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>4</td>
                                <td>135/90</td>
                                <td>84</td>
                                <td>100.1</td>
                                <td>96</td>
                                <td>190</td>
                                <td>High blood pressure</td>
                                <td>2023-05-04 16:20:00</td>
                                <td>2023-05-04 16:20:00</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>5</td>
                                <td>118/75</td>
                                <td>75</td>
                                <td>98.2</td>
                                <td>98</td>
                                <td>165</td>
                                <td>Normal vitals</td>
                                <td>2023-05-05 14:10:00</td>
                                <td>2023-05-05 14:10:00</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
