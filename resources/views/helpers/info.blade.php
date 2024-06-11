<div class="contact-imfo-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 arrow-right">
                <i class="fa fa-volume-control-phone"></i>
                <div class="overflow-hidden">
                    <h4>Celular</h4>
                    <p class="lead">
                        {{ $company->numero_uno_empresa }} - {{ $company->numero_dos_empresa }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 arrow-right">
                <i class="fa fa-envelope"></i>
                <div class="overflow-hidden">
                    <h4>Email</h4>
                    <p class="lead">
                        {{ $company->correo_empresa }}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-map-marker"></i>
                <div class="overflow-hidden">
                    <h4>Ubicacion</h4>
                    <p class="lead">
                        {{ $company->direccion_empresa }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
