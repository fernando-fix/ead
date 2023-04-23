let signin_html = "";
let signup_html = "";

let btn_signin = document.querySelector(".btn_signin");
let btn_signup = document.querySelector(".btn_signup");

let formArea = document.querySelector(".log-form");

// login
signin_html += '<form action="/post" method="post">';
signin_html += '<label for="user">Usuário</label>';
signin_html += '<div class="log-icon-user">';
signin_html += '<img src="assets/img/ICONE-USER.svg" alt="erro">';
signin_html += '</div>';
signin_html += '<input id="user" autofocus placeholder="Seu usuário/email" required type="text" autocomplete="off">';
signin_html += '<label for="user">Senha</label>';
signin_html += '<div class="log-icon-password">';
signin_html += '<img src="assets/img/ICONE-SENHA.svg" alt="erro">';
signin_html += '</div>';
signin_html += '<input type="password" placeholder="Sua senha" autocomplete="off" maxlength="15" minlength="10" required>';
signin_html += '<div class="log-forgot">';
signin_html += '<p><a href="">Esqueci minha senha</a></p>';
signin_html += '</div>';
signin_html += '<div class="log-checkbox">';
signin_html += '<input id="check" type="checkbox">';
signin_html += '<label for="check">eu aceito todos os termos</label>';
signin_html += '</div>';
signin_html += '<div class="log-acessar">';
signin_html += '<button>Acessar<i class="bi bi-chevron-double-right"></i></button>';
signin_html += '</div>';
signin_html += '</form>';

// cadastro
signup_html += '<form action="/post" method="post">';
signup_html += '<!-- Campo de Usuário -->';
signup_html += '<label for="user">Usuário</label>';
signup_html += '<div class="log-icon-user">';
signup_html += '<img src="assets/img/ICONE-USER.svg" alt="erro">';
signup_html += '</div>';
signup_html += '<input id="user" autofocus placeholder="Seu usuário/email" required type="text"';
signup_html += 'autocomplete="off">';
signup_html += '<!-- Campo de senha -->';
signup_html += '<label for="user">Digite uma senha</label>';
signup_html += '<div class="log-icon-password">';
signup_html += '<img src="assets/img/ICONE-SENHA.svg" alt="erro">';
signup_html += '</div>';
signup_html += '<input type="password" placeholder="Sua senha" autocomplete="off" maxlength="15" minlength="10"';
signup_html += 'required>';
signup_html += '<!-- Campo de senha novamente -->';
signup_html += '<label for="user">Digite uma senha novamente</label>';
signup_html += '<div class="log-icon-password2">';
signup_html += '<img src="assets/img/ICONE-SENHA.svg" alt="erro">';
signup_html += '</div>';
signup_html += '<input type="password" placeholder="Repita sua senha" autocomplete="off" maxlength="15"';
signup_html += 'minlength="10" required>';
signup_html += '<!-- Campo de email -->';
signup_html += '<label for="user">Digite seu melhor email</label>';
signup_html += '<div class="log-icon-mail">';
signup_html += '<img src="assets/img/ICONE-MAIL.svg" alt="erro">';
signup_html += '</div>';
signup_html += '<input type="password" placeholder="Digite seu email" autocomplete="off" maxlength="15"';
signup_html += 'minlength="10" required>';
signup_html += '<!-- Campo de CPF -->';
signup_html += '<label for="user">Digite seu CPF</label>';
signup_html += '<div class="log-icon-cpf">';
signup_html += '<img src="assets/img/ICONE-CPF.svg" alt="erro">';
signup_html += '</div>';
signup_html += '<input type="password" placeholder="Digite seu CPF" autocomplete="off" maxlength="15"';
signup_html += 'minlength="10" required>';
signup_html += '<!-- Campo de contato -->';
signup_html += '<label for="user">Digite seu contato</label>';
signup_html += '<div class="log-icon-contact">';
signup_html += '<img src="assets/img/ICONE-CONTACT.svg" alt="erro">';
signup_html += '</div>';
signup_html += '<input type="password" placeholder="Digite seu contato" autocomplete="off" maxlength="15"';
signup_html += 'minlength="10" required>';
signup_html += '<div class="log-forgot">';
signup_html += '<p><a href="">Esqueci minha senha</a></p>';
signup_html += '</div>';
signup_html += '<div class="log-checkbox">';
signup_html += '<input id="check" type="checkbox">';
signup_html += '<label for="check">eu aceito todos os termos</label>';
signup_html += '</div>';
signup_html += '<div class="log-acessar">';
signup_html += '<button>Acessar<i class="bi bi-chevron-double-right"></i></button>';
signup_html += '</div>';
signup_html += '</form>';


// events

btn_signin.addEventListener('click', () => {
    formArea.innerHTML = signin_html;
    console.log("btn1");
});

btn_signup.addEventListener('click', () => {
    formArea.innerHTML = signup_html;
    console.log("btn2");
});