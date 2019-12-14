<?php include("header-links.php"); ?>
<?php include("header.php"); ?>

  <main id="main">

<section id="facts" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;padding-top:120px;">
		<div class="container">
		<div class="row">
					<div class="col-md-12">
						<header class="section-header">
						   <h3 class="text-center">Our Gallery</h3>
						
						</header>
						
					</div>
				</div>
	<div class="row">

		<div class="row gallery-cus">
		
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Breading Sheap"
                   data-image="img/gallery/1.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/1.png"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Transport Lorry"
                   data-image="img/gallery/2.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/2.png"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sheap At evening"
                   data-image="img/gallery/3.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/3.png"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="img/gallery/3.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/4.png"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/gallery/5.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/5.png"
                         alt="Another alt text">
                </a>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/gallery/12.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/12.png"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/gallery/11.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/11.png"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/gallery/10.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/10.png"
                         alt="Another alt text">
                </a>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/gallery/9.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/9.png"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/gallery/8.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/8.png"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/gallery/7.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/7.png"
                         alt="Another alt text">
                </a>
            </div>    
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Transport"
                   data-image="img/gallery/6.png"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/gallery/6.png"
                         alt="Another alt text">
                </a>
            </div>
        </div>


       
	</div>
</div>
<div class="clearfix">&nbsp;</div>
	</section>
	 <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
		
		
  </main>
  
  <?php include("footer.php"); ?>
<?php include("footer-links.php"); ?>
<script>
  let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

  </script>
  
  