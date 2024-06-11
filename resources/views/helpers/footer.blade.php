 <!-- Start Footer -->
 <footer class="footer-area bg-f">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-6">
                 <h3>Acerca</h3>
                 <p> {{ $company->razon_social_empresa }}, restaurante y bar</p>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h3>Subscribe</h3>
                 <div class="subscribe_form">
                     <form class="subscribe_form">
                         <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..."
                             type="email">
                         <button type="submit" class="submit">SUBSCRIBETE</button>
                         <div class="clearfix"></div>
                     </form>
                 </div>
                 <ul class="list-inline f-social">
                     <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                 aria-hidden="true"></i></a></li>
                     <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </li>
                     <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                 aria-hidden="true"></i></a></li>
                     <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
                                 aria-hidden="true"></i></a></li>
                     <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"
                                 aria-hidden="true"></i></a></li>
                 </ul>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h3>Contactanos</h3>
                 <p class="lead">{{ $company->direccion_empresa }}</p>
                 <p class="lead">{{ $company->numero_uno_empresa }}</p>
                 <p class="lead">{{ $company->correo_empresa }}</p>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h3>Horarios</h3>
                 <p><span class="text-color">Martes: </span>Cerrado</p>
                 <p><span class="text-color">Lun-Mier :</span> 9:Am - 11PM</p>
                 <p><span class="text-color">Jue-Vier :</span> 9:Am - 11PM</p>
                 <p><span class="text-color">Sab-domin :</span> 9:Am - 11PM</p>
             </div>
         </div>
     </div>

     <div class="copyright">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <p class="company-name">All Rights Reserved. &copy; @php
                         echo date('Y')
                     @endphp <a
                             href="#">{{ $company->razon_social_empresa }}</a>
                         <a href=""></a>
                     </p>
                 </div>
             </div>
         </div>
     </div>

 </footer>
 <!-- End Footer -->
