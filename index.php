<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" >TellemaKeys</a>
            </div>

            <!-- Navegação -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="inative"><a href="#"  class="textmenu" style="color: #f4f9fc;" onmouseover="this.style.color='#ff0000'" onmouseout="this.style.color='#f4f9fc'" >Home<span class="sr-only">(current)</span></a></li>
                    <li class="textmenu"><a href="#" style="color: #f4f9fc;" onmouseover="this.style.color='#ff0000'" onmouseout="this.style.color='#f4f9fc'">Games</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false" style="color: #f4f9fc;" onmouseover="this.style.color='#ff0000'" onmouseout="this.style.color='#f4f9fc'" >Plataformas<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="#"><a href="#" >PC</a></li>
                            <li><a href="#" >Xbox</a></li>
                            <li><a href="#">Sony</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Softwares</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="textmenu"><a href="#" style="color: #f4f9fc;" onmouseover="this.style.color='#ff0000'" onmouseout="this.style.color='#f4f9fc'">Contato</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Horizon Zero Dawn">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>

                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</body>
</html>
