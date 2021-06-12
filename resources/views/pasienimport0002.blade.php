<form method="POST" action="{{ route('pasien.import') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="file">Import File Pasien</label>
                                <br></br>
                                <input type="file" name="file" id="file" class="form-control" 
                                accept="xlsx,xls">
                                <br></br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Upload File</button>
                        </div>
                    </form>