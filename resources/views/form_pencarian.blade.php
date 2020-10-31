{{-- <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form> --}}
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div id="pencarian">
            <form action="movies/cari" method="get">
                <div class="input-group">
                    <input type="text" name="kata_kunci" class="form-control" placeholder="input keywords" value="<?php (!empty($kata_kunci) ? $kata_kunci : null)?>">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-info">Search</button>
                    </span>
                </div>
            </form>
            </div>
          </div>
      </div>
  </div>
