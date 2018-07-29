<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni E-posta Hesabı Ekle
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("emailsettings/save"); ?>" method="post">
                    <div class="form-group">
                        <label>Protocol</label>
                        <input class="form-control" placeholder="Protocol" name="protocol" value="<?php echo isset($form_error) ? set_value("protocol") : ""; ?>">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("user_name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>E-posta Sunucu Bilgisi</label>
                        <input class="form-control" placeholder="Host Adı" name="host" value="<?php echo isset($form_error) ? set_value("host") : ""; ?>">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("host"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Port Numarası</label>
                        <input class="form-control" type="text" placeholder="Port numarası giriniz" name="port" value="<?php echo isset($form_error) ? set_value("port") : ""; ?>">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("port"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>E-posta Adresi(User)</label>
                        <input class="form-control" type="email" placeholder="User" name="user" value="<?php echo isset($form_error) ? set_value("user") : ""; ?>">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("user"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>E-posta Adresine Ait Şifre</label>
                        <input class="form-control" type="password" placeholder="şifre giriniz" name="password">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("password"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Kimden Gidecek (from)</label>
                        <input class="form-control" type="email" placeholder="e-posta" name="from" value="<?php echo isset($form_error) ? set_value("from") : ""; ?>">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("from"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Kime Gidecek (to)</label>
                        <input class="form-control" type="email" placeholder="e-posta" name="to" value="<?php echo isset($form_error) ? set_value("to") : ""; ?>">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("to"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>E-posta Başlık</label>
                        <input class="form-control" type="text" placeholder="E-posta başlık" name="user_name" value="<?php echo isset($form_error) ? set_value("user_name") : ""; ?>">
                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("user_name"); ?></small>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("emailsettings"); ?>" class="btn btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
    <!-- END column -->
</div>