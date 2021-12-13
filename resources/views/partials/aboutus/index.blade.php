<style>
    #company {
        color: #5c9f24;
        cursor: pointer;
        text-decoration: underline
    }
</style>
<section id="about" class="about">
    <div class="container">

        <div class="row no-gutters">
            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
            </div>
            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                <div class="content d-flex flex-column justify-content-center">
                    {!!@$aboutus[0]['content']!!}
                    <div class="row">
                        <div class="col-md-12 icon-box">
                            <i class="bx bx-receipt"></i>
                            {!!@$aboutus[1]['content']!!}
                        </div>
                        <div class="col-md-12 icon-box">
                            <i class="bx bx-images"></i>
                            {!!@$aboutus[2]['content']!!}
                        </div>
                    </div>
                </div>
                <!-- End content-->
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="companysecretaries" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 5% 5% 5% 5%;font-family:sans-serif;text-align:Justify; ">
                <div class="col-lg-12 col-md-12 icon-box">
                    <h4 class="title">Company secretaries</h4>
                    <p class="description">Company secretaries in all sectors have high level responsibilities including
                        governance structures and mechanisms, corporate conduct within an organisation's regulatory
                        environment, board, shareholder and trustee meetings, compliance with legal, regulatory and
                        listing requirements, the training and induction of non-executives and trustees, contact with
                        regulatory and external bodies, reports and circulars to shareholders/trustees, management of
                        employee benefits such as pensions and employee share schemes, insurance administration and
                        organisation, the negotiation of contracts, risk management, property administration and
                        organisation and the interpretation of financial accounts.

                        Company secretaries are the primary source of advice on the conduct of business and this can
                        span everything from legal advice on conflicts of interest, through accounting advice on
                        financial reports, to the development of strategy and corporate planning.

                        The Institute of Company Secretaries of India (ICSI) is the only recognized professional body in
                        India to develop and regulate the profession of Company Secretaries in India. It is a premier
                        national professional body set up under an act of Parliament, the Company Secretaries Act, 1980.
                        ICSI functions under the jurisdiction of the Ministry of Corporate Affairs, Government of India.
                        All the Partners and Associates of SMPV are qualified Company Secretaries as per the Company
                        Secretaries Act, 1980 and are licensed to practice. The firm consists of both associate and
                        fellow members as described in section 5 of the aforementioned Act.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#company").click(function(){
        loadinfo('#companysecretaries')
    });

    function loadinfo(id) {

        $(id).modal('show')
    }
</script>