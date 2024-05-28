
<div class="main-signup">
    <div class="header-main">
        <form  name="form" action="{{url('register')}}"  method="POST">
            @csrf
            <div style="color: red">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
                <ul></ul>
            </div>

            <div class="form-group">
                <label  for="name"></label>
                  <div class="col-md-6">
                      <input id="name" name="name" placeholder="    نام خود را وارد کنید " class="input-signup" type="text">
                  </div>
              </div>

              <div class="form-group">
                  <label  for="email_signup"></label>
                  <div class="col-md-6">
                    <input id="email_signup" name="email" placeholder="  ایمیل خود را وارد کنید" class="input-signup" type="email">
                  </div>
              </div>

              <div class="form-group">
                  <label for="mob"></label>
                  <div class="col-md-6">
                      <input id="mob" name="phone_number" placeholder="  شماره تلفتن خود را وارد کنید" class="input-signup" type="number">
                  </div>
              </div>

              <div class="form-group">
                  <label for="password_signup"></label>
                  <div class="col-md-6">
                    <input id="password_signup" name="password" placeholder="  پسورد مبارک را وارد نمایید" class="input-signup" type="password">
                  </div>
              </div>

              <div class="form-group">
                  <label  for="cpassword_signup"></label>
                  <div class="col-md-6">
                      <input id="cpassword_signup" name="password_confirmation" placeholder="  مجدد پسورد را وارد ننمایید " class="input-signup" type="password">
                  </div>
              </div>

              <div class="form-group">
                  <div class="signup-btn">
                    <input  type="submit"  value="ثبت نام " class="button-signup"/>
                  </div>
              </div>

          </form>
      </div>
  </div>






