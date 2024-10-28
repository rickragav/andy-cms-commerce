 <!-- Edit Page-->
 <div class="modal fade" tabindex="-1" role="dialog" id="editMedia">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Edit Media</h5>
                <form action="#" class="mt-4">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editName">Name</label>
                                <input type="text" class="form-control" id="editName" placeholder="Plant" value="Plant">
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editAlt">Alter Text</label>
                                <input type="text" class="form-control" id="editAlt" placeholder="Feature Image" value="Feature Image">
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="category">Featured Image</label>
                                <div class="form-control-wrap">
                                    <img src="./images/cms/sq/small-a.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="category">Featured Image</label>
                                <div class="upload-zone small bg-lighter my-2">
                                    <div class="dz-message">
                                        <span class="dz-message-text">Drag and drop file</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Update</button>
                                </li>
                                <li>
                                    <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                </li>
                            </ul>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </form>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
