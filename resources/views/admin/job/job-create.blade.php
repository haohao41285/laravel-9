@extends('admin.master')

@section('content')
    <div class="container mt-5">
        <div>
            <form method="post" action="{{ route('job.store') }}">
                @csrf
                <input type="text" class="form-control form-control-sm" name="name" placeholder="Tên công việc">
                <textarea name="description" class="form-control form-control-sm mt-2" rows="3" placeholder="Mô tả"></textarea>
                <button class="btn btn-primary btn-sm my-2" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection