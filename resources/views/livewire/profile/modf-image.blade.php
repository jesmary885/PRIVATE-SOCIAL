<div>

    <style>
        .modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	display:none;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: auto;
}
.modalDialog > div {
	width: 1000px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
  -webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
}
.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }

.preview {
    text-align: center;
    overflow: hidden;
    width: 160px; 
    height: 160px;
    margin: 10px;
    border: 1px solid red;
}

.section{
    margin-top:150px;
    background:#fff;
    padding:50px 30px;
}

.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    }

    img {
    display: block;
    max-width: 100%;
    }

    </style>

<body onload="javascript:showModal();">
    <div id="openModal" class="modalDialog" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div>
        <a href="#close" title="Close" class="close" onclick="javascript:CloseModal();">X</a>



        <div class="img-container">
            <div class="row">
              <div class="col-md-8">

                <div class="urlsend"> 

                    <img id="image" src="{{ Storage::url($image) }}">


                </div>


                
              </div>
          <div class="col-md-4">
            <div class="preview"></div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="crop">Guardar</button>
          </div>
        



      </div>
    </div>
  </body>





@push('script')

<script>
    function showModal() {
  document.getElementById('openModal').style.display = 'block';


  $('body').on('click', '.urlsend', function(e) {

    var image = document.getElementById('image');
    var file_data = $('.image');

    console.log(file_data)

    var url;

    url = ('blob:'.concat('', image.src));

    console.log(url)

   /* if (URL) {
                  done(URL.createObjectURL(file));

                  console.log( URL)
              }*/

    cropper = new Cropper(image, {
              aspectRatio: 0,
              viewMode: 3,
              preview: '.preview'
          });

    
  });

  $("#crop").click(function(){
          canvas = cropper.getCroppedCanvas({
              width: 1000,
              height: 600,
          });


        


          canvas.toBlob(function(blob) {

            console.log(blob)

              url = URL.createObjectURL(blob);

             
              var reader = new FileReader();
              reader.readAsDataURL(blob);
              reader.onloadend = function() {
                  var base64data = reader.result; 
                  $.ajax({
                      type: "POST",
                      dataType: "json",
                      url: "crop-image-publicacion",
                      data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                      success: function(data){
                          console.log(data);
                          $modal.modal('hide');
   
                          window.location.href = "http://privatesocial.test/Add_public";
                 
                      }
                  });
              }
          });

        
      });

}

function CloseModal() {
  document.getElementById('openModal').style.display = 'none';
}
</script>


<script>

    var $modal = $('#openModal');
      var image = document.getElementById('image');
      var cropper;


      $("body").on("focus", ".image", function(e){

        consol

console.log(e)
  var files = e.target.files;
  var done = function (url) {
      image.src = url;
      $modal.modal('show');
  };

  var reader;
  var file;
  var url;

  if (files && files.length > 0) {
      file = files[0];
      if (URL) {
          done(URL.createObjectURL(file));
      } else if (FileReader) {
          reader = new FileReader();
          reader.onload = function (e) {
              done(reader.result);

              console.log(reader);
          };
      reader.readAsDataURL(file);
      }

     
  }
});

    
    



 






</script>

@endpush




</div>
