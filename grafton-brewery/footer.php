<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grafton-brewery
 */

?>

	<footer class="container-fluid site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
						<div>
							<h2>The Grafton Heritage Brewery is a part of the </h2>
							<img src="/wp-content/uploads/2023/06/BHG-logo-Reverse.png" alt="grafton brewery">
						</div>
				</div>
				<div class="col-12">
						<h3>Website created by Voxis Communications 2023</h3>
				</div>

			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script>

    function getCookie(cName) {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie); //to be careful
        const cArr = cDecoded.split('; ');
        let res;
        cArr.forEach(val => {
            if (val.indexOf(name) === 0) res = val.substring(name.length);
        })
        return res
    }

    function setPopupCookie() {
        document.cookie =`cookiePopup=seen; expires=${new Date(new Date().getTime()+1000*60*60*24*365).toGMTString()}`;
    }

    
addEventListener("DOMContentLoaded", (event) => {

    let myCookie = getCookie("cookieLegal");

    if (myCookie !== "legal"){
			// Show Age Gate Modal
			document.getElementById("modal-overlay").style.cssText = `
			display: flex;
			visibility: visible;
			opacity: 1;`;
			document.querySelector('body').style.overflow = 'hidden';
		}
		
	});

	// Hide Modal
	const closeModalButton = document.getElementById("close-modal");

	const hideModalWindow = () => {
		document.getElementById("modal-overlay").style.display = 'none';
		document.querySelector('body').style.overflow = 'auto';
        document.cookie =`cookieLegal=legal; expires=${new Date(new Date().getTime()+1000*60*60*24*365).toGMTString()}`;
	}

	closeModalButton.addEventListener("click", hideModalWindow);
</script>

<script>
    function scrollToSignup() {
        let checkBox = document.getElementById("yeah");
        let checkBoxNah = document.getElementById("nah");

        if(checkBoxNah.checked == true) {
                document.querySelector('.sign-up-popup').style.display = "none";
                setPopupCookie();  
        }      
    }
</script>

<script>
//popup signup 
document.addEventListener("DOMContentLoaded", () => {

    let target = document.querySelector(".intro-grafton");
    
    let options = {
        threshold: 0.5,
    };

    let observer = new IntersectionObserver( entries => {
        entries.forEach( entry => {
            console.log(entry);

            function swapimage() {
                if (window.innerWidth < 600) {
                        document.querySelector('div#popup-content img').src='/wp-content/uploads/2023/06/SIGN-UP-Gate-Layout-logo.png';
                    } else {
                        document.querySelector('div#popup-content img').src='/wp-content/uploads/2023/06/SIGN-UP-Gate-Layout-1.webp';
                }
            }

            if (entry.isIntersecting) {
                const popupelement = document.querySelector('.sign-up-popup');
                popupelement.style.transform = "translate(0)";
                swapimage();

                window.addEventListener('resize', () => {
                    swapimage();
                });
                
                observer.unobserve(target);
                
            }
        })
       
    }, options);

    //check cookie first 
    let myCookie = getCookie("cookiePopup");

    if (myCookie !== "seen"){
        observer.observe(target);
    }
});

</script>
<script>
    var $ = jQuery;
    $('.collapse').on('shown.bs.collapse', function(e) {
  var $card = $(this).closest('.accordion-item');
  var $open = $($(this).data('parent')).find('.collapse.show');
  
  var additionalOffset = 0;
  if($card.prevAll().filter($open.closest('.accordion-item')).length !== 0)
  {
		additionalOffset =  $open.height();
  }
  $('html,body').animate({
    scrollTop: $card.offset().top - additionalOffset
  }, 500);
});
</script>

</body>
</html>
