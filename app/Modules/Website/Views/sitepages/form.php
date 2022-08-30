<?php $this->extend('master'); ?>

<?php $this->section('styles'); ?>
    <?= asset_link('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/codemirror.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/theme/monokai.css', 'css') ?>
<?= $this->endSection() ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.pages') ?></h4>
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

        
        <div class="row">
            <div class="col-md-7">
                <div class="row mb-3">
                    <?= form_label(lang('crud.menu'),'',['for' => 'sitemenu_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <!--?= form_input('sitemenu_id', old('sitemenu_id', $data->sitemenu_id ?? ''), "class='form-control int' ") ?-->

                        <?= form_dropdown('sitemenu_id', $menuItems, old('sitemenu_id', $data->sitemenu_id ?? ''), "class='form-control select2bs4 add-begin-option' data-label='".lang('crud.menu')."' required") ?>
                        <?php if (has_error('sitemenu_id')) { ?>
                        <p class="text-danger"><?php echo error('sitemenu_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row mb-3">
                <?= form_label(lang('crud.state'),'',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <!--?= form_input('state', old('state', $data->state ?? ''), "class='form-control varchar' ") ?-->

                    <?= form_dropdown('state', ['draft' => lang('app.draft'), 'release' => lang('app.release')], old('state', $data->state ?? ''), "class='form-control select2bs4 add-begin-option' data-label='".lang('crud.state')."' required") ?>
                    <?php if (has_error('state')) { ?>
                    <p class="text-danger"><?php echo error('state'); ?></p>
                    <?php } ?>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="row mb-3">
                    <?= form_label(lang('crud.image'),'',['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">

                        <!--?= form_input('path_image', old('path_image', $data->path_image ?? ''), "class='form-control varchar' ") ?-->

                        <?php if(isset($data->path_image)): ?>
                        <div class="justify-content-center photo-wrapper">           
                            <img src="<?= site_url($data->path_image) ?>" alt="" class="img-thumbnail" style="height:150px">
                        </div>
                        <?php endif ?>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <?= form_upload('path_image', old('path_image', $data->path_image ?? ''), "class='custom-file-input'  placeholder='".lang('crud.path_image')."' accept='image/*' ") ?>
                                    <label class="custom-file-label">Pilih gambar halaman</label>
                                </div>
                                <div class="input-group-append clickable">
                                    <span class="input-group-text">
                                        <i class="fas fa-camera"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php if (has_error('path_image')) { ?>
                        <p class="text-danger"><?php echo error('path_image'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-5">
                &nbsp;
            </div>           

        </div><!--/.row -->

        <!-- /.card -->
        <div class="card card-primary card-outline">
            
            <div class="card-body">
                <ul class="nav nav-tabs" id="tab-head-wrapper" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab-head-<?= lang('crud.country_id')?>" data-toggle="pill" href="#tab-content-<?= lang('crud.country_id')?>" role="tab" aria-controls="form-page-<?= lang('crud.country_id')?>" aria-selected="true"><?= lang('crud.country_id')?></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" id="tab-head-<= lang('crud.country_ar')?>" data-toggle="pill" href="#tab-content-<?= lang('crud.country_ar')?>" role="tab" aria-controls="form-page-<?= lang('crud.country_ar')?>" aria-selected="true"><?= lang('crud.country_ar')?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-head-<= lang('crud.country_en')?>" data-toggle="pill" href="#tab-content-<?= lang('crud.country_en')?>" role="tab" aria-controls="form-page-<?= lang('crud.country_en')?>" aria-selected="true"><?= lang('crud.country_en')?></a>
                </li> -->
                </ul>
                <div class="tab-content" id="tab-content-wrapper">
                <div class="tab-pane fade show active" id="tab-content-<?= lang('crud.country_id')?>" role="tabpanel" aria-labelledby="tab-head-<?= lang('crud.country_id')?>">
                    <br/>
                    <fieldset>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.title'),'',['for' => 'title', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('title', old('title', $data->title ?? ''), "class='form-control varchar' placeholder='Masukkan teks Indonesia' required") ?>
                                <?php if (has_error('title')) { ?>
                                <p class="text-danger"><?php echo error('title'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.subtitle'),'',['for' => 'subtitle', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('subtitle', old('subtitle', $data->subtitle ?? ''), "class='form-control varchar' required") ?>
                                <?php if (has_error('subtitle')) { ?>
                                <p class="text-danger"><?php echo error('subtitle'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.content'),'',['for' => 'content', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_textarea('content', old('content', $data->content ?? ''), "rows='4' class='form-control text' required") ?>
                                
                                <?php if (has_error('content')) { ?>
                                <p class="text-danger"><?php echo error('content'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.permalink'),'',['for' => 'permalink', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('permalink', old('permalink', $data->permalink ?? ''), "class='form-control varchar' required") ?>
                                <?php if (has_error('permalink')) { ?>
                                <p class="text-danger"><?php echo error('permalink'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.meta_title'),'',['for' => 'meta_title', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('meta_title', old('meta_title', $data->meta_title ?? ''), "class='form-control varchar' required") ?>
                                <?php if (has_error('meta_title')) { ?>
                                <p class="text-danger"><?php echo error('meta_title'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.meta_desc'),'',['for' => 'meta_desc', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_textarea('meta_desc', old('meta_desc', $data->meta_desc ?? ''), "rows='4' class='form-control text' required") ?>
                                <?php if (has_error('meta_desc')) { ?>
                                <p class="text-danger"><?php echo error('meta_desc'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </fieldset>
                </div>
                
                
                </div>
                
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card -->    


        <div class="text-end py-3">
            <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> <?= lang('app.save')?></button>
        </div>

    </form>

    </x-admin-box>

<?php $this->endSection(); ?>

<?= $this->section('scripts') ?>
    <?= asset_link('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/codemirror.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/css/css.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/xml/xml.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/htmlmixed/htmlmixed.js', 'js') ?>
    <script type="text/javascript">
        $(function(){
            $('[name=content]').summernote({
                height: 450,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
            $('.add-begin-option').each(function(){
                var selected = $('input[name=title]').val()=='' ? 'selected="selected"' : '';
                $(this).prepend('<option '+selected+'>Pilih '+$(this).attr('data-label')+'</option>');
            })
        })
    </script>
<?= $this->endSection() ?>
