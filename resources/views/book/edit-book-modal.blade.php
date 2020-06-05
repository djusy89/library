<div class="container" align="center">
    <!-- Button to Open the Modal -->
    <button type="button" id="modalEditButton" class="btn btn-success" data-toggle="modal" data-target="#myEditModal{{ $book->id }}">
        Edit Book
    </button>

    <!-- The Modal -->
    <div class="modal js_edit_book_modal" id="myEditModal{{ $book->id }}">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/books/{{ $book->id }}" method="post" class="js_edit_book_form">
                        @method('PATCH')
                        @include('book.form')
{{--                        <div class="form-group">--}}
{{--                            <label for="tit">Title:</label>--}}
{{--                            <input type="text" class="form-control" id="title" name="title" value="{{ $book['title'] }}">--}}
{{--                            @error('title') {{ $message }} @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="aut">Author:</label>--}}
{{--                            <input type="text" class="form-control" id="author" name="author" value="{{ $book['author'] }}">--}}
{{--                            @error('author') {{ $message }} @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="gen">Select genre:</label>--}}
{{--                            <select class="form-control" id="genre_id" name="genre_id">--}}
{{--                                <option value="{{ $book->genre_id }}">{{ $book->genre->name }}</option>--}}
{{--                                @foreach($genres as $genre)--}}
{{--                                    @if(!($book->genre_id == $genre->id))--}}
{{--                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            @error('genre_id') {{ $message }} @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="dtw">Date written:</label>--}}
{{--                            <input type="date" class="form-control" id="date_written" name="date_written" value="{{ $book['date_written'] }}">--}}
{{--                            @error('date_written') {{ $message }} @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="pub">Publisher:</label>--}}
{{--                            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book['publisher'] }}">--}}
{{--                            @error('publisher') {{ $message }} @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="binf">About the book:</label>--}}
{{--                            <textarea name="info" class="form-control" rows="5" cols="10">{{ $book['info'] }}</textarea>--}}
{{--                            @error('info') {{ $message }} @enderror--}}
{{--                        </div>--}}
{{--                        @csrf--}}
                        <input type="submit" class="btn btn-primary js_submit_edit_book" value="Submit">
                    </form>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
