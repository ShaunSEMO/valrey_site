<div class="contact">
    <div class="container">
        <h1>Work With Me</h1>
        <hr class="black-hr">

        <br>

        <div class="row">
            <div class="col-md-6 right-border">

                <div class="contact-form container">
                    <p>Contact me via the form below for  me any future collaborations and advertisements.</p>
                    <br>

                    <form class="form  container-fluid " action="https://formspree.io/tebatso212@gmail.com" method="POST">
                        {{ csrf_field() }}
                        <div  class="form-group">
                                @if (Session::has('file_message'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('file_message')}}
                                    </div>
                                @endif
                                <input name="name" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Full name">
                                @if ($errors->has('name'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                                @endif
                                <br>
                                <input name="email" type="name" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                                @if ($errors->has('email'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                                @endif
                                <br>
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message..."></textarea>
                                @if ($errors->has('message'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                                @endif
                                <br>
                                <button type="submit" class="btn btn-dark site-btn-black">Submit</button>
                        </div>
                        
                    </form>
                </div>
                <br>
            </div>

            <div class="col-md-6">
                <br>
                <div class="contact-details container">
                    <a style="color:black" href="https://www.instagram.com/_valrey/"><p><i class="fab fa-instagram"></i> @_valrey</p></a>
                    <a style="color:black" href="https://twitter.com/valreynkoana"><p><i class="fab fa-twitter"></i> @valreynkoana</p></a>
                </div>
        
            </div>
        </div>
    </div>
</div>
