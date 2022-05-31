<style>
  #body-row{
    margin-left:0;
    margin-right:0;
  }

  #sidebar-container{
    min-height: 100vh;
    background-color: #30454A;
    padding: 0px;
  }

  .siderbar-col{
    width: 230px;
    position: fixed;
		top: 63px;
		z-index: 100;
  }

  #sidebar-container .list-group a{
    margin-top: 10px;
    height: 50px;
    color: white;
    border-color: #30454A;
  }
</style>

<nav class="navbar navbar-expand navbar-light bg-white topbar static-top" style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.65); position: fixed; position: left; z-index: 100; width: 100%">
  <a class="navbar-brand">
    <img src="<?= base_url('/images/logo/logo-ungu.png') ?>" style="width: 26px; margin-left: 10px">
    <span style="margin-left: 10px">WGadget</span>
  </a>
</nav>

<div class="row" id="body-row" style="padding-top: 70px">
  <div id="sidebar-container" class="siderbar-col col-lg-2 d-none d-md-block">
    <ul class="list-group">
      <a href="" style="background-color: #30454A" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-start align-items-center" style="background-color: #30454A">
          <span class="fa fa-user fa-fw mr-3"></span>
          <span>Daftar Brand</span>
        </div>
      </a>

      <a href="" style="background-color: #30454A" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-start align-items-center" style="background-color: #30454A; font-size: 15px">
          <span class="fa fa-user-slash fa-fw mr-3"></span>
          <span>Daftar HP</span>
        </div>
      </a>
    </ul>
  </div>
