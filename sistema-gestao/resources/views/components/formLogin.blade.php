<style>
    * {
        font-family: "Abel", sans-serif;
        font-weight: 400;
    }
</style>
<div class="container d-flex justify-content-center align-items-center h-100 pb-5 centered-container">
    <form class="pt-4 d-flex flex-column align-items-center justify-content-center gap-5 rounded rounded-4 mb-10 position-relative" action="{{route('autenticar')}}" style="background-color:#fff; width: 35%;" method="post">
        <div class="form-group w-75">
            @csrf
            <h2 style="font-family:'Roboto', sans-serif; font-weight: 400;">Login</h2>
            <label for="username">Usuário</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Insira seu CPF" maxlength="14" oninput="formCpf(this), checkInput(this)">
            @if($errors->has('username'))
                <div class="alert alert-danger d-flex align-items-center position-relative" style="height: 20px">
                    <p class="mt-3">{{$errors->first('username')}}</p>
                </div>
            @endif
            <label for="password">Senha</label>
            <div class="position-relative">
                <input type="password" name="password" id="password" class="form-control" placeholder="Insira sua senha" required>
                <i class="bi bi-eye" id="btnMostrarSenha" onclick="mostrarSenha()" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
            </div>
            @if($errors->has('password'))
                <div class="alert alert-danger d-flex align-items-center position-relative" style="height: 20px">
                    <p class="mt-3"> {{$errors->first('password')}}</p>
                </div>
            @endif
            <br>
            <button id="btn-login" type="submit" class="btn btn-block" style="background-color:red;color: white">Entrar</button>
        </div>
    </form>
</div>

<style>
    .centered-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<script>
    // Funcao para formatar o cpf
    function formCpf(campo) {
        campo.value = campo.value.replace(/\D/g, '');
        campo.value = campo.value.replace(/(\d{3})(\d)/, '$1.$2');
        campo.value = campo.value.replace(/(\d{3})(\d)/, '$1.$2');
        campo.value = campo.value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    }

    function mostrarSenha() {
        var input = document.getElementById('password');
        var btnMostrarSenha = document.getElementById('btnMostrarSenha');

        if (input.type === 'password') {
            input.setAttribute('type', 'text');
            btnMostrarSenha.classList.replace('bi-eye-fill', 'bi-eye-slash');
        } else {
            input.setAttribute('type', 'password');
            btnMostrarSenha.classList.replace('bi-eye-slash', 'bi-eye-fill');
        }
    }
</script>
