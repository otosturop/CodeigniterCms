<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>" . $item->user_name . "</b>" ." kaydının şifresini değiştiriyorsunuz"; ?>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("users/update_password/$item->id"); ?>" method="post">

                    <div class="form-group">
                        <label>Şifre</label>
                        <input class="form-control" type="password" placeholder="şifre giriniz" name="password">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("password"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Şifre Tekrar</label>
                        <input class="form-control" type="password" placeholder="Tekrar şifre giriniz" name="re_password">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("re_password"); ?></small>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("users"); ?>" class="btn btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
    <!-- END column -->
</div>