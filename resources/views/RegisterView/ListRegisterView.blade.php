@extends('main.staffmain')

@section('staff')

<style>
.form-container {
            display: flex;
            justify-content: space-between;
            margin-left: 20%;
            height: 1000px;
            padding:1px 16px;
            
            
        }
    </style>


    <!-- Search -->
    <div class="pb-3">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Enter name to search" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
    </div>

    <!-- Create data -->
    <div class="pb-3">
        <a href='/newRegister' class="btn btn-primary">+ New Registration</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Batch</th>
                <th class="col-md-4">Name</th>
                <th class="col-md-2">Course</th>
                <th class="col-md-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1001</td>
                <td>Ani</td>
                <td>Ilmu Komputer</td>
                <td>
                    <a href='' class="btn btn-warning btn-sm">Edit</a>
                    <a href='' class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<!-- AKHIR DATA -->
@endsection

