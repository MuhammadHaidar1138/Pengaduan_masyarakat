<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    /* body {background:
        conic-gradient(from -116.36deg at 25% 75%,#47d3ff 52.72deg,#0000 0), conic-gradient(from -116.36deg at 25% 75%,#47d3ff 52.72deg,#0000 0) calc(3*44px) calc(44px/2),
        conic-gradient(from   63.43deg at 75% 75%,#47d3ff 52.72deg,#0000 0), conic-gradient(from   63.43deg at 75% 75%,#47d3ff 52.72deg,#0000 0) calc(3*44px) calc(44px/2),
        conic-gradient(
            #aaacff   63.43deg ,#4448ff 0 116.36deg,
            #aaacff 0 180deg   ,#4448ff 0 243.43deg,
            #aaacff 0 296.15deg,#4448ff 0);
    background-size: 88px 44px;
    } */

    .container{
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 90vh;
    }

    .image{
        justify-content: end;
        
        width: 40rem;
    }

    /* Form Login */ 
    .form {
    background-color: #fff;
    display: block;
    padding: 1rem;
    max-width: 380px;
    border-radius: 0.5rem;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .form-title {
    font-size: 1.25rem;
    line-height: 1.75rem;
    font-weight: 600;
    text-align: center;
    color: #000;
    }

    .input-container {
    position: relative;
    }

    .input-container input, .form button {
    outline: none;
    border: 1px solid #e5e7eb;
    margin: 8px 0;
    }

    .input-container input {
    background-color: #fff;
    padding: 1rem;
    padding-right: 3rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    width: 300px;
    border-radius: 0.5rem;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

    .input-container span {
    display: grid;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    padding-left: 1rem;
    padding-right: 1rem;
    place-content: center;
    }

    .input-container span svg {
    color: #9CA3AF;
    width: 1rem;
    height: 1rem;
    }

    .submit {
    display: block;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    padding-left: 1.25rem;
    padding-right: 1.25rem;
    background-color: #3d405b;
    color: #ffffff;
    font-size: 0.875rem;
    line-height: 1.25rem;
    font-weight: 500;
    width: 100%;
    border-radius: 0.5rem;
    text-transform: uppercase;
    }

    .signup-link {
    color: #6B7280;
    font-size: 0.875rem;
    line-height: 1.25rem;
    text-align: center;
    }

    .signup-link a {
    text-decoration: underline;
    }

    </style>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="container" data-aos>
        <form class="form" data-aos="zoom-in" data-aos-delay="150" action="{{route('register.proces')}}" method="POST">
        @csrf
            @if (Session::get('failed'))
                <div class="alert alert-danger">{{ Session::get('failed')}}</div>
            @endif
            <p class="form-title">Create your account</p>
                <div class="input-container">
                    <input placeholder="Enter email" type="email" name="email">
                    <span>
                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </span>
                </div>
                @error('email')
                  <small class="text-danger">{{ $message }}</small>  
                @enderror   
                <div class="input-container">
                    <input placeholder="Enter password" type="password" name="password">
                </div>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-secondary">Create Account</button>
        </form>   
        
        <div class="image" data-aos="zoom-in" data-aos-delay="150">
            <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                <defs>
                    <clipPath id="blob">
                        <path fill="#474bff" d="M438,280.5Q449,321,421,350.5Q393,380,367,411.5Q341,443,300.5,451Q260,459,219.5,456Q179,453,139.5,439.5Q100,426,92,381.5Q84,337,50,309.5Q16,282,39,244.5Q62,207,66,171Q70,135,85.5,96Q101,57,141.5,47.5Q182,38,220,42Q258,46,292.5,56Q327,66,353.5,89Q380,112,416.5,134.5Q453,157,440,198.5Q427,240,438,280.5Z" />
                    </clipPath>
                </defs>
                <image x="0" y="0" width="100%" height="100%" clip-path="url(#blob)" xlink:href="https://i.pinimg.com/736x/e7/2b/5c/e72b5cd781058d7cdb5c18bbe117b77f.jpg" preserveAspectRatio="xMidYMid slice"></image>
            </svg>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>

</body>
</html>