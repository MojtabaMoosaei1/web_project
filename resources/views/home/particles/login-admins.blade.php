

<div id="loginAdmin" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <div class="model-title-heading">
                <div class="model-title">
                    <span>ورود اساتید</span>
                </div>
            </div>
        </div>
        <div class="modal-body">
            <form class="form-model" action="{{ url('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="karbariname"></label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <i class="fas fa-user-graduate" aria-hidden="true"></i>
                            <input id="karbariname" name="email" placeholder="نام کاربری" class="form-control" type="email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input id="password" name="password" placeholder="پسورد خود را وارد کنید" class="form-control" type="password">
                        </div>
                    </div>
                </div>
                <div class="model-btn">
                    <button type="submit" class="btn" id="loginButton1" >ورود</button>
                </div>
            </form>
        </div>
    </div>
</div>
