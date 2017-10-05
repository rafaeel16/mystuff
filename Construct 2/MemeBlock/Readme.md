# Tentei gerar o APK mas deu error, gerar de novo e verificar este problema no build.

# MemeBlock Game (Projeto para a aula de multimídia)

Aula 10

https://www.youtube.com/watch?v=G94uksR3Dag&index=10&list=PLW7PqRQiUonlrwBRTcs-QTwzz97AoV8JY

--------------------------------------------------
Ideias de Meme:

"Este é alguem" tentando se formar;

"Save Memes" a cada fase um novo meme para salvar (Bambam, saindo da jaula)

Ideias de assets:

Colocar as argolas do Sonic ou moedas Mario;

---------------------------------------------------

build apk com cordova:
https://www.youtube.com/watch?v=D-t9k2A75eI

Gerando APK com cordova:

Primeiro exporte o projeto como um projeto cordova no Construct;
Terminal: cordova platform add android;
navegue até a pasta www e copie o arquivo config.xml para a raiz;
coloque o arquivo icon.png e splash.png na raiz;
agora faça o build: cordova build android;
navegue até a pasta platforms/android//build/outputs/apk;

Pronto!!



OBS: se for publicar na playstore, verifique como gerar a keystore;
