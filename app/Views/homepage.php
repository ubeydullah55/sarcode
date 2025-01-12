<?= view('include/header') ?>
<?= view('include/leftmenu') ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
   


<div class="container-fluid py-4">
     
      <div class="row">
        <div class="">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Bilezik görüntüleme</h6>
            </div>
            <div class="card-body pt-4 p-3">
            <form method="POST" action="<?= site_url('incele') ?>">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input type="number" class="form-control" id="siparisId" name="siparis_id" placeholder="Sipariş ID giriniz" required>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <button type="submit" class="btn btn-primary">İncele</button>
      </div>
    </div>
  </div>
</form>
            </div>
          </div>
        </div>
       
      </div>
  
    </div>
    





    

    <?= view('include/footer') ?>
    

</main>




