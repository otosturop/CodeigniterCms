<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form data-url="<?php echo base_url("galleries/reflesh_file_list/$item->id/$item->gallery_type"); ?>" action="<?php echo base_url("galleries/file_upload/$item->id/$item->gallery_type/$item->folder_name"); ?>" id="dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("galleries/file_upload/$item->id/$item->gallery_type/$item->folder_name"); ?>'}">
                    <div class="dz-message">
                        <h4 class="m-h-lg">Yüklemek istediğiniz dosyaları sürükleyiniz ya da buraya tıklayınız</h4>
                        <p class="m-b-lg text-muted">Lütfen jpg veya png uzantılı dosyalar yükleyiniz</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
    <!-- END column -->
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
           <b><?php echo $item->title; ?></b> Kaydına Ait Dosyalar
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body image_list_container">
                <?php $this->load->view("{$viewFolder}/{$subViewFolder}/render_elements/file_list_v");  ?>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
    <!-- END column -->
</div>