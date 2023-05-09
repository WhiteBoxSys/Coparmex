<div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Numero de <span>usuarios totales</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                    <h6><?php echo obtenerNumeroUsarios() ?></h6>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="col-xxl-4 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Numero de <span>categorias totales</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                    <h6><?php echo obtenerNumeroCategorias() ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xxl-4 col-xl-6">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Numero de <span>blogs publicados</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                    <h6><?php echo obtenerNumeroBlogs() ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xxl-4 col-xl-6">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Numero de <span>eventos publicados</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                    <h6><?php echo obtenerNumeroNoticias() ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>