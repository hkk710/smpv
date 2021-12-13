<section id="team" class="team section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Team</h2>
            <p><b>"The strength of the team is each individual member. The strength of each member is the team." – Phil
                    Jackson</b></p>
            <p>It is the individual commitment to the group effort which makes team SMPV work. We have been successful
                because of our people, their commitment, expertise and ambition.
            </p>
        </div>
        <div style="text-align: center;padding-bottom:2%">
            <h3>Administrators</h3>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" style="cursor: pointer;">
                    <img src="themes/public/img/team/mpvijayakumar.png" class="img-fluid" alt="">
                    <div class="member-info" onclick="info('#memberone')">
                        <div class="member-info-content">
                            <h4>M P Vijayakumar</h4>
                            <span>(B.Com, ACS)</span>
                            {{-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                <div class="member" style="cursor: pointer;">
                    <img src="themes/public/img/team/sreeraj.jpg" class="img-fluid" alt="">
                    <div class="member-info" onclick="info('#membertwo')">
                        <div class="member-info-content">
                            <h4>Sreeraj Muralidharan</h4>
                            <span>(BBM, FCS)</span>
                            {{-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                <div class="member" style="cursor: pointer;">
                    <img src="themes/public/img/team/joseprakash.png" class="img-fluid" alt="">
                    <div class="member-info" onclick="info('#memberthree')">
                        <div class="member-info-content">
                            <h4>Jose Prakash</h4>
                            <span>(B.Com, LLB, ACS, MBA)</span>
                            {{-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                <div class="member" style="cursor: pointer;">
                    <img src="themes/public/img/team/priyanka.jpg" class="img-fluid" alt="">
                    <div class="member-info" onclick="info('#memberfour')">
                        <div class="member-info-content">
                            <h4>PRIYANKA CHOUBEY </h4>
                            <span>ACS, LLB (HONS.), B.COM (HONS.)
                            </span>
                            {{-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.team.1')
@include('partials.team.2')
@include('partials.team.3')
@include('partials.team.4')
<script>
    function info(id) {
        $(id).modal('show')
    }
</script>