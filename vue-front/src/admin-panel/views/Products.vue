<template>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic Layout</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <div class="container">
    <h2>Product Table</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Product 1</td>
                    <td>Description of Product 1</td>
                    <td>$10.99</td>
                    <td>50</td>
                    <td>Category A</td>
                    <td><img src="@/assets/admin-assets/img/images.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Product 2</td>
                    <td>Description of Product 2</td>
                    <td>$19.99</td>
                    <td>30</td>
                    <td>Category B</td>
                    <td><img src="@/assets/admin-assets/img/images.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Product 3</td>
                    <td>Description of Product 3</td>
                    <td>$14.50</td>
                    <td>20</td>
                    <td>Category A</td>
                    <td><img src="@/assets/admin-assets/img/images.jpg" alt=""></td>
                </tr>
                <!-- Add more rows for additional products -->
            </tbody>
        </table>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>