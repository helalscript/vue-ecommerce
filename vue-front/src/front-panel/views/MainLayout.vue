<script setup>
//css files
import "@/assets/front-assets/vendor/bootstrap/css/bootstrap.min.css"
import "@/assets/front-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
import "@/assets/front-assets/fonts/iconic/css/material-design-iconic-font.min.css"
import "@/assets/front-assets/fonts/linearicons-v1.0.0/icon-font.min.css"
import "@/assets/front-assets/vendor/animate/animate.css"
import "@/assets/front-assets/vendor/css-hamburgers/hamburgers.min.css"
import "@/assets/front-assets/vendor/animsition/css/animsition.min.css"
import "@/assets/front-assets/vendor/select2/select2.min.css"
import "@/assets/front-assets/vendor/daterangepicker/daterangepicker.css"
import "@/assets/front-assets/vendor/slick/slick.css"
import "@/assets/front-assets/vendor/MagnificPopup/magnific-popup.css"
import "@/assets/front-assets/vendor/perfect-scrollbar/perfect-scrollbar.css"
import "@/assets/front-assets/css/util.css"
import "@/assets/front-assets/css/main.css"

//js files
import "@/assets/front-assets/vendor/jquery/jquery-3.2.1.min.js"
import "@/assets/front-assets/vendor/animsition/js/animsition.min.js"
//import "@/assets/front-assets/vendor/bootstrap/js/popper.js"
//import "@/assets/front-assets/vendor/bootstrap/js/bootstrap.min.js"
import "@/assets/front-assets/vendor/select2/select2.min.js"
//import "@/assets/front-assets/vendor/daterangepicker/moment.min.js"
//import "@/assets/front-assets/vendor/daterangepicker/daterangepicker.js"
import "@/assets/front-assets/vendor/slick/slick.min.js"
import "@/assets/front-assets/js/slick-custom.js"
import "@/assets/front-assets/vendor/parallax100/parallax100.js"
import "@/assets/front-assets/vendor/MagnificPopup/jquery.magnific-popup.min.js"
import "@/assets/front-assets/vendor/isotope/isotope.pkgd.min.js"
//import "@/assets/front-assets/vendor/sweetalert/sweetalert.min.js"
//import "@/assets/front-assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"
import "@/assets/front-assets/js/main.js"

//component files
import Header from "../components/Menu.vue"
import Footer from "../components/Footer.vue"
import Cart from "../components/Cart.vue"
import Modal from "../components/Modal.vue"
import Product from "./Product.vue"


</script>


<template>
    <!-- Header -->
	<Header/>

	<!-- Cart -->
	<Cart/>

	
	<!-- views -->
	<router-view/>
		

	<!-- Footer -->
	<Footer/>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<Modal/>
</template>