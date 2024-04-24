<script setup>
    import Footer from "../components/Footer.vue"
</script>


<template>
    <div class="content-wrapper">
            <!-- Content -->

            <router-view/>
            <!-- / Content -->

            <!-- Footer -->
            <Footer/>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
</template>