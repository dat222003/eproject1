@extends('masters.admin')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('category.detail_category')
{{--        <script>window.alert("if you delete a category, all product included in that category will be deleted");</script>--}}

        <form action="{{ route('admin.delete.category', ['id' => $category->id]) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}">

            <!-- Button trigger modal -->


            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            if you delete a category, all product included in that category will be deleted
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" value="submit">Confirm Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End trigger modal -->

{{--            <button type="submit" class="btn btn-danger">Delete</button>--}}
            <a href="{{route('admin.index.category')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
