<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TellemaKeys</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      /* Estilização do body e nav principal*/
        body{
            background-color: black;
        }
        .container-fluid {
          padding-right: 0px;
          padding-left: 0px;
          margin-right: auto;
          margin-left: auto;
      }
      @media(max-width: 799px){

        .container-fluid .navbar-collapse {         
         padding-left: 30px;        
     }
     /*  Estilização da  Logo e menu*/
      }   
        .container-fluid .navbar-header img
        {
          width: 225px;
          height: 50px;
        }
         /*Estilo dos Links de navegação*/
        @media (min-width: 768px){
          .navbar-nav>li>a {
          padding-top: 15px;
          padding-bottom: 20px;
        }          
        }
        .navbar-brand
        {
          padding: 0px;
        }
      
        .navbar-inverse .container-fluid  .navbar-collapse .textmenu  {
            color: rgb(244, 249, 252);
        }

        .navbar-inverse .container-fluid  .navbar-collapse .textmenu:hover  {
            background-color: black;
        }

        .navbar-inverse .container-fluid  .navbar-collapse .textmenu:hover {
            color: red;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu {
            background-color:  rgb(34, 34, 34)
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu li a {
            color: rgb(244, 249, 252);
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu li a:hover {
            color: red;
        }
        .form-control  
        {
          display: flex;
          width: 55%;
        }
       
        .navbar-inverse .navbar-nav .open .dropdown-menu li a:hover {
            background-color: black;

        }
        
        @media (min-width: 799px){
        .navbar-right {
          
          margin-right: 0px
        }
      }
      @media (max-width: 800px){
        .navbar-right {
          
        
        }
      }
        .navbar-inverse .container-fluid  .navbar-collapse .animated-button1 {
          background: linear-gradient(-30deg, #3d0b0b 50%, #2b0808 50%);
          padding: 10px 20px;
          margin: 0px;
          display: inline-block;
          -webkit-transform: translate(0%, 0%);
                  transform: translate(0%, 0%);
          overflow: hidden;
          color: #f7d4d4;
          font-size: 10px;
          letter-spacing: 2.5px;
          text-align: center;
          text-transform: uppercase;
          text-decoration: none;
          -webkit-box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
                  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
                  border: none;
                  margin-left: 10px;
                  
        }
        @media(max-width: 799px)
        {
          .navbar-inverse .container-fluid  .navbar-collapse .animated-button1
          {
              margin-left: 0px;
          }
        }
        .navbar-inverse .container-fluid  .navbar-collapse .animated-button1 a
        {
          color: rgb(244, 249, 252);
          text-transform:initial;
        }
  
  
  
  .navbar-inverse .container-fluid  .navbar-collapse .animated-button1::before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-color: #ad8585;
    opacity: 0;
    -webkit-transition: .2s opacity ease-in-out;
    transition: .2s opacity ease-in-out;
    border: none;
    outline: none;
  }
  
  .navbar-inverse .container-fluid  .navbar-collapse .animated-button1:hover::before {
    opacity: 0.2;
  }
  
  .navbar-inverse .container-fluid  .navbar-collapse .animated-button1 span {
    position: absolute;
  }
  
  .navbar-inverse .container-fluid  .navbar-collapse .animated-button1 span:nth-child(1) {
    top: 0px;
    left: 0px;
    width: 100%;
    height: 2px;
    background: -webkit-gradient(linear, right top, left top, from(rgba(43, 8, 8, 0)), to(#d92626));
    background: linear-gradient(to left, rgba(43, 8, 8, 0), #d92626);
    -webkit-animation: 2s animateTop linear infinite;
            animation: 2s animateTop linear infinite;
  }
  
  @keyframes animateTop {
    0% {
      -webkit-transform: translateX(100%);
              transform: translateX(100%);
    }
    100% {
      -webkit-transform: translateX(-100%);
              transform: translateX(-100%);
    }
  }
  
  .navbar-inverse .container-fluid  .navbar-collapse .animated-button1 span:nth-child(2) {
    top: 0px;
    right: 0px;
    height: 100%;
    width: 2px;
    background: -webkit-gradient(linear, left bottom, left top, from(rgba(43, 8, 8, 0)), to(#d92626));
    background: linear-gradient(to top, rgba(43, 8, 8, 0), #d92626);
    -webkit-animation: 2s animateRight linear -1s infinite;
            animation: 2s animateRight linear -1s infinite;
  }
  
  @keyframes animateRight {
    0% {
      -webkit-transform: translateY(100%);
              transform: translateY(100%);
    }
    100% {
      -webkit-transform: translateY(-100%);
              transform: translateY(-100%);
    }
  }
  
  .navbar-inverse .container-fluid  .navbar-collapse .animated-button1 span:nth-child(3) {
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 2px;
    background: -webkit-gradient(linear, left top, right top, from(rgba(43, 8, 8, 0)), to(#d92626));
    background: linear-gradient(to right, rgba(43, 8, 8, 0), #d92626);
    -webkit-animation: 2s animateBottom linear infinite;
            animation: 2s animateBottom linear infinite;
  }
  
  @keyframes animateBottom {
    0% {
      -webkit-transform: translateX(-100%);
              transform: translateX(-100%);
    }
    100% {
      -webkit-transform: translateX(100%);
              transform: translateX(100%);
    }
  }
  
  .navbar-inverse .container-fluid  .navbar-collapse .animated-button1 span:nth-child(4) {
    top: 0px;
    left: 0px;
    height: 100%;
    width: 2px;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(43, 8, 8, 0)), to(#d92626));
    background: linear-gradient(to bottom, rgba(43, 8, 8, 0), #d92626);
    -webkit-animation: 2s animateLeft linear -1s infinite;
            animation: 2s animateLeft linear -1s infinite;
  }
  
  @keyframes animateLeft {
    0% {
      -webkit-transform: translateY(-100%);
              transform: translateY(-100%);
    }
    100% {
      -webkit-transform: translateY(100%);
              transform: translateY(100%);
    }
  }
  /*estilização do  B de login*/

  .navbar-nav .navbar-right ul li a
  {
        
    padding-top: 5px;


  }

  @media(max-width: 799px){
    .navbar-nav.navbar-right.login {
    list-style: none;
    text-align: center;
   
    
    
}
    
  }
  .navbar-nav.navbar-right.login {
    list-style: none;
   
    
    
}

.navbar-nav.navbar-right.login li a {
    /* Estilos para o link dentro da lista */
}
  .navbar-inverse .navbar-right li a 
  {
    color: rgb(244, 249, 252);
    
    

        
  }

    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Navegação -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="inative"><a href="#" class="textmenu">Home<span class="sr-only">(current)</span></a></li>
                    <li class="textmenu"><a href="#" class="textmenu">Games</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle textmenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plataformas<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">PC</a></li>
                            <li><a href="#">Xbox</a></li>
                            <li><a href="#">Sony</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Softwares</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Horizon Zero Dawn">
                    </div>
                    <button type="submit"  class="animated-button1"><a href="#" >
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          Buscar
                      </a>
                    </button>
                    <ul class="navbar-nav navbar-right login">
                      <li><a href="#"><img src="assets/login.png"></a></li>
                    </ul>
                    
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</body>
</html>
