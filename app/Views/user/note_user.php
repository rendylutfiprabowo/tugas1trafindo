<?= $this->extend('user/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js">
<link rel="stylesheet" href="..\css\note.css">
<script src="..\js\note.js"></script>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                <h5>Your Projects</h5>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <!-- <div class="dropdown status-dropdown mr-3">
                        <div class="dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown">
                            <div class="btn bg-body"><span class="h6">Status :</span> In Progress<i class="ri-arrow-down-s-line ml-2 mr-0"></i></div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                            <a class="dropdown-item" href="#"><i class="ri-mic-line mr-2"></i>In Progress</a>
                            <a class="dropdown-item" href="#"><i class="ri-attachment-line mr-2"></i>Priority</a>
                            <a class="dropdown-item" href="#"><i class="ri-file-copy-line mr-2"></i>Category</a>
                        </div>
                    </div> -->
                    <!-- <div class="list-grid-toggle d-flex align-items-center mr-3">
                        <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                            <div class="grid-icon mr-3">
                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                        </div>
                        <div data-toggle-extra="tab" data-target-extra="#list">
                            <div class="grid-icon">
                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="21" y1="10" x2="3" y2="10"></line>
                                    <line x1="21" y1="6" x2="3" y2="6"></line>
                                    <line x1="21" y1="14" x2="3" y2="14"></line>
                                    <line x1="21" y1="18" x2="3" y2="18"></line>
                                </svg>
                            </div>
                        </div>
                    </div> -->
                    <div class="pl-3 border-left btn-new">
                        <a href="#" class="btn btn-primary" data-target="#new-project-modal" data-toggle="modal">New Note</a>
                    </div>
                    <!-- MODAL CREATE PROJECT -->
                    <form action="/note/add" method="post">
                    <div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
                        <div class="modal-dialog  modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header d-block text-center pb-3 border-bttom">
                                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Note</h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <?= csrf_field(); ?>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="nama_notes" class="h5">Nama Notes*</label>
                                                <input name="nama_notes" type="text" class="form-control" id="exampleInputText004" value="" >
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label>Description*</label>
                                                <textarea name="desc_notes" data-length="20" class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="Edit" style="height: 100px;"></textarea>   
                                            </div>
                                        </div>
                                        <input name ="id_task" type="hidden" value="<?= $task->id ?>">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                                <button type="submit" class="btn btn-primary mr-3">Save</button>
                                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
            <?php foreach ($notes as $note) { ?>
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
                                        <h5 class=""><?= $note->nama_notes ?></h5>
                                        <h6 style="text-align: justify"><?= $note->desc_notes ?></h6>
                                    </div>
                                </div>
                                <div class="media align-items-center mt-md-0 mt-3">
                                    <a href="#" class="btn btn-primary" data-target="#edit-note-modal-<?= $note->id?>" data-toggle="modal">Edit Note</a>
                                    <a href="/note/delete/<?= $note->id ?>" class="btn btn-primary">Delete</a>
                                </div>
                                <!-- ------------------------------------------ MODAL EDIT NOTE START ------------------------------------------  -->
                                <div class="modal fade" role="dialog" aria-modal="true" id="edit-note-modal-<?= $note->id?>">
                                    <div class="modal-dialog  modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header d-block text-center pb-3 border-bttom">
                                                <h3 class="modal-title" id="exampleModalCenterTitle01">Edit Note</h3>
                                            </div>
                                            <div class="modal-body pb-0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form action="/note/edit/<?= $note->id ?>" method="post">
                                                            <?= csrf_field(); ?>
                                                            <div class="form-group ">                                                        
                                                                <div class="col-lg-12">
                                                                    <div class="form-group mb-3">
                                                                        <label for="nama_notes" class="h5">Nama Notes*</label>
                                                                        <input name="nama_notes" type="text" class="form-control" id="exampleInputText004" value="<?= $note->nama_notes ?>">
                                                                    </div>
                                                                </div>
                                                                <label class="h5">Desc Note*</b></label>
                                                                <textarea data-length="20" name ="desc_notes" class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="Edit" style="height: 100px;"><?= $note->desc_notes ?></textarea>
                                                                <div class="col-lg-12">
                                                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-3">
                                                                        <button type="submit" class="btn btn-primary mr-3" >Save</button>
                                                                        <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                                                    </div>
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
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>



<?= $this->endSection() ?>