<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>" . $item->title . "</b>" ." kaydını düzenliyorsunuz"; ?>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("courses/update/$item->id"); ?>" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title" value="<?php echo $item->title; ?>">

                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("title"); ?></small>
                        <?php } ?>

                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                             <?php echo $item->description; ?>
                        </textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="datetimepicker1">Eğitim Tarihi</label>
                            <input type="hidden" name="event_date" id="datetimepicker1" data-plugin="datetimepicker"
                                   value="<?php echo $item->event_date; ?>"
                                   data-options="{ inline: true, viewMode: 'days',format : 'YYYY-MM-DD HH:mm:ss' }">
                            </input>
                        </div><!-- END column -->
                        <div class="col-md-2 image_upload_container">
                            <img src="<?php echo base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" class="img-responsive">
                       </div>

                        <div class="col-md-5 form-group image_upload_container">
                            <label>Görsel Seçiniz</label>
                            <input type="file" name="img_url" class="form-control">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("courses"); ?>" class="btn btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
    <!-- END column -->
</div>