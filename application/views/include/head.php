<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
        margin:0;
        box-sizing: border-box;
        }
        nav{
            font-size: 1rem;
            padding:1.2rem 3rem;
            margin-bottom:10px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;
            justify-content:space-between;
            display:flex;
        }
        nav a{
            text-decoration:none;
            color: #fff;
        }
        nav a:hover{
            color:rgb(20, 70, 70);
        }
        form{
            /* position: absolute; */
            margin:6%;
            /* border: 1px solid black; */
            width: 20%;
            padding: 2rem 1rem;
            border-radius: 30px;
            box-shadow: 1px 1px 1px rgb(229, 233, 233), -1px -1px 1px rgb(193, 208, 208);

        }
        .form{
            margin:20% 0;
        }
        label{
            position: relative;
        }
        input[type="text"]{
            margin:10px 0;
            padding: 20px;
            width: 100%;
            height: 1rem;
            border-radius: 20px;
            box-shadow: 2px 2px  15px inset rgb(82, 117, 117);
            text-align: center;
        }
        button, input[type="submit"]{
            background-color: #04f4f4;
            border: transparent;
            width: 40%;
            color: rgb(97, 93, 93);
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 25px;
            box-shadow: 2px 2px 1px rgb(20, 70, 70);
        }
        input[type="submit"]:hover{
            background-color: #dde9e9;
            color: #122e2e;

        }
        .error{
            color:red;
        }
        .hero-error{
            color: red;
            position: absolute;
            bottom: 10%;
            right: 47%;
        }
        table{
            /* margin-bottom:4rem; */
        }
        footer{
            font-size: .7rem;
            padding:1rem 3rem;
            margin-bottom:10px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            /* justify-content:space-between; */
            text-align:center;
            /* display:flex; */
        }
        footer a{
            text-decoration:none;
            color: #000;
        }
        footer a:hover{
            color:rgb(20, 70, 70);
        }

    </style>
