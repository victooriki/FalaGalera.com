@csrf()
<input type="text" name="titulo" placeholder="Titulo:" value="{{ $chamado->titulo ?? old('titulo') }}">
<input type="text" name="descricao" placeholder="Descrição:" max="150" value="{{ $chamado->descricao ?? old('descricao') }}">
<input type="text" name="email" placeholder="Email:" value="{{ $chamado->email ?? old('email') }}">
<button type="submit">Enviar</button>