<?= $this->extend('user/template') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                <h5>All Tasks</h5>
                <div class="d-flex flex-wrap align-items-center">
                    <!-- <div class="dropdown dropdown-project mr-3">
                        <div class="dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown">
                            <div class="btn bg-body"><span class="h6">Project :</span> webkit Project<i class="ri-arrow-down-s-line ml-2 mr-0"></i></div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                            <a class="dropdown-item" href="#"><i class="ri-mic-line mr-2"></i>In Progress</a>
                            <a class="dropdown-item" href="#"><i class="ri-attachment-line mr-2"></i>Priority</a>
                            <a class="dropdown-item" href="#"><i class="ri-file-copy-line mr-2"></i>Category</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL CREATE TASK -->
<div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-task-modal">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-block text-center pb-3 border-bttom">
                <h3 class="modal-title" id="exampleModalCenterTitle">New Task</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText02" class="h5">Task Name</label>
                            <input type="text" class="form-control" id="exampleInputText02" placeholder="Enter task Name">
                            <a href="#" class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Assigned to</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>renn</option>
                                <option>Kianna Septimus</option>
                                <option>Jaxson Herwitz</option>
                                <option>Ryan Schleifer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="exampleInputText05" class="h5">Due Dates*</label>
                            <input type="date" class="form-control" id="exampleInputText05" value="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Category</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Design</option>
                                <option>Android</option>
                                <option>IOS</option>
                                <option>Ui/Ux Design</option>
                                <option>Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText040" class="h5">Description</label>
                            <textarea class="form-control" id="exampleInputText040" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText005" class="h5">Checklist</label>
                            <input type="text" class="form-control" id="exampleInputText005" placeholder="Add List">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <label for="exampleInputText01" class="h5">Attachments</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile003">
                                <label class="custom-file-label" for="inputGroupFile003">Upload media</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                            <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                            <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <?php foreach ($tasks as $task) { ?>
                    <div class="col-lg-12">
                        <div class="card card-widget task-card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="col-lg-0.5 ">
                                            <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="customCheck01">
                                                <label class="custom-control-label" for="customCheck01"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-11">
                                            <div>
                                                <h5 class=""><?= $task->nama_taskproduct ?></h5>
                                                <h6 class=""><?= $task->nama_project ?></h6>
                                                <h6 class=""><?= $task->tgl_project ?></h6>
                                                <p class="text-justify"> <br><?= $task->nama_taskproduct ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-0.5">
                                            <div class="media align-items-center mt-md-0 mt-3">
                                                <a href="/task/<?= $task->task_project_id ?>" class="btn bg-secondary-light">Notes</a>
                                                <a href="/task/completed/<?= $task->task_project_id ?>" class="btn bg-secondary-light">Mark As Complete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="collapse" id="collapseEdit1">
                <div class="card card-list task-card">
                    <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                        <div class="header-title">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheck05">
                                <label class="custom-control-label h5" for="customCheck05">Mark as done</label>
                            </div>
                        </div>
                        <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3 position-relative">
                            <input type="text" class="form-control bg-white" placeholder="Design landing page of webkit">
                            <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-0">
                                            <label for="exampleInputText2" class="h5">Members</label>
                                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                                <option>rENDY Lutfi</option>
                                                <option>Kianna Septimus</option>
                                                <option>Jaxson Herwitz</option>
                                                <option>Ryan Schleifer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-0">
                                            <label for="exampleInputText3" class="h5">Due Dates*</label>
                                            <input type="date" class="form-control" id="exampleInputText3" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5 class="mb-2">Description</h5>
                                        <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="mb-2">Checklist</h5>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label mb-1" for="customCheck1">Design mobile version</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck02">
                                                    <label class="custom-control-label mb-1" for="customCheck02">Use images of unsplash.com</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">Vector images of small size.</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck04">
                                                    <label class="custom-control-label mb-1" for="customCheck04">Design mobile version of landing page</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                    <label class="custom-control-label mb-1" for="customCheck5">Use images of unsplash.com</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck06">
                                                    <label class="custom-control-label" for="customCheck06">Vector images of small size..</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label for="exampleInputText01" class="h5">Attachments</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile001">
                                <label class="custom-file-label" for="inputGroupFile001">Upload media</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>



<?= $this->endSection() ?>