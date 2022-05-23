@extends('welcome')

@section('content')
    <div style="flex:0 0 auto;width:100%">
        <form action="/discussions" method="POST">
            @csrf
            <div
                style="display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;transition:border-color .15s ease-in-out;box-shadow .15s ease-in-out">
                <label for="group">Group name :</label>
                <input type="text" id="group" name="group_name" class="form-control" placeholder="Your group name here"
                    required>
            </div>
            <div
                style="display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;transition:border-color .15s ease-in-out;box-shadow .15s ease-in-out">
                <label for="desc">Group description</label>
                <textarea name="description" placeholder="Descibe your group" style="resize: none" required></textarea>
            </div>
            <div
                style="display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;transition:border-color .15s ease-in-out;box-shadow .15s ease-in-out">
                <button type="submit" style="opacity:.65;color:#fff;background-color:#0d6efd;border-color:#0d6efd;">
                    Create
                </button>
            </div>
        </form>
        @include('layouts.errors')
    </div>
@endsection
