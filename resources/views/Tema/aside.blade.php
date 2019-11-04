<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{asset("Plantilla/images/logo.png")}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset("Plantilla/images/logo2.png")}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <h3 class="menu-title">Menú</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-card"></i>Director</a>
                    <ul class="sub-menu children dropdown-menu">
                     <li><i class="fa fa-list"></i><a href="/Director">Lista Directores</a></li>
                     <li><i class="fa fa-plus"></i><a href="/Director/create">Añadir Director</a></li>   
                  </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>Responsables</a>
                        <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-list"></i><a href="/Responsable">Lista Responsables</a></li>
                         <li><i class="fa fa-plus"></i><a href="/Responsable/create">Añadir Responsable</a></li>   
                      </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Proyectos</a>
                            <ul class="sub-menu children dropdown-menu">
                             <li><i class="fa fa-list"></i><a href="/Proyecto">Lista Proyectos</a></li>
                             <li><i class="fa fa-plus"></i><a href="/Proyecto/create">Añadir Proyectos</a></li>   
                          </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-building"></i>Sede</a>
                                <ul class="sub-menu children dropdown-menu">
                                 <li><i class="fa fa-list"></i><a href="/Sede">Lista Sede</a></li>
                                 <li><i class="fa fa-plus"></i><a href="/Sede/create">Añadir Sede</a></li>   
                              </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-globe"></i>Pais</a>
                                    <ul class="sub-menu children dropdown-menu">
                                     <li><i class="fa fa-list"></i><a href="/Pais">Lista Pais</a></li>
                                     <li><i class="fa fa-plus"></i><a href="/Pais/create">Añadir Pais</a></li>   
                                  </ul>
                                </li>
                                <li class="menu-item-has-children dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-group"></i>Población</a>
                                        <ul class="sub-menu children dropdown-menu">
                                         <li><i class="fa fa-list"></i><a href="/Poblacion">Lista Población</a></li>
                                         <li><i class="fa fa-plus"></i><a href="/Poblacion/create">Añadir Población</a></li>   
                                      </ul>
                                    </li>
                                    <li class="menu-item-has-children dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clipboard"></i>Actuación</a>
                                            <ul class="sub-menu children dropdown-menu">
                                             <li><i class="fa fa-list"></i><a href="/Actuacion">Lista Actuación</a></li>
                                             <li><i class="fa fa-plus"></i><a href="/Actuacion/create">Añadir Actuación</a></li>   
                                          </ul>
                                        </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
