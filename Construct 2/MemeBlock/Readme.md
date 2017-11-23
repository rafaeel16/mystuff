# Meme: https://www.youtube.com/watch?v=zwvsa7DzzHY

# Birl Game (Projeto para a aula de multimídia)

--------------------------------------------------
Ideias de Meme:

Vou usar o Meme do Bambam!

player: Felipe Franco, Bambam(Jaula), Frango(Enemy);

Ideias de assets:

As Moedas vão ser halteres;

---------------------------------------------------

build apk com cordova:
https://www.youtube.com/watch?v=PoiuoCPm2bQ

Tutorial para gerar APK:

- Exportar o projeto como Cordova(Desmarcar a opção do Intel XDK)
- Criar um boilerplate cordova: cordova create nameFolder
- Apague o Config.xml da pasta que você criou com cordova create e copia o config.xml do projeto que você exportou.
- Copie o projeto exportado e cole dentro da pasta www da pasta gerada com o cordova(apague todo o conteudo que estiver nela antes).
- Agora abra o config.xml e apague o plugin cordova-plugin-crosswalk-webview
- Navegue até a pasta do projeto pelo terminal e adicione a platform Android com o comando: cordova platform add android
- Agora configure os icones no Config.xml se quiser
- Agora para gerar o apk use o comando: cordova build



OBS: se for publicar na playstore, verifique como gerar a keystore;

---------------------------------------------------

# Checklist

- diminuir a distancia do touchIn quando puxa a ball para o circle. OK

- melhorar a particula de sangue

- ajeitar os sounds quando passar de fase

- criar mais fases

- Monetizar: Movimentos extras e Skins

