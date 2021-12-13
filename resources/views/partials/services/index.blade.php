<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <h2>Services</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-briefcase" style="cursor: pointer;" onclick="loadmodal('#one')"></i>
                </div>
                <h4 class="title"><a onclick="loadmodal('#one')">Corporate Governance</a></h4>
                <p class="description">Businesses need effective corporate governance to excel. A strong, controlled
                    framework of practices and processes keeps companies balanced, productive, and working in the best
                    interests of everyone involved.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-card-checklist" style="cursor: pointer;"
                        onclick="loadmodal('#two')"></i></div>
                <h4 class="title"><a onclick="loadmodal('#two')">Business Contracts and Agreements</a></h4>
                <p class="description">A Common perception is that any person who is well-versed in business may have
                    the capability to competently draft contracts for your business, but only those who are experienced
                    in business law can ensure that a contract is legally binding and secure of any potential loopholes
                    or hazards.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-bar-chart" style="cursor: pointer;" onclick="loadmodal('#three')"></i>
                </div>
                <h4 class="title"><a onclick="loadmodal('#three')">Transaction Advisory</a></h4>
                <p class="description">Transactions are significant events in the life of a business. It requires
                    experience, determination and pragmatism to bring deals safely through to conclusion. This is what
                    our experienced team of professionals delivers.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-calendar4-week" style="cursor: pointer;"
                        onclick="loadmodal('#four')"></i></div>
                <h4 class="title"><a onclick="loadmodal('#four')">Advisory on FEMA and FDI</a></h4>
                <p class="description">In India, Foreign Direct Investment policy is regulated under the Foreign
                    Exchange Management Act, 1999 governed by the Reserve Bank of India. According to Organization for
                    Economic Co-operation and Development (OECD), an investment of 10% or above from overseas is
                    considered as FDI.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-binoculars" style="cursor: pointer;" onclick="loadmodal('#five')"></i>
                </div>
                <h4 class="title"><a onclick="loadmodal('#five')">Audit, Assurance and Certification</a></h4>
                <p class="description">The focus of the audit and assurance department is to provide you with a quality
                    product that suits your needs, to provide helpful suggestions that improve your operations, to
                    provide legal/compliance guidance when necessary, and to provide a level of service that will result
                    in a long-lasting relationship.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><a onclick="loadmodal('#six')"><i class="bi bi-brightness-high"
                            style="cursor: pointer;" onclick="loadmodal('#six')"></i></a></div>
                <h4 class="title"><a onclick="loadmodal('#six')"> Appearance and Representation</a></h4>
                <p class="description">We appear on behalf of our clients before various statutory authorities for
                    compounding of contraventions or seeking regulatory approvals. Our seasoned professionals will
                    advise you on the optimum way and sail you through the process in a hassle-free manner.</p>
            </div>
        </div>

    </div>
</section>
@include('partials.services.1')
@include('partials.services.2')
@include('partials.services.3')
@include('partials.services.4')
@include('partials.services.5')
@include('partials.services.6')
<script>
    function loadmodal(id) {
        $(id).modal('show')
    }
</script>