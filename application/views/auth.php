<div class="container">
<div class="row justify-content-center">
  <div class="col-lg-5 my-4 ">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center  mt-0">
                <img src="<?=site_url('/assets/img/perusahaan/logo.png'); ?>" width="100%" height="100%">
              </div>
               <hr>                              
              <?= $this->session->flashdata('message'); ?>
              <form class="user" method="post" action="<?= site_url('auth')?>">
                <div class="form-group">
                    <input type="text"  class="form-control shadow <? if(form_error('email')){ echo "is-invalid";} ?>"  name="email" id="idusername" placeholder="Email">
                    <div class="invalid-feedback">Harus diisi</div>
                </div>
                <div class="form-group">
                    <input type="password"  class="form-control shadow <? if(form_error('password')){ echo "is-invalid";} ?>"  name="password" id="password" placeholder="Password">
                    <div class="invalid-feedback">Harus diisi</div>
                </div>
                <button  type="submit" class="btn btn-outline-success r btn-block">
                  Login
                </button>
                <hr>
              </form>
            </div>
            </div>
          </div>
        </div>
    </div>
</div>
</div>


