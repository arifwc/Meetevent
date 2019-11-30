@extends('layout.mainlayout')
<style>
#upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}

</style>
@section('page')
<section class="generic-banner relative">
<div class="container">
  <div class="row height align-items-center justify-content-center">
    <div class="col-lg-10">
      <div class="generic-banner-content">
        <h2 class="text-white text-center">Terima Kasih</h2>
        <p class="text-white">Silahkan upload bukti pembayaran anda disini</p>
        <div class="row py-4">
          <div class="col-lg-6 mx-auto">
  
              <!-- Upload image input-->
              <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                  <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                  <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                  <div class="input-group-append">
                      <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                  </div>
              </div>
  
              <!-- Uploaded image area-->
              <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
              <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
  
          </div>
      </div>
  </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>