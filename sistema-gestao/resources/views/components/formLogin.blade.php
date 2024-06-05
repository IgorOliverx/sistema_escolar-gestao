
<style>

    *{
        font-family: "Abel", sans-serif;
        font-weight: 400;
    }

</style>
<div class="container d-flex justify-content-center align-items-center h-100 pb-5">

    <form class="pt-4 d-flex flex-column align-items-center gap-5 rounded rounded-4 mb-10 position-relative"
          action="{{route('autenticar')}}"
          style="background-color:#fff; width: 35%; height: 40%; bottom: 10%"
          method="post">
        <div class="form-group w-75 h-75">
        @csrf
            <h2 style="font-family:'Roboto', sans-serif; font-weight: 400; ">Login</h2>


            <label for="username">Usuário</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Insira seu CPF" >
            @if($errors->has('username'))
                <div class="alert alert-danger d-flex align-items-center position-relative" style="height: 20px">
                    <p class="mt-3">{{$errors->first('username')}}</p>
                </div>
            @endif
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Insira sua password" required>
            <i class="bi bi-eye" id="btnMostrarSenha" onclick="mostrarSenha()"></i>
            @if($errors->has('password'))
                <div class="alert alert-danger d-flex align-items-center position-relative" style="height: 20px">
                  <p class="mt-3">  {{$errors->first('password')}}</p>
                </div>
            @endif
            <br>
            <button type="submit" class="btn btn-block " style="background-color:red;color: white">Entrar</button>
        </div>

    </form>

</div>

<script>

    function mostrarSenha(){
    var input = document.getElementById('password');
    var btnMostrarSenha = document.getElementById('btnMostrarSenha')

        if(input.type === 'password'){
            input.setAttribute('type','text')
            btnMostrarSenha.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
        }else {
            input.setAttribute('type','password')
            btnMostrarSenha.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
        }

    }

</script>
