<?= view('include/header') ?>
<?= view('include/leftmenu') ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Bilezik İncele</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <!-- Eğer sipariş verisi gelmediyse hata mesajı göster -->
                        <?php if (empty($siparis)): ?>
                            <div class="alert alert-danger">
                                Sipariş bulunamadı.
                            </div>
                        <?php else: ?>
                            <form method="POST" action="<?= site_url('anasayfa/incele') ?>">
                                <div class="row">
                                    <!-- Bilezik Resmi -->
                                    <div class="col-4"></div>
                                    <div class="col-md-4">
                                        <div class="position-relative text-center">
                                            <a class="d-block">
                                            <img src="products/<?= $siparis['bilezik_id'] ?>.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-md">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>


                                    <?php if (!empty($bilezik)): ?>
                                        <div class="col-md-12 mt-4">
                                            <h6 class="text-uppercase text-secondary">Standart Detayları</h6>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="bilezikAd" class="form-control-label">Bilezik Adı</label>
                                                <input type="text" class="form-control" id="bilezikAd" name="bilezik_ad" value="<?= esc($bilezik['name']) ?>" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bilezikBasGr" class="form-control-label">Standart Gram</label>
                                                <input type="text" class="form-control" id="bilezikBasGr" name="bilezik_bas_gr" value="<?= esc($bilezik['bas_gr']) ?>-<?= esc($bilezik['bit_gr']) ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bilezikBitGr" class="form-control-label">Standart Genişlik</label>
                                                <input type="text" class="form-control" id="bilezikBitGr" name="bilezik_bas_gen" value="<?= esc($bilezik['bas_gen']) ?>-<?= esc($bilezik['bit_gen']) ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="bilezikCNC" class="form-control-label">Standart CNC</label>
                                                <input type="text" class="form-control" id="bilezikCNC" name="bilezik_cnc" value="<?= esc($bilezik['cnc']) ?>" readonly>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Sipariş Detayları -->
                                  
                                    
                                    <div class="col-md-12 mt-4">
                                            <h6 class="text-uppercase text-secondary">Bilezik Detayları</h6>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="siparisId" class="form-control-label">Sipariş ID</label>
                                            <input type="text" class="form-control" id="siparisId" name="siparis_id" value="<?= esc($siparis['id']) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tarih" class="form-control-label">Tarih</label>
                                            <input type="text" class="form-control" id="tarih" name="tarih" value="<?= esc($siparis['tarih']) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="agirlik" class="form-control-label">Ağırlık</label>
                                            <input type="text" class="form-control" id="agirlik" name="agirlik" value="<?= esc($siparis['agirlik']) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="genislik" class="form-control-label">Genişlik</label>
                                            <input type="text" class="form-control" id="genislik" name="genislik" value="<?= esc($siparis['genislik']) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cnc" class="form-control-label">CNC</label>
                                            <input type="text" class="form-control" id="cnc" name="cnc" value="<?= esc($siparis['cnc']) ?>" readonly>
                                        </div>
                                    </div>

                                    <!-- Bilezik Detayları -->
                               
                                </div>

                                <!-- Ekstra Alanlar -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Yeni Kayıt</button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= view('include/footer') ?>
</main>
