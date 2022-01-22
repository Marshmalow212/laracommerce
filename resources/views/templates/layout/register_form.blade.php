{{--signup form begin--}}
<section id="signup__form">
    <div class="container ">
        <div class="row">
            <h2 class="text-center" >Sign Up</h2>
            <div class="col-md-8 offset-2 ">

                {!! Form::open(['url' => '/register','method'=>'post','files' => true,'class'=>'form border p-3','name'=>'reg-form']) !!}

                    {!!  Form::label('frm-reg-name', 'Name',['class'=>'form-label']);!!}
                    {!! Form::text('name','',['id'=>'frm-reg-name','placeholder'=>'john doe','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-email', 'Email',['class'=>'form-label']);!!}
                    {!! Form::text('email','',['id'=>'frm-reg-email','placeholder'=>'john@localhost.com','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-fullname', 'Full Name',['class'=>'form-label']);!!}
                    {!! Form::text('fullname','',['id'=>'frm-reg-fullname','placeholder'=>'john doe','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-phone', 'Phone',['class'=>'form-label']);!!}
                    {!! Form::tel('phone','',['id'=>'frm-reg-phone','placeholder'=>'012454879','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-password', 'Password',['class'=>'form-label']);!!}
                {!! Form::password('password',['class'=>'form-control']); !!}


                <div class="form-check">
                    {!! Form::checkbox('adminaccess', 1,false,['id'=>'frm-reg-adminaccess','class'=>'form-check-input']); !!}
                    {!!  Form::label('frm-reg-adminaccess', 'Request Admin Access',['class'=>'form-label']);!!}

                </div>

                <div class="form-check">

                    {!! Form::checkbox('Host', 1,false,['class'=>'form-check-input','id'=>'frm-reg-hostaccess']); !!}
                    {!!  Form::label('frm-reg-hostaccess', 'Host Access',['class'=>'form-label']);!!}

                </div>
                <div class="form-file">

                    {!!  Form::label('frm-reg-picture', 'Picture',['class'=>'form-label']);!!}
                    {!! Form::file('picture',['class'=>'form-control','id'=>'frm-reg-picture']); !!}

                </div>


                {!! Form::submit('Register',['class'=>'btn btn-outline-dark','type'=>'submit']); !!}





                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>
{{--signup form end--}}















{{--<form class="col-md-6 mt-2" method="post" action="<?=$projectRoot;?>CRUD/admin/Users/signup.php" >--}}
    {{--<input type="hidden" name="id" value="">--}}
    {{--<div class="col-md-6">--}}
        {{--<label  class="form-label">Username</label>--}}
        {{--<input type="text" class="form-control" name="username" value="<?=array_key_exists('username',$formData)?$formData['username']:''?>">--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
        {{--<label for="inputPassword4" class="form-label">Password</label>--}}
        {{--<input type="password" class="form-control" id="inputPassword4" name="password" value="<?=array_key_exists('password',$formData)?$formData['password']:''?>">--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
        {{--<label for="inputPassword4" class="form-label">Full Name</label>--}}
        {{--<input type="text" class="form-control" id="inputPassword4" name="fullname" value="<?=array_key_exists('fullname',$formData)?$formData['fullname']:''?>">--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
        {{--<label for="inputPassword4" class="form-label">Email</label>--}}
        {{--<input type="email" class="form-control" id="inputPassword4" name="email" value="<?=array_key_exists('email',$formData)?$formData['email']:''?>">--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
        {{--<label for="inputPassword4" class="form-label">Phone Number</label>--}}
        {{--<input type="tel" class="form-control" id="inputPassword4" name="phone" value="<?=array_key_exists('phone',$formData)?$formData['phone']:''?>">--}}
    {{--</div>--}}


    {{--<div class="col-12 mt-2">--}}
        {{--<button type="submit" class="btn btn-dark">Sign Up</button>--}}
    {{--</div>--}}
    {{--<div class="col-12 mt-2">--}}
        {{--<p>Already Registered? <a class="nav-link" href="login.php">Login</a></p>--}}
    {{--</div>--}}
{{--</form>--}}