@extends('common.main')
@section('content')
            <!-- Title Header Start -->
            <section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
                <div class="container">
                    <h1>Job Detail</h1>
                </div>
            </section>
            <div class="clearfix"></div>
            <!-- Title Header End -->
            
            <!-- Job Detail Start -->
            <section class="detail-desc">
                <div class="container white-shadow">
                
                    <div class="row">
                    
                        <div class="detail-pic">
                            <img src="{{url('/')}}/upload/{{$datas->logo}}" class="img" alt="" />
                            <a href="#" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
                        </div>
                        
                        <div class="detail-status">
                            <span>2 Days Ago</span>
                        </div>
                        
                    </div>
                    
                    <div class="row bottom-mrg">
                        <div class="col-md-8 col-sm-8">
                            <div class="detail-desc-caption">
                                <h4>{{$datas->companyname}}</h4>
                                <span class="designation">{{$datas->title}}</span>
                                <p>{{$datas->description}}</p>
                              
                                <ul>
                                    <li><i class="fa fa-briefcase"></i><span>Full time</span></li>
                                    <li><i class="fa fa-flask"></i><span>3 Year Experience</span></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div class="get-touch">
                                <h4>Get in Touch</h4>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><span>Menlo Park, CA</span></li>
                                    <li><i class="fa fa-envelope"></i><span>danieldax704@gmail.com</span></li>
                                    <li><i class="fa fa-globe"></i><span>microft.com</span></li>
                                    <li><i class="fa fa-phone"></i><span>0 123 456 7859</span></li>
                                    <li><i class="fa fa-money"></i><span>$1000 -$1200/Month</span></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row no-padd">
                        <div class="detail pannel-footer">
                            <div class="col-md-5 col-sm-5">
                                <ul class="detail-footer-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="col-md-7 col-sm-7">
                                <div class="detail-pannel-footer-btn pull-right">
                                    <a href="#" class="footer-btn grn-btn" title="">Quick Apply</a>
                                    <a href="#" class="footer-btn blu-btn" title="">Save Draft</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Job Detail End -->
            
           
@endsection