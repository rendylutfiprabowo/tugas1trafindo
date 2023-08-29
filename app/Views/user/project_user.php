<?= $this->extend('user/template') ?>
<?= $this->section('content') ?>

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
                        <a href="#" class="btn btn-primary" data-target="#new-project-modal" data-toggle="modal">New Project</a>
                    </div>
                    <!-- MODAL CREATE PROJECT -->
                    <div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
                        <div class="modal-dialog  modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header d-block text-center pb-3 border-bttom">
                                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Project</h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <form action="/project/add" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="exampleInputText2" class="h5">Product *</label>
                                                <select name="id_product" class="selectpicker form-control" data-style="py-0">
                                                    <?php foreach ($products as $product) { ?>
                                                        <option value="<?= $product->id ?>"><?= $product->nama_product ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="exampleInputText004" class="h5">Due Dates*</label>
                                                <input name ="tgl_project" type="date" class="form-control" id="exampleInputText004" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                                <button type="submit" class="btn btn-primary mr-3">Save</button>
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
        </div>
    </div>
</div>
</div>
<div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
    <div class="row">
        <?php
            foreach ($projects as $project) {?>
                <div class="col-lg-4 col-md-6">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <h5 class="mb-1"><?=$project->nama_project?></h5>
                    <p class="mb-3 text-justify"><?=$project->desc_project?> </p>
                    <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                        <a class="btn btn-white text-primary link-shadow"><?=$project->tgl_project?></a>
                        <a href="/project/<?= $project->id?>" class="btn btn-danger text-white link-shadow">More</a>
                    </div>
                </div>
            </div>
        </div>
            <?php } ?>
    </div>
</div>
<div id="list" class="item-content animate__animated animate__fadeIn" data-toggle-extra="tab-content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="d-flex align-items-center">
                                <div id="circle-progress-13" class="circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="25" data-type="percent"></div>
                                <div class="ml-3">
                                    <h5 class="mb-1">Theme development</h5>
                                    <p class="mb-0">Preparing framework of block-based WordPress Theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                            <div class="iq-media-group">
                                <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/05.jpg" alt="">
                                </a>
                                <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/06.jpg" alt="">
                                </a>
                            </div>
                            <a class="btn btn-white text-primary link-shadow">High</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>