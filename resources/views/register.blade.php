<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .center {
                text-align: center;
                margin-top: 20%;
            }
            #passMismatch {
            color: red;
        }
        </style>
</head>
<body>

{{-- validation start --}}
<div class="mt-5" style="text-align: center">
    @if($errors->any())
    <div class="col-12">
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>

        @endforeach
    </div>

    @endif

    @if(session()->has('error'))

    <div class="alert alert-danger">{{session('error')}}</div>

    @endif

    @if(session()->has('success'))

   <div class="alert alert-success">{{session('success')}}</div>

   @endif

</div>





{{-- validation end --}}


    <div class="center">
    <form method="post" >
        @csrf()
        
        Full Name <br><input type="text" name="name" style="width: 300px;">
        <br>
       <br>
       Email <br><input type="email" name="email" style="width: 300px;">
       <br><br>
       Password<br><input type="password" name="pass" id="pass" style="width: 300px;">
       <br><br>
       Confirm Password<br><input type="password" name="password_confirmation" id="pass1" oninput="checkPassword()" style="width: 300px;">
       <br><br>
       <div id="passMismatch" ></div>
       <input type="submit" name="submit"  value="Register" id="submitButton" style="width: 100px;">
        
     </form>

     @if(session('message'))
        <script>
            alert("{{ session('message') }}");
        </script>
     @endif
    </div>


    <script>
        function checkPassword() {  
            var password = document.getElementById('pass').value;
            var confirmPassword = document.getElementById('pass1').value;
            var submitButton = document.getElementById('submitButton');
            var passMismatchDiv = document.getElementById('passMismatch');

            if (password === confirmPassword) {
                submitButton.disabled = false;
                passMismatchDiv.innerHTML = ''; 
                return true; 
            } else {
                submitButton.disabled = true;
                passMismatchDiv.innerHTML = 'Password and Confirm Password do not match!';
                return false; 
            }
        }
    </script>
</body>
</html>