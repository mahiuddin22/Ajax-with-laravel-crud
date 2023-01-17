<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <span class="errorMessage"></span>
    <form action="" method="post" id="modalform">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Teacher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label>Name:</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col">
                            <label>Email:</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <label>Position:</label>
                            <select name="position" class="form-control" id="position">
                                <option selected>Choose Option</option>
                                <option value="1">Principal</option>
                                <option value="2">Head Master</option>
                                <option value="3">Assistan Teacher</option>
                                <option value="4">Sub-assistan Teacher</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Phone:</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <label>Password:</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" value="submit" class="btn btn-primary add_teacher">
                </div>
            </div>
        </div>
    </form>
</div>