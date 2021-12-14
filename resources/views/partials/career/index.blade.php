<section id="career">
    <div class="container">
        <div class="section-title">
            <h2>Career</h2>
            <p>We are always seeking talented, ambitious individuals to become part of our story. If you’re a legal
                specialist, business professional or graduate and want to learn, develop and make progress in your
                career journey, share your details as follows:
            </p>
        </div>
        <div class="form">
            <form action="career" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="education" id="education"
                            placeholder="Your Education" data-rule="education" data-msg="Please enter your education"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            data-rule="email" data-msg="Please enter a valid email" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile"
                            data-rule="minlen:10" data-msg="Please enter at least 10 digits">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="description" rows="5" placeholder="Brief about you"
                        required></textarea>
                </div>
                <div class="form-group mt-3">
                    <label class="input-group">Resume</label>
                    <input required type="file" name="file" class="form-control" placeholder="Upload you resume">
                </div>
                @include('flash-message')

                <div class="text-center"><button
                        style="padding: 8px 25px;margin-left: 12px;border-radius: 4px;color: #fff;font-weight: 400;border: 2px solid #1b1464;background: #1b1464;"
                        type="submit">Apply</button></div>
            </form>
        </div>
    </div>

</section>