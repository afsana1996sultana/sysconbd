<footer id="site-footer" class="site-footer footer-v1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 class="text-white">Workshop:</h5>
                    <p>We have well equipped workshop for Electrical Panel & Tank Fabrication.
                    The address of workshop is given below:
                    Workshop_01: 1/7 , East Guran, Titas Road, Khilgaon, Dhaka</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 class="text-white">About Us</h5>
                    <p>2012, SYSCON Engineering Limited started its journey as a SIEMENS based
                     industrial Automation provider under the name of Syscon Engineering.
                    In 2017, Syscon Engineering renamed as SYSCON Engineering ltd, more dynamic
                    to grab new technologies.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 class="text-white">Quick Links</h5>
                    <ul class="list-items">
                        <li class="list-item"><a href="{{url('/business_unit/industrialautomation')}}">Business Units & Activities</a></li>
                        <li class="list-item"><a href="{{url('/clients')}}">Our Client</a></li>
                        <li class="list-item"><a href="{{url('/projectlist')}}">Project &amp; List</a></li>
                        <li class="list-item"><a href="{{url('/ecommerce')}}">E-Commerce</a></li>
                        <li class="list-item"><a href="{{url('/sitemap')}}">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="widget-footer">
                    <h5 class="text-white">Contact Us</h5>
                    <strong>Address:</strong><p>Sector #09, Road #02, House #27,Uttara, Dhaka-1230, Bangladesh</p>
                    <strong>Phone:</strong>+8801818-497401, +8801841797475
                    <strong>Email:</strong>info@sysconbd.com
                    <strong>Fax:</strong>+ 1(234)567 8901<br><br>
                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1343" method="post" action="https://templates.thememodern.com/engitech/newsletter.php">
                        <div class="mc4wp-form-fields">
                            <div class="subscribe-inner-form">
                                <input type="email" name="email" placeholder="Your Email">
                                <button type="submit" class="subscribe-btn-icon"><i class="flaticon-telegram"></i></button>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-md-6 mb-4 mb-md-0">
                @foreach($frontlogo as $val)
                <img src="{{asset('img/'.$val->logo_img)}}" style="background-color:white;" height="190px" width="200px" alt="" class="lazyloaded" data-ll-status="loaded">
                @endforeach
            </div>
            <div class="col-md-6 text-left text-md-right align-self-center">
                <p class="copyright-text">All Rights Reserved © 2022 by SYSCON Engineering Ltd.</p>
            </div>
        </div>
    </div>
</footer>