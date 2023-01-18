<!-- Modal -->
<div class="modal fade" id="updateTmodal" tabindex="-1" role="dialog" aria-labelledby="updateTmodalLabel" aria-hidden="true">
    
    <form action="" method="post" id="updateTmodalform">
        @csrf
        <input type="hidden" id="up_id">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateTmodalLabel">Update Teacher's Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div id="errorMessage"></div>
                    <div class="row">
                        <div class="col">
                            <label>Name:</label>
                            <input type="text" id="up_name" name="up_name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col">
                            <label>Email:</label>
                            <input type="email" id="up_email" name="up_email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <label>Position:</label>
                            <select name="up_position" class="form-control" id="up_position">
                                <option selected>Choose Option</option>
                                <option value="1">Principal</option>
                                <option value="2">Head Master</option>
                                <option value="3">Assistan Teacher</option>
                                <option value="4">Sub-assistan Teacher</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Phone:</label>
                            <input type="text" id="up_phone" name="up_phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <label>Password:</label>
                            <input type="password" id="up_password" name="up_password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary up_submit" >Update</button>
                </div>
            </div>
        </div>
    </form>
</div>