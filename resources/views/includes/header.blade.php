<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: transparent;
    color: white;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black !important;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: transparent;
}

</style>

<div id="top">
    <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0" style="margin-top: 0px;">
              <a href="/user" class="text" class="ml-1" style="font-size: 28px; text-transform: uppercase;">Grocerye</a>
              <a href="#" class="btn btn-success btn-sm" style="margin: -14px 15px 0px;">Offer of the day</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right " style="margin-top: 6px;">
              <ul class="menu list-inline mb-0" style="float: right; !importent">
                <li class="list-inline-item"><a href="/auth/login">Login</a></li>
                <li class="list-inline-item"><a href="/auth/register">Register</a></li>
                <li class="list-inline-item"><a href="/user">Contact</a></li>
                <li class="list-inline-item">
                  <!-- <select class="input-text js-input select-lang" aria-label="Default select example" name="language">
                      <option value="english" {{ old('english') == 'english' ? 'selected' : '' }}><a href="{{ url('/') }}">English</a></option>
                      <option value="hindi" {{ old('hindi') == 'hindi' ? 'selected' : '' }}><a href="{{ url('/hi') }}">Hindi</a></option>
                      <option value="russian" {{ old('russian') == 'russian' ? 'selected' : '' }}><a href="{{ url('/russian') }}">Russian</a></option>
                  </select> -->
                  <div class="dropdown">
                    <button class="dropbtn">Hindi </button>
                    <div class="dropdown-content">
                      <a href="{{ url('/') }}">English <span class="flag-icon flag-icon-sun flag-icon-squared"></span></a>
                      <a href="{{ url('/hi') }}">Hindi</a>
                      <a href="{{ url('/russian') }}">Russian</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="customer-orders.html" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
                <p class="text-center text-success">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***--> 
    </div>
