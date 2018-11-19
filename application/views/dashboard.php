<div class="container py-5">
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <div class="row">
        <div class="card profil" style="width: 18rem;">
          <div class="card-body">
            <img src="https://dummyimage.com/largerectangle" alt="" height="50px" width="50px">
            <span><?=$this->session->userdata('username')?><span>
            <div class="progress my-3">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Exp 25%</div>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card my-2" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Latest Quiz Result</h5>
            <hr>
            <h4 class="display-5 mb-2"><?=$hasil_terbaru->judul?></h6>
            <a href="#" class="card-link text-muted">Posted in <?=$materi_terbaru->tanggal?></a>
          </div>
        </div>
          <div class="card my-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">New Material</h5>
              <hr>
              <h4 class="display-5 mb-2"><?=$materi_terbaru->nama?></h6>
              <a href="#" class="card-link text-muted">Posted in <?=$materi_terbaru->tanggal?></a>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-9 col-sm-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Feeds</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <hr>

          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div>
</div>
