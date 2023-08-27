<?= $this->extend('user/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js">
<link rel="stylesheet" href="..\css\note.css">
<script src="..\js\note.js"></script>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card card-widget task-card my-2">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck01">
                                        <label class="custom-control-label" for="customCheck01"></label>
                                    </div>
                                    <div>
                                        <h5 class="">$project-id-xx</h5>
                                        <h6 class="my-2" style="text-align: justify;font-weight:bold;"><b>$task-$id-xx</b></h6>
                                        <h6 style="text-align: justify">"$note for $task id-xx for $project id-xx"</h6>
                                    </div>
                                </div>
                                <div class="media align-items-center mt-md-0 mt-3">
                                    <a href="#" class="btn btn-primary" data-target="#edit-note-modal" data-toggle="modal">Edit Note</a>
                                </div>
                                <!-- ------------------------------------------ MODAL EDIT NOTE START ------------------------------------------  -->
                                <div class="modal fade" role="dialog" aria-modal="true" id="edit-note-modal">
                                    <div class="modal-dialog  modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header d-block text-center pb-3 border-bttom">
                                                <h3 class="modal-title" id="exampleModalCenterTitle01">Edit Note</h3>
                                            </div>
                                            <div class="modal-body pb-0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form action="">
                                                            <div class="form-group ">
                                                                <label>Note for <b>$task-id-xxx on $project-id-xxx </b></label>
                                                                <textarea data-length="20" class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="Edit" style="height: 100px;"></textarea>
                                                                <div class="col-lg-12">
                                                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-3">
                                                                        <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                                                        <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                                                    </div>
                                                                </div>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ------------------------------------------ MODAL EDIT NOTE END ------------------------------------------  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<?= $this->endSection() ?>