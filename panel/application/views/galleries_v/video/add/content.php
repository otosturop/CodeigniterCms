<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni video Ekle
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("galleries/gallery_video_save/$gallery_id"); ?>" method="post">

                    <div class="form-group">
                        <label>Video URL</label>
                        <input class="form-control" placeholder="Video bağlantısını giriniz" name="url">

                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("url"); ?></small>
                        <?php } ?>

                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("galleries/gallery_video_list/$gallery_id"); ?>" class="btn btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
    <!-- END column -->
</div>