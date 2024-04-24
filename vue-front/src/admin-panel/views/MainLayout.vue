<script setup>
    // css files
    import "@/assets/admin-assets/vendor/css/core.css"
    import "@/assets/admin-assets/vendor/fonts/boxicons.css"
    import "@/assets/admin-assets/vendor/css/theme-default.css"
    import "@/assets/admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
    import "@/assets/admin-assets/vendor/libs/apex-charts/apex-charts.css"
    import "@/assets/admin-assets/vendor/css/core.css"

    // jss files
    import "@/assets/admin-assets/vendor/js/helpers.js"
    import "@/assets/admin-assets/js/config.js"

    import "@/assets/admin-assets/vendor/libs/jquery/jquery.js"
    import "@/assets/admin-assets/vendor/libs/popper/popper.js"
    import "@/assets/admin-assets/vendor/js/bootstrap.js"
    import "@/assets/admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"
    import "@/assets/admin-assets/vendor/js/menu.js"
    import "@/assets/admin-assets/vendor/libs/apex-charts/apexcharts.js"
    import "@/assets/admin-assets/js/main.js"

    import SideMenu from "../components/SideMenu.vue"
    import NavBar from "../components/NavBar.vue"
    import Content from "../components/Content.vue"

</script>

<template>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <SideMenu/>
        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <NavBar/>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <Content/>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
</template>