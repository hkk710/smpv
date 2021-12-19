<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<style>
    .float {
        position: fixed;
        width: 40px;
        height: 40px;
        bottom: 60px;
        right: 15px;
        background-color: #1b1464;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 3px 3px 3px rgb(255, 255, 255);
        z-index: 1000;
        animation: bot-to-top 2s ease-out;
    }

    .float-area ul {
        position: fixed;
        right: 15px;
        padding-bottom: 20px;
        bottom: 70px;
        z-index: 100;
    }

    .float-area ul li {
        list-style: none;
        margin-bottom: 10px;
    }

    .float-area ul li a {
        background-color: #1b1464;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
        width: 40px;
        height: 40px;
        display: block;
    }

    .float-area ul:hover {
        visibility: visible !important;
        opacity: 1 !important;
    }


    .float-area .my-float {
        font-size: 14px;
        margin-top: 18px;
    }

    a#menu-share+ul {
        visibility: hidden;
    }

    a#menu-share:hover+ul {
        visibility: visible;
        animation: scale-in 0.5s;
    }

    a#menu-share i {
        animation: rotate-in 0.5s;
    }

    a#menu-share:hover>i {
        animation: rotate-out 0.5s;
        color: #fff;
    }

    @keyframes bot-to-top {
        0% {
            bottom: -40px
        }

        50% {
            bottom: 40px
        }
    }

    @keyframes scale-in {
        from {
            transform: scale(0);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes rotate-in {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes rotate-out {
        from {
            transform: rotate(360deg);
        }

        to {
            transform: rotate(0deg);
        }
    }


    .callback {
        background: white;
        width: 100%;
        font-family: Calibri, Arial, sans-serif;
        padding: 1px;
    }

    .callback h2,
    p {
        text-align: center;
    }

    .callback label {
        display: block;
        margin: 1em 0 .2em;
    }

    /* single-line text, checkbox, and button */
    .callback input,
    select,
    textarea {
        display: block;
        width: 100%;
        padding: .3em;
        font-size: 20px;
        background-color: #fbfbfb;
        border: solid 1px #CCC;
        resize: vertical;
    }

    .callback textarea {
        min-height: 180px;
    }

    .callback select {
        color: #000;
    }

    .callback option {
        color: #000;
        background: #fbfbfb;
    }

    .callback input[type=checkbox] {
        display: inline;
        width: auto;
        color: rgb(0, 0, 0);
    }

    .callback input[type=submit] {
        background: #1b1464;
        margin: 1em 0 0;
        color: white;
        border: none;
        border-radius: 8px;
        transition: all .3s ease-out;
    }

    .callback input:focus,
    input:hover,
    select:focus,
    select:hover,
    textarea:focus,
    textarea:hover {
        background: #e8f0fe;
    }

    /* hover and focus states */
    .callback input[type=submit]:hover,
    input[type=submit]:focus {
        background: #1b1464;
        outline: none;
    }

    @media screen and (min-width:600px) {

        /*  make the form 2 columns */
        form:after {
            content: '';
            display: block;
            clear: both;
        }

        .column {
            width: 50%;
            padding: 1em;
            float: left;
        }
    }
</style>

<div class="float-area">
    <a href="#" class="float" id="menu-share">
        <i class="fa fa-share my-float"></i>
    </a>
    <ul>
        <li><a href="https://twitter.com/SMPVLLP" target="_blank">
                <i class="fa fa-twitter my-float"></i>
            </a>
        </li>
        <li><a href="/blog" target="_blank">
                <i class="fa fa-rss my-float"></i>
            </a>
        </li>
        <li><a href="https://drive.google.com/file/d/1erMOwssxLMJAdZdCX52H5Hbav56uwVqs/view?usp=sharing" target="_blank">
                <i class="fa fa-file my-float"></i>
            </a>
        </li>
        <li><a onclick="loadmodal('#feedback')">
                <i class="fa fa-commenting my-float" style="color:#fff"></i>
            </a>
        </li>

    </ul>
</div>
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 5% 5% 5% 5%;font-family:sans-serif;text-align:Justify; ">
                <div class="col-lg-12 col-md-12 icon-box">
                    <form class="callback" action="callback" method="post">
                        @csrf
                        <h2>REQUEST CALLBACK</h2>
                        <p style="text-align:center">Please take a moment to get in touch, we will get back to you
                            shortly.</p>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="the-name">Your Name</label>
                                <input type="text" name="name" id="the-name">

                                <label for="the-email">Email Address</label>
                                <input type="email" name="email" id="the-email">

                                <label for="the-phone">Phone Number</label>
                                <input type="tel" name="mobile" id="the-phone">

                                <label for="the-reason">Service</label>
                                <select name="service" id="the-reason">
                                    <option value="">Choose one</option>
                                    <option value="Corporate Governance">Corporate Governance</option>
                                    <option value="Business Contracts and Agreements">Business Contracts and Agreements
                                    </option>
                                    <option value="Transaction Advisory">Transaction Advisory</option>
                                    <option value="Advisory on (FEMA) and (FDI)">Advisory on (FEMA) and (FDI)</option>
                                    <option value="Audit, Assurance and Certification">Audit, Assurance and
                                        Certification</option>
                                    <option value="Appearance and Representation">Appearance and Representation</option>
                                </select>
                                <label for="the-reason">City</label>
                                <input type="text" name="city" id="the-city">
                                <input type="submit" value="Send Message">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#feedback").click(function(){
        loadinfo('#feedback')
    });

    function loadinfo(id) {

        $(id).modal('show')
    }
</script>