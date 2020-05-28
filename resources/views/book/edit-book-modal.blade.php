<div class="container" align="center">
    <!-- Button to Open the Modal -->

    <!-- The Modal -->
    <div class="modal js_new_book_modal" id="myEditModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="js_new_book_form">
                        <div class="form-group">
                            <label for="tit">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
                            @error('title') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="aut">Author:</label>
                            <input type="text" class="form-control" id="author" name="author" value="">
                            @error('author') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="gen">Select genre:</label>
                            <select class="form-control" id="genre_id" name="genre_id">
                                <option value="">Select genre</option>
                                @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                                @endforeach
                            </select>
                            @error('genre_id') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="dtw">Date written:</label>
                            <input type="date" class="form-control" id="date_written" name="date_written" value="{{ old('date_written') }}">
                            @error('date_written') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="pub">Publisher:</label>
                            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher') }}">
                            @error('publisher') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="binf">About the book:</label>
                            <textarea name="info" class="form-control" rows="5" cols="10">{{ old('info') }}</textarea>
                            @error('info') {{ $message }} @enderror
                        </div>
                        @csrf
                        <input type="submit" class="btn btn-primary js_submit_new_book" value="Submit">
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
