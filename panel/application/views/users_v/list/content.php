<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Kullanıcı Listesi
            <a href="<?php echo base_url("users/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"> Yeni Ekle</i></a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)){ ?>
            <div class="alert alert-info text-center">
                <h4 class="alert-title">Kayıt Bulunamadı</h4>
                <p>Burada bir kayıt bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("users/new_form"); ?>"> tıklayınız</a></p>
            </div>

            <?php }else{ ?>

            <table class="table table-hover table-striped table-bordered content-container">
                <thead>
                    <th class="w50">#id</th>
                    <th>Kullanıcı Adı</th>
                    <th>Ad Soyad</th>
                    <th>E-posta</th>
                    <th>Durumu</th>
                    <th>işlem</th>
                </thead>
                <tbody>
                    <?php foreach ($items as $item){ ?>
                        <tr>
                            <td>#<?php echo $item->id; ?></td>
                            <td><?php echo $item->user_name; ?></td>
                            <td><?php echo $item->full_name; ?></td>
                            <td class="text-center"><?php echo $item->email; ?></td>
                            <td class="text-center">
                                <input
                                        data-url="<?php echo base_url("users/isActiveSetter/$item->id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : ""; ?> />
                            </td>
                            <td class="text-center w300">
                                <button
                                    data-url="<?php echo base_url("users/delete/$item->id")?>" type="button"
                                    class="btn btn-sm btn-danger btn-outline remove-btn">
                                    <i class="fa fa-trash"> Sil</i>
                                </button>
                                <a href="<?php echo base_url("users/update_form/$item->id"); ?>" type="button" class="btn btn-sm btn-purple btn-outline"><i class="fa fa-pencil-square-o"> Düzenle</i></a>
                                <a href="<?php echo base_url("users/update_password_form/$item->id"); ?>" type="button" class="btn btn-sm btn-primary btn-outline"><i class="fa fa-key"> Şifre Değiştir</i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
        </div><!-- .widget -->
    </div>
    <!-- END column -->
</div>