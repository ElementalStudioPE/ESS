<nav class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="hamburger btn-link">
                <span class="hamburger-inner"></span>
            </button>
            <ol class="breadcrumb hidden-xs">
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="{{asset('img/logo-icon.png')}}" class="profile-img">
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <img src="{{asset('img/logo-icon.png')}}" class="profile-img">
                        <div class="profile-body">
                            <h5>Admin</h5>
                            <h6>admin@admin.com</h6>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="class-full-of-rum">
                        <a href="#profile" >
                            <i class="ess-person"></i>
                            Perfil
                        </a>
                    </li>
                    <li >
                        <a href="/" target="_blank">
                            <i class="ess-home"></i>
                            Home
                        </a>
                    </li>
                    <li >
                        <form action="#logout" method="POST">
                            <input type="hidden" name="_token" value="WwJroijNVTLfaAdqIUukrpbFuQL4qYEvzSCf37ai">
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="ess-power"></i>
                                Salir
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('admin.main.panel')}}">
                    <div class="logo-icon-container">
                        <img src="{{asset('img/elemental_sidebar.png')}}" alt="Logo Icon">
                    </div>
                    <div class="title">Welcome to ESS CMS. The best CMS to our clients.</div>
                </a>
            </div>
            <div class="panel widget center bgimage"
            style="background-image:url({{asset('img/logo-icon.png')}});">
            <div class="dimmer"></div>
            <div class="panel-content">
                <img src="{{asset('img/logo-icon.png')}}" class="avatar" alt="Admin avatar">
                <h4>Admin</h4>
                <p>admin@admin.com</p>
                <a href="#profile" class="btn btn-primary">Profile</a>
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
    <ul class="nav navbar-nav">
        <li>
            <a href="{{route('admin.main.panel')}}" target="_self">
                <span class="icon ess-dashboard"></span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="#pages-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self">
                <span class="icon ess-secciones"></span>
                <span class="title">Secciones</span>
            </a>
            <div id="pages-dropdown-element" class="panel-collapse collapse ">
                <div class="panel-body">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="{{route('admin.seccion.principal')}}" target="_self">
                                <span class="icon voyager-angle-right"></span>
                                <span class="title">Principal</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('admin.seccion.quienessomos')}}" target="_self">
                                <span class="icon voyager-angle-right"></span>
                                <span class="title">Quiénes Somos</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('admin.seccion.servicios')}}" target="_self">
                                <span class="icon voyager-angle-right"></span>
                                <span class="title">Servicios</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('admin.seccion.portafolios')}}" target="_self">
                                <span class="icon voyager-angle-right"></span>
                                <span class="title">Portafolios</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('admin.seccion.clientes')}}" target="_self">
                                <span class="icon voyager-angle-right"></span>
                                <span class="title">Clientes</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('admin.seccion.contacto')}}" target="_self">
                                <span class="icon voyager-angle-right"></span>
                                <span class="title">Contacto</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="">
            <a href="{{route('admin.main.media')}}" target="_self">
                <span class="icon ess-media"></span>
                <span class="title">Media</span>
            </a>
        </li>
        <li class="">
            <a href="{{route('admin.main.mensajes')}}" target="_self">
                <span class="icon ess-mensajes"></span>
                <span class="title">Mensajes</span>
            </a>
        </li>
        <li class="">
            <a href="#roles" target="_self">
                <span class="icon ess-herramientas"></span>
                <span class="title">Herramientas</span>
            </a>
        </li>
        <li class="">
            <a href="#roles" target="_self">
                <span class="icon ess-configuracion"></span>
                <span class="title">Configuración</span>
            </a>
        </li>
    </ul>
</nav>