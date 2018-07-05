<div class="widgets relaway box-color w-100 px-2 fixed-top text-white text-center">
{{--     <div class="menu">
      <i class="fas fa-bars"></i>
    </div> --}}
    <span class="date font-weight-bold float-left">
    </span>    
    <span class="font-weight-bold pr-0" style="position: absolute;left: 0;right: 0;">
      <i class="far fa-clock"></i>
      <span class="hour"></span>
    </span>   
    @if(Auth::check())        
        <img src="{{ asset(Auth::user()->photo) }}" class="profile-photo position-absolute">
        <span class="dropdown-auth float-right mr-5">
            <div class="dropdown font-weight-bold">
             <label id="dropdownAuth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->fname }} {{ Auth::user()->flname }} <i class="fas fa-angle-down px-2"></i>
              </label>
              <div class="dropdown-menu mt-2 quick z-depth-1 dropdown-menu-right" aria-labelledby="dropdownAuth">
                <h6 class="dropdown-header font-weight-bold quick text-dark">Opciones de usuario</h6>
                <button class="dropdown-item" type="button">Editar perfil <i class="fas float-right pt-1 ml-2 fa-user-edit"></i></button>
                {{-- <button class="dropdown-item" type="button">Another action</button> --}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('logout') }}">Salir <i class="fas float-right pt-1 ml-2 fa-sign-out-alt"></i></a>
              </div>
            </div>     
        </span>
    @endif
</div>