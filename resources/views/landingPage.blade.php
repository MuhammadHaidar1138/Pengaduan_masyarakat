<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        margin-right: 100px;
        width: 50rem;
    }

    .text {
        display: flex;
        flex-direction: column;
        width: 50rem;
        margin-left: 100px;
        font-size: 1.5rem;
    }

    /* Button */ 
    a {
    display: inline-block;
    border-radius: 4px;
    background-color: #3d405b;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 17px;
    padding: 16px;
    width: 130px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    }

    a span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
    }

    a span:after {
    content: '»';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -15px;
    transition: 0.5s;
    }

    a:hover span {
    padding-right: 15px;
    }

    a:hover span:after {
    opacity: 1;
    right: 0;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="text">
            <h1>Pengaduan Masyarakat</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tenetur quae maiores. Sed vitae asperiores facilis dignissimos esse? Iure architecto harum numquam accusamus a laborum quaerat earum nam repellat quasi!</p>
            <a href="{{ route('login') }}">
            <span><b>Bergabung</b></span>
            </a>
        </div>
    
        <div class="image">
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
</body>
</html>
