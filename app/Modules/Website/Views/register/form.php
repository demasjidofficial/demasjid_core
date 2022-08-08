<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
<div class="alert danger">
  This <?= lang('crud.pendaftaran') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
  <a href="#">Restore <?= lang('crud.pendaftaran') ?>?</a>
</div>
<?php } ?>

<div class="container p-4">

  <form action="<?php echo $actionUrl; ?>" method="post" enctype="multipart/form-data">

    <?php echo csrf_field(); ?>

    <?php if (isset($data) && null !== $data) { ?>
    <input type="hidden" name="_method" value="PUT" />
    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
    <?php } ?>

    <fieldset>

      <div class="row mb-3">
        <div class="col-sm-12 text-center">
          <img src="<?= isset($data->path_image) ? site_url($data->path_image) : '/assets/admin/images/user.png' ?>"
            alt="" class="profile-user-img img-fluid img-circle">
        </div>
        <div class="offset-sm-4 col-sm-4 mt-3">
          <div class="input-group">
            <div class="custom-file">
              <?= form_upload('image', old('image', $data->image ?? ''), "class='custom-file-input' accept='image/*' required ") ?>
              <?php if (has_error('image')) { ?>
              <p class="text-danger"><?php echo error('image'); ?></p>
              <?php } ?>
              <?= form_label(lang('crud.path_image'),'',['for' => 'path_image', 'class' => 'custom-file-label']) ?>
            </div>
            <div class="input-group-append clickable">
              <span class="input-group-text">
                <i class="fas fa-camera"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.class_id'),'',['for' => 'class_id', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_dropdown('class_id',$kelasItems ,old('class_id', $data->class_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.class_id')."' ") ?>
          <?php if (has_error('class_id')) { ?>
          <p class="text-danger"><?php echo error('class_id'); ?></p>
          <?php } ?>
        </div>
      </div>      
      <div class="row mb-3">
        <?= form_label(lang('crud.name'),'',['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.name')."' ") ?>
          <?php if (has_error('name')) { ?>
          <p class="text-danger"><?php echo error('name'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.nis'),'',['for' => 'nis', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('nis', old('nis', $data->nis ?? ''), "class='form-control int'  placeholder='".lang('crud.nis')."' ") ?>
          <?php if (has_error('nis')) { ?>
          <p class="text-danger"><?php echo error('nis'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.nick_name'),'',['for' => 'nick_name', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('nick_name', old('nick_name', $data->nick_name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.nick_name')."' ") ?>
          <?php if (has_error('nick_name')) { ?>
          <p class="text-danger"><?php echo error('nick_name'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.birth_date'),'',['for' => 'birth_date', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('birth_date', old('birth_date', $data->birth_date ?? ''), "class='form-control date' required placeholder='".lang('crud.birth_date')."' ") ?>
          <?php if (has_error('birth_date')) { ?>
          <p class="text-danger"><?php echo error('birth_date'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.birth_place'),'',['for' => 'birth_place', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('birth_place', old('birth_place', $data->birth_place ?? ''), "class='form-control varchar'  placeholder='".lang('crud.birth_place')."' ") ?>
          <?php if (has_error('birth_place')) { ?>
          <p class="text-danger"><?php echo error('birth_place'); ?></p>
          <?php } ?>
        </div>
      </div>
      
      <div class="row mb-3">
        <?= form_label(lang('crud.gender'),'',['for' => 'gender', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">          
          <div class="form-check  form-check-inline">
            <?= form_radio(['name' => 'gender'], 'l' , (isset($data->gender) ? ($data->gender == 'l' ? true: false) : false) , "class='form-check-input' required") ?>
            <label class="form-check-label">Laki-laki</label>
          </div>
          <div class="form-check  form-check-inline">
            <?= form_radio(['name' => 'gender'], 'p' , (isset($data->gender) ? ($data->gender == 'p' ? true: false) : true) , "class='form-check-input' required") ?>
            <label class="form-check-label">Perempuan</label>
          </div>


          <?php if (has_error('gender')) { ?>
          <p class="text-danger"><?php echo error('gender'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.provinsi_id'),'',['for' => 'provinsi_id', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_dropdown('provinsi_id', $provinsiItems, old('provinsi_id', $data->provinsi_id ?? ''), "class='form-control select2bs4 provinsi' required") ?>
          <?php if (has_error('provinsi_id')) { ?>
          <p class="text-danger"><?php echo error('provinsi_id'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.kota_id'),'',['for' => 'kota_id', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_dropdown('kota_id', $kotaItems, old('kota_id', $data->kota_id ?? ''), "class='form-control select2bs4 kota' data-level='kota/kabupaten' data-reference='select.provinsi' required") ?>
          <?php if (has_error('kota_id')) { ?>
          <p class="text-danger"><?php echo error('kota_id'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.kecamatan_id'),'',['for' => 'kecamatan_id', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_dropdown('kecamatan_id', $kecamatanItems, old('kecamatan_id', $data->kecamatan_id ?? ''), "class='form-control select2bs4 kecamatan' data-level='kecamatan' data-reference='select.kota' required") ?>
          <?php if (has_error('kecamatan_id')) { ?>
          <p class="text-danger"><?php echo error('kecamatan_id'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.desa_id'),'',['for' => 'desa_id', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_dropdown('desa_id', $desaItems, old('desa_id', $data->desa_id ?? ''), "class='form-control select2bs4 desa' data-level='desa' data-reference='select.kecamatan' required placeholder='".lang('crud.desa_id')."' ") ?>
          <?php if (has_error('desa_id')) { ?>
          <p class="text-danger"><?php echo error('desa_id'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.address'),'',['for' => 'address', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('address', old('address', $data->address ?? ''), "class='form-control varchar'  placeholder='".lang('crud.address')."' ") ?>
          <?php if (has_error('address')) { ?>
          <p class="text-danger"><?php echo error('address'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.school_origin'),'',['for' => 'school_origin', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('school_origin', old('school_origin', $data->school_origin ?? ''), "class='form-control varchar'  placeholder='".lang('crud.school_origin')."' ") ?>
          <?php if (has_error('school_origin')) { ?>
          <p class="text-danger"><?php echo error('school_origin'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.description'),'',['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_textarea('description', old('description', $data->description ?? ''), "rows='4' class='form-control text' required placeholder='".lang('crud.description')."' ") ?>
          <?php if (has_error('description')) { ?>
          <p class="text-danger"><?php echo error('description'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.father_name'),'',['for' => 'father_name', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('father_name', old('father_name', $data->father_name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.father_name')."' ") ?>
          <?php if (has_error('father_name')) { ?>
          <p class="text-danger"><?php echo error('father_name'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.father_job'),'',['for' => 'father_job', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('father_job', old('father_job', $data->father_job ?? ''), "class='form-control varchar' required placeholder='".lang('crud.father_job')."' ") ?>
          <?php if (has_error('father_job')) { ?>
          <p class="text-danger"><?php echo error('father_job'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.father_tlpn'),'',['for' => 'father_tlpn', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('father_tlpn', old('father_tlpn', $data->father_tlpn ?? ''), "class='form-control varchar'  placeholder='".lang('crud.father_tlpn')."' ") ?>
          <?php if (has_error('father_tlpn')) { ?>
          <p class="text-danger"><?php echo error('father_tlpn'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.father_email'),'',['for' => 'father_email', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('father_email', old('father_email', $data->father_email ?? ''), "class='form-control varchar'  placeholder='".lang('crud.father_email')."' ") ?>
          <?php if (has_error('father_email')) { ?>
          <p class="text-danger"><?php echo error('father_email'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.mother_name'),'',['for' => 'mother_name', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('mother_name', old('mother_name', $data->mother_name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.mother_name')."' ") ?>
          <?php if (has_error('mother_name')) { ?>
          <p class="text-danger"><?php echo error('mother_name'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.mother_job'),'',['for' => 'mother_job', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('mother_job', old('mother_job', $data->mother_job ?? ''), "class='form-control varchar' required placeholder='".lang('crud.mother_job')."' ") ?>
          <?php if (has_error('mother_job')) { ?>
          <p class="text-danger"><?php echo error('mother_job'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.mother_tlpn'),'',['for' => 'mother_tlpn', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('mother_tlpn', old('mother_tlpn', $data->mother_tlpn ?? ''), "class='form-control varchar'  placeholder='".lang('crud.mother_tlpn')."' ") ?>
          <?php if (has_error('mother_tlpn')) { ?>
          <p class="text-danger"><?php echo error('mother_tlpn'); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row mb-3">
        <?= form_label(lang('crud.mother_email'),'',['for' => 'mother_email', 'class' => 'col-form-label col-sm-2']) ?>
        <div class="col-sm-10">
          <?= form_input('mother_email', old('mother_email', $data->mother_email ?? ''), "class='form-control varchar'  placeholder='".lang('crud.mother_email')."' ") ?>
          <?php if (has_error('mother_email')) { ?>
          <p class="text-danger"><?php echo error('mother_email'); ?></p>
          <?php } ?>
        </div>
      </div>      
    </fieldset>

    <div class="row">
      <div class="col-sm-10 offset-2">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
        <?= lang('crud.pendaftaran') ?></button>
      </div>
    </div>

  </form>
</div>
<?php $this->endSection(); ?>


<?php $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/select2/css/select2.min.css', 'css') ?>
<?= asset_link('admin/theme-adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css', 'css') ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css', 'css') ?>
<style>
  .form-control{
    font-size: 1.5rem;
    height: calc(3.5rem + 2px);
  }
  .custom-file-input,.custom-file,.custom-file-label{    
    height: calc(3.5rem + 2px);
  }
</style>
<?php $this->endSection(); ?>

<?= $this->section('scripts') ?>
<!-- bs-custom-file-input -->
<?= asset_link('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/select2/js/select2.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js') ?>
<!-- daterangepicker -->
<?= asset_link('admin/theme-adminlte/plugins/moment/moment-min.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js') ?>


<script type="text/javascript">
$(function() {
  bsCustomFileInput.init();
  $('input[name$=email]').inputmask({
    'alias': 'email'
  })
  $('input[name$=tlpn]').inputmask({
    'regex': String.raw `\d{11,13}`
  })
  $('input[name=birth_date]').daterangepicker({
      "singleDatePicker": true,
    "autoApply": true,
    "locale": {
      "format": 'YYYY-MM-DD'
    }
  });

  $('input:file').change(function() {
    var i = $(this).prev('label').clone();
    var file = $(this).get(0).files[0].name;
    $(this).prev('label').text(file);
  });

  $(document).on('select2:open', () => {
    document.querySelector('.select2-search__field').focus();
  });

  $('select.provinsi').select2({
    theme: 'bootstrap4'
  });
  $('select.kota, select.kecamatan, select.desa').select2({
    theme: 'bootstrap4',
    ajax: {
      url: "<?= site_url('api/wilayahs') ?>",
      type: "get",
      delay: 250,
      dataType: 'json',
      data: function(params) {
        return {
          "search": {
            "level": $(this).data('level'),
            "kode": $($(this).data('reference')).val() + "%",
            "nama": "%" + params.term + "%"
          }, // search term
        };
      },
      processResults: function(response) {
        const temp = []
        $.each(response.data, function(i, d) {
          temp.push({
            'id': d.kode,
            'text': d.nama
          });
          console.log(d);
        });

        return {
          results: temp
        };
      },
      cache: true
    }
  });
})
</script>
<?= $this->endSection() ?>