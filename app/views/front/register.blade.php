@extends('front')

@section('content')
 <?php  if(isset($_GET['ref'])) echo $_SESSION['ref']= $_GET['ref'];?>


 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }
  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>

<div class="col-md-9 col-sm-9">
            <h1>Rigister</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                    
                  {{ Form::open([
                      'route' => 'register', 
                      'class' => 'form-horizontal form-without-legend'
                    ])}} 
                    <div class="form-group">
                        {{ $errors->first('name'); }}
                        {{Form::label('name', 'Your Name', array('class' => 'col-lg-4 control-label'))}}
                      <span class="require">*</span>
                      <div class="col-lg-8">
                            
                            {{Form::text('name','', [ 'class' => 'form-control' ])}}
                        
                      </div>
                    </div>
                  
                    <div class="form-group">
                          {{ $errors->first('username'); }}
                        {{Form::label('username', 'Your Username:', array('class' => 'col-lg-4 control-label'))}}
                     
                        <span class="require">*</span>
                      <div class="col-lg-8">
                            {{Form::text('username','', [ 'class' => 'form-control' ])}}
                      </div>
                    </div>
                    <div class="form-group">
                         {{Form::label('password', 'Define Password:', array('class' => 'col-lg-4 control-label'))}}
                       {{ $errors->first('password'); }}
                         <span class="require">*</span>
                      <div class="col-lg-8">
                          
                        {{Form::password('password', [ 'class' => 'form-control' ,'id'=>'password'])}}
                        </div>
                    </div>
                    
                    <div class="form-group">
                         {{ $errors->first('email'); }}
                         {{Form::label('email', 'Your E-mail Address: ', array('class' => 'col-lg-4 control-label'))}}
                            <span class="require">  *</span>
                  
                            <div class="col-lg-8">
                          {{Form::email('email', 'abc@example.com',[ 'class' => 'form-control'])}}
                      </div>
                    </div>
                    
                      
                    <div class="form-group">
                          {{ $errors->first('mobile'); }}
                         {{Form::label('number', 'Mobile: ', array('class' => 'col-lg-4 control-label'))}}
                     
                                <span class="require">*</span>
                                
                      <div class="col-lg-8">
                          {{
                          Form::macro('number', function()
                            {
                                return '<input type="number" name="mobile" class="form-control">';
                            });
                          }}
                             {{Form::number();}}
                     </div>
                    </div>  
                    <div class="form-group">
                      <div class="col-lg-8">
                       
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                                 {{ Form::submit('Register Me!',['class' =>'btn btn-primary']);}}
                   
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                        <hr>
                       
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    <h2><em>Important</em> Information</h2>
                    <p>PLEASE PUT YOUR ALL INFORMATION CORRECTLY AND DONT SHARE WITH ANYONE.</p>

                    </div>
                </div>
              </div>
            </div>
          </div>
@stop