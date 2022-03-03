<?php
$var_name= $_POST['nome'];
echo $var_name;

$var_email= $_POST['email'];
echo $var_email;

$var_mensagem= $_POST['cpf'];
echo $var_mensagem;

$var_mensagem= $_POST['senha'];
echo $var_senha;



?>

*,
::before,
::after {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1.2rem;
  margin: 0;
  padding: 0;
}

label {
  display: block;
  font-size: 1rem;
  line-height: 1;
  padding-bottom: 0.5rem;
}

input {
  display: block;
  font-size: 1rem;
  width: 100%;
  padding: 0.8rem;
  border: 1px solid #fff;
  border-radius: 0.4rem;
  background: white;
  transition: 0.2s;
  margin-bottom: 20px;
}

input:focus,
input:hover {
  outline: none;
  background: white;
  box-shadow: 0 0 0 3px #007cff;
}

button {
  margin-left: 181px;
  color: #fff;
  background: #007cff;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1rem;
  padding: 0.8rem 4rem;
  border-radius: 0.4rem;
  border: none;
  cursor: pointer;
  box-sizing: border-box;
  transition: 0.1s;
}

button:hover,
button:focus {
  outline: none;
}

.title {
  font-family: spectral;
  line-height: 1;
  font-size: 3rem;
  margin: 1rem 0;
  position: relative;
  z-index: 1;
}

.title::after {
  content: "";
  display: block;
  width: 1.5rem;
  height: 1.5rem;
  background: #007cff;
  position: absolute;
  bottom: 5px;
  left: -6px;
  border-radius: 0.2rem;
  z-index: -1;
}

.forms {
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 100vh;
  gap: 2rem;
}

.forms {
  padding: 3rem;
}

.box {
  width: 100%;
  background: #f2f2f2;
  padding: 2rem 1rem;
  border-radius: 1rem;
  box-shadow: 0 8px 20px rgba(35, 0, 77, 0.2);
}

.img {
  max-width: 100%;
  margin-bottom: 100px;
  height: auto;
  display: block;
}

.img {
  justify-self: center;
}

.img {
  display: flex;
  margin-left: 100px;
  margin-top: 115px;
  width: 1000px;
  background-color: #f2f2f2;
  border-radius: 1rem;
  padding-left: 1rem;
}

.img img {
  width: 390px;
  margin-top: 0;
}

@media (max-width: 40rem) {
  .forms {
    grid-template-columns: 1fr;
  }
  .forms::before {
    display: none;
  }
  .forms {
    max-width: 100%;
  }