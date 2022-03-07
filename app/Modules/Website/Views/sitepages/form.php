<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; sitepages</a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  sitepages</h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This sitepages was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore sitepages?</a>
        </div>
    <?php } ?>


    <x-admin-box>


        <form action="<?php echo $actionUrl; ?>" method="post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <?php if (isset($data) && null !== $data) { ?>
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="<?php echo $data->id; ?>">
            <?php } ?>

            <fieldset>
                                <div class="row mb-3">
                    <?= form_label('title','',['for' => 'title', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('title', old('title', $data->title ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('title')) { ?>
                        <p class="text-danger"><?php echo error('title'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('subtitle','',['for' => 'subtitle', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('subtitle', old('subtitle', $data->subtitle ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('subtitle')) { ?>
                        <p class="text-danger"><?php echo error('subtitle'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('path_image','',['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('path_image', old('path_image', $data->path_image ?? ''), "class='form-control varchar' ") ?>
                        <?php if (has_error('path_image')) { ?>
                        <p class="text-danger"><?php echo error('path_image'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('content','',['for' => 'content', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('content', old('content', $data->content ?? ''), "rows='4' class='form-control text' required") ?>
                        <?php if (has_error('content')) { ?>
                        <p class="text-danger"><?php echo error('content'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('permalink','',['for' => 'permalink', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('permalink', old('permalink', $data->permalink ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('permalink')) { ?>
                        <p class="text-danger"><?php echo error('permalink'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('meta_title','',['for' => 'meta_title', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('meta_title', old('meta_title', $data->meta_title ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('meta_title')) { ?>
                        <p class="text-danger"><?php echo error('meta_title'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('meta_desc','',['for' => 'meta_desc', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('meta_desc', old('meta_desc', $data->meta_desc ?? ''), "rows='4' class='form-control text' required") ?>
                        <?php if (has_error('meta_desc')) { ?>
                        <p class="text-danger"><?php echo error('meta_desc'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('sitemenu_id','',['for' => 'sitemenu_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('sitemenu_id', old('sitemenu_id', $data->sitemenu_id ?? ''), "class='form-control int' ") ?>
                        <?php if (has_error('sitemenu_id')) { ?>
                        <p class="text-danger"><?php echo error('sitemenu_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('language_id','',['for' => 'language_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('language_id', old('language_id', $data->language_id ?? ''), "class='form-control int' ") ?>
                        <?php if (has_error('language_id')) { ?>
                        <p class="text-danger"><?php echo error('language_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('state','',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('state', old('state', $data->state ?? ''), "class='form-control varchar' ") ?>
                        <?php if (has_error('state')) { ?>
                        <p class="text-danger"><?php echo error('state'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('created_by','',['for' => 'created_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('created_by', old('created_by', $data->created_by ?? ''), "class='form-control int' ") ?>
                        <?php if (has_error('created_by')) { ?>
                        <p class="text-danger"><?php echo error('created_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> sitepages</button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
