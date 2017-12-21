const electron = require('electron');
const url = require('url');
const path = require('path');
const app = electron.app;

let win;

app.on('ready', function() {
  win = new electron.BrowserWindow({
    width: 350,
    height: 300
  });

  win.loadURL(url.format({
    pathname: path.join(__dirname, 'index.html'),
    protocol: 'file:'
  }));
});
