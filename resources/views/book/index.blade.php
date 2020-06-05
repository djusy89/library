@extends('layouts.main')

@section('content')
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a href="index.php" class="navbar-brand">Books</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="display-4">Search Books</h3>
                <form action="searchBook.php" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="search">
                        <div class="input-group-append">
                            <button type="submit" name="subBtn" class="btn btn-info">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('book.create-book-modal')
    <br><br>
    <div class="container">
        <h2>BOOKS</h2><hr>
        <table class="table table-striped js_books_table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Date written</th>
                <th>Publisher</th>
                <th>Edit Book</th>
                <th>Delete Book</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td><a href="/books/{{ $book->id }}">{{ $book->title }}</a></td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->genre->name }}</td>
                    <td>{{ $book->date_written }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>@include('book.edit-book-modal', [$book])</td>
                    <td>
                        <form action="/books/{{ $book->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                <tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@if($errors->any())
    <script>$("#myModal").modal("show")</script>
@endif

{{--<script>--}}
{{--    $('#submit').on('click',function(e){--}}

{{--        document.getElementById("first_name_modal").value = document.getElementById("first_name").value;--}}
{{--        document.getElementById("last_name_modal").value= document.getElementById("last_name").value;--}}
{{--        document.getElementById("age_modal").value = document.getElementById("age").value;--}}

{{--        if(first_name_modal!="" && last_name_modal!="" && age_modal!=""){--}}
{{--            $("#confirm-save").modal("show");--}}
{{--            $('#first_name_modal').text(first_name_modal);--}}
{{--            $('#last_name_modal').text(last_name_modal);--}}
{{--            $('#age_modal').text(age_modal);--}}
{{--            return false;--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}

{{--@section('java-script')--}}
{{--    <script>--}}
{{--        document.querySelector('.js_submit_new_book').addEventListener('click', (event) => {--}}
{{--            let formElement = document.querySelector('.js_new_book_form');--}}
{{--            let formData = new FormData();--}}

{{--            for (let item of formElement.elements) {--}}
{{--                if (item.value === '') {--}}
{{--                    return;--}}
{{--                }--}}
{{--                formData.append(item.getAttribute('name'), item.value);--}}
{{--            }--}}

{{--            let response = fetch('/home/book', {--}}
{{--                method: 'POST',--}}
{{--                body: formData,--}}
{{--                credentials: 'include',--}}
{{--                headers: {--}}
{{--                    "Accept" : "text/html; charset=utf-8",--}}
{{--                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')--}}
{{--                }--}}
{{--            });--}}

{{--            response.then(() => {--}}
{{--                $('#myModal').modal('hide');--}}
{{--                let content = `<td><a href="javascript:void(0)">${formData.get('title')}</a></td>--}}
{{--                            <td>${formData.get('author')}}</td>--}}
{{--                            <td>${formData.get('genre')}</td>--}}
{{--                            <td>${formData.get('date')}</td>--}}
{{--                            <td>${formData.get('publisher')}</td>`;--}}

{{--                let tableRaw = document.createElement('tr');--}}
{{--                tableRaw.innerHTML = content.trim();--}}

{{--                document.querySelector('.js_books_table').append(tableRaw);--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
